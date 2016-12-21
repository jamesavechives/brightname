<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendContact;
use Illuminate\Http\Request;
use App\Http\Requests;

class ContactusController extends Controller
{
    
    function sendmail(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $msg=$request->input('msg');
        Mail::to($email)->send(); 
    }
}
