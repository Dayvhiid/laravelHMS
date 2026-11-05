<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\PatientInfo;
use App\Models\Treat;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TreatmentController extends Controller
{
    public function index(){
        // return view('doctors.treatment');
        return view('doctors.newIndex');
    }
    public function index2(){
        return view('doctors.treatment2');
    }
    public function store(Request $request) {
        $validatedData = $request->validate([
            'singlevision' => 'array',
            'bifocal' => 'array',
            'specialorder' => 'array',
            'progressive' => 'array',
            // 'dosage' => 'required',
            // 'duration' => 'required',
            // 'tab' => 'required',
            // 'gutt' => 'required',
            // 'oc' => 'required',
            // 'sur' => 'required',
            // 'rtc' => 'required',
            // 'remark' => 'required',
        ]);
    
        $treatment = new Treat;
        $treatment->patient_id = $request->input('patient_id');
        $treatment->dosage = $request->input('dosage');
        $treatment->duration = $request->input('duration');
        $treatment->tab = $request->input('tab');
        $treatment->gutt = $request->input('gutt');
        $treatment->oc = $request->input('oc');
        $treatment->sur = $request->input('sur');
        $treatment->rtc = $request->input('rtc');
        $treatment->prescription = $request->input('prescription');
        $treatment->remark = $request->input('remark');
        $treatment->single_vision = isset($validatedData['singlevision']) ? json_encode($validatedData['singlevision']) : null;
        $treatment->bifocal = isset($validatedData['bifocal']) ? json_encode($validatedData['bifocal']) : null;
        $treatment->special_order = isset($validatedData['specialorder']) ? json_encode($validatedData['specialorder']) : null;
        $treatment->progressive = isset($validatedData['progressive']) ? json_encode($validatedData['progressive']) : null;
        $treatment->invisible = isset($validatedData['invisible']) ? json_encode($validatedData['invisible']) : null;

        DB::transaction(function () use ($treatment) {
            $treatment->save();

            // Let the opticians know, with a link straight to this treatment.
            $patient = $treatment->patient_id
                ? PatientInfo::where('patient_id', $treatment->patient_id)->first()
                : null;
            $patientName = $patient
                ? (($patient->first_name && $patient->last_name)
                    ? $patient->first_name.' '.$patient->last_name
                    : $patient->fullname)
                : null;

            Notification::create([
                'message' => Notification::NEW_TREATMENT,
                'patient_name' => $patientName ?: ($treatment->patient_id ?: 'Unknown patient'),
                'added_by' => auth()->user()->name,
                'pid' => $treatment->patient_id,
                'treat_id' => $treatment->id,
            ]);
        });

        return redirect(route('doctors.status'))->with('msg', 'Patient\'s vitals recorded successfully');
    }
    
    
}
