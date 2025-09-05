<?php

namespace App\Http\Controllers;

use App\Models\ExternalCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Inertia\Inertia;
use Illuminate\Validation\Rule;

class ExternalCompanyController extends Controller
{
    /**
     * Wyświetla listę firm zewnętrznych.
     */
    public function index()
    {
        $externalCompanies = auth()->user()->externalCompanies()->orderBy('name')->get();

        return Inertia::render('ExternalCompany/Index', [
            'externalCompanies' => $externalCompanies,
        ]);
    }

    /**
     * Pokazuje formularz tworzenia nowej firmy zewnętrznej.
     */
    public function create()
    {
        return Inertia::render('ExternalCompany/Create');
    }

    /**
     * Zapisuje nową firmę zewnętrzną.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'abbreviation' => [
                'required',
                'string',
                'max:50',
                'uppercase',
                Rule::unique('external_companies', 'abbreviation')
                    ->where(function ($query) {
                        $query->where('user_id', Auth::id());
                    }),
            ],
            'email' => [
                'required',
                'string',
                Rule::unique('external_companies', 'email')
                    ->where(function ($query) {
                        $query->where('user_id', Auth::id());
                    }),
            ],
        ]);

        // Koszt utworzenia kandydata
        $cost = config('getPoints.CreateExternalFirm', 5);

        // Sprawdź czy firma ma wystarczającą liczbę punktów
        $firm = auth()->user()->firm;

        if ($firm->points < $cost) {
            session()->flash('flash.banner', __('translate.noPoints'));
            session()->flash('flash.bannerStyle', 'danger');
            return back();
        }

        $firm->decrement('points', $cost);


        Auth::user()->externalCompanies()->create($validated);

        return redirect()->route('external-companies.index')
            ->with('flash.banner', __('translate.addedExternalCompany'));
    }

    /**
     * Pokazuje formularz edycji firmy zewnętrznej.
     */
    public function edit(ExternalCompany $externalCompany)
    {
        Gate::authorize('update', $externalCompany);

        return Inertia::render('ExternalCompany/Edit', [
            'externalCompany' => $externalCompany,
        ]);
    }

    /**
     * Aktualizuje firmę zewnętrzną.
     */
    public function update(Request $request, ExternalCompany $externalCompany)
    {
        Gate::authorize('update', $externalCompany);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'abbreviation' => [
                'required',
                'string',
                'max:50',
                'uppercase',
                Rule::unique('external_companies', 'abbreviation')
                    ->ignore($externalCompany->id) // pomija aktualny rekord
                    ->where(fn ($query) => $query->where('user_id', Auth::id()))
            ],
            'email' => [
                'required',
                'string',
                Rule::unique('external_companies', 'email')
                    ->ignore($externalCompany->id) // pomija aktualny rekord
                    ->where(fn ($query) => $query->where('user_id', Auth::id()))
            ],
        ]);


        $externalCompany->update($validated);

        return redirect()->route('external-companies.index')
            ->with('flash.banner', __('translate.updatedExternalCompany'));
    }

    /**
     * Usuwa firmę zewnętrzną.
     */
    public function destroy(ExternalCompany $externalCompany)
    {
        Gate::authorize('delete', $externalCompany);

        $externalCompany->delete();

        return redirect()->route('external-companies.index')
            ->with('flash.banner', __('translate.deleteExternalCompany'));
    }
}
