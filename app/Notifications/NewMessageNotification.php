<?php

namespace App\Notifications;

use App\Models\Message;
use App\Services\MessengerService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;

/**
 * Nowa wiadomość: dla pracodawcy (od pracownika lub administracji), dla pracownika (od pracodawcy)
 * albo dla adminów (od pracodawcy w skrzynce administracji). Dzwonek w panelu i ewentualnie e-mail.
 */
class NewMessageNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * @param  bool  $withMail  e-mail pomijamy, gdy odbiorca jest online albo niedawno dostał mail z tej rozmowy
     */
    public function __construct(public Message $message, public bool $withMail = true) {}

    /**
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return $this->withMail ? ['mail', 'database'] : ['database'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $conversation = $this->message->conversation;
        $project = $this->message->project ?? $conversation->project;

        return (new MailMessage)
            ->subject(__('messenger.mail.newMessageSubject', ['name' => $this->senderName(), 'app' => config('app.name')]))
            ->markdown('emails.messenger.new-message', [
                'senderName' => $this->senderName(),
                'projectTitle' => $project ? app(MessengerService::class)->projectTitle($project) : null,
                // Wiadomość od kandydata przed odczytaniem za punkty - bez treści w mailu
                'locked' => $conversation->isLockedFor($notifiable),
                'excerpt' => $conversation->isLockedFor($notifiable) ? null : Str::limit($this->message->body, 300),
                // Pierwszy kontakt od pracownika czeka na akceptację pracodawcy
                'isPending' => $conversation->isPending() && $conversation->isEmployer($notifiable),
                'url' => route('messages.show', $conversation),
            ]);
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'type' => 'messenger_message',
            'conversation_id' => $this->message->conversation_id,
            'title' => 'messenger.notificationTitle',
            'message' => 'messenger.notificationNewMessage',
            // Treść powiadomienia jest wyświetlana jako HTML - nazwa nadawcy musi być escapowana
            'sender_name' => e($this->senderName()),
            'action' => 'messenger.openConversation',
            'actionUrl' => route('messages.show', $this->message->conversation_id, false),
        ];
    }

    private function senderName(): string
    {
        $conversation = $this->message->conversation;

        // Wiadomość od admina w skrzynce administracji - pracodawca widzi "Administrację"
        if ($conversation->isWithAdmin() && $this->message->sender_id !== $conversation->employer_id) {
            return __('messenger.administration');
        }

        return $this->message->sender->messengerName();
    }
}
