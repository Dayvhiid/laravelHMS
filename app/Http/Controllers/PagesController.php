<?php

namespace App\Http\Controllers;

use App\Models\PatientInfo;
use App\Models\Doctor;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.register');
    }
    public function store(Request $request){
        $patient_info = new PatientInfo();
        $patient_info->patient_id = $request->input('pid');
        $patient_info->first_name = $request->input('firstname');
        $patient_info->last_name = $request->input('lastname');
        $patient_info->date = $request->input('dob');
        $patient_info->gender = $request->input('radio');
        $patient_info->phone = $request->input('phone');
        $patient_info->email = $request->input('email');
        $patient_info->city = $request->input('city');
        $patient_info->state = $request->input('state');
        $patient_info->occupation = $request->input('occupation');
        $patient_info->street = $request->input('street');
        $patient_info->emergency_fullname = $request->input('efn');
        $patient_info->emergency_relationship = $request->input('erel');
        $patient_info->emergency_phone = $request->input('epn'); 
        $patient_info->emergency_email = $request->input('ee'); 
        // error_log($patient_info->patient_id);
        $patient_info->save();
        return redirect(route('pages.status'))->with('success','Patients Data Saved succcessfully');        
    }
    public function edit(){
        $data = PatientInfo::latest()->first();
        return view('pages.edit', ['data' => $data]);
    }
    public function update(Request $request, $record)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'state' => 'required',
            'occupation' => 'required',
            'emergency_phone' => 'required'
        ]);
        $patient = PatientInfo::find($record);
        $patient->update($data);
        return redirect(route('pages.status'))->with('success', 'Product Updated Sucesfully');
    }

    public function destroy($record){
        $patient = PatientInfo::find($record);
        $patient->delete();
        return redirect(route('pages.status'))->with('success', 'Product deleted Sucesfully');
    }    
}
