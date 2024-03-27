<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecieptController extends Controller
{
    public function index(){
        return view('doctors.reciept');
    }
}
