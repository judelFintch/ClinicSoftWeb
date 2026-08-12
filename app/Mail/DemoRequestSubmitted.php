<?php

namespace App\Mail;

use App\Models\DemoRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DemoRequestSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public DemoRequest $demoRequest)
    {
        //
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nouvelle demande de démo — '.$this->demoRequest->establishment,
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.demo-request-submitted',
        );
    }
}
