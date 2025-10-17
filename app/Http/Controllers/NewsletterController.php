<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', Rule::unique('newsletters', 'email')],
        ], [
            'email.unique' => __('footer.email_already_subscribed')
        ]);

        $key = 'newsletter:' . $request->ip();

        if (RateLimiter::remaining($key, 2)) {
            RateLimiter::hit($key, 60 * 24); // 24 godziny
        } else {
            throw ValidationException::withMessages([
                'email' => [__('footer.too_many_attempts')],
            ]);
        }

        $locale = getLocalBrowserLang();

        Newsletter::create([
            'email' => $request->email,
            'country_code' => $locale
        ]);

        return back()->with([
            'flash.banner' => __('footer.newsletter_success'),
            'flash.bannerStyle' => 'success',
        ]);
    }
}
