<?php

namespace App\Mail;

use App\Models\Foundation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FoundationStatusChanged extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct(public Foundation $foundation) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Konto Fundacji zostało aktywowane - '.config('app.name'),
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.foundation-status-changed',
            with: [
                'loginUrl' => route('foundation.login'),
                'email' => $this->foundation->email,
                'registrationCode' => $this->foundation->registration_code,
                'foundationName' => $this->foundation->name,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
