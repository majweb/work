<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
        Gate::authorize('update',auth()->user());
        $project->load('recruit:id,name');


        $locale = app()->getLocale();
        return inertia()->render('Project/Show',['project'=>$project,'locale'=>$locale]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {

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
        Gate::authorize('delete',$project);
        $project->delete();
        session()->flash('flash.banner', __('auth.deleteProject'));
        session()->flash('flash.bannerStyle', 'success');
        return to_route('projects.index');
    }
}
