<?php

namespace App\Http\Controllers\Firm;

use App\Exports\ApplicationsExport;
use App\Http\Controllers\Controller;
use App\Http\Resources\MultiselectWithoutDetailResource;
use App\Http\Resources\OtherRecruitsResource;
use App\Models\Aplication;
use App\Models\ApplicationNote;
use App\Models\CandidateQuestion;
use App\Models\CandidateAnswer;
use App\Models\LangLevel;
use App\Services\ApplicationFilterService;
use App\Services\ApplicationStatusService;
use App\Services\GetPointsService;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Maatwebsite\Excel\Excel as ExcelFormat;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Validation\ValidationException;

class AplicationController extends Controller
{
    protected $filterService;
    protected $getPointsService;
    protected $statusService;

    /**
     * Konstruktor wstrzykujący serwisy
     */
    public function __construct(
        ApplicationFilterService $filterService,
        ApplicationStatusService $statusService,
        GetPointsService $getPointsService,
    ) {
        $this->filterService = $filterService;
        $this->statusService = $statusService;
        $this->getPointsService = $getPointsService;
    }

    /**
     * Wyświetla listę wszystkich aktywnych aplikacji
     *
     * @param Request $request
     * @return \Inertia\Response
     */
    public function index(Request $request)
    {
        $result = $this->filterService->getFilteredApplications($request);
        $langLevels=  Cache::rememberForever('langLevels', function() {
            return MultiselectWithoutDetailResource::collection(LangLevel::get());
        });
        return inertia()->render('Firm/Aplication/Index', [
            'applications' => $result['applications'],
            'optionsPosition' => $result['optionsPosition'],
            'optionsRecruits' => $result['optionsRecruits'],
            'filters' => $result['filters'],
            'acceptedCount' => $result['counters']['acceptedCount'],
            'maybeCount' => $result['counters']['maybeCount'],
            'noCount' => $result['counters']['noCount'],
            'langLevels' => $langLevels,
        ]);
    }

    /**
     * Wyświetla szczegóły aplikacji
     */
    public function show(Aplication $aplication)
    {
        // Sprawdź, czy firma ma dostęp do tej aplikacji
        if ($aplication->user_id !== auth()->id()) {
            abort(403, 'Brak uprawnień do tej aplikacji');
        }

        $aplication->load(['project', 'cvClassic', 'media', 'worker', 'notes','openedBy','status_changed_by','cvAudio','cvVideo','candidateAnswers']);
        if($aplication->opened_by_user_id){
        $otherRecruits = OtherRecruitsResource::collection($aplication->user->recruits()->whereNull('user_blocked')->where('id','!=',$aplication->opened_by_user_id)->get());
        } else {
            $otherRecruits = collect([]);
        }

        // Aktualizuj informacje o otwarciu tylko jeśli pola są puste
        if (!$aplication->opened_by_user_id && !$aplication->opened_at) {
            $aplication->update([
                'opened_by_user_id' => auth()->id(),
                'opened_at' => now()
            ]);
        }
        $result = $this->getPointsService->getPoints($aplication);
        if ($result === true) {
            // Operacja się powiodła
        } elseif ($result instanceof \Illuminate\Http\RedirectResponse) {
            return $result; // Przekierowanie z powodu braku punktów
        }
        // Pobierz tylko aktywne pytania
        $candidateQuestions = CandidateQuestion::where('is_active', true)
            ->where('created_by_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->get();

        return inertia()->render('Firm/Aplication/Show', [
            'application' => $aplication,
            'otherRecruits'=>$otherRecruits,
            'candidateQuestions'=>$candidateQuestions,
        ]);
    }

    /**
     * Aktualizuje status aplikacji
     *
     * @param Request $request
     * @param Aplication $aplication
     * @return RedirectResponse
     */
    public function updateStatus(Request $request, Aplication $aplication)
    {
        // Sprawdź, czy firma ma dostęp do tej aplikacji
        if ($aplication->user_id !== auth()->id()) {
            return $this->flashAndRedirect('translate.applyViewBlocked', 'danger');
        }

        $request->validate([
            'status' => 'required|in:yes,no,maybe,""'
        ]);

        // Użyj serwisu do aktualizacji statusu
        $updated = $this->statusService->updateStatus($aplication, $request->status);

        if (!$updated) {
            return $this->flashAndRedirect('translate.cannotChangeStatusAfter90Days', 'danger');
        }

        $aplication->update([
            'status_changed_by_user_id' => auth()->id(),
            'status_changed_at' => now()
        ]);


        return $this->flashAndRedirect('translate.changeStatusAplication');
    }

    /**
     * Wyświetla komunikat flash i przekierowuje z powrotem
     *
     * @param string $message Klucz tłumaczenia dla komunikatu
     * @param string $style Styl komunikatu (success, danger, itp.)
     * @return RedirectResponse
     */
    protected function flashAndRedirect(string $message, string $style = 'success'): RedirectResponse
    {
        session()->flash('flash.banner', __($message));
        session()->flash('flash.bannerStyle', $style);
        return back();
    }

    /**
     * Wyświetla listę zaakceptowanych aplikacji (status 'yes')
     *
     * @param Request $request
     * @return \Inertia\Response
     */
    public function acceptedApplications(Request $request)
    {
        $langLevels=  Cache::rememberForever('langLevels', function() {
            return MultiselectWithoutDetailResource::collection(LangLevel::get());
        });

        $result = $this->filterService->getFilteredApplications($request, 'yes');

        // Załaduj relację notatek dla aplikacji
        $applications = $result['applications'];
        foreach ($applications as $application) {
            $application->load('notes');
        }

        return inertia()->render('Firm/Aplication/Accepted', [
            'applications' => $applications,
            'optionsPosition' => $result['optionsPosition'],
            'optionsRecruits' => $result['optionsRecruits'],
            'filters' => $result['filters'],
            'otherCount' => $result['counters']['otherCount'],
            'maybeCount' => $result['counters']['maybeCount'],
            'noCount' => $result['counters']['noCount'],
            'langLevels' => $langLevels,
        ]);
    }

    /**
     * Wyświetla listę aplikacji ze statusem 'maybe' lub pustym
     *
     * @param Request $request
     * @return \Inertia\Response
     */
    public function maybeApplications(Request $request)
    {
        $langLevels=  Cache::rememberForever('langLevels', function() {
            return MultiselectWithoutDetailResource::collection(LangLevel::get());
        });
        $result = $this->filterService->getFilteredApplications($request, 'maybe');

        return inertia()->render('Firm/Aplication/Maybe', [
            'applications' => $result['applications'],
            'optionsPosition' => $result['optionsPosition'],
            'optionsRecruits' => $result['optionsRecruits'],
            'filters' => $result['filters'],
            'otherCount' => $result['counters']['otherCount'],
            'acceptedCount' => $result['counters']['acceptedCount'],
            'noCount' => $result['counters']['noCount'],
            'langLevels' => $langLevels,

        ]);
    }

    /**
     * Wyświetla listę aplikacji ze statusem 'no'
     *
     * @param Request $request
     * @return \Inertia\Response
     */
    public function noApplications(Request $request)
    {
        $langLevels=  Cache::rememberForever('langLevels', function() {
            return MultiselectWithoutDetailResource::collection(LangLevel::get());
        });
        $result = $this->filterService->getFilteredApplications($request, 'no');

        return inertia()->render('Firm/Aplication/No', [
            'applications' => $result['applications'],
            'optionsPosition' => $result['optionsPosition'],
            'optionsRecruits' => $result['optionsRecruits'],
            'filters' => $result['filters'],
            'otherCount' => $result['counters']['otherCount'],
            'acceptedCount' => $result['counters']['acceptedCount'],
            'maybeCount' => $result['counters']['maybeCount'],
            'langLevels' => $langLevels,

        ]);
    }

    /**
     * Dodaje nową notatkę do aplikacji
     *
     * @param Request $request
     * @param Aplication $aplication
     * @return RedirectResponse
     */
    public function storeNote(Request $request, Aplication $aplication)
    {
        // Sprawdź, czy firma ma dostęp do tej aplikacji
        if ($aplication->user_id !== auth()->id()) {
            return $this->flashAndRedirect('translate.applyViewBlocked', 'danger');
        }

        $data = $request->validate([
            'content' => 'required|string|max:500',
        ],[],[
            'content' => strtolower(__('translate.noteContent')),
        ]);

        $aplication->notes()->create([
            'content' => $data['content'],
        ]);

        return $this->flashAndRedirect('translate.noteAdded');
    }

    /**
     * Aktualizuje istniejącą notatkę
     *
     * @param Request $request
     * @param ApplicationNote $note
     * @return RedirectResponse
     */
    public function updateNote(Request $request, ApplicationNote $note)
    {
        // Sprawdź, czy firma ma dostęp do tej notatki
        if ($note->application->user_id !== auth()->id()) {
            return $this->flashAndRedirect('translate.applyViewBlocked', 'danger');
        }

        $data = $request->validate([
            'content' => 'required|string|max:500',
        ],[],[
            'content' => strtolower(__('translate.noteContent')),
        ]);

        $note->update([
            'content' => $data['content'],
        ]);

        return $this->flashAndRedirect('translate.noteUpdated');
    }

    /**
     * Usuwa notatkę
     *
     * @param ApplicationNote $note
     * @return RedirectResponse
     */
    public function deleteNote(ApplicationNote $note)
    {
        // Sprawdź, czy firma ma dostęp do tej notatki
        if ($note->application->user_id !== auth()->id()) {
            return $this->flashAndRedirect('translate.applyViewBlocked', 'danger');
        }

        $note->delete();

        return $this->flashAndRedirect('translate.noteDeleted');
    }
    public function export(Request $request)
    {
        $result = $this->filterService->getFilteredApplicationsExport($request);
        $applications = $result['applications'];
        $this->getPointsService->handleExportPoints(); // już nie zwraca redirectu
        try {
            return Excel::download(
                new ApplicationsExport($applications),
                'aplikacje_' . now()->format('Y-m-d') . '.xlsx',
                ExcelFormat::XLSX,
                [
                    'Content-Disposition' => 'attachment; filename="aplikacje.xlsx"',
                    'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                ]
            );
        } catch (\Exception $e) {
            \Log::error('Export failed: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Odblokowuje pytania dla aplikacji, pobierając punkty z konta firmy
     *
     * @param Request $request
     * @param Aplication $aplication
     * @return RedirectResponse
     */
    public function unlockQuestions(Request $request, Aplication $aplication)
    {
        // Sprawdź, czy firma ma dostęp do tej aplikacji
        if ($aplication->user_id !== auth()->id()) {
            return $this->flashAndRedirect('translate.applyViewBlocked', 'danger');
        }

        // Jeśli pytania już zostały odblokowane, zwróć sukces
        if ($aplication->questions_unlocked_at) {
            return $this->flashAndRedirect('translate.questionsAlreadyUnlocked');
        }

        // Pobierz firmę użytkownika
        $firm = auth()->user()->firm;

        // Koszt odblokowania pytań
        $cost = config('getPoints.UnlockQuestions', 5);

        // Sprawdź czy firma ma wystarczającą liczbę punktów
        if ($firm->points < $cost) {
            return $this->flashAndRedirect('translate.noPoints', 'danger');
        }

        // Odejmij punkty z konta firmy
        $firm->decrement('points', $cost);

        // Oznacz pytania jako odblokowane
        $aplication->update([
            'questions_unlocked_at' => now()
        ]);

        return $this->flashAndRedirect('translate.questionsUnlocked');
    }

    /**
     * Zapisuje odpowiedzi kandydata na pytania
     *
     * @param Request $request
     * @param Aplication $aplication
     * @return RedirectResponse
     */
    public function saveAnswers(Request $request, Aplication $aplication)
    {
        // Sprawdź, czy firma ma dostęp do tej aplikacji
        if ($aplication->user_id !== auth()->id()) {
            return $this->flashAndRedirect('translate.applyViewBlocked', 'danger');
        }

        // Sprawdź czy pytania zostały odblokowane
        if (!$aplication->questions_unlocked_at) {
            return $this->flashAndRedirect('translate.questionsNotUnlocked', 'danger');
        }

        // Pobierz pytania kandydata
        $questions = CandidateQuestion::where('is_active', true)
            ->where('created_by_id', auth()->id())
            ->get();

        // Przygotuj reguły walidacji
        $rules = [
            'answers' => 'required|array',
            'answers.*.question_id' => 'required|exists:candidate_questions,id',
        ];

        $messages = [
            'answers.required' => __('translate.answersRequired'),
        ];

        // Dodaj dynamiczne reguły walidacji na podstawie typu pytania i sprawdzaj braki odpowiedzi
        $missingAnswers = [];

        foreach ($request->answers as $index => $answer) {
            $question = $questions->firstWhere('id', $answer['question_id']);

            if ($question) {
                if ($question->answer_type === 'text') {
                    $rules["answers.{$index}.text_answer"] = 'required|string|max:1000';
                    $messages["answers.{$index}.text_answer.required"] = __('translate.textAnswerRequired');
                    $messages["answers.{$index}.text_answer.max"] = __('translate.textAnswerTooLong');

                    if (empty($answer['text_answer'])) {
                        $missingAnswers[] = $question->question;
                    }
                } elseif ($question->answer_type === 'boolean') {
                    $rules["answers.{$index}.boolean_answer"] = 'required|boolean';
                    $messages["answers.{$index}.boolean_answer.required"] = __('translate.booleanAnswerRequired');
                    $messages["answers.{$index}.boolean_answer.boolean"] = __('translate.booleanAnswerInvalid');

                    if (!isset($answer['boolean_answer']) && $answer['boolean_answer'] !== false) {
                        $missingAnswers[] = $question->question;
                    }
                }
            }
        }

        // Jeśli brakuje odpowiedzi, zgłoś błąd
        if (!empty($missingAnswers)) {
            throw ValidationException::withMessages([
                'answers' => [__('translate.allAnswersRequired')],
            ]);
        }

        // Wykonaj walidację
        $request->validate($rules, $messages);

        foreach ($request->answers as $answer) {
            CandidateAnswer::updateOrCreate(
                [
                    'candidate_question_id' => $answer['question_id'],
                    'aplication_id' => $aplication->id,
                ],
                [
                    'text_answer' => $answer['text_answer'] ?? null,
                    'boolean_answer' => isset($answer['boolean_answer']) ? (bool)$answer['boolean_answer'] : null,
                ]
            );
        }

        return $this->flashAndRedirect('translate.answersUpdated');
    }

}
