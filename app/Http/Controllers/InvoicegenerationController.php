<?php
namespace App\Http\Controllers;

use App\Models\Invo;
use App\Models\PatientInfo;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use Illuminate\Support\Facades\View;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use Illuminate\Http\Request;

class InvoicegenerationController extends Controller
{
    // public function hold(){
    //     $customer = new Buyer([
    //         'name'          => 'Dada David',
    //         'custom_fields' => [
    //             'email' => 'test123@example.com',
    //         ],
    //     ]);
        
    //     $item = InvoiceItem::make('Service 10')->pricePerUnit(2);
        
    //     $invoice = Invoice::make()
    //         ->buyer($customer)
    //         ->discountByPercent(10)
    //         ->taxRate(15)
    //         ->shipping(1.99)
    //         ->addItem($item);
        
    //     return $invoice->stream();
    // } 
    public function index(){
        // $invo = Invo::latest()->first();
        // $patient_info = PatientInfo::latest();
        // $customer = new Buyer([
        //     'name'          => 'Dada David',
        //     'custom_fields' => [
        //         'email' => 'test123@example.com',
        //     ],
        // ]);
        
        // $item = InvoiceItem::make('Service 10')->pricePerUnit(2);
        
        // $invoice = Invoice::make()
        //     ->buyer($customer)
        //     ->discountByPercent(10)
        //     ->taxRate(15)
        //     ->shipping(1.99)
        //     ->addItem($item);
        $invoice = Invo::latest()->first();
        // return $invoice->stream();
        // return View::make('vendor.invoices.templates.default', compact('invoice'));
         return view('invoice.invoice', compact('invoice'));
    }
}
