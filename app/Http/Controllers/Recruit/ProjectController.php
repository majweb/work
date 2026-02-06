<?php

namespace App\Http\Controllers\Recruit;

use App\Http\Controllers\Controller;
use App\Http\Requests\Recruit\StoreProject;
use App\Http\Resources\MultiselectResource;
use App\Http\Resources\MultiselectWithoutDetailResource;
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
use App\Models\Title;
use App\Models\TypeOfContract;
use App\Models\Wait;
use App\Models\Welcome;
use App\Models\WorkingMode;
use App\Models\WorkingPlace;
use App\Models\WorkLoad;
use App\Services\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('role:recruit'),
//            new Middleware('only_direct_permission:editing projects', only: ['edit', 'update']),
//            new Middleware('only_direct_permission:adding projects', only: ['create', 'store']),

        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        request()->validate([
            'direction' => ['in:asc,desc'],
            'field' => ['in:id,created_at'],
            'is_active' => ['nullable', 'in:all,active,inactive'],
            'position' => ['nullable', 'string', 'max:255'],
            'id' => ['nullable', 'integer'],
            'city' => ['nullable', 'string', 'max:255'],
            'date' => ['nullable', 'date'],
            'category' => ['nullable', 'integer'],
            'categorySub' => ['nullable', 'integer'],
            'profession' => ['nullable', 'integer'],
            'positionSelect' => ['nullable', 'integer']
        ]);

        $query = Project::query()
            ->withCount([
                'aplications',
                'aplications as yes_count' => function($q) {
                    $q->where('status', 'yes');
                },
                'aplications as no_count' => function($q) {
                    $q->where('status', 'no');
                },
                'aplications as maybe_count' => function($q) {
                    $q->where('status', 'maybe');
                },
                'aplications as new_count' => function($q) {
                    $q->whereNull('status');
                }
            ])
            ->where(function($q) {
                $q->where('recruiter_id', auth()->user()->id)
                    ->orWhereJsonContains('other_recruits', ['value' => auth()->user()->id]);
            });

        $query->when(request()->has(['field', 'direction']), function ($q) {
            $q->orderBy(request('field'), request('direction'));
        });

        $query->when(request()->has('recruiter'), function ($q) {
            if (request()->get('recruiter') != 'all') {
                $q->where('recruiter_id', request()->get('recruiter'));
            }
        });

        $query->when(request()->has('is_active'), function ($q) {
            $filter = request()->get('is_active');
            if ($filter === 'active') {
                $q->where('is_active', true);
            } elseif ($filter === 'inactive') {
                $q->where('is_active', false);
            }
        });

        // Nowe filtry
        $query->when(request()->filled('position'), function ($q) {
            $position = request('position');
            $q->where(function($query) use ($position) {
                $query->whereRaw('LOWER(JSON_EXTRACT(position, "$.name")) LIKE ?', ['%' . strtolower($position) . '%']);
            });
        });

        $query->when(request()->filled('id'), function ($q) {
            $q->where('id', request('id'));
        });

        $query->when(request()->filled('city'), function ($q) {
            $city = request('city');
            $q->where('cityWork', 'like', '%' . $city . '%');
        });

        $query->when(request()->filled('date'), function ($q) {
            $date = request('date');
            $q->whereDate('created_at', $date);
        });

        // Filtrowanie po kategorii (branża)
        if (request()->filled('category')) {
            $categoryValue = (int) request('category');
            $query->whereJsonContains('category', ['value' => $categoryValue]);
        }

        // Filtrowanie po podkategorii (podbranża)
        if (request()->filled('categorySub')) {
            $categorySubValue = (int) request('categorySub');
            $query->whereJsonContains('categorySub', ['value' => $categorySubValue]);
        }

        // Filtrowanie po zawodzie
        if (request()->filled('profession')) {
            $professionValue = (int) request('profession');
            $query->whereJsonContains('profession', ['value' => $professionValue]);
        }

        // Filtrowanie po stanowisku (select)
        if (request()->filled('positionSelect')) {
            $positionValue = (int) request('positionSelect');
            $query->whereJsonContains('position', ['value' => $positionValue]);
        }

        $projects = $query->paginate(10)->withQueryString();

        // Transformacja danych projektów
        $projects->getCollection()->transform(function ($project) {
            $position = is_string($project->position) ? json_decode($project->position, true) : $project->position;
            $countryWork = is_string($project->countryWork) ? json_decode($project->countryWork, true) : $project->countryWork;
            $currency = is_string($project->currency) ? json_decode($project->currency, true) : $project->currency;

            return [
                'id' => $project->id,
                'position' => $position['allTranslations']['title'][app()->getLocale()] ?? $position['name'] ?? __('translate.projectWithoutTitle'),
                'city' => $project->cityWork ?? '',
                'country' => $countryWork['allTranslations'][app()->getLocale()] ?? $countryWork['name'] ?? '',
                'basicSalaryFrom' => $project->basicSalaryFrom ?? null,
                'currency' => $currency['value'] ?? $currency['name'] ?? '',
                'is_active' => $project->is_active ?? true,
                'aplications_count' => $project->aplications_count ?? 0,
                'views_count' => $project->views_count ?? 0,
                'yes_count' => $project->yes_count ?? 0,
                'no_count' => $project->no_count ?? 0,
                'maybe_count' => $project->maybe_count ?? 0,
                'new_count' => $project->new_count ?? 0,
                'created_at' => $project->created_at ? \Carbon\Carbon::parse($project->created_at)->format('d.m.Y H:i') : '',
                'updated_at' => $project->updated_at ? $project->updated_at->toISOString() : '',
            ];
        });

        // Pobierz kategorie główne dla filtrów
        $categories = Cache::rememberForever('categoriesWithoutDetail', function() {
            return Category::whereNull('parent_id')->get()->map(function($cat) {
                return [
                    'value' => $cat->id,
                    'name' => $cat->allTranslations['title'][app()->getLocale()] ?? $cat->name,
                    'allTranslations' => $cat->allTranslations['title'] ?? []
                ];
            });
        });
        return inertia()->render('RecruiterPages/Project/Index', [
            'projects' => $projects,
            'categories' => $categories,
            'filters' => request()->only(['field', 'direction', 'recruiter', 'is_active', 'position', 'id', 'city', 'date', 'category', 'categorySub', 'profession', 'positionSelect'])
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $externalCompanies = ExternalCompany::where('user_id',auth()->user()->recruiter_from_firm_id)->latest()->get();
        $category = Cache::rememberForever('category', function() {
            return MultiselectResource::collection(Category::isRoot()->get());
        });
        $workingModes = Cache::rememberForever('workingModes', function() {
            return WorkingModesResource::collection(WorkingMode::all());
        });
        $countries = (new Helper())->makeCountriesToSelect();

        $workingPlaces = Cache::rememberForever('workingPlaces', function() {
            return MultiselectResource::collection(WorkingPlace::all());
        });
        $typesOfContract = Cache::rememberForever('typeOfContract', function() {
            return TypeOfContractResource::collection(TypeOfContract::all());
        });
        $workLoads = Cache::rememberForever('workLoads', function() {
            return WorkLoadResource::collection(WorkLoad::all());
        });

        $payoutModes = Cache::rememberForever('payoutModes', function() {
            return PayModesResource::collection(PayoutMode::all());
        });

        $paySystems = Cache::rememberForever('paySystems', function() {
            return PayModesResource::collection(PaySystem::all());
        });

        $days = Cache::rememberForever('days', function() {
            return PayModesResource::collection(Day::all());
        });
        $shiftWorks = Cache::rememberForever('shiftWorks', function() {
            return PayModesResource::collection(ShiftWork::all());
        });
        $offers = Cache::rememberForever('offers', function() {
            return PayModesResource::collection(Offer::all());
        });
        $waits = Cache::rememberForever('waits', function() {
            return PayModesResource::collection(Wait::all());
        });
        $experiences = Cache::rememberForever('experiences', function() {
            return WorkLoadResource::collection(Experience::all());
        });
        $welcomes = Cache::rememberForever('welcomes', function() {
            return PayModesResource::collection(Welcome::all());
        });
        $educations = Cache::rememberForever('educations', function() {
            return PayModesResource::collection(Education::all());
        });
        $currencies = Cache::rememberForever('currencies', function() {
            return config('currencyShorts');
        });
        $cvs = Cache::rememberForever('cvs', function() {
            return PayModesResource::collection(CvType::all());
        });

        return inertia()->render('RecruiterPages/Project/Create',
            [
                'categories' =>$category,
                'countries' =>$countries,
                'workingModes' =>$workingModes,
                'workingPlaces' =>$workingPlaces,
                'typesOfContract' =>$typesOfContract,
                'workLoads' =>$workLoads,
                'currencies' =>$currencies,
                'payoutModes' =>$payoutModes,
                'paySystems' =>$paySystems,
                'days' =>$days,
                'shiftWorks' =>$shiftWorks,
                'offers' =>$offers,
                'waits' =>$waits,
                'experiences' =>$experiences,
                'welcomes' =>$welcomes,
                'educations' =>$educations,
                'cvs' =>$cvs,
                'externalCompanies' =>$externalCompanies,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProject $request)
    {
        $title=[];

        foreach (config('langsShorts') as $lang){
            $title[$lang] = (isset($request->projectData()['position']['allTranslations']['title'][$lang]) ? $request->projectData()['position']['allTranslations']['title'][$lang] : null).', '.(isset($request->projectData()['countryWork']['allTranslations'][$lang]) ? $request->projectData()['countryWork']['allTranslations'][$lang]: null).', '.$request->projectData()['cityWork'].', '.$request->projectData()['basicSalaryFrom'].' '.$request->projectData()['currency']['name'];
        }
        $project = Project::create([
            'title' =>  $title,
            'category' => $request->projectData()['category'],
            'categorySub' => $request->projectData()['categorySub'],
            'profession' => $request->projectData()['profession'],
            'position' => $request->projectData()['position'],
            'currency' => $request->projectData()['currency'],
            'workingMode' => $request->projectData()['workingMode'],
            'typeOfContract' => $request->projectData()['typeOfContract'],
            'payoutMode' => $request->projectData()['payoutMode'],
            'workingPlace' => $request->projectData()['workingPlace'],
            'country' => $request->projectData()['country'],
            'workLoad' => $request->projectData()['workLoad'],
            'shiftWork' => $request->projectData()['shiftWork'],
            'paySystem' => $request->projectData()['paySystem'],
            'days' => $request->projectData()['days'],
            'workNight' => $request->projectData()['workNight'],
            'basicSalaryTo' => $request->projectData()['basicSalaryTo'],
            'basicSalaryFrom' => $request->projectData()['basicSalaryFrom'],
            'bonusSalaryTo' => $request->projectData()['bonusSalaryTo'],
            'bonusSalaryFrom' => $request->projectData()['bonusSalaryFrom'],
            'hoursFrom' => $request->projectData()['hoursFrom'],
            'hoursTo' => $request->projectData()['hoursTo'],
            'offer' => $request->projectData()['offer'],
            'wait' => $request->projectData()['wait'],
            'welcome' => $request->projectData()['welcome'],
            'education' => $request->projectData()['education'],
            'experience' => $request->projectData()['experience'],
            'countryWork' => $request->projectData()['countryWork'],
            'streetWork' => $request->projectData()['streetWork'],
            'streetWorkNumber' => $request->projectData()['streetWorkNumber'],
            'postalWork' => $request->projectData()['postalWork'],
            'cityWork' => $request->projectData()['cityWork'],
            'user_id' => auth()->user()->recruiter_from_firm_id || auth()->user()->id,
            'recruiter_id' => auth()->user()->id,
            'cv' => $request->projectData()['cv'],
            'external_company_id' => $request->projectData()['external_company_id'],
            'is_active' => $request->projectData()['is_active'] ?? true,
        ]);

        if($project && count($request->projectData()['detailProjects'])){
            $project->detailprojects()->sync($request->projectData()['detailProjects']);
        }

        // Zapisywanie pytań projektu
        if(isset($request->projectData()['questions']) && is_array($request->projectData()['questions'])) {
            foreach($request->projectData()['questions'] as $questionData) {
                $project->questions()->create([
                    'user_id' => auth()->id(),
                    'content' => $questionData['content'],
                    'answer_time' => $questionData['answer_time'],
                ]);
            }
        }
        session()->flash('flash.banner', __('translate.addedProject'));
        session()->flash('flash.bannerStyle', 'success');

        if($request->user()->hasRole('firm')){
            return to_route('projects.index');
        } elseif ($request->user()->hasRole('recruit')){
            return to_route('project-recruits.index');
        }

    }

    /**
     * Display the specified resource.
     */
        public function show(Project $project)
    {

        Gate::authorize('project-recruiter',$project);

        $project->loadCount([
            'aplications',
            'aplications as yes_count' => function($q) {
                $q->where('status', 'yes');
            },
            'aplications as no_count' => function($q) {
                $q->where('status', 'no');
            },
            'aplications as maybe_count' => function($q) {
                $q->where('status', 'maybe');
            },
            'aplications as new_count' => function($q) {
                $q->whereNull('status');
            }
        ]);

        $project->load(['recruit:id,name','shiftWork:id,name','education:id,name','externalCompany:id,name,abbreviation']);
        // Pobierz other_recruits z JSON
        $otherRecruits = [];
        if ($project->other_recruits && is_array($project->other_recruits)) {
            $recruiterIds = array_column($project->other_recruits, 'value');
            if (!empty($recruiterIds)) {
                $otherRecruits = \App\Models\User::whereIn('id', $recruiterIds)->get(['id', 'name']);
            }
        }

        $locale = app()->getLocale();

        return inertia()->render('RecruiterPages/Project/Show',[
            'project'=>$project,
            'otherRecruits'=>$otherRecruits,
            'locale'=>$locale
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        Gate::authorize('project-recruiter',$project);
        $externalCompanies = ExternalCompany::where('user_id',auth()->user()->recruiter_from_firm_id)->latest()->get();
        $project->load('detailprojects','questions');
        $category = Cache::rememberForever('category', function() {
            return MultiselectResource::collection(Category::isRoot()->get());
        });
        $workingModes = Cache::rememberForever('workingModes', function() {
            return WorkingModesResource::collection(WorkingMode::all());
        });
        $countries = (new Helper())->makeCountriesToSelect();

        $workingPlaces = Cache::rememberForever('workingPlaces', function() {
            return MultiselectResource::collection(WorkingPlace::all());
        });
        $typesOfContract = Cache::rememberForever('typeOfContract', function() {
            return TypeOfContractResource::collection(TypeOfContract::all());
        });
        $workLoads = Cache::rememberForever('workLoads', function() {
            return WorkLoadResource::collection(WorkLoad::all());
        });

        $payoutModes = Cache::rememberForever('payoutModes', function() {
            return PayModesResource::collection(PayoutMode::all());
        });

        $paySystems = Cache::rememberForever('paySystems', function() {
            return PayModesResource::collection(PaySystem::all());
        });

        $days = Cache::rememberForever('days', function() {
            return PayModesResource::collection(Day::all());
        });
        $shiftWorks = Cache::rememberForever('shiftWorks', function() {
            return PayModesResource::collection(ShiftWork::all());
        });
        $offers = Cache::rememberForever('offers', function() {
            return PayModesResource::collection(Offer::all());
        });
        $waits = Cache::rememberForever('waits', function() {
            return PayModesResource::collection(Wait::all());
        });
        $experiences = Cache::rememberForever('experiences', function() {
            return WorkLoadResource::collection(Experience::all());
        });
        $welcomes = Cache::rememberForever('welcomes', function() {
            return PayModesResource::collection(Welcome::all());
        });
        $educations = Cache::rememberForever('educations', function() {
            return PayModesResource::collection(Education::all());
        });
        $currencies = Cache::rememberForever('currencies', function() {
            return config('currencyShorts');
        });
        $cvs = Cache::rememberForever('cvs', function() {
            return PayModesResource::collection(CvType::all());
        });

        return inertia()->render('RecruiterPages/Project/Edit',
            [
                'categories' =>$category,
                'currencies' =>$currencies,
                'countries' =>$countries,
                'workingModes' =>$workingModes,
                'workingPlaces' =>$workingPlaces,
                'typesOfContract' =>$typesOfContract,
                'workLoads' =>$workLoads,
                'payoutModes' =>$payoutModes,
                'paySystems' =>$paySystems,
                'days' =>$days,
                'shiftWorks' =>$shiftWorks,
                'offers' =>$offers,
                'waits' =>$waits,
                'experiences' =>$experiences,
                'welcomes' =>$welcomes,
                'educations' =>$educations,
                'project' =>$project,
                'cvs' =>$cvs,
                'externalCompanies' =>$externalCompanies,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProject $request, Project $project)
    {
        Gate::authorize('project-recruiter',$project);
        $title=[];
        foreach (config('langsShorts') as $lang){
            $title[$lang] = (isset($request->projectData()['position']['allTranslations']['title'][$lang]) ? $request->projectData()['position']['allTranslations']['title'][$lang] : null).', '.(isset($request->projectData()['countryWork']['allTranslations'][$lang]) ? $request->projectData()['countryWork']['allTranslations'][$lang]: null).', '.$request->projectData()['cityWork'].', '.$request->projectData()['basicSalaryFrom'].' '.$request->projectData()['currency']['name'];
        }
        $project->update([
            'title' => $title,
            'category' => $request->projectData()['category'],
            'categorySub' => $request->projectData()['categorySub'],
            'profession' => $request->projectData()['profession'],
            'position' => $request->projectData()['position'],
            'currency' => $request->projectData()['currency'],
            'workingMode' => $request->projectData()['workingMode'],
            'typeOfContract' => $request->projectData()['typeOfContract'],
            'payoutMode' => $request->projectData()['payoutMode'],
            'workingPlace' => $request->projectData()['workingPlace'],
            'country' => $request->projectData()['country'],
            'workLoad' => $request->projectData()['workLoad'],
            'shiftWork' => $request->projectData()['shiftWork'],
            'paySystem' => $request->projectData()['paySystem'],
            'days' => $request->projectData()['days'],
            'workNight' => $request->projectData()['workNight'],
            'basicSalaryTo' => $request->projectData()['basicSalaryTo'],
            'basicSalaryFrom' => $request->projectData()['basicSalaryFrom'],
            'bonusSalaryTo' => $request->projectData()['bonusSalaryTo'],
            'bonusSalaryFrom' => $request->projectData()['bonusSalaryFrom'],
            'hoursFrom' => $request->projectData()['hoursFrom'],
            'hoursTo' => $request->projectData()['hoursTo'],
            'offer' => $request->projectData()['offer'],
            'wait' => $request->projectData()['wait'],
            'welcome' => $request->projectData()['welcome'],
            'education' => $request->projectData()['education'],
            'experience' => $request->projectData()['experience'],
            'countryWork' => $request->projectData()['countryWork'],
            'streetWork' => $request->projectData()['streetWork'],
            'streetWorkNumber' => $request->projectData()['streetWorkNumber'],
            'postalWork' => $request->projectData()['postalWork'],
            'cityWork' => $request->projectData()['cityWork'],
            'user_id' => auth()->user()->recruiter_from_firm_id,
            'recruiter_id' => auth()->user()->id,
            'cv' => $request->projectData()['cv'],
            'external_company_id' => $request->projectData()['external_company_id'],
            'is_active' => $request->projectData()['is_active'] ?? true,

        ]);

        if($project && count($request->projectData()['detailProjects'])){
            $project->detailprojects()->sync($request->projectData()['detailProjects']);
        }

        // Update project questions
        $project->questions()->delete();
        if (isset($request->projectData()['questions']) && is_array($request->projectData()['questions'])) {
            foreach ($request->projectData()['questions'] as $questionData) {
                $project->questions()->create([
                    'user_id' => auth()->id(),
                    'content' => $questionData['content'],
                    'answer_time' => $questionData['answer_time'],
                ]);
            }
        }

        session()->flash('flash.banner', __('translate.updatedProject'));
        session()->flash('flash.bannerStyle', 'success');

        return to_route('project-recruits.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        Gate::authorize('project-recruiter',$project);
        $project->delete();
        session()->flash('flash.banner', __('translate.deleteProject'));
        session()->flash('flash.bannerStyle', 'success');
        return to_route('project-recruits.index');
    }

    public function getChildsCategory($parent)
    {
        return MultiselectResource::collection(Category::where('parent_id',$parent)->with('detailprojects')->get());
    }

    public function duplicate(Project $project)
    {
        $newProject = $project->replicate();
        $newProject->save();


        session()->flash('flash.banner', __('translate.projectDuplicated'));
        session()->flash('flash.bannerStyle', 'success');
        return to_route('project-recruits.index');
    }

    public function getCategorySubForRecruit($categoryId)
    {
        return Cache::remember('recruit_category_sub_'.$categoryId, 3600, function() use ($categoryId) {
            $categorySubs = Project::where('recruiter_id', auth()->user()->id)
                ->orWhereJsonContains('other_recruits', ['value' => auth()->user()->id])
                ->get()
                ->map(function ($item) {
                    return [
                        'categorySub' => is_string($item->categorySub)
                            ? json_decode($item->categorySub, true)
                            : $item->categorySub,
                        'category' => is_string($item->category)
                            ? json_decode($item->category, true)
                            : $item->category,
                    ];
                })
                ->filter(fn($item) => isset($item['category']['value']) && $item['category']['value'] == $categoryId)
                ->pluck('categorySub')
                ->filter()
                ->unique('value')
                ->values()
                ->map(fn($cat) => [
                    'name' => $cat['allTranslations']['title'][app()->getLocale()] ?? $cat['name'],
                    'value' => $cat['value'],
                    'allTranslations' => $cat['allTranslations']['title'],
                ])
                ->toArray();

            return response()->json($categorySubs);
        });
    }

    public function getProfessionsForRecruit($categorySubId)
    {
        return Cache::remember('recruit_professions_'.$categorySubId, 3600, function() use ($categorySubId) {
            $professions = Project::where('recruiter_id', auth()->user()->id)
                ->orWhereJsonContains('other_recruits', ['value' => auth()->user()->id])
                ->get()
                ->map(function ($item) {
                    return [
                        'profession' => is_string($item->profession)
                            ? json_decode($item->profession, true)
                            : $item->profession,
                        'categorySub' => is_string($item->categorySub)
                            ? json_decode($item->categorySub, true)
                            : $item->categorySub,
                    ];
                })
                ->filter(fn($item) => isset($item['categorySub']['value']) && $item['categorySub']['value'] == $categorySubId)
                ->pluck('profession')
                ->filter()
                ->unique('value')
                ->values()
                ->map(fn($prof) => [
                    'name' => $prof['allTranslations']['title'][app()->getLocale()] ?? $prof['name'],
                    'value' => $prof['value'],
                    'allTranslations' => $prof['allTranslations']['title'],
                ])
                ->toArray();

            return response()->json($professions);
        });
    }

    public function getPositionsForRecruit($professionId)
    {
        return Cache::remember('recruit_positions_'.$professionId, 3600, function() use ($professionId) {
            $positions = Project::where('recruiter_id', auth()->user()->id)
                ->orWhereJsonContains('other_recruits', ['value' => auth()->user()->id])
                ->get()
                ->map(function ($item) {
                    return [
                        'position' => is_string($item->position)
                            ? json_decode($item->position, true)
                            : $item->position,
                        'profession' => is_string($item->profession)
                            ? json_decode($item->profession, true)
                            : $item->profession,
                    ];
                })
                ->filter(fn($item) => isset($item['profession']['value']) && $item['profession']['value'] == $professionId)
                ->pluck('position')
                ->filter()
                ->unique('value')
                ->values()
                ->map(fn($pos) => [
                    'name' => $pos['allTranslations']['title'][app()->getLocale()] ?? $pos['name'],
                    'value' => $pos['value'],
                    'allTranslations' => $pos['allTranslations']['title'],
                ])
                ->toArray();

            return response()->json($positions);
        });
    }

    public function validateStep(Request $request)
    {
        $step = $request->input('step');

        // Przygotowanie danych przed walidacją (tak jak w StoreProject)
        if (is_array($request->external_company_id) && isset($request->external_company_id['id'])) {
            $request->merge([
                'external_company_id' => $request->external_company_id['id']
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
                    'cv.*.name' => ['required'],
                    'cv.*.allTranslations' => ['required'],

                    // Kategorie
                    'category' => ['required', 'array', 'max:100'],
                    'categorySub' => ['required', 'array', 'max:100'],
                    'profession' => ['required', 'array', 'max:100'],
                    'position' => ['nullable', 'array', 'max:100'],
                    'detailProjects' => ['required', 'array', 'min:1'],

                    // Kraj publikacji
                    'country' => ['required', 'array', 'min:1'],

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
                    'external_company_id' => 'nullable|exists:App\Models\ExternalCompany,id',
                    'is_active' => 'nullable|boolean',
                ];
                break;

            case 2:
                $rules = [
                    // Rodzaj umowy
                    'typeOfContract' => ['required', 'array', 'min:1'],
                    'typeOfContract.*.id' => ['required','exists:App\Models\TypeOfContract,id'],
                    'typeOfContract.*.name' => ['required'],
                    'typeOfContract.*.allTranslations' => ['required'],

                    // Wynagrodzenie
                    'currency' => ['required'],
                    'basicSalaryFrom' => ['required', 'numeric','between:1,99999.99'],
                    'basicSalaryTo' => ['nullable', 'numeric','between:1,99999.99','gt:basicSalaryFrom'],
                    'bonusSalaryFrom' => ['required', 'numeric','between:1,99999.99'],
                    'bonusSalaryTo' => ['nullable', 'numeric','between:1,99999.99','gt:bonusSalaryFrom'],

                    // Tryb wypłaty
                    'payoutMode' => ['required','array'],
                    'payoutMode.id' => ['required','exists:App\Models\PayoutMode,id'],
                    'payoutMode.name' => ['required'],
                    'payoutMode.allTranslations' => ['required'],

                    // Dni pracy
                    'days' => ['required', 'array', 'min:1'],
                    'days.*.id' => ['required','exists:App\Models\Day,id'],
                    'days.*.name' => ['required'],
                    'days.*.allTranslations' => ['required'],

                    // Godziny pracy
                    'hoursFrom' => ['required', 'date_format:H:i','before:hoursTo'],
                    'hoursTo' => ['required', 'date_format:H:i','after:hoursFrom'],

                    // System wynagrodzeń
                    'paySystem' => ['required', 'array', 'min:1'],
                    'paySystem.*.id' => ['required','exists:App\Models\PaySystem,id'],
                    'paySystem.*.name' => ['required'],
                    'paySystem.*.allTranslations' => ['required'],

                    // Praca nocna i zmianowa
                    'workNight' => ['required','in:1,2'],
                    'shiftWork' => ['required','exists:App\Models\ShiftWork,id'],
                ];
                break;

            case 3:
                $rules = [
                    // Tryb i wymiar pracy
                    'workingMode' => ['required','array','min:1'],
                    'workingMode.*.value' => ['required','exists:App\Models\WorkingMode,id'],
                    'workingMode.*.name' => ['required'],
                    'workingMode.*.allTranslations' => ['required'],

                    'workLoad' => ['required','array'],
                    'workLoad.value' => ['required','exists:App\Models\WorkLoad,id'],
                    'workLoad.name' => ['required'],
                    'workLoad.allTranslations' => ['required'],

                    'workingPlace' => ['required', 'array', 'min:1'],
                    'workingPlace.value' => ['required','exists:App\Models\WorkingPlace,id'],
                    'workingPlace.name' => ['required'],
                    'workingPlace.allTranslations' => ['required'],

                    // Oferujemy, Oczekujemy, Mile widziane
                    'offer' => ['required', 'array', 'min:1'],
                    'offer.*.id' => ['required','exists:App\Models\Offer,id'],
                    'offer.*.name' => ['required'],
                    'offer.*.allTranslations' => ['required'],

                    'wait' => ['required', 'array', 'min:1'],
                    'wait.*.id' => ['required','exists:App\Models\Wait,id'],
                    'wait.*.name' => ['required'],
                    'wait.*.allTranslations' => ['required'],

                    'experience' => ['required', 'array', 'min:1'],
                    'experience.value' => ['required','exists:App\Models\Experience,id'],
                    'experience.name' => ['required'],
                    'experience.allTranslations' => ['required'],

                    'welcome' => ['required', 'array', 'min:1'],
                    'welcome.*.id' => ['required','exists:App\Models\Welcome,id'],
                    'welcome.*.name' => ['required'],
                    'welcome.*.allTranslations' => ['required'],
                ];
                break;
        }

        // Walidacja
        $validator = Validator::make($request->all(), $rules, [
            'questions.*.content.required_with' => __('translate.enter_question_content'),
            'questions.*.answer_time.required_with' => __('translate.select_appropriate_value'),
        ], [
            // Nazwy atrybutów
            'title' => strtolower(__('translate.title')),
            'category' => strtolower(__('translate.category')),
            'categorySub' => strtolower(__('translate.subcategory')),
            'profession' => strtolower(__('translate.profession')),
            'position' => strtolower(__('translate.position')),
            'basicSalaryFrom' => strtolower(__('translate.basicSalaryFrom')),
            'basicSalaryTo' => strtolower(__('translate.basicSalaryTo')),
            'bonusSalaryFrom' => strtolower(__('translate.bonusSalaryFrom')),
            'bonusSalaryTo' => strtolower(__('translate.bonusSalaryTo')),
            'hoursFrom' => strtolower(__('translate.hoursFrom')),
            'hoursTo' => strtolower(__('translate.hoursTo')),
            'days' => strtolower(__('translate.dayWork')),
            'payoutMode' => strtolower(__('translate.payoutModes')),
            'paySystem' => strtolower(__('translate.paySystem')),
            'workNight' => strtolower(__('translate.workNight')),
            'shiftWork' => strtolower(__('translate.shiftWorks')),
            'offer' => strtolower(__('translate.offer')),
            'wait' => strtolower(__('translate.wait')),
            'experience' => strtolower(__('translate.experience')),
            'welcome' => strtolower(__('translate.welcome')),
            'typeOfContract' => strtolower(__('translate.typesOfContract')),
            'workLoad' => strtolower(__('translate.workLoads')),
            'workingPlace' => strtolower(__('translate.workingPlace')),
            'country' => strtolower(__('translate.Country')),
            'workingMode' => strtolower(__('translate.workingMode')),
            'education' => strtolower(__('translate.education')),
            'countryWork' => strtolower(__('translate.Country')),
            'streetWork' => strtolower(__('translate.Street')),
            'postalWork' => strtolower(__('translate.Postal')),
            'cityWork' => strtolower(__('translate.City')),
            'streetWorkNumber' => strtolower(__('translate.City')),
            'detailProjects' => strtolower(__('translate.detailProjects')),
            'questions' => strtolower(__('translate.questions')),
            'external_company_id' => strtolower(__('translate.externalCompany')),
            'is_active' => strtolower(__('translate.projectIsActive')),
            'cv' => 'typ CV',
            'currency' => 'waluta',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'valid' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        return response()->json([
            'valid' => true,
            'message' => 'Walidacja przeszła pomyślnie'
        ]);
    }


}
