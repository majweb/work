<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Integration;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class IntegrationController extends Controller
{
    public function edit(): Response
    {
        $integrations = Integration::all()->keyBy('name');

        return Inertia::render('Admin/Settings/Integrations', [
            'integrations' => $integrations,
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'integrations' => 'required|array',
            'integrations.*.name' => 'required|string',
            'integrations.*.value' => 'nullable|string',
            'integrations.*.active' => 'required|boolean',
        ]);

        foreach ($validated['integrations'] as $item) {
            Integration::updateOrCreate(
                ['name' => $item['name']],
                ['value' => $item['value'], 'active' => $item['active']]
            );
        }

        return redirect()->back()->with('flash.banner', 'Integracje zostały zaktualizowane.');
    }
}
