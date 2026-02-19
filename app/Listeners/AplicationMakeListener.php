<?php

namespace App\Listeners;

use App\Events\AplicationMakeEvent;
use App\Jobs\MergeVideoChunksJob;
use App\Mail\ApplicationMadeMail;
use App\Models\CvAudio;
use App\Models\CvVideo;
use App\Models\User;
use App\Notifications\ApplicationMadeNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AplicationMakeListener implements ShouldQueue
{
    /**
     * Handle the event.
     */
    public function handle(AplicationMakeEvent $event): void
    {
        $aplication = $event->aplication;
        $auth = $event->auth;
        $cvType = $event->cvType;
        $sessionId = $event->sessionId;
        $lang = app()->getLocale();

        // Powiązanie CV Audio/Video jeśli sesja istnieje
        if ($sessionId) {
            if ($cvType == '3') { // Audio
                CvAudio::where('temp_session_id', $sessionId)
                    ->update([
                        'aplication_id' => $aplication->id,
                        'temp_session_id' => null
                    ]);
            } elseif ($cvType == '2') { // Video
                // Powiąż istniejące/placholderowe rekordy ze złożoną aplikacją
                CvVideo::where('temp_session_id', $sessionId)
                    ->update([
                        'aplication_id' => $aplication->id,
                        'temp_session_id' => null
                    ]);
            }
        }

        if($auth){
            $auth->notify((new ApplicationMadeNotification($aplication))->locale($lang));
        } else {
            Mail::to($aplication->email)->locale($lang)->send(new ApplicationMadeMail($aplication));
        }

        // Powiadom rekrutera i użytkownika (logika wspólna)
        $this->notifyRecruitAndUser($aplication, $lang);
    }

    /**
     * Powiadom rekrutera i użytkownika
     */
    private function notifyRecruitAndUser($aplication, $lang)
    {
        // Jeśli user != recruiter, powiadom rekrutera
        if ($aplication->user_id != $aplication->recruiter_id) {
            $recruit = User::find($aplication->recruiter_id);
            if ($recruit) {
                $recruit->notify((new ApplicationMadeNotification($aplication))->locale($lang));
            }
        } else {
            // Powiadom użytkownika (jeśli istnieje)
            if ($aplication->user) {
                $aplication->user->notify((new ApplicationMadeNotification($aplication))->locale($lang));
            }
        }
    }
}
