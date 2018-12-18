<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Contato;

class SendMailContato extends Mailable
{
    use Queueable, SerializesModels;
    public $contato;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contato $contato) { $this->contato = $contato; }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contato')->with(['contato' => $this->contato]);
    }
}
