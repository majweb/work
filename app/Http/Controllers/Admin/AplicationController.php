<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\MultiselectWithoutDetailResource;
use App\Models\Aplication;
use App\Models\ApplicationNote;
use App\Models\LangLevel;
use App\Services\ApplicationFilterService;
use App\Services\ApplicationStatusService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ApplicationsExport;
use Maatwebsite\Excel\Excel as ExcelFormat; // Tylko do stałych: ExcelFormat::XLSX

class AplicationController extends Controller
{
    protected $filterService;
    protected $statusService;

    public function __construct(
        ApplicationFilterService $filterService,
        ApplicationStatusService $statusService
    ) {
        $this->filterService = $filterService;
        $this->statusService = $statusService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Aplication $aplication = null)
    {
        $result = $this->filterService->getFilteredApplicationsAdmin($request);
        $langLevels=  Cache::rememberForever('langLevels', function() {
            return MultiselectWithoutDetailResource::collection(LangLevel::get());
        });
        return inertia()->render('Admin/Aplication/Index', [
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
     * Eksportuje wyfiltrowane aplikacje do pliku CSV
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function export(Request $request)
    {
        $result = $this->filterService->getFilteredApplicationsAdminExport($request);
        $applications = $result['applications'];
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
     * Wyświetla szczegóły aplikacji
     */
    public function show(Aplication $aplication)
    {
        $aplication->load(['project', 'cvClassic', 'media', 'worker', 'notes']);

        return inertia()->render('Admin/Aplication/Show', [
            'application' => $aplication
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
        $request->validate([
            'status' => 'required|in:yes,no,maybe,""'
        ]);

        // Użyj serwisu do aktualizacji statusu
        $updated = $this->statusService->updateStatus($aplication, $request->status);

        if (!$updated) {
            return $this->flashAndRedirect('translate.cannotChangeStatusAfter90Days', 'danger');
        }

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
        $result = $this->filterService->getFilteredApplicationsAdmin($request, 'yes');

        // Załaduj relację notatek dla aplikacji
        $applications = $result['applications'];
        foreach ($applications as $application) {
            $application->load('notes');
        }

        return inertia()->render('Admin/Aplication/Accepted', [
            'applications' => $applications,
            'optionsPosition' => $result['optionsPosition'],
            'optionsRecruits' => $result['optionsRecruits'],
            'filters' => $result['filters'],
            'otherCount' => $result['counters']['otherCount'],
            'maybeCount' => $result['counters']['maybeCount'],
            'noCount' => $result['counters']['noCount'],
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
        $result = $this->filterService->getFilteredApplicationsAdmin($request, 'maybe');

        return inertia()->render('Admin/Aplication/Maybe', [
            'applications' => $result['applications'],
            'optionsPosition' => $result['optionsPosition'],
            'optionsRecruits' => $result['optionsRecruits'],
            'filters' => $result['filters'],
            'otherCount' => $result['counters']['otherCount'],
            'acceptedCount' => $result['counters']['acceptedCount'],
            'noCount' => $result['counters']['noCount'],
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
        $result = $this->filterService->getFilteredApplicationsAdmin($request, 'no');

        return inertia()->render('Admin/Aplication/No', [
            'applications' => $result['applications'],
            'optionsPosition' => $result['optionsPosition'],
            'optionsRecruits' => $result['optionsRecruits'],
            'filters' => $result['filters'],
            'otherCount' => $result['counters']['otherCount'],
            'acceptedCount' => $result['counters']['acceptedCount'],
            'maybeCount' => $result['counters']['maybeCount'],
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

        $note->delete();

        return $this->flashAndRedirect('translate.noteDeleted');
    }

}
