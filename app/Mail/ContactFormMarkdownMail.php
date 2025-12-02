<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ContactFormMarkdownMail extends Mailable
{
    use Queueable, SerializesModels;
    public string $email;
    public string $temat;
    public string $wiadomosc;

    /**
     * Create a new message instance.
     */
    public function __construct(string $email, string $temat, string $wiadomosc)
    {
        $this->email = $email;
        $this->temat = $temat;
        $this->wiadomosc = $wiadomosc;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->email, 'Formularz Kontaktowy'), // nadawca
            subject: 'Nowa wiadomość z formularza kontaktowego Work4You.Global',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact-form',
            with: [
                'email' => $this->email,
                'temat' => $this->temat,
                'wiadomosc' => $this->wiadomosc,
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
