<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ExternalFirmInvitationMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $email;
    public string $token;
    public string $aplications;

    public function __construct(string $email, string $token,array $aplications)
    {
        $this->email = $email;
        $this->token = $token;
        $this->aplications = implode(', ', $aplications);;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nowe zapytanie ofertowe'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.external-firm-invitation-mail',
            with: [
                'link' => route('external.response', [
                    'email' => $this->email,
                    'token' => $this->token,
                    'aplications' => $this->aplications,
                ]),
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
