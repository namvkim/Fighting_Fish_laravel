<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
   /**
    * Create a new data instance.
    *
    * @return void
    */

   public function __construct($data)
   {
       $this->data = $data;
   }

   /**
    * Build the message.
    *
    * @return $this
    */
   public function build()
   {
       return $this->from('luong.ho22@student.passerellesnumeriques.org')
           ->view('mails.SubscribeEmail')
           ->subject('Subscribe Email');
   }
}
