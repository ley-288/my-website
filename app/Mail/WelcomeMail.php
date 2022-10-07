<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
   use Queueable, SerializesModels;
   public $data;
    /**
    * Create a new message instance.

    * @return void
    */
    public function __construct($data)
    {

       $this->data = $data;
    }
    /**
    * Build the message.

    * @return $this
    */
    public function build()
    {
        $address = 'leyton@jiant.io';
        $subject = 'Welcome to Jiant';
        $name = 'Jiant';

        return $this->view('emails.welcome')
                    ->from($address, $name)
                    ->cc($address, $name)
                    ->bcc($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject);
                    //->with([ 'message' => $this->data['message'] ]);

    }

}
