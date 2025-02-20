<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OnlyDirectPermissions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , $permission): Response
    {
        $user = auth()->user();

        $directPermissions = $user->permissions->pluck('name')->toArray();

        if (!in_array($permission, $directPermissions)) {
            abort(403, __('translate.accessDenied'));
        }

        return $next($request);
    }
}
