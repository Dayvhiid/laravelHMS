<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Drug;
use App\Models\Frame;
use App\Models\StockMovement;
use App\Services\FrameStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    public function index(){
        return view('doctors.inventory');
    }
    public function store(Request $request){
        $request->validate([
            'inputs.*.date' => 'required',
            'inputs.*.new_stock' => 'required',
            'inputs.*.name' => 'required',
            'inputs.*.patient_code' => 'required',
            'inputs.*.booklet_no' => 'required',
            'inputs.*.qty_in' => 'required',
            'inputs.*.qty_out' => 'required',
            'inputs.*.balance' => 'required',
        ]);

        foreach($request->inputs as $key => $value){
            Inventory::create($value);
        }
        return redirect(route('pages.status'))->with('success', 'Inventory List updated succefully');
        // return redirect(route('inventory.list'));
       
    }
    /**
     * Stock taking for frames from /admin2: each row changes the chosen frame's quantity
     * by Qty In − Qty Out, saves the stock entry and logs the movement. All rows or none.
     */
    public function storeFrameStock(Request $request){
        $request->validate([
            'inputs' => 'required|array|min:1',
            'inputs.*.date' => 'required|date',
            'inputs.*.frame_id' => 'required|integer|exists:frames,id',
            'inputs.*.patient_name' => 'required|string|max:255',
            'inputs.*.patient_code' => 'required|string|max:255',
            'inputs.*.booklet_no' => 'required|string|max:255',
            'inputs.*.qty_in' => 'required|integer|min:0',
            'inputs.*.qty_out' => 'required|integer|min:0',
        ], [
            'inputs.required' => 'Add at least one stock row.',
            'inputs.*.date.required' => 'Row :position: date is required.',
            'inputs.*.date.date' => 'Row :position: date is not a valid date.',
            'inputs.*.frame_id.required' => 'Row :position: choose a frame.',
            'inputs.*.patient_name.required' => 'Row :position: Patient Name is required.',
            'inputs.*.frame_id.exists' => 'Row :position: the chosen frame no longer exists.',
            'inputs.*.patient_code.required' => 'Row :position: Patient Code is required.',
            'inputs.*.booklet_no.required' => 'Row :position: Receipt Number is required.',
            'inputs.*.qty_in.required' => 'Row :position: Qty In is required (use 0 if none).',
            'inputs.*.qty_in.integer' => 'Row :position: Qty In must be a whole number.',
            'inputs.*.qty_in.min' => 'Row :position: Qty In cannot be negative.',
            'inputs.*.qty_out.required' => 'Row :position: Qty Out is required (use 0 if none).',
            'inputs.*.qty_out.integer' => 'Row :position: Qty Out must be a whole number.',
            'inputs.*.qty_out.min' => 'Row :position: Qty Out cannot be negative.',
        ]);

        $rows = array_values($request->input('inputs'));
        foreach ($rows as $index => $row) {
            if ((int) $row['qty_in'] === 0 && (int) $row['qty_out'] === 0) {
                return redirect()->back()->withErrors([
                    "inputs.$index.qty_in" => 'Row '.($index + 1).': enter a Qty In or Qty Out greater than 0.',
                ]);
            }
        }

        DB::transaction(function () use ($rows) {
            foreach ($rows as $row) {
                $frame = Frame::findOrFail($row['frame_id']);

                $inventory = Inventory::create([
                    'frame_id' => $frame->id,
                    'date' => $row['date'],
                    'name' => $frame->name,
                    'patient_name' => $row['patient_name'],
                    'patient_code' => $row['patient_code'],
                    'booklet_no' => $row['booklet_no'],
                    'qty_in' => (string) (int) $row['qty_in'],
                    'qty_out' => (string) (int) $row['qty_out'],
                    'balance' => '0',
                ]);

                $movement = FrameStock::adjust(
                    $frame,
                    (int) $row['qty_in'],
                    (int) $row['qty_out'],
                    StockMovement::STOCK_ENTRY,
                    [
                        'reference' => 'Receipt '.$row['booklet_no'],
                        'patient_name' => $row['patient_name'],
                        'patient_code' => $row['patient_code'],
                        'inventory_id' => $inventory->id,
                    ],
                );

                $inventory->update(['balance' => (string) $movement->balance_after]);
            }
        });

        $count = count($rows);

        return redirect()->back()->with('success', $count === 1
            ? 'Stock saved. The frame quantity has been updated.'
            : "Stock saved for $count rows. Frame quantities have been updated.");
    }
    public function search(){
        return view('inventory.search');
    }
    public function find(){
        $search_text = $_GET['query'];
        $drugs = Drug::where('name','LIKE', '%'.$search_text.'%')->get();
        return view('inventory.find', compact('drugs'));
        // return view('products.search', compact('products'));
    }
    public function list(){
        $item = Inventory::paginate(9);
        return view('inventory.list', ['item' => $item]);
    }
    public function update(Request $request, $item){
        $inventory = Inventory::findOrFail($item);
        $frame = $inventory->frame_id ? Frame::find($inventory->frame_id) : null;

        // Rows linked to a frame move real frame stock, so their quantities must be whole numbers.
        $qtyRule = $frame ? 'required|integer|min:0' : 'required|numeric|min:0';

        $data = $request->validate([
            'date' => 'required|date',
            'patient_name' => 'nullable|string|max:255',
            // Frame-linked rows don't submit a name (it follows the frame), even if that frame was since deleted.
            'name' => $inventory->frame_id ? 'nullable|string|max:255' : 'required|string|max:255',
            'patient_code' => 'required|string|max:255',
            'booklet_no' => 'required|string|max:255',
            'qty_in' => $qtyRule,
            'qty_out' => $qtyRule,
        ]);

        if (! $frame) {
            $data['name'] = $data['name'] ?? $inventory->name;
            // Balance is always derived from the quantities, never taken from the request.
            $data['balance'] = (string) ($data['qty_in'] - $data['qty_out']);
            $inventory->update($data);

            return redirect()->back()->with('success', "Inventory item \"{$inventory->name}\" updated successfully");
        }

        DB::transaction(function () use ($inventory, $frame, $data) {
            $oldNet = (int) $inventory->qty_in - (int) $inventory->qty_out;
            $newNet = (int) $data['qty_in'] - (int) $data['qty_out'];
            $difference = $newNet - $oldNet;

            $data['name'] = $frame->name;
            $data['qty_in'] = (string) (int) $data['qty_in'];
            $data['qty_out'] = (string) (int) $data['qty_out'];

            if ($difference !== 0) {
                $movement = FrameStock::adjust(
                    $frame,
                    max($difference, 0),
                    max(-$difference, 0),
                    StockMovement::CORRECTION,
                    [
                        'reference' => 'Stock entry #'.$inventory->id,
                        'note' => 'Quantities changed from In '.(int) $inventory->qty_in.' / Out '.(int) $inventory->qty_out
                            .' to In '.$data['qty_in'].' / Out '.$data['qty_out'],
                        'patient_name' => $data['patient_name'] ?? $inventory->patient_name,
                        'patient_code' => $data['patient_code'],
                        'inventory_id' => $inventory->id,
                    ],
                );
                $data['balance'] = (string) $movement->balance_after;
            }

            $inventory->update($data);
        });

        return redirect()->back()->with('success', "Inventory item \"{$inventory->name}\" updated successfully");
    }
    public function destroy($item){
        $inventory = Inventory::findOrFail($item);
        $frame = $inventory->frame_id ? Frame::find($inventory->frame_id) : null;

        DB::transaction(function () use ($inventory, $frame) {
            $net = (int) $inventory->qty_in - (int) $inventory->qty_out;

            // Undo this entry's effect on the frame's stock.
            if ($frame && $net !== 0) {
                FrameStock::adjust(
                    $frame,
                    max(-$net, 0),
                    max($net, 0),
                    StockMovement::CORRECTION,
                    [
                        'reference' => 'Stock entry #'.$inventory->id,
                        'note' => 'Stock entry deleted (was In '.(int) $inventory->qty_in.' / Out '.(int) $inventory->qty_out.')',
                        'patient_name' => $inventory->patient_name,
                        'patient_code' => $inventory->patient_code,
                        'inventory_id' => $inventory->id,
                    ],
                );
            }

            $inventory->delete();
        });

        return redirect()->back()->with('success', "Inventory item \"{$inventory->name}\" deleted successfully");
    }
    public function delete($item){
       $test = Inventory::find($item);
       $test->delete();
       return redirect(route('inventory.list'));
    }

}
