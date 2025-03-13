<?php

namespace App\Mail;

use App\Models\Aplication;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationMadeMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $aplication;

    /**
     * Create a new notification instance.
     */
    public function __construct(Aplication $aplication)
    {
        $this->aplication = $aplication;
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: __('ApllyMail-applyNr').$this->aplication->id.__('ApllyMail-applySuccess'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.aplications.made',
            with: [
                'url' => url('/applications/' . $this->aplication->id),
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
