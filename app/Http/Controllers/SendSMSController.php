<?php

namespace App\Http\Controllers;
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
    public function loadPage(){
        return view('send-sms');
    }

    public function sendSMS(Request $request){
        $configuration = new Configuration(
            host: 'https://3gllqv.api.infobip.com',
            apiKey: '8b660cf0378d59c5b1653a4ef81b31a8-187f3662-81df-4bca-b84e-0e099347f632'
        );

        $sendSmsApi = new SmsApi(config: $configuration);

        $message = new SmsTextualMessage(
            destinations: [
                new SmsDestination(to: $request->number)
            ],
            from: 'Ola-Oluwaeye clinic',
            text: $request->message
        );
    
        $request = new SmsAdvancedTextualRequest(messages: [$message]);
    
        try {
            $smsResponse = $sendSmsApi->sendSmsMessage($request);
            return redirect('/send-sms')->with('success', 'SMS sent succesfully');
        } catch (ApiException $apiException) {
            return redirect('/send-sms')->with('fail', $apiException->getMessage());
        }
    }
}
