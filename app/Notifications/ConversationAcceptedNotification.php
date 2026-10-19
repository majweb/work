<?php

namespace App\Notifications;

use App\Models\Conversation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

/**
 * Pracodawca zaakceptował kontakt - pracownik może pisać dalej.
 */
class ConversationAcceptedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(public Conversation $conversation) {}

    /**
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        // Online pracownik zobaczy zmianę w otwartej rozmowie i w dzwonku
        return $notifiable->isOnline() ? ['database'] : ['mail', 'database'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $name = $this->conversation->employer->messengerName();

        return (new MailMessage)
            ->subject(__('messenger.mail.acceptedSubject', ['name' => $name]))
            ->greeting(__('messenger.mail.greeting'))
            ->line(__('messenger.mail.acceptedLine', ['name' => $name]))
            ->action(__('messenger.openConversation'), route('messages.show', $this->conversation));
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'type' => 'messenger_accepted',
            'conversation_id' => $this->conversation->id,
            'title' => 'messenger.notificationTitle',
            'message' => 'messenger.notificationAccepted',
            'sender_name' => e($this->conversation->employer->messengerName()),
            'action' => 'messenger.openConversation',
            'actionUrl' => route('messages.show', $this->conversation->id, false),
        ];
    }
}
