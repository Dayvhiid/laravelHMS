<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    public function index(){
        return view('inventory.drug');
    }
    public function store(Request $request){
        $request->validate([
            // 'inputs.*.sn' => 'required',
            'inputs.*.name' => 'required',
            'inputs.*.price' => 'required',
            // 'inputs.*.special_code' => 'required',
            'inputs.*.drug_type' => 'required',
        ]);

        foreach($request->inputs as $key => $value){
            Drug::create($value);
        }
        return redirect(route('pages.status'))->with('success', 'Drug List updated succefully');
    }
    public function list(){
        $drugs = Drug::paginate(9);
        return view('inventory.druglist', ['drugs' => $drugs]);
    }
    public function edit(Drug $drugs){
        return view('inventory.edit', ['drug' => $drugs]);
    }
    public function update(Drug $drugs, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);
        error_log($data['price']);  
        $drugs->update($data); 
    }
    public function destroy(Drug $drugs){
          $drugs->delete();
          return redirect(route('doctors.list'));
    }
}
