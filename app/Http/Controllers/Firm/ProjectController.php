<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Http\Resources\MultiselectResource;
use App\Http\Resources\OtherRecruitsResource;
use App\Models\Category;
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
//            'ttttttttttt' => $c,
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
        $project->load(['recruit:id,name','shiftWork:id,name','education:id,name']);
        $otherRecruits = OtherRecruitsResource::collection($project->user->recruits()->whereNull('user_blocked')->where('id','!=',$project->recruiter_id)->get());
        $locale = app()->getLocale();
        return inertia()->render('Project/Show',['project'=>$project,'locale'=>$locale,'otherRecruits'=>$otherRecruits]);
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
}
