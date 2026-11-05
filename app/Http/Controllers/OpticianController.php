<?php

namespace App\Http\Controllers;

use App\Models\Opticians;
use App\Models\Appointment;
use App\Models\Notification;
use Illuminate\Http\Request;

class OpticianController extends Controller
{
    public function index()
    {
        // Logic to retrieve and display a list of opticians
         $appointments = Appointment::latest()->limit(5)->get();
        $notifications = Notification::latest()->limit(7)->get();
        return view('optician.index', compact('appointments', 'notifications'));
    }


    public function records(){
          return view('optician.records');
    }


    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'patients.*.date' => 'required|date',
            'patients.*.patient_name' => 'required|string|max:100',
            // Multi-line fields: up to the full 255-character size of their columns.
            'patients.*.power' => 'nullable|string|max:255',
            'patients.*.posted_from' => 'nullable|string|max:255',
            'patients.*.card_number' => 'nullable|string|max:50',
            'patients.*.frame_type' => 'nullable|string|max:255',
            'patients.*.qty' => 'nullable|integer',
        ], [
            'patients.*.date.required' => 'Row :position: date is required.',
            'patients.*.date.date' => 'Row :position: date is not a valid date.',
            'patients.*.patient_name.required' => 'Row :position: patient name is required.',
            'patients.*.patient_name.max' => 'Row :position: patient name can be at most 100 characters.',
            'patients.*.power.max' => 'Row :position: Power can be at most 255 characters.',
            'patients.*.posted_from.max' => 'Row :position: Posted From can be at most 255 characters.',
            'patients.*.card_number.max' => 'Row :position: card number can be at most 50 characters.',
            'patients.*.frame_type.max' => 'Row :position: Frame Type can be at most 255 characters.',
            'patients.*.qty.integer' => 'Row :position: quantity must be a whole number.',
        ]);

        foreach ($request->patients as $patientData) {
            Opticians::create([
                'date' => $patientData['date'],
                'patient_name' => $patientData['patient_name'],
                'power' => $patientData['power'],
                'posted_from' => $patientData['posted_from'],
                'card_number' => $patientData['card_number'],
                'frame_type' => $patientData['frame_type'],
                'qty' => $patientData['qty'],
            ]);
        }

        return back()->with('success', 'Patient records saved successfully!');
    }


    public function list(){
        $opticians = Opticians::all();
        return view('optician.list', compact('opticians'));
    }

    public function find(){
        return view('optician.find');
    }

    public function search(){
        $search_text = $_GET['query'];
        $treatments = Opticians::where('card_number', $search_text)
        ->get();        
         return view('optician.listsearch', ['treatments' => $treatments]);
    }

}
