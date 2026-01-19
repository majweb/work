<?php

namespace App\Mail;

use App\Models\Aplication;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationConsideredMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $aplication;
    public $status;

    public function __construct(Aplication $aplication, string $status)
    {
        $this->aplication = $aplication;
        $this->status = $status;
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = match ($this->status) {
            'no' => __('Mail-rejected-subject'),
            'maybe' => __('Mail-processing-subject'),
            'yes' => __('Mail-accepted-subject'),
            default => __('Mail-submitted-subject'),
        };

        return new Envelope(subject: $subject);
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $view = match ($this->status) {
            'no' => 'mail.aplications.rejected',
            'maybe' => 'mail.aplications.maybe',
            'yes' => 'mail.aplications.accepted',
            default => 'mail.aplications.submitted',
        };

        return new Content(
            markdown: $view,
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
