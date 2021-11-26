<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ContatenosMailable extends Mailable
{
    use Queueable, SerializesModels;

    //definindo  o assunto do email
    public $subject = "Informação de contato";

    public $contato;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contato)
    {
        $this->contato = $contato;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contato');
    }
}
