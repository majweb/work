<?php

namespace App\Http\Middleware;

use App\Lang\Lang;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('language')) {
            // Język wybrany ręcznie w przełączniku języka
            $locale = session()->get('language', config('app.locale'));
        } else {
            // Bez ręcznego wyboru obowiązuje język przeglądarki. Rynek (selected_country) nie zmienia
            // języka portalu - to kod kraju, nie języka (np. al = Albania, a albański to sq;
            // ar = Argentyna, a nie arabski). Rynek wpływa tylko na oferty i grafiki.
            $locale = getLocalBrowserLangWithout();
            if (! getSelectedCountry()) {
                session()->put('selected_country', getLocalBrowserLang());
            }
        }

        if ($locale) {
            $lang = Lang::tryFrom($locale)?->value ?? config('app.locale');
            app()->setLocale($lang);
        }

        return $next($request);
    }
}
