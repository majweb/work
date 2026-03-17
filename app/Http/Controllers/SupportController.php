<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTicketRequest;
use App\Models\IpEmailBlock;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class SupportController extends Controller
{
    public function store(StoreTicketRequest $request)
    {
        $validated = $request->validated();

        if ($validated['captcha'] !== session('captcha_text')) {
            return back()->withErrors(['captcha' => __('translate.invalid_captcha')]);
        }

        // SPRAWDZENIE BLOKAD (IP i Email)
        $isBlocked = IpEmailBlock::where(function ($query) use ($request) {
            $query->where('value', $request->ip())->where('type', 'ip')
                ->orWhere('value', strtolower(Auth::user()->email ?? ''))->where('type', 'email');
        })->exists();

        if ($isBlocked) {
            throw ValidationException::withMessages([
                'captcha' => trans('translate.application_blocked_message'),
            ]);
        }

        // LIMITER: po IP i user_id
        $ipKey = 'support-ticket:ip:'.$request->ip();
        $userKey = 'support-ticket:user:'.Auth::id();

        if (RateLimiter::tooManyAttempts($ipKey, 1) || RateLimiter::tooManyAttempts($userKey, 1)) {
            $secondsIp = RateLimiter::availableIn($ipKey);
            $secondsUser = RateLimiter::availableIn($userKey);
            $seconds = max($secondsIp, $secondsUser);

            throw ValidationException::withMessages([
                'captcha' => "Możesz wysłać tylko 1 zgłoszenie na godzinę. Spróbuj ponownie za {$seconds} sekund.",
            ]);
        }

        // HIT LIMITER
        RateLimiter::hit($ipKey, 3600);
        RateLimiter::hit($userKey, 3600);

        Ticket::query()->create([
            'user_id' => Auth::id(),
            'type' => $validated['type'],
            'subject' => $validated['subject'],
            'content' => $validated['content'],
        ]);

        // Dopiero po pomyślnym wysłaniu resetujemy CAPTCHA
        session()->forget('captcha_text');

        return back()->with('success', __('translate.ticket_sent_success'));
    }
}
