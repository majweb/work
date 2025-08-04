<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectQuestion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class QuestionAcceptController extends Controller
{
    public function index()
    {


        Gate::authorize('admin',User::class);

        request()->validate([
            'direction' => ['in:asc,desc'],
            'field' => ['in:id']
        ]);

        $query = ProjectQuestion::query();

        $query->when(request()->has(['field', 'direction']), function ($q) {
            $q->orderBy(request('field'), request('direction'));
        });

        return inertia()->render('Admin/Questions-Accept/Index', [
            'projectQuestions' => $query->with(['user:id,name','project:id'])->paginate(5)->withQueryString(),
            'filters' => request()->only(['field', 'direction'])
        ]);
    }

    public function show(ProjectQuestion $projectQuestion)
    {
        Gate::authorize('admin',User::class);
        $projectQuestion->load(['user:id,name','project:id']);
        return inertia()->render('Admin/Questions-Accept/Show',['projectQuestion'=>$projectQuestion]);

    }

    public function destroy(ProjectQuestion $projectQuestion)
    {
        Gate::authorize('admin', User::class);
        $projectQuestion->delete();
        session()->flash('flash.banner', __('Pytanie zostało usunięte'));
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('admin.questions-accepts.index');
    }

    public function accept(ProjectQuestion $projectQuestion)
    {
        Gate::authorize('admin', User::class);

        if ($projectQuestion->accepted) {
            $projectQuestion->update(['accepted' => null]);
            session()->flash('flash.banner', __('translate.questionRejected'));
        } else {
            $projectQuestion->update(['accepted' => now()]);
            session()->flash('flash.banner', __('translate.questionAccepted'));
        }

        session()->flash('flash.bannerStyle', 'success');
        return redirect()->back();
    }
}
