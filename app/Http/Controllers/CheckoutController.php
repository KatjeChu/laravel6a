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
        // $contents=Cart::content()->map(function ($item){
        // return $item->model->title.', '.$item->id;
        // })->values()->toArray();

        // $this->validate($request, [
        //     'name' => 'required',
        //     'surname' => 'required',
        //     'address' => 'required',
        //     'phonenumber' => 'required'
        //     // 'metadata' =>[
        //     //     'contents'=>$contents,
        //     //     ],
            
        // ]); 
        //return $contents;
        
        $contactdata=request()->validate([
            'name'=>'required',
            'surname'=>'required',
            'address'=>'required',
            'phonenumber'=>'required'
        ]);


        //return $bla;
        //$blabla=array_merge ($contents, $bla);
       //return $blabla;

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
