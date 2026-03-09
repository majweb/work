<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ExternalCompaniesExport;
use App\Http\Controllers\Controller;
use App\Models\ExternalCompany;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Inertia\Inertia;
use Inertia\Response;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExternalCompanyController extends Controller
{
    public function index(Request $request): Response
    {
        $query = $this->buildQuery($request);

        $externalCompanies = $query->paginate(20)->withQueryString()
            ->through(fn ($company) => [
                'id' => $company->id,
                'name' => $company->name,
                'abbreviation' => $company->abbreviation,
                'email' => $company->email,
                'agency_name' => $company->user?->name ?? '-',
                'projects_count' => $company->projects_count ?? $company->projects()->count(),
                'created_at' => $company->created_at->format('Y-m-d H:i'),
            ]);

        return Inertia::render('Admin/ExternalCompanies/Index', [
            'externalCompanies' => $externalCompanies,
            'filters' => $request->only(['search', 'agency', 'date_from', 'date_to', 'sort', 'direction']),
            'agencies' => \App\Models\User::role('firm')->whereHas('externalCompanies')->distinct()->pluck('name'),
        ]);
    }

    public function buildQuery(Request $request)
    {
        $query = ExternalCompany::with(['user', 'projects'])->withCount('projects');

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('abbreviation', 'like', "%{$search}%");
            });
        }

        if ($request->filled('agency')) {
            $agency = $request->input('agency');
            $query->whereHas('user', function ($q) use ($agency) {
                $q->where('name', $agency);
            });
        }

        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->input('date_from'));
        }

        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->input('date_to'));
        }

        $sortField = $request->input('sort');
        $sortDirection = $request->input('direction', 'desc');

        if ($sortField && $sortField !== 'none') {
            if ($sortField === 'agency_name') {
                $query->join('users', 'external_companies.user_id', '=', 'users.id')
                    ->orderBy('users.name', $sortDirection)
                    ->select('external_companies.*');
            } elseif ($sortField === 'name') {
                $query->orderBy('name', $sortDirection);
            } elseif ($sortField === 'created_at') {
                $query->orderBy('created_at', $sortDirection);
            } else {
                $query->orderBy($sortField, $sortDirection);
            }
        } else {
            $query->orderBy('created_at', 'desc');
        }

        return $query;
    }

    public function show(ExternalCompany $externalCompany): Response
    {
        $externalCompany->load(['user']);
        $externalCompany->loadCount('projects');

        return Inertia::render('Admin/ExternalCompanies/Show', [
            'externalCompany' => [
                'id' => $externalCompany->id,
                'name' => $externalCompany->name,
                'abbreviation' => $externalCompany->abbreviation,
                'email' => $externalCompany->email,
                'note' => $externalCompany->note,
                'agency' => $externalCompany->user,
                'projects_count' => $externalCompany->projects_count,
                'created_at' => $externalCompany->created_at->format('Y-m-d H:i'),
            ],
        ]);
    }

    public function edit(ExternalCompany $externalCompany): Response
    {
        return Inertia::render('Admin/ExternalCompanies/Edit', [
            'externalCompany' => $externalCompany,
        ]);
    }

    public function update(Request $request, ExternalCompany $externalCompany): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'abbreviation' => [
                'required',
                'string',
                'max:50',
                'uppercase',
                Rule::unique('external_companies', 'abbreviation')
                    ->where(function ($query) use ($externalCompany) {
                        return $query->where('user_id', $externalCompany->user_id);
                    })
                    ->ignore($externalCompany->id),
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('external_companies', 'email')
                    ->where(function ($query) use ($externalCompany) {
                        return $query->where('user_id', $externalCompany->user_id);
                    })
                    ->ignore($externalCompany->id),
            ],
            'note' => ['nullable', 'string', 'max:1000'],
        ], [], [
            'abbreviation' => __('translate.abbreviation'),
        ]);

        $externalCompany->update($validated);

        return redirect()->route('admin.external-companies.show', $externalCompany->id)
            ->with('flash.banner', 'Dane firmy zewnętrznej zostały zaktualizowane.');
    }

    public function export(Request $request): BinaryFileResponse
    {
        $ids = $request->filled('ids') ? explode(',', $request->input('ids')) : null;
        $format = $request->input('format', 'csv') === 'xlsx' ? \Maatwebsite\Excel\Excel::XLSX : \Maatwebsite\Excel\Excel::CSV;
        $extension = $request->input('format', 'csv') === 'xlsx' ? 'xlsx' : 'csv';

        return Excel::download(new ExternalCompaniesExport($ids, $request), "external_companies_export.{$extension}", $format);
    }
}
