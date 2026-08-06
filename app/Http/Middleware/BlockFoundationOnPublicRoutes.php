<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BlockFoundationOnPublicRoutes
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Jeśli fundacja jest zalogowana w sesji
        if ($request->session()->has('foundation_auth_id')) {
            // I próbuje wejść na trasy, które NIE są częścią panelu fundacji
            if (! $request->is('foundation-panel/*')) {
                return redirect()->route('foundation.dashboard');
            }
        }

        return $next($request);
    }
}
