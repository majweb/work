<?php

namespace App\Services\Newsletter;

use App\Jobs\SyncNewsletterSubscriber;
use App\Models\Newsletter;

/**
 * Zapis na newsletter (stopka, zgoda przy rejestracji): subskrybent z dowodem zgody
 * i od razu na listę GetResponse języka strony.
 */
class NewsletterSubscriptions
{
    /**
     * @param  array<int, int|string>  $agreementIds  zaznaczone zgody (dowód zgody - RODO)
     * @return Newsletter|null null - adres jest już zapisany
     */
    public function subscribe(string $email, array $agreementIds, ?string $ipAddress): ?Newsletter
    {
        if (Newsletter::where('email', $email)->exists()) {
            return null;
        }

        $subscriber = Newsletter::create([
            'email' => $email,
            'country_code' => getSelectedCountry() ?: getLocalBrowserLang(),
            // Newsletter wysyłamy w języku, w którym osoba czytała stronę
            'locale' => app()->getLocale(),
            // Dowód zgody (RODO): które zgody zaznaczono, kiedy i z jakiego IP
            'consents' => [
                'agreement_ids' => array_values(array_map('intval', $agreementIds)),
                'accepted_at' => now()->toIso8601String(),
            ],
            'ip_address' => $ipAddress,
        ]);

        // Od razu na listę GetResponse jego języka; gdyby się nie udało, przeniesie go cogodzinna synchronizacja
        SyncNewsletterSubscriber::dispatch($subscriber);

        return $subscriber;
    }
}
