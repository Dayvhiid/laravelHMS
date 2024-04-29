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
            apiKey: 'e467bba270ffb47eed5134206d283d48-293f4f28-33ef-4cdc-8bd3-b700b027082d'
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
