<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newValidationController extends Controller
{
    public function signup(){
        return view('Sign_Up');
    }
    public function booking(){
        return view('newbooking');
    }
}