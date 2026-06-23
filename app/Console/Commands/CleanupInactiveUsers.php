<?php

namespace App\Console\Commands;

use App\Mail\InactiveAccountNotification;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class CleanupInactiveUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:cleanup-inactive-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends notifications to inactive users and deletes their projects after 7 days of inactivity since notification.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->sendNotifications();
        $this->cleanupProjects();
    }

    /**
     * Send notifications to users who haven't logged in for 12 months.
     */
    protected function sendNotifications(): void
    {
        $users = User::where('last_login_at', '<', now()->subYear())
            ->whereNull('inactive_notification_sent_at')
            ->whereNull('user_blocked')
            ->get();


        foreach ($users as $user) {
            $userLocale = $user->locale ?? app()->getLocale();

            Mail::to($user->email)
                ->locale($userLocale)
                ->send(new InactiveAccountNotification($user));

            $user->update(['inactive_notification_sent_at' => now()]);
            $this->info("Notification sent in [{$userLocale}] to: {$user->email}");
        }
    }

    /**
     * Delete projects for users who were notified 7 days ago and still haven't logged in.
     */
    protected function cleanupProjects(): void
    {
        $users = User::whereNotNull('inactive_notification_sent_at')
            ->where('inactive_notification_sent_at', '<', now()->subDays(7))
            ->where('last_login_at', '<', now()->subYear())
            ->whereNull('user_blocked')
            ->with(['firm', 'changeProducts', 'banners', 'articles', 'externalCompanies'])
            ->get();

        foreach ($users as $user) {
            DB::transaction(function () use ($user) {
                // 1. Usuwanie projektów i ich zależności
                $user->load('projects.aplications.candidate');
                foreach ($user->projects as $project) {
                    foreach ($project->aplications as $aplication) {
                        // Relacje HasOne
                        $aplication->cvClassic()->delete();
                        $aplication->cvAudio()->delete();
                        $aplication->cvVideo()->delete();

                        // Relacje HasMany
                        $aplication->notes()->delete();

                        // POPRAWKA: Usuwanie kandydata i jego odpowiedzi
                        if ($aplication->candidate) {
                            $aplication->candidate->answers()->delete();
                            $aplication->candidate->delete();
                        }

                        // Media (Spatie MediaLibrary usuwa media przy delete modelu jeśli jest poprawnie skonfigurowane)
                        $aplication->delete();
                    }

                    $project->questions()->delete();
                    $project->cvClassics()->delete();

                    // projectObserver zajmie się cachem
                    $project->delete();
                }

                // 2. Dezaktywacja konta firmy i inne powiązane dane
                if ($user->firm) {
                    $user->firm->clicks()->delete();
                    $user->firm->premiumCertificateHistories()->delete();
                    // Nie usuwamy samej firmy, aby zachować strukturę, ale można ją oznaczyć
                }

                $user->changeProducts()->delete();
                $user->banners()->delete();

                foreach ($user->articles as $article) {
                    $article->comments()->delete();
                    $article->delete();
                }

                foreach ($user->externalCompanies as $externalCompany) {
                    // Projekty firm zewnętrznych są już usuwane przez relację w pętli wyżej jeśli należą do tego usera?
                    // Lepiej upewnić się, że projekty tych firm też znikną
                    $externalCompany->projects()->delete();
                    $externalCompany->delete();
                }

                $user->tags()->delete();
                $user->workerDetail()->delete();

                // 3. Blokada użytkownika i odświeżenie licznika dla cyklicznego sprawdzania
                $user->update([
                    'user_blocked' => now(),
                    'last_login_at' => now(), // "Udajemy" aktywność, by sprawdzić go ponownie za rok
                    'inactive_notification_sent_at' => null // Czyścimy by nie procesować ponownie w tym cyklu
                ]);
            });

            $this->info("Projects cleaned up for user: {$user->email}");
        }
    }
}
