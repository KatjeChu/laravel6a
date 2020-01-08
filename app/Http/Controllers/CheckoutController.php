<?php

namespace App\Http\Controllers;

use App\Mail\CheckoutMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMessage;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;

class CheckoutController extends Controller
{
    
    public function index()
    {
        return view('checkout');
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {             
        $contactdata=request()->validate([
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phonenumber'=>'required',
        ]);
        
        Mail::send( new CheckoutMail() );
        Cart::instance('default')->destroy();
        return redirect ('thx');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
