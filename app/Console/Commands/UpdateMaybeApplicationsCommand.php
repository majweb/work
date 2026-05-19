<?php

namespace App\Console\Commands;

use App\Models\Aplication;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UpdateMaybeApplicationsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'applications:update-maybe-status';

    /**
     * Opis komendy konsolowej.
     */
    protected $description = 'Zmienia status aplikacji z "maybe" lub NULL na "no" po upływie 90 dni';

    /**
     * Wykonanie komendy.
     */
    public function handle(): int
    {
        $ninetyDaysAgo = Carbon::now()->subDays(90);

        // Znajdź aplikacje spełniające jeden z dwóch warunków:
        // 1. Status 'maybe' i data whenMaybe starsza niż 90 dni
        // 2. Status NULL i data created_at starsza niż 90 dni
        $applications = Aplication::where(function ($query) use ($ninetyDaysAgo) {
            $query->where(function ($q) use ($ninetyDaysAgo) {
                $q->where('status', 'maybe')
                    ->whereNotNull('whenMaybe')
                    ->where('whenMaybe', '<', $ninetyDaysAgo);
            })->orWhere(function ($q) use ($ninetyDaysAgo) {
                $q->whereNull('status')
                    ->where('created_at', '<', $ninetyDaysAgo);
            });
        })->get();
        $count = 0;

        foreach ($applications as $application) {
            $application->update([
                'status' => 'no',
                'whenDeleted' => now(),
                'whenMaybe' => null,
            ]);
            $count++;
        }

        $this->info("Zaktualizowano {$count} aplikacji (status 'maybe' lub NULL) na 'no'");

        return Command::SUCCESS;
    }
}
