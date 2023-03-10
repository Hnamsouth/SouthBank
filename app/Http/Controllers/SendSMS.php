<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Twilio\Jwt\Client;
use Twilio\Rest\Client;


class SendSMS extends Controller
{
    //
    public function SendMess(Request $request){
        $sid = env('TWILIO_ACCOUNT_SID');
        $token = env('TWILIO_AUTH_TOKEN');
        $twilio = new Client($sid, $token);

        $message = $twilio->messages
            ->create(
//                $request->phoneNumber, // the phone number to send the message to
//                '+84967356503', // the phone number to send the message to
                '+84914680066', // the phone number to send the message to
                array(
                    'from' => env('TWILIO_FROM'),
                    'body' => 'Hello, world! your code: 1234568'
                )
            );
        dd($message);
    }
}
