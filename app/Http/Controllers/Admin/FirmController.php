<?php

namespace App\Http\Controllers\Admin;

use App\Exports\FirmsExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FirmUpdateRequest;
use App\Models\User;
use App\Services\Helper;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class FirmController extends Controller
{
    public function index(Request $request): Response
    {
        $query = $this->buildQuery($request);

        $firms = $query->paginate(20)->withQueryString()
            ->through(fn ($user) => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'logo' => $user->profile_photo_url,
                'country' => $user->firm?->country ?? '-',
                'recruiters_count' => $user->recruits_count ?? $user->recruits()->count(),
                'projects_count' => $user->projects_count ?? $user->projects()->count(),
                'status' => $this->getStatus($user),
                'points' => $user->firm?->points ?? 0,
                'blocked' => $user->user_blocked !== null,
                'verified' => $user->email_verified_at !== null,
                'email_verified_at' => $user->email_verified_at,
            ]);

        $stats = [
            'total' => User::role('firm')->count(),
            'verified' => User::role('firm')->whereNotNull('email_verified_at')->count(),
            'unverified' => User::role('firm')->whereNull('email_verified_at')->count(),
            'blocked' => User::role('firm')->whereNotNull('user_blocked')->count(),
        ];

        return Inertia::render('Admin/Firms/Index', [
            'firms' => $firms,
            'stats' => $stats,
            'filters' => $request->only(['search', 'status', 'country', 'credits_min', 'credits_max', 'offers_min', 'offers_max', 'date_from', 'date_to', 'sort', 'direction']),
            'countries' => \App\Models\Firm::whereNotNull('country')->distinct()->pluck('country'),
        ]);
    }

    public function buildQuery(Request $request)
    {
        $query = User::role('firm')->with(['firm', 'recruits', 'projects'])->withCount(['recruits', 'projects']);

        // Filtrowanie
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhereHas('firm', function ($fq) use ($search) {
                        $fq->where('city', 'like', "%{$search}%")
                            ->orWhere('country', 'like', "%{$search}%");
                    });
            });
        }

        if ($request->filled('status')) {
            $status = $request->input('status');
            if ($status === 'verified') {
                $query->whereNotNull('email_verified_at')->whereNull('user_blocked');
            } elseif ($status === 'unverified') {
                $query->whereNull('email_verified_at')->whereNull('user_blocked');
            } elseif ($status === 'blocked') {
                $query->whereNotNull('user_blocked');
            }
        }

        if ($request->filled('country')) {
            $country = $request->input('country');
            $query->whereHas('firm', function ($q) use ($country) {
                $q->where('country', $country);
            });
        }

        if ($request->filled('credits_min')) {
            $query->whereHas('firm', function ($q) use ($request) {
                $q->where('points', '>=', $request->input('credits_min'));
            });
        }

        if ($request->filled('credits_max')) {
            $query->whereHas('firm', function ($q) use ($request) {
                $q->where('points', '<=', $request->input('credits_max'));
            });
        }

        if ($request->filled('offers_min')) {
            $query->has('projects', '>=', $request->input('offers_min'));
        }

        if ($request->filled('offers_max')) {
            $query->has('projects', '<=', $request->input('offers_max'));
        }

        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->input('date_from'));
        }

        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->input('date_to'));
        }

        // Sortowanie
        $sortField = $request->input('sort');
        $sortDirection = $request->input('direction', 'desc');

        if ($sortField && $sortField !== 'none' && is_string($sortField) && ! str_contains($sortField, 'function')) {
            if ($sortField === 'name') {
                $query->orderBy('name', $sortDirection);
            } elseif ($sortField === 'kredyty') {
                $query->join('firms', 'users.id', '=', 'firms.user_id')
                    ->orderBy('firms.points', $sortDirection)
                    ->select('users.*');
            } elseif ($sortField === 'offers_count') {
                $query->orderBy('projects_count', $sortDirection);
            } elseif ($sortField === 'recruiters_count') {
                $query->orderBy('recruits_count', $sortDirection);
            } else {
                $query->orderBy($sortField, $sortDirection);
            }
        } else {
            $query->orderBy('created_at', 'desc');
        }

        return $query;
    }

    private function getStatus(User $user): string
    {
        if ($user->user_blocked) {
            return 'blocked';
        }
        if ($user->email_verified_at) {
            return 'verified';
        }

        return 'unverified';
    }

    public function export(Request $request): BinaryFileResponse
    {
        $ids = $request->filled('ids') ? explode(',', $request->input('ids')) : null;

        return Excel::download(new FirmsExport($ids, $request), 'firms_export.csv', \Maatwebsite\Excel\Excel::CSV);
    }

    public function show(User $user): Response
    {
        $user->load(['firm', 'recruits', 'projects' => function ($query) {
            $query->latest()->limit(5);
        }]);

        $user->loadCount(['recruits', 'projects']);

        return Inertia::render('Admin/Firms/Show', [
            'firm' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'logo' => $user->profile_photo_url,
                'status' => $this->getStatus($user),
                'email_verified_at' => $user->email_verified_at,
                'created_at' => $user->created_at->format('Y-m-d H:i'),
                'details' => $user->firm,
                'recruiters_count' => $user->recruits_count,
                'projects_count' => $user->projects_count,
                'recent_projects' => $user->projects,
                'recruits' => $user->recruits->map(fn ($recruit) => [
                    'id' => $recruit->id,
                    'name' => $recruit->name,
                    'email' => $recruit->email,
                    'photo' => $recruit->profile_photo_url,
                ]),
            ],
        ]);
    }

    public function edit(User $user): Response
    {
        $user->load('firm');
        $countries = (new Helper)->makeCountriesToSelect();

        return Inertia::render('Admin/Firms/Edit', [
            'firm' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'details' => $user->firm,
            ],
            'countries' => $countries,
        ]);
    }

    public function update(FirmUpdateRequest $request, User $user): RedirectResponse
    {
        $userData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ];

        $user->update($userData);

        $details = $request->input('details');

        if (isset($details['countryJson']['name'])) {
            $details['country'] = $details['countryJson']['name'];
        }

        if (isset($details['invoice_same']) && $details['invoice_same']) {
            $details['name_invoice'] = $request->input('name');
            $details['nip_invoice'] = $details['nip'] ?? '';
            $details['regon_invoice'] = $details['regon'] ?? '';
            $details['street_invoice'] = $details['street'] ?? '';
            $details['number_invoice'] = $details['number'] ?? '';
            $details['city_invoice'] = $details['city'] ?? '';
            $details['postal_invoice'] = $details['postal'] ?? '';
            $details['country_invoice'] = $details['country'] ?? '';
            $details['countryInvoiceJson'] = $details['countryJson'] ?? null;
        } else {
            if (isset($details['countryInvoiceJson']['name'])) {
                $details['country_invoice'] = $details['countryInvoiceJson']['name'];
            }
        }

        if ($user->firm) {
            $user->firm->update($details);
        } else {
            $user->firm()->create($details);
        }

        return redirect()->route('admin.firms.show', $user->id)
            ->with('flash.banner', 'Dane firmy zostały zaktualizowane.');
    }

    public function changeStatus(Request $request, User $user): RedirectResponse
    {
        $request->validate([
            'status' => ['required', 'string', 'in:verified,unverified,blocked'],
        ]);

        $status = $request->input('status');

        if ($status === 'blocked') {
            $user->update(['user_blocked' => now()]);
        } elseif ($status === 'verified') {
            $user->update([
                'user_blocked' => null,
                'email_verified_at' => $user->email_verified_at ?? now(),
            ]);
        } elseif ($status === 'unverified') {
            $user->update([
                'user_blocked' => null,
                'email_verified_at' => null,
            ]);
        }

        return back()->with('flash.banner', 'Status firmy został zmieniony.');
    }

    public function verifyEmail(User $user): RedirectResponse
    {
        $user->update([
            'email_verified_at' => now(),
        ]);

        return back()->with('flash.banner', 'Email użytkownika został zweryfikowany.');
    }

    public function manageCredits(User $user): Response
    {
        $user->load('firm');

        return Inertia::render('Admin/Firms/ManageCredits', [
            'firm' => [
                'id' => $user->id,
                'name' => $user->name,
                'points' => $user->firm?->points ?? 0,
            ],
        ]);
    }

    public function updateCredits(Request $request, User $user): RedirectResponse
    {
        $request->validate([
            'amount' => ['required', 'integer'],
            'type' => ['required', 'in:add,set'],
        ], [], [
            'amount' => 'kwota',
        ]);

        $amount = (int) $request->input('amount');
        $type = $request->input('type');

        if (! $user->firm) {
            $user->firm()->create(['points' => 0]);
            $user->refresh();
        }

        if ($type === 'add') {
            $user->firm->increment('points', $amount);
        } else {
            $user->firm->update(['points' => $amount]);
        }

        return redirect()->route('admin.firms.show', $user->id)
            ->with('flash.banner', 'Stan kredytów został zaktualizowany.');
    }

    public function offers(User $user): RedirectResponse
    {
        // Tutaj można dodać przekierowanie do listy ofert przefiltrowanej po tym użytkowniku
        return back();
    }

    public function recruiters(User $user): RedirectResponse
    {
        // Tutaj można dodać przekierowanie do listy rekruterów przefiltrowanej po tym użytkowniku
        return back();
    }
}
