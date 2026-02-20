<?php

namespace App\Notifications;

use App\Models\Aplication;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\BroadcastMessage;

class ApplicationMadeNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $aplication;

    /**
     * Create a new notification instance.
     */
    public function __construct(Aplication $aplication)
    {
        $this->aplication = $aplication;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail','database','broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->greeting(__('ApllyMail-hello'))
        ->subject(__('ApllyMail-applyNr').$this->aplication->id.__('ApllyMail-applySuccess'))
        ->line(__('ApllyMail-applyConfirm'))
        ->action(__('ApllyMail-applyLook'), url('/applications/' . $this->aplication->id));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'title' => 'translate.newNotification',
            'message' => 'translate.applicationNotificationMessage',
            'id' => $this->aplication->id, // Parametr dla klucza tłumaczenia (opcjonalnie)
            'aplication' => $this->aplication->id,
        ];
    }

    /**
     * Get the broadcastable representation of the notification.
     */
    public function toBroadcast(object $notifiable): BroadcastMessage
    {
        return new BroadcastMessage([
            'title' => 'translate.newNotification',
            'message' => 'translate.applicationNotificationMessage',
            'id' => $this->aplication->id,
            'aplication' => $this->aplication->id,
        ]);
    }
}
