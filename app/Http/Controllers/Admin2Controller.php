<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminpassword;
class Admin2Controller extends Controller
{
    //
    public function index(){
        return view('admin.admin1.admin1password');
    }
    public function password(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required',
            'confirm_password' => 'required'
        ]);
         $name = $data['name'];
         $password = $data['password'];
         $confirm_password = $data['confirm_password'];
        //  $search = Doctor::all();
         $search = adminpassword::where('name', $name)->get(); // Find names that start with "category"
         if($search->isEmpty()){//change back to search
            if($password == $confirm_password){
                $hashedPassword = bcrypt($password);
                $register = new adminpassword();
                $register->name = $name;
                $register->password = $hashedPassword;
                $register->save();
                return redirect(route('doctors.status'))->with('msg','account created sucesfully'); 
             } else {
                return redirect(route('doctors.status'))->with('msg','Passwords do not match'); 
             }
         }else {
            return redirect(route('doctors.status'))->with('msg','User Already Exists'); 
         }
        // return view('doctors.signup');
    }
    public function check(Request $request){
        //This function handles the signing in logic
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        $search = adminpassword::where('name', $data['name'])->get();
        if (count($search) === 0) {
            // No results found
            return redirect(route('doctors.status'))->with('msg','Invalid Input details'); 
        } else {
            // Handle results (process $search)
            if(password_verify($data['password'], $search[0]['password'])){
                return redirect(route('testing'));
                error_log('Password Correct');
          } else {
              error_log('Password Incorrect');
          }
        }

    }
}
