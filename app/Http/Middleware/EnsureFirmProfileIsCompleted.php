<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureFirmProfileIsCompleted
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        // Sprawdzamy tylko jeśli użytkownik ma rolę 'firm'
        if ($user && $user->hasRole('firm')) {
            $firm = $user->firm;

            if (! $firm || ! $firm->hasCompletedProfile()) {
                session()->flash('flash.banner', __('info.firm_profile_not_completed'));
                session()->flash('flash.bannerStyle', 'danger');

                return redirect()->route('profile.show'); // Przekierowanie do edycji profilu (gdzie znajduje się formularz firmy)
            }
        }

        return $next($request);
    }
}
