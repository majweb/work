<?php

namespace App\Notifications;

use App\Models\Product;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendRequestSocialAdminNotification extends Notification
{
    use Queueable;
    public $product;
    public $who;



    /**
     * Create a new notification instance.
     */
    public function __construct(Product $product,User $who)
    {
        $this->product = $product;
        $this->who = $who;
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
            ->subject(ucfirst(__('Social-buy')))
            ->line(__('Social-info',['name'=>$this->who->name,'email'=>$this->who->email]));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'product' => $this->product->id,
        ];
    }
}
