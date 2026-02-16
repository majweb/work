<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Models\CandidateQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Inertia\Inertia;

class CandidateQuestionController extends Controller
{
    public function index()
    {
        $questions = CandidateQuestion::with('createdBy')
            ->where('created_by_id', Auth::id())
            ->latest()
            ->paginate(10);

        return Inertia::render('Firm/CandidateQuestions/Index', [
            'questions' => $questions,
        ]);
    }

    public function create()
    {
        return Inertia::render('Firm/CandidateQuestions/Create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:500',
            'answer_type' => 'required|in:text,boolean',
        ]);

        CandidateQuestion::create([
            'question' => $validated['question'],
            'answer_type' => $validated['answer_type'],
            'created_by_id' => Auth::id(),
            'is_active' => true,
        ]);

        session()->flash('flash.banner', __('translate.questionAdded'));
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('candidate-questions.index');
    }

    public function edit(CandidateQuestion $candidateQuestion)
    {
        Gate::authorize('update', $candidateQuestion);

        return Inertia::render('Firm/CandidateQuestions/Edit', [
            'question' => $candidateQuestion,
        ]);
    }

    public function update(Request $request, CandidateQuestion $candidateQuestion)
    {
        Gate::authorize('update', $candidateQuestion);

        $validated = $request->validate([
            'question' => 'required|string|max:500',
            'answer_type' => 'required|in:text,boolean',
            'is_active' => 'boolean',
        ]);

        $candidateQuestion->update($validated);
        session()->flash('flash.banner', __('translate.questionUpdated'));
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('candidate-questions.index');

    }

    public function destroy(CandidateQuestion $candidateQuestion)
    {
        Gate::authorize('delete', $candidateQuestion);

        $candidateQuestion->delete();
        session()->flash('flash.banner', __('translate.questionDeleted'));
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('candidate-questions.index');
    }

    public function toggleActive(CandidateQuestion $candidateQuestion)
    {
        Gate::authorize('update', $candidateQuestion);

        $candidateQuestion->update([
            'is_active' => !$candidateQuestion->is_active,
        ]);

        session()->flash('flash.banner', __('translate.questionStatusChanged'));
        session()->flash('flash.bannerStyle', 'success');

        return back();
    }
}
