<?php

namespace App\Console\Commands;

use App\Mail\IncompleteProfileReminder;
use App\Models\Firm;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendIncompleteProfileReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-incomplete-profile-reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email reminder to firms that have not completed their profile after 24 hours';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $firms = Firm::query()
            ->where('created_at', '<=', now()->subDay())
            ->whereNull('incomplete_profile_reminder_sent_at')
            ->with('user')
            ->get();

        $sentCount = 0;

        foreach ($firms as $firm) {
            if ($firm->hasCompletedProfile()) {
                continue;
            }

            if (! $firm->user) {
                continue;
            }
            $lang = app()->getLocale();
            Mail::to($firm->user->email)
                ->locale($lang)
                ->send(new IncompleteProfileReminder($firm));

            $firm->update([
                'incomplete_profile_reminder_sent_at' => now(),
            ]);

            $sentCount++;
        }

        $this->info("Sent {$sentCount} reminders.");
    }
}
