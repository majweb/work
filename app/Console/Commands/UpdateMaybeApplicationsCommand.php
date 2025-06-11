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
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Zmienia status aplikacji z "maybe" na "no" po upływie 90 dni';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $ninetyDaysAgo = Carbon::now()->subDays(90);

        // Znajdź wszystkie aplikacje ze statusem 'maybe' z datą whenMaybe starszą niż 90 dni
        $applications = Aplication::where('status', 'maybe')
            ->whereNotNull('whenMaybe')
            ->where('whenMaybe', '<', $ninetyDaysAgo)
            ->get();

        $count = 0;

        foreach ($applications as $application) {
            $application->update([
                'status' => 'no',
                'whenDeleted' => now(),
                'whenMaybe' => NULL
            ]);
            $count++;
        }

        $this->info("Zaktualizowano {$count} aplikacji ze statusem 'maybe' na 'no'");

        return Command::SUCCESS;
    }
}
