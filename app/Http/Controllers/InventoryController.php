<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Drug;
use Illuminate\Http\Request;

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

        $data = $request->validate([
            'date' => 'required|date',
            'new_stock' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'patient_code' => 'required|string|max:255',
            'booklet_no' => 'required|string|max:255',
            'qty_in' => 'required|numeric|min:0',
            'qty_out' => 'required|numeric|min:0',
        ]);

        // Balance is always derived from the quantities, never taken from the request.
        $data['balance'] = (string) ($data['qty_in'] - $data['qty_out']);

        $inventory->update($data);

        return redirect()->back()->with('success', "Inventory item \"{$inventory->name}\" updated successfully");
    }
    public function destroy($item){
        $inventory = Inventory::findOrFail($item);
        $inventory->delete();

        return redirect()->back()->with('success', "Inventory item \"{$inventory->name}\" deleted successfully");
    }
    public function delete($item){
       $test = Inventory::find($item);
       $test->delete();
       return redirect(route('inventory.list'));
    }

}
