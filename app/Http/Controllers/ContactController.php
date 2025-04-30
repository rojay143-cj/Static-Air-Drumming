<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailer;

class ContactController extends Controller
{
    public function sendEmail(Request $request){
        $jsonAJAX = $request->json()->all();

        $name = $jsonAJAX['name'];
        $organization = $jsonAJAX['organization'];
        $subject = $jsonAJAX['inquiry'];
        $number = $jsonAJAX['number'];
        $email = $jsonAJAX['email'];
        // $toEmail = "rojaymerlin@gmail.com";
        $toEmail = "support@airtech.sg";
        $message = $jsonAJAX['message'];

        $email = Mail::to($toEmail)->send(new Mailer($message, $subject, $email, $name, $organization, $number));
        if($email){
            return response()->json(['success' => 'Email sent successfully']);
        }else{
            return response()->json(['error' => 'Email not sent']);
        }
    }
}
