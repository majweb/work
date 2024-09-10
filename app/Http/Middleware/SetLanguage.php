<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Lang\Lang;
use Closure;
class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(session()->has('language')){
            $locale = session()->get('language', config('app.locale'));
        } else{
            $locale = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
        }
        app()->setLocale(Lang::tryFrom($locale)->value);

        return $next($request);
    }
}
