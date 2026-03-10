<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\MultiselectWithoutDetailResource;
use App\Models\Category;
use App\Models\Project;
use App\Models\User;
use App\Services\Helper;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class JobOfferController extends Controller
{
    public function index(Request $request): Response
    {
        $query = $this->buildQuery($request);

        $stats = [
            'total' => Project::count(),
            'active' => Project::where('is_active', true)->count(),
            'inactive' => Project::where('is_active', false)->count(),
            'applications' => \App\Models\Aplication::count(),
        ];

        $companies = User::role('firm')->orderBy('name')->get(['id', 'name']);

        $selectedCompany = null;
        if ($request->filled('company')) {
            $selectedCompany = User::find($request->company, ['id', 'name']);
        }

        $recruiters = [];
        if ($request->filled('company')) {
            $companyId = $request->company;
            $recruiters = User::where('recruiter_from_firm_id', $companyId)
                ->orWhere('id', $companyId)
                ->orderBy('name')
                ->get(['id', 'name']);
        }

        $selectedRecruiter = null;
        if ($request->filled('recruiter')) {
            $selectedRecruiter = User::find($request->recruiter, ['id', 'name']);
        }

        $categories = Category::getCachedWithoutDetail();
        $countries = (new Helper)->makeCountriesToSelectHasProjects();

        $selectedCountry = null;
        if ($request->filled('country')) {
            $selectedCountry = collect($countries)->firstWhere('value', (int) $request->country);
        }

        $selectedCategory = null;
        if ($request->filled('category')) {
            $selectedCategory = collect($categories)->firstWhere('value', (int) $request->category);
        }

        $selectedCategorySub = null;
        if ($request->filled('categorySub') && $selectedCategory) {
            $categorySub = Category::find($request->categorySub);
            if ($categorySub) {
                $selectedCategorySub = [
                    'value' => $categorySub->id,
                    'name' => $categorySub->name,
                ];
            }
        }

        $selectedProfession = null;
        if ($request->filled('profession')) {
            $profession = Category::find($request->profession);
            if ($profession) {
                $selectedProfession = [
                    'value' => $profession->id,
                    'name' => $profession->name,
                ];
            }
        }

        $selectedPosition = null;
        if ($request->filled('positionSelect')) {
            $position = Category::find($request->positionSelect);
            if ($position) {
                $selectedPosition = [
                    'value' => $position->id,
                    'name' => $position->name,
                ];
            }
        }

        $selectedStatus = null;
        if ($request->filled('status')) {
            $selectedStatus = $request->status === 'active'
                ? ['value' => 'active', 'name' => 'Aktywne']
                : ['value' => 'inactive', 'name' => 'Nieaktywne'];
        }

        return Inertia::render('Admin/JobOffers/Index', [
            'offers' => $query->paginate(20)->withQueryString(),
            'filters' => array_merge(
                $request->only(['search', 'sort', 'direction', 'id', 'city', 'date']),
                [
                    'company' => $selectedCompany,
                    'recruiter' => $selectedRecruiter,
                    'country' => $selectedCountry,
                    'category' => $selectedCategory,
                    'categorySub' => $selectedCategorySub,
                    'profession' => $selectedProfession,
                    'positionSelect' => $selectedPosition,
                    'status' => $selectedStatus,
                ]
            ),
            'stats' => $stats,
            'companies' => $companies,
            'recruiters' => $recruiters,
            'categories' => $categories,
            'countries' => $countries,
        ]);
    }

    public function buildQuery(Request $request)
    {
        $query = Project::query()->select('projects.*')->with(['user', 'recruit', 'aplications', 'externalCompany']);

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('title', 'like', '%'.$request->search.'%')
                    ->orWhereHas('user', function ($uq) use ($request) {
                        $uq->where('name', 'like', '%'.$request->search.'%');
                    });
            });
        }

        if ($request->filled('id')) {
            $query->where('projects.id', $request->id);
        }

        if ($request->filled('country')) {
            $query->whereJsonContains('country', ['value' => (int) $request->country]);
        }

        if ($request->filled('city')) {
            $query->where('cityWork', 'like', '%'.$request->city.'%');
        }

        if ($request->filled('date')) {
            $query->whereDate('created_at', $request->date);
        }

        if ($request->filled('company')) {
            $companyId = $request->company;
            $query->where(function ($q) use ($companyId) {
                $q->where('user_id', $companyId)
                    ->orWhereHas('user', function ($uq) use ($companyId) {
                        $uq->where('recruiter_from_firm_id', $companyId);
                    });
            });
        }

        if ($request->filled('recruiter')) {
            $recruiterId = $request->recruiter;
            $query->where(function ($q) use ($recruiterId) {
                $q->where('user_id', $recruiterId)
                    ->orWhere('recruiter_id', $recruiterId);
            });
        }

        if ($request->filled('status')) {
            $query->where('is_active', $request->status === 'active');
        }

        // Filtrowanie po kategorii (branża)
        if ($request->filled('category')) {
            $categoryValue = (int) $request->category;
            $query->whereJsonContains('category', ['value' => $categoryValue]);
        }

        // Filtrowanie po podkategorii (podbranża)
        if ($request->filled('categorySub')) {
            $categorySubValue = (int) $request->categorySub;
            $query->whereJsonContains('categorySub', ['value' => $categorySubValue]);
        }

        // Filtrowanie po zawodzie
        if ($request->filled('profession')) {
            $professionValue = (int) $request->profession;
            $query->whereJsonContains('profession', ['value' => $professionValue]);
        }

        // Filtrowanie po stanowisku (select)
        if ($request->filled('positionSelect')) {
            $positionValue = (int) $request->positionSelect;
            $query->whereJsonContains('position', ['value' => $positionValue]);
        }

        $sort = $request->get('sort', 'created_at');
        $direction = $request->get('direction', 'desc');

        // Zabezpieczenie przed nieprawidłowymi kolumnami
        $allowedSorts = ['id', 'title', 'created_at', 'is_active', 'views_count'];
        if ($sort === 'title') {
            $locale = app()->getLocale();
            $query->orderByRaw("LOWER(JSON_UNQUOTE(JSON_EXTRACT(title, '$.$locale'))) $direction")
                ->orderByRaw("LOWER(JSON_UNQUOTE(JSON_EXTRACT(title, '$[0]'))) $direction");
        } elseif (in_array($sort, $allowedSorts)) {
            $query->orderBy($sort, $direction);
        } else {
            $query->orderBy('created_at', 'desc');
        }

        return $query;
    }

    public function getRecruiters(Request $request): JsonResponse
    {
        $companyId = $request->input('company_id');
        if (empty($companyId)) {
            return response()->json([]);
        }

        $recruiters = User::where('recruiter_from_firm_id', $companyId)
            ->orWhere('id', $companyId)
            ->orderBy('name')
            ->get(['id', 'name']);

        return response()->json($recruiters);
    }

    public function getCities($countryId): JsonResponse
    {
        $cities = Project::whereJsonContains('country', ['value' => (int) $countryId])
            ->whereNotNull('cityWork')
            ->where('cityWork', '!=', '')
            ->distinct()
            ->orderBy('cityWork')
            ->pluck('cityWork')
            ->map(function ($city) {
                return [
                    'name' => $city,
                    'value' => $city,
                ];
            });

        return response()->json($cities);
    }

    public function getChildsCategory($parent): JsonResponse
    {
        $categories = Category::where('parent_id', $parent)->get();

        return response()->json(MultiselectWithoutDetailResource::collection($categories));
    }

    public function toggleStatus(Project $project): RedirectResponse
    {
        $project->update(['is_active' => !$project->is_active]);

        $message = $project->is_active ? 'Oferta została aktywowana.' : 'Oferta została dezaktywowana.';

        session()->flash('flash.banner', $message);
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }

    public function export(Request $request)
    {
        return \Maatwebsite\Excel\Facades\Excel::download(new \App\Exports\JobOffersExport($request), 'oferty_pracy_'.now()->format('Y_m_d_H_i').'.csv', \Maatwebsite\Excel\Excel::CSV);
    }
}
