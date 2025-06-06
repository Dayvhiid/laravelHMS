<?php

namespace App\Http\Controllers;

use App\Models\PatientInfo;
use App\Models\User;
use Illuminate\Http\Request;

class PatientCardController extends Controller
{
    //
    public function index()
    {
        // Logic to display patient cards
        return view('patient_cards');
    }



    public function show($id)
{
    $user = PatientInfo::findOrFail($id);
    return view('patient_cards', compact('user'));
}
}
