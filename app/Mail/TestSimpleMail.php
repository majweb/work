<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class TestSimpleMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public string $content)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(config('mail.from.address'), config('mail.from.name')),
            subject: 'Testowy Mail (Simple)',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.test-simple',
        );
    }
}
