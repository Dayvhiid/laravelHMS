<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
class SmsController extends Controller
{
        public function index(Request $request){
                $reciver_phone = $request->phone;
                $message = $request->message;
            $sid = getenv("TWILIO_SID");
            $token = getenv("TWILIO_TOKEN");
            $sendernumber = getenv("TWILIO_FROM");
            $twilio = new Client($sid, $token);

     $message = $twilio->messages
                    ->create($reciver_phone, // to
                            [
                                "body" => $message,
                                "from" => $sendernumber
                            ]
                    );

                    return redirect(route('doctors.status'))->with('msg','Message Sent to User Succefully'); 
                //     dd("message sent succefully");

                    
        }
        public function pass(Appointment $sms){
                 return view('doctors.sms', ['sms' => $sms]);
        }
}
