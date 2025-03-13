<?php

namespace App\Http\Controllers\Recruit;

use App\Http\Controllers\Controller;
use App\Models\Aplication;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Gate;

class AplicationController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('role:recruit'),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        request()->validate([
            'direction' => ['in:asc,desc'],
            'field' => ['in:id']
        ]);

        $query = Aplication::where('recruiter_id', auth()->id())
            ->orWhereHas('project', function ($q) {
                $q->whereJsonContains('other_recruits', ['value' => auth()->user()->id]);
            });

        $query->when(request()->has(['field', 'direction']), function ($q) {
            $q->orderBy(request('field'), request('direction'));
        });
        $query->when(request()->has('recruiter'), function ($q) {
            if (request()->get('recruiter') != 'all') {
                $q->where('recruiter_id', request()->get('recruiter'));
            }
        });

        return inertia()->render('RecruiterPages/Aplication/Index', [
            'aplications' => $query->with('project:id,other_recruits')->paginate(5)->withQueryString(),
            'filters' => request()->only(['field', 'direction', 'recruiter'])
        ]);
    }

    public function show(Aplication $aplication)
    {
        Gate::authorize('aplication-recruiter',$aplication);
        $aplication->load(['recruit:id,name']);
        $locale = app()->getLocale();
        return inertia()->render('RecruiterPages/Aplication/Show',['aplication'=>$aplication,'locale'=>$locale]);
    }

    public function destroy(Aplication $aplication)
    {
        Gate::authorize('aplication-recruiter',$aplication);
        $aplication->delete();
        session()->flash('flash.banner', __('translate.deleteAplication'));
        session()->flash('flash.bannerStyle', 'success');
        return to_route('project-aplications-recruits.index');
    }

    public function recruitmentView(Aplication $aplication){
        Gate::authorize('aplication-recruiter',$aplication);
        return inertia()->render('RecruiterPages/Aplication/recruitmentView',['aplication'=>$aplication]);
    }
}
