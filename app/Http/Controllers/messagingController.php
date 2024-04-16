<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class messagingController extends Controller
{
    public function index(){
        return view('appointment.bookappointment');
    }
    public function store(Request $request){
        $appointment = new Appointment();
        // $data = $request->validate([
        //     'name' => 'required',
        //     'date' => 'required',
        //     'time' => 'required',
        //     'complaints' => 'required',
        //     'phone number' => 'required'
        // ]);
        // $appointment->save($data);
        $appointment->name = $request->input('name');
        $appointment->date = $request->input('date');
        $appointment->time = $request->input('time');
        $appointment->complaints = $request->input('complaints');
        $appointment->phone_number = $request->input('phone');
        $appointment->save();
    }
}
