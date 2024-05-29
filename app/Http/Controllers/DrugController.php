<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\Frame;
use App\Models\Lens;
use Illuminate\Support\Collection;
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
            'inputs.*.quantity' => 'required',
        ]);

        foreach($request->inputs as $key => $value){
            Drug::create($value);
        }
         return redirect(route('pages.status'))->with('success', 'Drug List updated succefully');
        // return redirect(route('doctors.list'));
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
        return redirect(route('doctors.list'));
    }
    public function destroy(Drug $drugs){
          $drugs->delete();
          return redirect(route('doctors.list'));
    }
    public function newIndex(){
        $drugs = Drug::all();
        return view('drug.index', compact('drugs'));
    }

    public function newSearch(Request $request) {
        $search = $request->get('search');
        $drugs = Drug::where('name', 'like', '%'.$search.'%')->get();
        $lenses = Lens::where('name', 'like', '%'.$search.'%')->get();
        $frames = Frame::where('name', 'like', '%'.$search.'%')->get();
    
        $mergedResults = $drugs->merge($lenses)->merge($frames);
        // Optional: Sort results
        // $mergedResults = $mergedResults->sortBy('name');
    
        return view('drug.index', compact('mergedResults'));
    }
    
    
    
}
