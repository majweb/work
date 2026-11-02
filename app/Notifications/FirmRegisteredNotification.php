<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

/**
 * E-mail (z kolejki) do zespołu Work4you o nowej firmie zarejestrowanej w portalu.
 * Odbiorcy: config('mail.firm_registration_recipients').
 */
class FirmRegisteredNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(public User $firm) {}

    /**
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Nowa firma założyła konto: '.$this->firm->name)
            ->greeting('Dzień dobry,')
            ->line('W portalu Work4you.global zarejestrowała się nowa firma.')
            ->line('Nazwa: '.$this->firm->name)
            ->line('E-mail: '.$this->firm->email)
            ->line('Data rejestracji: '.$this->firm->created_at?->timezone('Europe/Warsaw')->format('d.m.Y H:i'))
            ->action('Zobacz firmę w panelu admina', route('admin.firms.show', $this->firm))
            ->salutation('Work4you.global');
    }
}
