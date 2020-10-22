<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class Mails extends Controller
{
    function mailsend(Request $req) {

        // echo "<pre>";
        // print_r($req->input());
        // die;
        $to_name = "sagar";
        $to_email = "sagarjat4121@gmail.com";
        $subject = $req->subject;
        $data = array('name' => $req->name,'body'=>"email : ".$req->email."  <br>  message: ".$req->message);
        Mail::send('mail',$data,function($message) use($to_email,$to_name,$subject){
            $message->to($to_email)->subject($subject);
        });
        return "mail sent Successfully";
    }
}
