<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->to('katyasashakatyasasha6@gmail.com')
        ->subject( 'Новый заказ')
        ->view('sendmailcheckout')
        ->with([    
            'contactName' => $request->name,
            'contactSurname' => $request->surname,
            'contactEmail' => $request->email,
            'contactAddress' => $request->address,
            'contactPhonenumber' => $request->phonenumber,
            'contactComment' => $request->comment,
        ]);
    }
}
