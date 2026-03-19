<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Exports\NewslettersExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class NewsletterController extends Controller
{
    public function index(Request $request): Response
    {
        $query = Newsletter::query();

        if ($request->filled('search')) {
            $query->where('email', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('country_code')) {
            $query->where('country_code', $request->country_code);
        }

        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $newsletters = $query->latest()
            ->paginate(20)
            ->withQueryString();

        return Inertia::render('Admin/Settings/Newsletter', [
            'newsletters' => $newsletters,
            'filters' => $request->only(['search', 'country_code', 'date_from', 'date_to']),
        ]);
    }

    public function export(Request $request): BinaryFileResponse
    {
        $query = Newsletter::query();

        if ($request->filled('search')) {
            $query->where('email', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('country_code')) {
            $query->where('country_code', $request->country_code);
        }

        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        return Excel::download(new NewslettersExport($query), 'newsletters.csv', \Maatwebsite\Excel\Excel::CSV);
    }

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
