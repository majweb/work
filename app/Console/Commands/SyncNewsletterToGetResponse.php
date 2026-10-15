<?php

namespace App\Console\Commands;

use App\Models\Newsletter;
use App\Services\Newsletter\GetResponseClient;
use Illuminate\Console\Command;
use Throwable;

class SyncNewsletterToGetResponse extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'newsletter:sync-getresponse {--limit=500 : Maksymalna liczba kontaktów w jednym uruchomieniu}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Przenosi nowych subskrybentów newslettera do GetResponse, na listę ich języka';

    /**
     * Execute the console command.
     */
    public function handle(GetResponseClient $getResponse): int
    {
        if (! $getResponse->isConfigured()) {
            $this->warn('Brak GETRESPONSE_API_KEY - synchronizacja pominięta.');

            return self::SUCCESS;
        }

        $subscribers = Newsletter::whereNull('getresponse_synced_at')
            ->orderBy('id')
            ->limit((int) $this->option('limit'))
            ->get();

        $synced = 0;
        $failed = 0;

        foreach ($subscribers as $subscriber) {
            $locale = $subscriber->locale ?: Newsletter::localeForCountryCode($subscriber->country_code);

            try {
                $getResponse->addContact($subscriber->email, $getResponse->listIdForLocale($locale), $subscriber->ip_address);
                $subscriber->update(['locale' => $locale, 'getresponse_synced_at' => now()]);
                $synced++;
            } catch (Throwable $e) {
                // Nieudany kontakt zostaje niezsynchronizowany i wróci przy następnym uruchomieniu
                $failed++;
                $this->error("{$subscriber->email}: ".$e->getMessage());
            }
        }

        $this->info("Zsynchronizowano: {$synced}, błędy: {$failed}.");

        return $failed && ! $synced ? self::FAILURE : self::SUCCESS;
    }
}
