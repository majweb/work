<?php

namespace App\Console;

use App\Console\Commands\UpdateMaybeApplicationsCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Lista komend, które mają być zarejestrowane.
     *
     * @var array
     */
    protected $commands = [
        UpdateMaybeApplicationsCommand::class,
    ];

    /**
     * Definiuje harmonogram zadań aplikacji.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('applications:update-maybe-status')->everyFiveMinutes();
    }

    /**
     * Rejestruje komendy aplikacji.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
