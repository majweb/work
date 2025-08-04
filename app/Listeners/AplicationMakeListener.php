<?php

namespace App\Listeners;

use App\Events\AplicationMakeEvent;
use App\Mail\ApplicationMadeMail;
use App\Models\CvAudio;
use App\Models\CvVideo;
use App\Notifications\ApplicationMadeNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
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
        $cvType = $event->cvType;
        $lang = app()->getLocale();
        if (Cache::has('cv_session_'.auth()->id())) {
            $tempSessionId = Cache::get('cv_session_'.auth()->id());
            if($cvType == '3'){
                $d = CVAudio::where('temp_session_id', $tempSessionId)
                    ->where('user_id', auth()->id())
                    ->where('aplication_id', null)
                    ->update([
                        'aplication_id' => $aplication->id,
                        'temp_session_id' => null // czyścimy tymczasowy identyfikator
                    ]);
            } elseif ($cvType == '2'){
                CvVideo::where('temp_session_id', $tempSessionId)
                    ->where('user_id', auth()->id())
                    ->where('aplication_id', null)
                    ->update([
                        'aplication_id' => $aplication->id,
                        'temp_session_id' => null // czyścimy tymczasowy identyfikator
                    ]);
            }
        }

        // Czyszczenie sesji
        Cache::forget('cv_session_'.auth()->id());



        if($auth){
            $auth->notify((new ApplicationMadeNotification($aplication))->locale($lang));
            $aplication->user->notify((new ApplicationMadeNotification($aplication))->locale($lang));
        } else {
            Mail::to($aplication->email)->locale($lang)->send(new ApplicationMadeMail($aplication));
            $aplication->user->notify((new ApplicationMadeNotification($aplication))->locale($lang));
        }
    }
}
