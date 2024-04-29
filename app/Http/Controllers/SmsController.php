<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
class SmsController extends Controller
{
        public function index(Request $request){
//                 $reciver_phone = $request->phone;
//                 $message = $request->message;
//             $sid = getenv("TWILIO_SID");
//             $token = getenv("TWILIO_TOKEN");
//             $sendernumber = getenv("TWILIO_FROM");
//             $twilio = new Client($sid, $token);

//      $message = $twilio->messages
//                     ->create($reciver_phone, // to
//                             [
//                                 "body" => $message,
//                                 "from" => $sendernumber
//                             ]
//                     );

//                     return redirect(route('doctors.status'))->with('msg','Message Sent to User Succefully'); 
//                 //     dd("message sent succefully");
                $email = $_GET['phone'];    
                if(isset($_GET['submit'])){
                    echo "It is working";
                }

                    
        }
        public function pass(Appointment $sms){
                 return view('doctors.sms', ['sms' => $sms]);
        }

        public function NaijaSMS(Request $request){
        //        $message =  $request->input('message');
        //        $username = 'daviddada360@gmail.com';
        //        $password = 'David_4141';
        //        $sender   = 'Olaoluwa';
        //        $mobiles  = (string) $request->input('phone');

        //        $api_url  = 'https://portal.nigeriabulksms.com/api/';
        //        $data = array('username'=>$username, 'password'=>$password, 'sender'=>$sender, 'message'=>$message, 'mobiles'=>$mobiles);

        //        //URL encode the message data
        //        $data = http_build_query($data);

        //        $request = $api_url.'?'.$data;
        //        $result  = file_get_contents($request);
        //        $result  = json_decode($result);

        //        if(isset($result->status) && strtoupper($result->status) == 'OK')
        //                 {
        //                 // Message sent successfully, do anything here

        //                 echo 'Message sent at N'.$result->price;

        //                 }
        //                 else if(isset($result->error))
        //                 {
        //                 // Message failed, check reason.

        //                 echo 'Message failed - error: '.$result->error;
        //                 }
        //                 else
        //                 {
        //                 // Could not determine the message response.

        //                 echo 'Unable to process request';
        //                 }
   
// Set your variables
$username = "daviddada360@gmail.com";
$password = "David_4141";
$message = $request->input('message');
$sender = "Olaoluwa";
$mobiles = $request->input('phone');

// Build the URL with variables
$url = "https://portal.nigeriabulksms.com/api/?username=" . urlencode($username) . "&password=" . urlencode($password) . "&message=" . urlencode($message) . "&sender=" . urlencode($sender) . "&mobiles=" . urlencode($mobiles);

// Fetch the content from the URL
$response = file_get_contents($url);

// Check if request was successful
if ($response === false) {
    echo "Error fetching URL";
} else {
    return redirect(route('doctors.status'))->with('msg','Message Sent to User Succefully'); 
    // echo "Response: " . $response;
}



         }

}
