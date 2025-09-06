<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeleMedController extends Controller
{
    public function index () {
        return view('telemed.index');
    }

    public function list () {
        return view('telemed.list');
    }

    public function join () {
        return view('telemed.join');
    }

    public function chat () {
        return view('telemed.chat');
    }
    public function test () {
        return view('telemed.test');
    }
}
