<?php

namespace App\Http\Controllers\Recruit;

use App\Http\Controllers\Controller;
use App\Http\Requests\Recruit\StoreProject;
use App\Http\Resources\MultiselectResource;
use App\Http\Resources\TitleResource;
use App\Http\Resources\TypeOfContractResource;
use App\Http\Resources\WorkingModesResource;
use App\Http\Resources\WorkLoadResource;
use App\Models\Category;
use App\Models\Country;
use App\Models\Day;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Offer;
use App\Models\PayoutMode;
use App\Models\PaySystem;
use App\Models\Project;
use App\Models\ShiftWork;
use App\Models\Title;
use App\Models\TypeOfContract;
use App\Models\User;
use App\Models\Wait;
use App\Models\Welcome;
use App\Models\WorkingMode;
use App\Models\WorkingPlace;
use App\Models\WorkLoad;
use App\Services\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        request()->validate([
            'direction' => ['in:asc,desc'],
            'field' => ['in:id']
        ]);

        $query = Project::query()->where('recruiter_id', auth()->user()->id);

        $query->when(request()->has(['field', 'direction']), function ($q) {
            $q->orderBy(request('field'), request('direction'));
        });
        $query->when(request()->has('recruiter'), function ($q) {
            if (request()->get('recruiter') != 'all') {
                $q->where('recruiter_id', request()->get('recruiter'));
            }
        });

        return inertia()->render('RecruiterPages/Project/Index', [
            'projects' => $query->paginate(5)->withQueryString(),
            'filters' => request()->only(['field', 'direction', 'recruiter'])
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $category = Cache::rememberForever('category', function() {
            return MultiselectResource::collection(Category::isRoot()->get());
        });
        $workingModes = Cache::rememberForever('workingModes', function() {
            return WorkingModesResource::collection(WorkingMode::all());
        });
        $countries = Cache::rememberForever('countries', function() {
            return (new Helper())->makeCountriesToSelect();
        });
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
            return WorkLoadResource::collection(PayoutMode::all());
        });

        $paySystems = Cache::rememberForever('paySystems', function() {
            return WorkLoadResource::collection(PaySystem::all());
        });

        $days = Cache::rememberForever('days', function() {
            return WorkLoadResource::collection(Day::all());
        });
        $shiftWorks = Cache::rememberForever('shiftWorks', function() {
            return WorkLoadResource::collection(ShiftWork::all());
        });
        $offers = Cache::rememberForever('offers', function() {
            return WorkLoadResource::collection(Offer::all());
        });
        $waits = Cache::rememberForever('waits', function() {
            return WorkLoadResource::collection(Wait::all());
        });
        $experiences = Cache::rememberForever('experiences', function() {
            return WorkLoadResource::collection(Experience::all());
        });
        $welcomes = Cache::rememberForever('welcomes', function() {
            return WorkLoadResource::collection(Welcome::all());
        });
        $educations = Cache::rememberForever('educations', function() {
            return WorkLoadResource::collection(Education::all());
        });
        return inertia()->render('RecruiterPages/Project/Create',
            [
                'categories' =>$category,
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
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProject $request)
    {
        Project::create([
            'title' => $request->projectData()['title'],
            'category' => $request->projectData()['category'],
            'categorySub' => $request->projectData()['categorySub'],
            'profession' => $request->projectData()['profession'],
            'position' => $request->projectData()['position'],
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
            'user_id' => auth()->user()->recruiter_from_firm_id,
            'recruiter_id' => auth()->user()->id
        ]);

        session()->flash('flash.banner', __('auth.addedProject'));
        session()->flash('flash.bannerStyle', 'success');

        return to_route('project-recruits.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        Gate::authorize('project-recruiter',$project);
        $category = Cache::rememberForever('category', function() {
            return MultiselectResource::collection(Category::isRoot()->get());
        });
        $workingModes = Cache::rememberForever('workingModes', function() {
            return WorkingModesResource::collection(WorkingMode::all());
        });
        $countries = Cache::rememberForever('countries', function() {
            return (new Helper())->makeCountriesToSelect();
        });
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
            return WorkLoadResource::collection(PayoutMode::all());
        });

        $paySystems = Cache::rememberForever('paySystems', function() {
            return WorkLoadResource::collection(PaySystem::all());
        });

        $days = Cache::rememberForever('days', function() {
            return WorkLoadResource::collection(Day::all());
        });
        $shiftWorks = Cache::rememberForever('shiftWorks', function() {
            return WorkLoadResource::collection(ShiftWork::all());
        });
        $offers = Cache::rememberForever('offers', function() {
            return WorkLoadResource::collection(Offer::all());
        });
        $waits = Cache::rememberForever('waits', function() {
            return WorkLoadResource::collection(Wait::all());
        });
        $experiences = Cache::rememberForever('experiences', function() {
            return WorkLoadResource::collection(Experience::all());
        });
        $welcomes = Cache::rememberForever('welcomes', function() {
            return WorkLoadResource::collection(Welcome::all());
        });
        $educations = Cache::rememberForever('educations', function() {
            return WorkLoadResource::collection(Education::all());
        });
        return inertia()->render('RecruiterPages/Project/Edit',
            [
                'categories' =>$category,
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
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProject $request, Project $project)
    {
        Gate::authorize('project-recruiter',$project);
        $project->update([
            'title' => $request->projectData()['title'],
            'category' => $request->projectData()['category'],
            'categorySub' => $request->projectData()['categorySub'],
            'profession' => $request->projectData()['profession'],
            'position' => $request->projectData()['position'],
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
            'user_id' => auth()->user()->recruiter_from_firm_id,
            'recruiter_id' => auth()->user()->id
        ]);

        session()->flash('flash.banner', __('auth.updatedProject'));
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
        session()->flash('flash.banner', __('auth.deleteProject'));
        session()->flash('flash.bannerStyle', 'success');
        return to_route('project-recruits.index');
    }

    public function getChildsCategory($parent)
    {
        return MultiselectResource::collection(Category::where('parent_id',$parent)->get());
    }

    public function getTitlesCategory($parent)
    {
        return TitleResource::collection(Title::where('category_id',$parent)->get());
    }
}
