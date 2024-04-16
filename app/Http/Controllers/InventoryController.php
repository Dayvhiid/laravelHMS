<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Test;
use App\Models\Drug;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index(){
        return view('doctors.inventory');
    }
    public function store(Request $request){
        $request->validate([
            'inputs.*.sn' => 'required',
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
            Test::create($value);
        }
        return redirect(route('inventory.list'));
       
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
        $item = Test::paginate(9);
        return view('inventory.list', ['item' => $item]);
    }
    public function delete($item){
       $test = Test::find($item);
       $test->delete();
       return redirect(route('inventory.list'));
    }
}
