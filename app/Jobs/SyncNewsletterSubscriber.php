<?php

namespace App\Jobs;

use App\Models\Newsletter;
use App\Services\Newsletter\GetResponseClient;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

/**
 * Przenosi subskrybenta do GetResponse, na listę jego języka - zaraz po zapisie na stronie.
 * Jeśli się nie uda, subskrybent zostaje niezsynchronizowany i przeniesie go cogodzinne newsletter:sync-getresponse.
 */
class SyncNewsletterSubscriber implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 3;

    // Subskrybent usunięty w panelu, zanim zadanie się wykonało - nie ma czego przenosić
    public bool $deleteWhenMissingModels = true;

    public array $backoff = [60, 300];

    public function __construct(public Newsletter $subscriber) {}

    public function handle(GetResponseClient $getResponse): void
    {
        $subscriber = $this->subscriber;

        if (! $getResponse->isConfigured() || $subscriber->getresponse_synced_at) {
            return;
        }

        $locale = $subscriber->locale ?: Newsletter::localeForCountryCode($subscriber->country_code);

        $getResponse->addContact($subscriber->email, $getResponse->listIdForLocale($locale), $subscriber->ip_address);
        $subscriber->update(['locale' => $locale, 'getresponse_synced_at' => now()]);
    }
}
