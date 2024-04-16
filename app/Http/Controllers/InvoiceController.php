<?php

namespace App\Http\Controllers;

use App\Models\Invo;
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
    //    $invoice = new Invoice();
       $invoice = new Invo();
        $validatedData = $request->validate([
            'inputs' => 'required|array',
             'discount' => 'required',
            'inputs.*.name' => 'required|string',
            'inputs.*.price' => 'required',
            'inputs.*.qty' => 'required',
        ]);
        $invoice->discount = $request->input('discount');
        $invoice->pid = $request->input('pid');
        $invoice->name = $request->input('inputs.*.name');
        $invoice->price = $request->input('inputs.*.price');
        $invoice->qty = $request->input('inputs.*.qty');
        $invoice->save();
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
