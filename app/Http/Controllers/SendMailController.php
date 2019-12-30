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
    
        // public function send(Request $request){
        //     // validate fields
        //     $this->validate($request, [
        //         'name' => ['required', 'string'],
        //         'email' => ['required', 'email'],
        //         'subject' => ['required', 'string'],
        //         'message' => ['required', 'string']
        //     ]);
    
        //     // redirect to contact form with message
        //     //session()->flash('success', 'Сообщение отправлено');    
        //     // return redirect()->back();
        //     return redirect ('thx');
 
        // }

        public function store()
        {            
            Mail::send( new SendMail() );  
            return redirect ('thx');         
        }
    }
    
    ?>