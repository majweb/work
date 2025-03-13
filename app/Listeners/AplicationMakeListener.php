<?php

namespace App\Listeners;

use App\Events\AplicationMakeEvent;
use App\Mail\ApplicationMadeMail;
use App\Notifications\ApplicationMadeNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class AplicationMakeListener
{
    /**
     * Handle the event.
     */
    public function handle(AplicationMakeEvent $event): void
    {
        $aplication = $event->aplication;
        $auth = $event->auth;
        $lang = app()->getLocale();

        if($auth){
            $auth->notify((new ApplicationMadeNotification($aplication))->locale($lang));
            $aplication->user->notify((new ApplicationMadeNotification($aplication))->locale($lang));
        } else {
            Mail::to($aplication->email)->locale($lang)->send(new ApplicationMadeMail($aplication));
            $aplication->user->notify((new ApplicationMadeNotification($aplication))->locale($lang));
        }
    }
}
