<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewDoctorVerificationController extends Controller
{
    public function index(){
        return view('doctorSignIn');
    }
}
