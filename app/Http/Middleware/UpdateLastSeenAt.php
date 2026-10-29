<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Zapisuje ostatnią aktywność zalogowanego użytkownika - na tej podstawie wiadomości pokazują,
 * kto jest teraz online, i decydują o wysłaniu maila. Przy okazji zapamiętuje język strony,
 * w którym idą do użytkownika powiadomienia. Odpytywanie wiadomości też przechodzi tędy,
 * więc otwarta karta utrzymuje status online.
 */
class UpdateLastSeenAt
{
    /**
     * Co ile sekund najczęściej zapisujemy aktywność, żeby nie pisać do bazy przy każdym żądaniu.
     */
    private const THROTTLE_SECONDS = 60;

    /**
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        // Admin podglądający konto użytkownika nie zmienia jego aktywności
        if ($user && ! $request->session()->has('impersonate')) {
            $changes = [];

            if (! $user->last_seen_at || $user->last_seen_at->lt(now()->subSeconds(self::THROTTLE_SECONDS))) {
                $changes['last_seen_at'] = now();
            }

            if ($user->locale !== app()->getLocale()) {
                $changes['locale'] = app()->getLocale();
            }

            if ($changes) {
                // Zapytanie bez modelu - nie zmienia updated_at i nie odpala zdarzeń
                User::whereKey($user->id)->update($changes);
                foreach ($changes as $key => $value) {
                    $user->setAttribute($key, $value);
                    $user->syncOriginalAttribute($key);
                }
            }
        }

        return $next($request);
    }
}
