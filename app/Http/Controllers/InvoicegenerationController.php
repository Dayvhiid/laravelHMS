<?php
namespace App\Http\Controllers;

use App\Models\Invo;
use App\Models\PatientInfo;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
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
        $invo = Invo::latest();
        $patient_info = PatientInfo::latest();
        $customer = new Buyer([
            'name'          => 'Dada David',
            'custom_fields' => [
                'email' => 'test123@example.com',
            ],
        ]);
        
        $item = InvoiceItem::make('Service 10')->pricePerUnit(2);
        
        $invoice = Invoice::make()
            ->buyer($customer)
            ->discountByPercent(10)
            ->taxRate(15)
            ->shipping(1.99)
            ->addItem($item);
        
        return $invoice->stream();
        return view('vendor.invoices.templates.default', compact($invo));
    }
}
