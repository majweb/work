<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Http\Requests\Recruit\StoreProject;
use App\Http\Resources\MultiselectResource;
use App\Http\Resources\OtherRecruitsResource;
use App\Http\Resources\PayModesResource;
use App\Http\Resources\TypeOfContractResource;
use App\Http\Resources\WorkingModesResource;
use App\Http\Resources\WorkLoadResource;
use App\Models\Aplication;
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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $c = MultiselectResource::collection(Category::whereNull('parent_id')->with('children')->get());
        Gate::authorize('view', [User::class, Project::class]);

        request()->validate([
            'direction' => ['in:asc,desc'],
            'field' => ['in:id']
        ]);

        $query = Project::query()->with('recruit')->where('user_id', auth()->user()->id);

        $query->when(request()->has(['field', 'direction']), function ($q) {
            $q->orderBy(request('field'), request('direction'));
        });
        $query->when(request()->has('recruiter'), function ($q) {
            if (request()->get('recruiter') != 'all') {
                $q->where('recruiter_id', request()->get('recruiter'));
            }
        });

        $recruiters = auth()->user()->recruits()->get();

        return inertia()->render('Project/Index', [
            'recruiters' => $recruiters,
            'projects' => $query->paginate(5)->withQueryString(),
            'filters' => request()->only(['field', 'direction', 'recruiter'])
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        Gate::authorize('view',$project);
        $project->load(['recruit:id,name','shiftWork:id,name','education:id,name','externalCompany:id,name,abbreviation']);
        $otherRecruits = OtherRecruitsResource::collection($project->user->recruits()->whereNull('user_blocked')->where('id','!=',$project->recruiter_id)->get());
        $locale = app()->getLocale();
        return inertia()->render('Project/Show',['project'=>$project,'locale'=>$locale,'otherRecruits'=>$otherRecruits]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        Gate::authorize('update',$project);
        $externalCompanies = ExternalCompany::where('user_id',auth()->user()->id)->latest()->get();
        $project->load('detailprojects','questions');
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

        return inertia()->render('Project/Edit',
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
        Gate::authorize('update',$project);

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
            'user_id' => auth()->user()->id,
            'recruiter_id' => auth()->user()->id,
            'cv' => $request->projectData()['cv'],
            'external_company_id' => $request->projectData()['external_company_id'],
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

        return to_route('projects.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        Gate::authorize('delete',$project);
        $project->delete();
        session()->flash('flash.banner', __('translate.deleteProject'));
        session()->flash('flash.bannerStyle', 'success');
        return to_route('projects.index');
    }

    public function addMoreRecruits(Project $project)
    {

        Gate::authorize('update',$project);
        $project->update([
            'other_recruits'=>request()->others
        ]);
        session()->flash('flash.banner', __('translate.otherRecruitsChange'));
        session()->flash('flash.bannerStyle', 'success');
        return back();
    }

    public function changeRecruit(Project $project)
    {
        Gate::authorize('update',$project);
        if(isset(request()->recruit['value'])){

            $array1 = $project->other_recruits;
            $array2 = request()->recruit;

            $array1 = array_values(array_filter($array1, function ($item) use ($array2) {
                return $item["value"] !== $array2["value"];
            }));


            $project->update([
                'recruiter_id'=>request()->recruit['value'],
                'other_recruits'=>$array1,
            ]);

            session()->flash('flash.banner', __('translate.otherRecruitsChangeMain'));
            session()->flash('flash.bannerStyle', 'success');
            return back();
        }
    }
    public function changeRecruitApp(Aplication $aplication)
    {
        if(isset(request()->recruit['value'])){
            $aplication->update([
                'opened_by_user_id'=>request()->recruit['value'],
                'opened_at'=>now(),
            ]);
            session()->flash('flash.banner', __('translate.otherRecruitsChangeMain'));
            session()->flash('flash.bannerStyle', 'success');
            return back();
        }
    }
}
