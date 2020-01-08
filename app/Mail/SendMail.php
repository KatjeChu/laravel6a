<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public function __construct()
    {
        //
    }
    
    public function build (Request $request)
    {
        return $this->to('katyasashakatyasasha6@gmail.com')
        ->subject( 'Сообщение из формы обратной связи' )
        ->view('sendmail')
        ->with([    
            'contactName' => $request->name,
            'contactSubject' => $request->subject,
            'contactEmail' => $request->email,
            'contactMessage' => $request->message,
        ]);
    }
}

?>