<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Exports\WorkersExport;
use App\Http\Resources\MultiselectWithoutDetailResource;
use App\Models\CandidateEvidence;
use App\Models\Category;
use App\Models\ExternalCompany;
use App\Models\User;
use App\Services\Helper;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Inertia\Inertia;
use Inertia\Response;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class WorkerController extends Controller
{
    public function index(Request $request): Response
    {
        $query = $this->buildQuery($request);

        return Inertia::render('Admin/Users/Workers/Index', [
            'users' => $query->paginate(20)->withQueryString(),
            'filters' => $request->only(['search', 'status', 'sort', 'direction']),
            'stats' => [
                'total' => User::role('worker')->count(),
                'active' => User::role('worker')->whereNull('user_blocked')->count(),
                'blocked' => User::role('worker')->whereNotNull('user_blocked')->count(),
                'unverified' => User::role('worker')->whereNull('email_verified_at')->count(),
            ],
        ]);
    }

    public static function buildQuery(Request $request)
    {
        $query = User::role('worker')->with(['workerDetail', 'candidate.tags', 'candidate.evidences']);

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%'.$request->search.'%')
                    ->orWhere('email', 'like', '%'.$request->search.'%')
                    ->orWhereHas('workerDetail', function ($sq) use ($request) {
                        $sq->where('surname', 'like', '%'.$request->search.'%');
                    });
            });
        }

        if ($request->filled('status')) {
            if ($request->status === 'blocked') {
                $query->whereNotNull('user_blocked');
            } elseif ($request->status === 'active') {
                $query->whereNull('user_blocked');
            } elseif ($request->status === 'verified') {
                $query->whereNotNull('email_verified_at');
            } elseif ($request->status === 'unverified') {
                $query->whereNull('email_verified_at');
            }
        }

        $sort = $request->get('sort', 'created_at');
        $direction = $request->get('direction', 'desc');

        if ($sort && $direction && is_string($sort) && ! str_contains($sort, 'function')) {
            $query->orderBy($sort, $direction);
        } else {
            $query->orderBy('created_at', 'desc');
        }

        return $query;
    }

    public function evidence(User $user): Response
    {
        $candidate = $user->candidate;

        if (! $candidate) {
            abort(404);
        }

        $candidate->load('media', 'created_by');
        $optionsPosition = Cache::remember('categoriesWithoutDetail', now()->addDay(), function () {
            return MultiselectWithoutDetailResource::collection(Category::whereNotNull('parent_id')->get());
        });
        $externalCompanies = ExternalCompany::where('user_id', $candidate->created_by_id)->latest()->get();
        $countries = Cache::rememberForever('countries_'.app()->getLocale(), function () {
            return (new Helper())->makeCountriesToSelect();
        });
        $currencies = Cache::rememberForever('currencies', function () {
            return config('currencyShorts');
        });

        $candidate->load(['evidences' => function ($query) {
            $query->orderBy('date_of_hire', 'desc');
        }]);

        return Inertia::render('Admin/Users/Workers/Evidence', [
            'worker' => $user->load('workerDetail'),
            'candidate' => $candidate,
            'externalCompanies' => $externalCompanies,
            'countries' => $countries,
            'optionsPosition' => $optionsPosition,
            'currencies' => $currencies,
        ]);
    }

    public function evidencesStore(Request $request, User $user): RedirectResponse
    {
        $candidate = $user->candidate;
        if (! $candidate) {
            abort(404);
        }

        $validated = $request->validate([
            'external_company' => 'required|array',
            'position' => 'required',
            'salary' => 'required|numeric|min:0|max:99999999.99',
            'currency' => 'required_with:salary|nullable|array',
            'date_of_hire' => 'required|date',
            'country' => 'required',
            'notes' => 'nullable|string|max:1500',
        ], [], [
            'salary' => strtolower(__('translate.salary')),
            'position' => strtolower(__('translate.position')),
            'external_company_id' => strtolower(__('translate.externalCompany')),
            'currency' => strtolower(__('translate.currency')),
            'date_of_hire' => strtolower(__('translate.date_of_hire')),
            'country' => strtolower(__('translate.country')),
            'external_company' => strtolower(__('translate.external_company')),
        ]);

        $candidate->evidences()->create($validated);

        session()->flash('flash.banner', __('translate.evidencesCreated'));
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }

    public function evidencesUpdate(Request $request, User $user, CandidateEvidence $evidence): RedirectResponse
    {
        $candidate = $user->candidate;
        if (! $candidate || $evidence->candidate_id !== $candidate->id) {
            abort(403, 'Unauthorized action.');
        }

        $validated = $request->validate([
            'external_company' => 'required|array',
            'position' => 'required',
            'salary' => 'required|numeric|min:0|max:99999999.99',
            'currency' => 'required_with:salary|nullable|array',
            'date_of_hire' => 'required|date',
            'country' => 'required',
            'notes' => 'nullable|string|max:1500',
        ], [], [
            'salary' => strtolower(__('translate.salary')),
            'position' => strtolower(__('translate.position')),
            'external_company_id' => strtolower(__('translate.externalCompany')),
            'currency' => strtolower(__('translate.currency')),
            'date_of_hire' => strtolower(__('translate.date_of_hire')),
            'country' => strtolower(__('translate.country')),
        ]);

        $evidence->update($validated);
        session()->flash('flash.banner', __('translate.evidencesUpdated'));
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }

    public function evidencesDelete(User $user, CandidateEvidence $evidence): RedirectResponse
    {
        $candidate = $user->candidate;
        if (! $candidate || $evidence->candidate_id !== $candidate->id) {
            abort(403, 'Unauthorized action.');
        }

        $evidence->delete();
        session()->flash('flash.banner', __('translate.evidencesDeleted'));
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }

    public function edit(User $user): Response
    {
        return Inertia::render('Admin/Users/Workers/Edit', [
            'user' => $user->load('workerDetail'),
        ]);
    }

    public function update(Request $request, User $user): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:60',
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
            'contact_phone' => 'required|numeric|digits between:1,30',
        ], [], [
            'name' => 'imię',
            'surname' => 'nazwisko',
            'email' => 'email',
            'contact_phone' => 'telefon kontaktowy',
        ]);
        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
        ]);

        $user->workerDetail()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'surname' => $validated['surname'],
                'contact_phone' => $validated['contact_phone'],
            ]
        );

        session()->flash('flash.banner', 'Dane pracownika zostały zaktualizowane.');
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }

    public function toggleBlock(User $user): RedirectResponse
    {
        if ($user->user_blocked) {
            $user->update(['user_blocked' => null]);
            $message = 'Użytkownik został odblokowany.';
        } else {
            $user->update(['user_blocked' => now()]);
            $message = 'Użytkownik został zablokowany.';
        }

        session()->flash('flash.banner', $message);
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }

    public function verifyEmail(User $user): RedirectResponse
    {
        $user->update(['email_verified_at' => now()]);

        session()->flash('flash.banner', 'Email został zweryfikowany.');
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }

    public function export(Request $request): BinaryFileResponse
    {
        return Excel::download(new WorkersExport($request), 'pracownicy_'.now()->format('Y_m_d_H_i').'.csv', \Maatwebsite\Excel\Excel::CSV);
    }
}
