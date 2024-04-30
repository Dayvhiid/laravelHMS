<?php

namespace App\Http\Controllers;

use App\Models\Treat;

use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function index(){
        return view('doctors.treatment');
    }
    public function index2(){
        return view('doctors.treatment2');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'singlevision' => 'array',
            'bifocal' => 'array',
            'specialorder' => 'array',
            'progressive' => 'array',
        ]);
    
        $treatment = Treat::updateOrCreate(
            ['patient_id' => $request->input('patient_id')],
            [
                'dosage' => $request->input('dosage'),
                'duration' => $request->input('duration'),
                'tab' => $request->input('tab'),
                'gutt' => $request->input('gutt'),
                'oc' => $request->input('oc'),
                'sur' => $request->input('sur'),
                'rtc' => $request->input('rtc'),
                'remark' => $request->input('remark'),
                // You don't need to check isset for each array field,
                // as validate ensures they will be present as arrays
                'single_vision' => isset($validatedData['singlevision']) ? json_encode($validatedData['singlevision']) : null,
                'bifocal' => isset($validatedData['bifocal']) ? json_encode($validatedData['bifocal']) : null,
                'special_order' => isset($validatedData['specialorder']) ? json_encode($validatedData['specialorder']) : null,
                'progressive' => isset($validatedData['progressive']) ? json_encode($validatedData['progressive']) : null,
            ]
        );
    
        return redirect(route('doctors.status'))->with('msg', 'Patient\'s vitals recorded successfully');
    }
    
}
