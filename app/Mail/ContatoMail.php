<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContatoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $detalhes;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($detalhes)
    {
        $this->detalhes = $detalhes;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->detalhes['email'], $this->detalhes['nome'])
                    ->replyTo($this->detalhes['email'], $this->detalhes['nome'])
                    ->subject('Novo Contato')
                    ->view('mail.contato');
    }
}
