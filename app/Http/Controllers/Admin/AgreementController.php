<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAgreementRequest;
use App\Http\Requests\Admin\UpdateAgreementRequest;
use App\Models\Agreement;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class AgreementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return Inertia::render('Admin/Agreements/Index', [
            'agreements' => Agreement::with('parent')->orderBy('id', 'asc')->get(),
            'langs' => config('langsShorts'),
            'types' => [
                'newsletter',
                'contact_form',
                'app_logged_in',
                'app_not_logged_in',
                'tickets',
                'firm_registration',
                'worker_registration',
                'cookie'
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return Inertia::render('Admin/Agreements/Create', [
            'langs' => config('langsShorts'),
            'agreements' => Agreement::whereNull('parent_id')->get(['id', 'description', 'type']),
            'types' => [
                'newsletter',
                'contact_form',
                'app_logged_in',
                'app_not_logged_in',
                'tickets',
                'firm_registration',
                'worker_registration',
                'cookie'
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAgreementRequest $request): RedirectResponse
    {
        $data = $request->validated();

        Agreement::create($data);

        return redirect()->route('admin.agreements.index')->with('flash.banner', 'Zgoda została utworzona.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agreement $agreement): Response
    {
        return Inertia::render('Admin/Agreements/Edit', [
            'agreement' => $agreement,
            'agreements' => Agreement::whereNull('parent_id')
                ->where('id', '!=', $agreement->id)
                ->get(['id', 'description', 'type']),
            'langs' => config('langsShorts'),
            'types' => [
                'newsletter',
                'contact_form',
                'app_logged_in',
                'app_not_logged_in',
                'tickets',
                'firm_registration',
                'worker_registration',
                'cookie'
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgreementRequest $request, Agreement $agreement): RedirectResponse
    {
        $data = $request->validated();

        $agreement->update($data);

        return redirect()->route('admin.agreements.index')->with('flash.banner', 'Zgoda została zaktualizowana.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agreement $agreement): RedirectResponse
    {
        $agreement->delete();

        return redirect()->back()->with('flash.banner', 'Zgoda została usunięta.');
    }
}
