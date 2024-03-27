<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{

    public function index(){
        return view('doctors.signup');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'confirm_password' => 'required'
        ]);
         $name = $data['name'];
         $password = $data['password'];
         $confirm_password = $data['confirm_password'];
        //  $search = Doctor::all();
         $search = Doctor::where('name', $name)->get(); // Find names that start with "category"
         if($search->isEmpty()){//change back to search
            if($password == $confirm_password){
                $hashedPassword = bcrypt($password);
                $doctor = new Doctor();
                $doctor->name = $name;
                $doctor->password = $hashedPassword;
                $doctor->save();
                return redirect(route('doctors.status'))->with('msg','User created sucesfully'); 
             } else {
                return redirect(route('doctors.status'))->with('msg','Passwords do not match'); 
             }
         }else {
            return redirect(route('doctors.status'))->with('msg','User Already Exists'); 
         }
        // return view('doctors.signup');
    }

    public function signin(){
        return view('doctors.signin');
    }
    public function check(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        $search = Doctor::where('name',$data['name'])->get();
        if(password_verify($data['password'], $search[0]['password'])){
              return redirect(route('doctors.index'));
              error_log('Password Correct');
        } else {
            error_log('Password Incorrect');
        }
    }


    public function show(){
        return view('doctors.index');
    }
    public function vitals(){
       return view('doctors.vital');
    }
}
