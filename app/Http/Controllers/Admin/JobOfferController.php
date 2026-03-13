<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Recruit\StoreProject;
use App\Http\Resources\MultiselectResource;
use App\Http\Resources\MultiselectWithoutDetailResource;
use App\Http\Resources\OtherRecruitsResource;
use App\Http\Resources\PayModesResource;
use App\Http\Resources\TypeOfContractResource;
use App\Http\Resources\WorkingModesResource;
use App\Http\Resources\WorkLoadResource;
use App\Models\Category;
use App\Models\CvType;
use App\Models\Day;
use App\Models\Education;
use App\Models\Experience;
use App\Models\ExternalCompany;
use App\Models\Offer;
use App\Models\PayoutMode;
use App\Models\PaySystem;
use App\Models\Project;
use App\Models\ShiftWork;
use App\Models\TypeOfContract;
use App\Models\User;
use App\Models\Wait;
use App\Models\Welcome;
use App\Models\WorkingMode;
use App\Models\WorkingPlace;
use App\Models\WorkLoad;
use App\Services\Helper;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
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

    public function show(Project $project): Response
    {
        $project->loadCount([
            'aplications',
            'aplications as yes_count' => function ($q) {
                $q->where('status', 'yes');
            },
            'aplications as no_count' => function ($q) {
                $q->where('status', 'no');
            },
            'aplications as maybe_count' => function ($q) {
                $q->where('status', 'maybe');
            },
            'aplications as new_count' => function ($q) {
                $q->whereNull('status');
            }
        ]);

        $project->load([
            'recruit', 'shiftWork', 'education', 'externalCompany', 'questions'
        ]);

        $companyId = $project->user_id;
        $recruits = User::where('recruiter_from_firm_id', $companyId)
            ->orWhere('id', $companyId)
            ->orderBy('name')
            ->get();

        $otherRecruits = OtherRecruitsResource::collection($recruits);
        $locale = app()->getLocale();

        return Inertia::render('Admin/JobOffers/Show', [
            'project' => $project,
            'locale' => $locale,
            'otherRecruits' => $otherRecruits
        ]);
    }

    public function edit(Project $project): Response
    {
        $externalCompanies = ExternalCompany::where('user_id', $project->user_id)->latest()->get();
        $project->load('detailprojects', 'questions');
        $category = Cache::rememberForever('category', function () {
            return MultiselectResource::collection(Category::isRoot()->get());
        });
        $workingModes = Cache::rememberForever('workingModes', function () {
            return WorkingModesResource::collection(WorkingMode::all());
        });
        $countries = (new Helper())->makeCountriesToSelect();

        $workingPlaces = Cache::rememberForever('workingPlaces', function () {
            return MultiselectResource::collection(WorkingPlace::all());
        });
        $typesOfContract = Cache::rememberForever('typeOfContract', function () {
            return TypeOfContractResource::collection(TypeOfContract::all());
        });
        $workLoads = Cache::rememberForever('workLoads', function () {
            return WorkLoadResource::collection(WorkLoad::all());
        });

        $payoutModes = Cache::rememberForever('payoutModes', function () {
            return PayModesResource::collection(PayoutMode::all());
        });

        $paySystems = Cache::rememberForever('paySystems', function () {
            return PayModesResource::collection(PaySystem::all());
        });

        $days = Cache::rememberForever('days', function () {
            return PayModesResource::collection(Day::all());
        });
        $shiftWorks = Cache::rememberForever('shiftWorks', function () {
            return PayModesResource::collection(ShiftWork::all());
        });
        $offers = Cache::rememberForever('offers', function () {
            return PayModesResource::collection(Offer::all());
        });
        $waits = Cache::rememberForever('waits', function () {
            return PayModesResource::collection(Wait::all());
        });
        $experiences = Cache::rememberForever('experiences', function () {
            return WorkLoadResource::collection(Experience::all());
        });
        $welcomes = Cache::rememberForever('welcomes', function () {
            return PayModesResource::collection(Welcome::all());
        });
        $educations = Cache::rememberForever('educations', function () {
            return PayModesResource::collection(Education::all());
        });
        $currencies = config('currencyShorts');
        $cvs = Cache::rememberForever('cvs', function () {
            return PayModesResource::collection(CvType::all());
        });

        return Inertia::render('Admin/JobOffers/Edit', [
            'categories' => $category,
            'currencies' => $currencies,
            'countries' => $countries,
            'workingModes' => $workingModes,
            'workingPlaces' => $workingPlaces,
            'typesOfContract' => $typesOfContract,
            'workLoads' => $workLoads,
            'payoutModes' => $payoutModes,
            'paySystems' => $paySystems,
            'days' => $days,
            'shiftWorks' => $shiftWorks,
            'offers' => $offers,
            'waits' => $waits,
            'experiences' => $experiences,
            'welcomes' => $welcomes,
            'educations' => $educations,
            'project' => $project,
            'cvs' => $cvs,
            'externalCompanies' => $externalCompanies,
        ]);
    }

    public function update(StoreProject $request, Project $project): RedirectResponse
    {
        $title = [];
        foreach (config('langsShorts') as $lang) {
            $posTitle = $request->projectData()['position']['allTranslations']['title'][$lang]
                ?? $request->projectData()['profession']['allTranslations']['title'][$lang]
                ?? null;

            $countryTitle = $request->projectData()['countryWork']['allTranslations'][$lang]
                ?? $request->projectData()['countryWork']['name']
                ?? null;

            $title[$lang] = ($posTitle ? $posTitle . ', ' : '') .
                ($countryTitle ? $countryTitle . ', ' : '') .
                $request->projectData()['cityWork'] . ', ' .
                $request->projectData()['basicSalaryFrom'] . ' ' .
                $request->projectData()['currency']['name'];
        }

        $project->update([
            'title' => $title,
            'category' => $request->projectData()['category'],
            'categorySub' => $request->projectData()['categorySub'],
            'profession' => $request->projectData()['profession'],
            'position' => $request->projectData()['position'],
            'countryWork' => $request->projectData()['countryWork'],
            'cityWork' => $request->projectData()['cityWork'],
            'streetWork' => $request->projectData()['streetWork'],
            'streetWorkNumber' => $request->projectData()['streetWorkNumber'],
            'postalWork' => $request->projectData()['postalWork'],
            'workingPlace' => $request->projectData()['workingPlace'],
            'workingMode' => $request->projectData()['workingMode'],
            'typeOfContract' => $request->projectData()['typeOfContract'],
            'workLoad' => $request->projectData()['workLoad'],
            'currency' => $request->projectData()['currency'],
            'basicSalaryFrom' => $request->projectData()['basicSalaryFrom'],
            'basicSalaryTo' => $request->projectData()['basicSalaryTo'],
            'payoutMode' => $request->projectData()['payoutMode'],
            'paySystem' => $request->projectData()['paySystem'],
            'bonusSalaryFrom' => $request->projectData()['bonusSalaryFrom'],
            'bonusSalaryTo' => $request->projectData()['bonusSalaryTo'],
            'hoursFrom' => $request->projectData()['hoursFrom'],
            'hoursTo' => $request->projectData()['hoursTo'],
            'workNight' => $request->projectData()['workNight'],
            'shiftWork' => $request->projectData()['shiftWork'],
            'days' => $request->projectData()['days'],
            'offer' => $request->projectData()['offer'],
            'experience' => $request->projectData()['experience'],
            'education' => $request->projectData()['education'],
            'welcome' => $request->projectData()['welcome'],
            'wait' => $request->projectData()['wait'],
            'external_company_id' => $request->projectData()['external_company_id'] ?? $project->external_company_id,
            'recruiter_id' => $request->projectData()['recruit'] ?? $project->recruiter_id,
            'cv' => $request->projectData()['cv'],
            'is_active' => $request->projectData()['is_active'] ?? true,
            'country' => $request->projectData()['country'],
            'user_id' => $project->user_id,
        ]);


        if($project && count($request->projectData()['detailProjects'])){
            $project->detailprojects()->sync($request->projectData()['detailProjects']);
        }

        // Update project questions
        if (isset($request->projectData()['questions']) && is_array($request->projectData()['questions'])) {
            $existingQuestionIds = $project->questions()->pluck('id')->toArray();
            $newQuestionIds = array_filter(array_column($request->projectData()['questions'], 'id'));

            // Delete questions that are not in the request
            $project->questions()->whereNotIn('id', $newQuestionIds)->delete();

            foreach ($request->projectData()['questions'] as $questionData) {
                if (isset($questionData['id']) && in_array($questionData['id'], $existingQuestionIds)) {
                    // Update existing question
                    $project->questions()->where('id', $questionData['id'])->update([
                        'content' => $questionData['content'],
                        'answer_time' => $questionData['answer_time'],
                    ]);
                } else {
                    // Create new question
                    $project->questions()->create([
                        'user_id' => auth()->id(),
                        'content' => $questionData['content'],
                        'answer_time' => $questionData['answer_time'],
                    ]);
                }
            }
        } else {
            $project->questions()->delete();
        }

        session()->flash('flash.banner', __('translate.updatedProject'));
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('admin.job-offers.index');
    }

    public function validateStep(Request $request): JsonResponse
    {
        $step = $request->input('step');

        // Przygotowanie danych przed walidacją (tak jak w StoreProject)
        if (is_array($request->externalCompany) && isset($request->externalCompany['id'])) {
            $request->merge([
                'externalCompany' => $request->externalCompany['id']
            ]);
        }

        if (is_array($request->recruit) && isset($request->recruit['value'])) {
            $request->merge([
                'recruit' => $request->recruit['value']
            ]);
        }

        // Definiowanie reguł walidacji dla każdego kroku
        $rules = [];

        switch ($step) {
            case 1:
                $rules = [
                    // CV
                    'cv' => ['required', 'array', 'min:1'],
                    'cv.*.id' => ['required','exists:App\Models\CvType,id'],

                    // Kategorie
                    'category' => ['required', 'array', 'max:100'],
                    'categorySub' => ['required', 'array', 'max:100'],
                    'profession' => ['required', 'array', 'max:100'],
                    'position' => ['nullable', 'array', 'max:100'],

                    // Kraj publikacji - Admin może mieć inaczej nazwane pole lub pominąć jeśli nie edytuje krajów publikacji
                    // W Edit.vue admina nie widzę pola 'countries', ale w propsach jest.
                    // 'countries' => ['required', 'array', 'min:1'],

                    // Lokalizacja pracy
                    'countryWork' => ['required', 'array'],
                    'streetWork' => ['required', 'string', 'max:100'],
                    'streetWorkNumber' => ['required', 'string', 'max:100'],
                    'postalWork' => ['required', 'string', 'max:100'],
                    'cityWork' => ['required', 'string', 'max:100'],

                    // Wykształcenie
                    'education' => ['nullable','exists:App\Models\Education,id'],

                    // Pytania (walidacja warunkowa)
                    'questions' => [
                        'array',
                        'max:10',
                        function ($attribute, $value, $fail) use ($request) {
                            $cvTypes = collect($request->input('cv', []))->pluck('id');
                            if (($cvTypes->contains(2) || $cvTypes->contains(3)) && empty($value)) {
                                $fail(__('translate.questions_required'));
                            }
                        }
                    ],
                    'questions.*.content' => 'required_with:questions|string',
                    'questions.*.answer_time' => 'required_with:questions|integer|in:15,30,45,60',

                    // External company
                    'externalCompany' => 'nullable|exists:App\Models\ExternalCompany,id',
                ];
                break;

            case 2:
                $rules = [
                    // Rodzaj umowy
                    'typeOfContract' => ['required', 'array', 'min:1'],
                    'typeOfContract.*.id' => ['required','exists:App\Models\TypeOfContract,id'],

                    // Wynagrodzenie
                    'currency' => ['required'],
                    'basicSalaryFrom' => ['required', 'numeric','between:1,99999.99'],
                    'basicSalaryTo' => ['nullable', 'numeric','between:1,99999.99','gt:basicSalaryFrom'],
                    'bonusSalaryFrom' => ['required', 'numeric','between:1,99999.99'],
                    'bonusSalaryTo' => ['nullable', 'numeric','between:1,99999.99','gt:bonusSalaryFrom'],

                    // Tryb wypłaty
                    'payoutMode' => ['required','array'],
                    'payoutMode.id' => ['required','exists:App\Models\PayoutMode,id'],

                    // Dni pracy
                    'days' => ['required', 'array', 'min:1'],
                    'days.*.id' => ['required','exists:App\Models\Day,id'],

                    // Godziny pracy
                    'hoursFrom' => ['required', 'date_format:H:i','before:hoursTo'],
                    'hoursTo' => ['required', 'date_format:H:i','after:hoursFrom'],

                    // System wynagrodzeń
                    'paySystem' => ['required', 'array', 'min:1'],
                    'paySystem.*.id' => ['required','exists:App\Models\PaySystem,id'],

                    // Praca nocna i zmianowa
                    'workNight' => ['required','in:1,2'],
                    'shiftWork' => ['required','in:1,2'],
                ];
                break;

            case 3:
                $rules = [
                    // Tryb i wymiar pracy
                    'workingMode' => ['required','array','min:1'],
                    'workingMode.*.id' => ['required','exists:App\Models\WorkingMode,id'],
                    'workLoad' => ['required','array'],
                    'workLoad.id' => ['required','exists:App\Models\WorkLoad,id'],

                    // Miejsce pracy
                    'workingPlace' => ['required','array','min:1'],
                    'workingPlace.*.id' => ['required','exists:App\Models\WorkingPlace,id'],

                    // Doświadczenie
                    'experience' => ['required','array'],
                    'experience.id' => ['required','exists:App\Models\Experience,id'],

                    // Benefity (Oczekujemy, Mile widziane, Oferujemy)
                    'offer' => ['nullable', 'array'],
                    'wait' => ['nullable', 'array'],
                    'welcome' => ['nullable', 'array'],
                ];
                break;
        }

        $request->validate($rules);

        return response()->json(['valid' => true]);
    }

    public function destroy(Project $project): RedirectResponse
    {
        $project->delete();

        session()->flash('flash.banner', __('translate.updatedProject'));
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('admin.job-offers.index');
    }
}
