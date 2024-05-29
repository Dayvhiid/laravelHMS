<?php

namespace App\Http\Controllers;
use App\Models\Test;
use App\Models\Drug;
use App\Models\Frame;
use App\Models\Lens;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin2.admin2');
    }
    public function drugsIndex(){
        return view('admin.admin2.admin2drugs');
    }
    public function inventoryIndex(){
        $item = Test::paginate(9);
        return view ('admin.admin2.admin2inventory', ['item' => $item]);
    }
    public function drugList(){
        $drugs = Drug::paginate(9);
        return view('admin.admin2.admin2druglist', ['drugs' => $drugs]);
    }
    public function frameIndex(){
        return view('admin.admin2.admin2frame');
    }
    public function frameList(){
        $frames = Frame::paginate(9);
        return view('admin.admin2.admin2framelist', [ 'frames' => $frames]);
    }
    public function lensIndex(){
        return view('admin.admin2.admin2lens');
    }
    public function lensList(){
        $lens = Lens::paginate(9);
        return view('admin.admin2.admin2lenslist', [ 'lens' => $lens]);
    }
}
