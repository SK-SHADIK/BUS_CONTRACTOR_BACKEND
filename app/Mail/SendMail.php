<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sub, $body)
    {
        //
        $this->sub=$sub;
        $this->body=$body;
    }

    /**
     * Get the message envelope.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name')->with('body',$this->body)->subject($this->sub);
    }


}
