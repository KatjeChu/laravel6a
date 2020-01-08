<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendMailController extends Controller
    {
        public function index()
        {            
            return view('contact');            
        }

        public function store()
        {    
            $contactdata=request()->validate([
                'name'=>'required',
                'email'=>'required',
                'subject'=>'required',
                'message'=>'required',
            ]);

            Mail::send( new SendMail() );  
            return redirect ('thx');         
        }
    }
    
    ?>