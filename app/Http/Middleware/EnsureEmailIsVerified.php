<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified as BaseEnsureEmailIsVerified;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Wymaganie potwierdzonego e-maila (alias "verified") z wyjątkiem dla admina zalogowanego jako
 * użytkownik ("zaloguj jako"): admin widzi panel konta, które jeszcze nie potwierdziło e-maila,
 * i zawsze może wrócić do swojego konta. Stan weryfikacji samego konta się nie zmienia.
 */
class EnsureEmailIsVerified extends BaseEnsureEmailIsVerified
{
    public function handle($request, Closure $next, $redirectToRoute = null): Response
    {
        if ($request instanceof Request && $request->hasSession() && $request->session()->has('impersonate')) {
            return $next($request);
        }

        return parent::handle($request, $next, $redirectToRoute);
    }
}
