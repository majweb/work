<?php

namespace App\Http\Middleware;

use App\Models\Firm;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureRecruiterFirmProfileIsCompleted
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        // Sprawdzamy tylko jeśli użytkownik ma rolę 'recruit'
        if ($user && $user->hasRole('recruit')) {
            $firmId = $user->recruiter_from_firm_id;

            if ($firmId) {
                $firm = Firm::where('user_id', $firmId)->first();

                if (! $firm || ! $firm->hasCompletedProfile()) {
                    session()->flash('flash.banner', __('info.recruiter_firm_profile_not_completed'));
                    session()->flash('flash.bannerStyle', 'danger');

                    return redirect()->back();
                }
            }
        }

        return $next($request);
    }
}
