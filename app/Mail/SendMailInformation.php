<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailInformation extends Mailable
{
    use Queueable, SerializesModels;

    public $request, $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $data)
    {
        $this->request = $request;
        $this->data    = $data;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('partials.informationEmail')
                    ->subject("Nueva Consulta desde https://ndgroup.mx/");
    }
}
