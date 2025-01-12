<?php

namespace App\Http\Controllers;

use App\Models\PatientInfo;
use App\Models\Doctor;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Notifications\NewPatientNotification;

class PagesController extends Controller
{
    public function index() {
        return view('pages.register');
    }
    // public function store(Request $request){
    //     $patient_info = new PatientInfo();
    //     $patient_info->patient_id = $request->input('pid');
    //     $patient_info->first_name = $request->input('firstname');
    //     $patient_info->last_name = $request->input('lastname');
    //     $patient_info->date = $request->input('dob');
    //     $patient_info->gender = $request->input('radio');
    //     $patient_info->phone = $request->input('phone');
    //     $patient_info->email = $request->input('email');
    //     $patient_info->city = $request->input('city');
    //     $patient_info->state = $request->input('state');
    //     $patient_info->occupation = $request->input('occupation');
    //     $patient_info->street = $request->input('street');
    //     $patient_info->emergency_fullname = $request->input('efn');
    //     $patient_info->emergency_relationship = $request->input('erel');
    //     $patient_info->emergency_phone = $request->input('epn'); 
    //     $patient_info->emergency_email = $request->input('ee'); 
    //     // error_log($patient_info->patient_id);
    //     $patient_info->save();
    //     return redirect(route('pages.status'))->with('success','Patients Data Saved succcessfully');        
    // }

    public function store(Request $request)
{
    // Validate incoming data, including unique check for patient_id
    $validatedData = $request->validate([
        'pid' => 'required|unique:patient_infos,patient_id', // Ensure patient_id is unique
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'dob' => 'required|date',
        'radio' => 'required|string|in:male,female,other', // Example gender options
        'phone' => 'required|string|max:15',
        'email' => 'required|email|max:255',
        'city' => 'nullable|string|max:255',
        'state' => 'nullable|string|max:255',
        'occupation' => 'nullable|string|max:255',
        'street' => 'nullable|string|max:255',
        'efn' => 'nullable|string|max:255',
        'erel' => 'nullable|string|max:255',
        'epn' => 'nullable|string|max:15',
        'ee' => 'nullable|email|max:255',
    ]);

    // Create a new PatientInfo instance
    $patient_info = new PatientInfo();
    $patient_info->patient_id = $validatedData['pid'];
    $patient_info->first_name = $validatedData['firstname'];
    $patient_info->last_name = $validatedData['lastname'];
    $patient_info->date = $validatedData['dob'];
    $patient_info->gender = $validatedData['radio'];
    $patient_info->phone = $validatedData['phone'];
    $patient_info->email = $validatedData['email'];
    $patient_info->city = $validatedData['city'] ?? null;
    $patient_info->state = $validatedData['state'] ?? null;
    $patient_info->occupation = $validatedData['occupation'] ?? null;
    $patient_info->street = $validatedData['street'] ?? null;
    $patient_info->emergency_fullname = $validatedData['efn'] ?? null;
    $patient_info->emergency_relationship = $validatedData['erel'] ?? null;
    $patient_info->emergency_phone = $validatedData['epn'] ?? null;
    $patient_info->emergency_email = $validatedData['ee'] ?? null;

    // Save the record to the database
    $patient_info->save();
    $notification = new Notification();
    $notification->patient_name = $patient_info->first_name . ' ' . $patient_info->last_name;
    $notification->message =  "New Patient Registered";
    $notification->added_by = "Front Desk";
    $notification->pid =  $request->input('pid');
    $notification->save();

    // (new NewPatientNotification($patient_info))->toDatabase(null);
    // Notification::send(null, new NewPatientNotification($patient_info));

    // Notification::send($patient_info, new NewPatientNotification($patient_info));
    // Redirect to the status page with a success message
    return redirect(route('pages.status'))->with('success', 'Patient data saved successfully');

    //notification
    
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
