<?php

namespace App\Http\Controllers\Recruit;

use App\Exports\ApplicationsExport;
use App\Http\Controllers\Controller;
use App\Http\Resources\MultiselectWithoutDetailResource;
use App\Models\Aplication;
use App\Models\ApplicationNote;
use App\Models\LangLevel;
use App\Services\ApplicationFilterService;
use App\Services\ApplicationRecruitFilterService;
use App\Services\ApplicationStatusService;
use App\Services\GetPointsService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Excel\Excel as ExcelFormat;
use Maatwebsite\Excel\Facades\Excel;

class AplicationController extends Controller implements HasMiddleware
{

    protected $filterService;
    protected $statusService;

    protected $getPointsService;


    public function __construct(
        ApplicationRecruitFilterService $filterService,
        ApplicationStatusService $statusService,
        GetPointsService $getPointsService,

    ) {
        $this->filterService = $filterService;
        $this->statusService = $statusService;
        $this->getPointsService = $getPointsService;

    }


    public static function middleware(): array
    {
        return [
            new Middleware('role:recruit'),
            new Middleware('only_direct_permission:application status', only: ['update']),

        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $result = $this->filterService->getFilteredApplications($request);
        $langLevels=  Cache::rememberForever('langLevels', function() {
            return MultiselectWithoutDetailResource::collection(LangLevel::get());
        });
        return inertia()->render('RecruiterPages/Aplication/Index', [
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

    protected function flashAndRedirect(string $message, string $style = 'success'): RedirectResponse
    {
        session()->flash('flash.banner', __($message));
        session()->flash('flash.bannerStyle', $style);
        return back();
    }
    public function update(Request $request, Aplication $aplication)
    {
        if ($aplication->recruiter_id !== auth()->id()) {
            return $this->flashAndRedirect('translate.applyViewBlocked', 'danger');
        }

        $request->validate([
            'status' => 'required|in:yes,no,maybe,""'
        ]);

        // Aktualizuj status i zapisz informacje o zmianie
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

    public function show(Aplication $aplication)
    {
        Gate::authorize('aplication-recruiter', $aplication);
        $aplication->load(['project','project', 'cvClassic', 'media', 'worker', 'notes', 'opened_by', 'status_changed_by','cvAudio','cvVideo']);


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


        $locale = app()->getLocale();
        return inertia()->render('RecruiterPages/Aplication/Show', [
            'application' => $aplication,
            'locale' => $locale
        ]);
    }

    public function destroy(Aplication $aplication)
    {
        Gate::authorize('aplication-recruiter', $aplication);
        $aplication->delete();
        session()->flash('flash.banner', __('translate.deleteAplication'));
        session()->flash('flash.bannerStyle', 'success');
        return to_route('project-aplications-recruits.index');
    }

    public function recruitmentView(Aplication $aplication)
    {
        Gate::authorize('aplication-recruiter', $aplication);
        return inertia()->render('RecruiterPages/Aplication/recruitmentView', ['aplication' => $aplication]);
    }

    public function acceptedApplications(Request $request)
    {
        $result = $this->filterService->getFilteredApplications($request, 'yes');
        $langLevels=  Cache::rememberForever('langLevels', function() {
            return MultiselectWithoutDetailResource::collection(LangLevel::get());
        });
        // Załaduj relację notatek dla aplikacji
        $applications = $result['applications'];
        foreach ($applications as $application) {
            $application->load('notes');
        }

        return inertia()->render('RecruiterPages/Aplication/Accepted', [
            'applications' => $applications,
            'optionsPosition' => $result['optionsPosition'],
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
        $result = $this->filterService->getFilteredApplications($request, 'maybe');
        $langLevels=  Cache::rememberForever('langLevels', function() {
            return MultiselectWithoutDetailResource::collection(LangLevel::get());
        });
        return inertia()->render('RecruiterPages/Aplication/Maybe', [
            'applications' => $result['applications'],
            'optionsPosition' => $result['optionsPosition'],
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
        $result = $this->filterService->getFilteredApplications($request, 'no');
        $langLevels=  Cache::rememberForever('langLevels', function() {
            return MultiselectWithoutDetailResource::collection(LangLevel::get());
        });
        return inertia()->render('RecruiterPages/Aplication/No', [
            'applications' => $result['applications'],
            'optionsPosition' => $result['optionsPosition'],
            'filters' => $result['filters'],
            'otherCount' => $result['counters']['otherCount'],
            'acceptedCount' => $result['counters']['acceptedCount'],
            'maybeCount' => $result['counters']['maybeCount'],
            'langLevels' => $langLevels,
        ]);
    }

    public function storeNote(Request $request, Aplication $aplication)
    {
        // Sprawdź, czy firma ma dostęp do tej aplikacji
        if ($aplication->recruiter_id !== auth()->id()) {
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
        if ($note->application->recruiter_id !== auth()->id()) {
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
        if ($note->application->recruiter_id !== auth()->id()) {
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








}
