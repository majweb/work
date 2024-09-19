<?php

namespace App\Http\Controllers\Recruit;

use App\Http\Controllers\Controller;
use App\Http\Requests\Recruit\StoreProject;
use App\Http\Resources\CategoryRootResource;
use App\Http\Resources\TitleResource;
use App\Http\Resources\WorkingModesResource;
use App\Models\Category;
use App\Models\Project;
use App\Models\Title;
use App\Models\User;
use App\Models\WorkingMode;
use Illuminate\Http\Request;
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

        $category = CategoryRootResource::collection(Category::isRoot()->get());
        $workingModes = WorkingModesResource::collection(WorkingMode::all());
        return inertia()->render('RecruiterPages/Project/Create',
            [
                'categories' =>$category,
                'workingModes' =>$workingModes
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProject $request)
    {
        Project::create([
            'title' => $request->projectData()['title'],
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
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
        return CategoryRootResource::collection(Category::where('parent_id',$parent)->get());
    }

    public function getTitlesCategory($parent)
    {
        return TitleResource::collection(Title::where('category_id',$parent)->get());
    }
}
