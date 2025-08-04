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

        return redirect()->route('candidate-questions.index')
            ->with('success', 'Pytanie zostało dodane.');
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

        return redirect()->route('candidate-questions.index')
            ->with('success', 'Pytanie zostało zaktualizowane.');
    }

    public function destroy(CandidateQuestion $candidateQuestion)
    {
        Gate::authorize('delete', $candidateQuestion);

        $candidateQuestion->delete();

        return redirect()->route('candidate-questions.index')
            ->with('success', 'Pytanie zostało usunięte.');
    }

    public function toggleActive(CandidateQuestion $candidateQuestion)
    {
        Gate::authorize('update', $candidateQuestion);

        $candidateQuestion->update([
            'is_active' => !$candidateQuestion->is_active,
        ]);

        return back()->with('success', 'Status pytania został zmieniony.');
    }
}
