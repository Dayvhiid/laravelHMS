<?php

namespace App\Http\Controllers;

use App\Models\Invo;
use App\Models\Test;
use App\Models\Drug;
use App\Models\Lens;
use App\Models\Frame;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(){
        return view('doctors.invoice');
    }
    public function show(){
        return view('inventory.generateinvoice');
    }
    public function save(Request $request){
    // Validate the request
    $validatedData = $request->validate([
        'inputs' => 'required|array',
        'discount' => 'required',
        'inputs.*.name' => 'required|string',
        'inputs.*.price' => 'required|numeric',
        'inputs.*.qty' => 'required|integer',
    ]);

    // Create and save the invoice
    $invoice = new Invo();
        $invoice->discount = $request->input('discount');
        $invoice->pid = $request->input('pid');
        $invoice->name = $request->input('inputs.*.name');
        $invoice->price = $request->input('inputs.*.price');
        $invoice->qty = $request->input('inputs.*.qty');
    $invoice->save();

    // Process each input
    foreach ($request->input('inputs') as $input) {
        $name = $input['name'];
        $price = $input['price'];
        $qty = $input['qty'];

        // Save each item detail in the invoice (assuming an InvoiceItem model)
        // $invoiceItem = new Invo();
        // $invoiceItem->invoice_id = $invoice->id;
        // $invoiceItem->name = $name;
        // $invoiceItem->price = $price;
        // $invoiceItem->qty = $qty;
        // $invoiceItem->save();

        // Update the quantities in Drugs, Lenses, and Frames models
        $drug = Drug::where('name', $name)->first();
        if ($drug) {
            if ($drug->quantity - $qty < 1) {
                return redirect(route('pages.status'))->with('success', 'Insufficient Drug Stock');
            }
            $drug->quantity -= $qty;
            $drug->save();
            continue;
        }

        $lens = Lens::where('name', $name)->first();
        if ($lens) {
            if ($lens->quantity - $qty < 1) {
                return redirect(route('pages.status'))->with('success', 'Insufficient Lens Stock');
            }
            $lens->quantity -= $qty;
            $lens->save();
            continue;
        }

        $frame = Frame::where('name', $name)->first();
        if ($frame) {
            if ($frame->quantity - $qty < 1) {
                return redirect(route('pages.status'))->with('success', 'Insufficient Frame Stock');
            }
            $frame->quantity -= $qty;
            $frame->save();
            continue;
        }
    }

    return redirect('/invoice');
}

    public function find(){
        return view('invoice.search');
    }
    public function search(){
        $search_text = $_GET['query'];
        $users = Invo::where(function ($query) use ($search_text) {
            $query->where('pid', 'LIKE', "%{$search_text}%");})
        ->get();
        return view('invoice.invoicesearch', compact('users'));
    }
}
