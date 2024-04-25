<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Infobip\Api\SmsApi; 
use Infobip\Configuration;
use Infobip\ApiException;
use Infobip\Model\SmsAdvancedTextualRequest;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Illuminate\Http\Request;

class SendSMSController extends Controller
{
    //
   

    public function sendSMS(Request $request){
        $phoneNumber = request()->get('number'); 
        $message = request()->get('message');
        $configuration = new Configuration(
            host: 'https://3gllqv.api.infobip.com',
            apiKey: '8b660cf0378d59c5b1653a4ef81b31a8-187f3662-81df-4bca-b84e-0e099347f632'
        );

        $sendSmsApi = new SmsApi(config: $configuration);

        $message = new SmsTextualMessage(
            destinations: [
                new SmsDestination(to: (string) $phoneNumber)
            ],
            from: 'Ola-Oluwaeye clinic',
            text: (string) $message
        );
    
        $request = new SmsAdvancedTextualRequest(messages: [$message]);
    
        try {
            $smsResponse = $sendSmsApi->sendSmsMessage($request);
            return redirect(route('doctors.status'))->with('msg','Message Sent to User Succefully'); 
        } catch (ApiException $apiException) {
            // return redirect(route('doctors.status'))->with('msg',$apiException->getMessage()); 
            return redirect(route('doctors.status'))->with('msg','Message Not Delieverd'); 
        }
    }
    public function loadPage(Appointment $sms){
        // $appointment = Appointment::all();
        return view('send-sms', compact('sms'));
    }
}
