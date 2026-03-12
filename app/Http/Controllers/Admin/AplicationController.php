<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\MultiselectWithoutDetailResource;
use App\Models\Aplication;
use App\Models\ApplicationNote;
use App\Models\LangLevel;
use App\Services\ApplicationFilterService;
use App\Services\ApplicationStatusService;
use App\Services\Helper;
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
    protected $helper;

    public function __construct(
        ApplicationFilterService $filterService,
        ApplicationStatusService $statusService,
        Helper $helper
    ) {
        $this->filterService = $filterService;
        $this->statusService = $statusService;
        $this->helper = $helper;
    }

    /**
     * Wyświetla listę wszystkich aktywnych aplikacji
     *
     * @param Request $request
     * @return \Inertia\Response
     */
    public function index(Request $request)
    {
        $result = $this->filterService->getFilteredApplicationsAdmin($request);
        $langLevels = Cache::rememberForever('langLevels', function() {
            return MultiselectWithoutDetailResource::collection(LangLevel::get());
        });
        $countries = $this->helper->makeCountriesToSelectHasProjects();

        return inertia()->render('Admin/Aplication/Index', [
            'applications' => $result['applications'],
            'optionsPosition' => $result['optionsPosition'],
            'optionsFirms' => $result['optionsFirms'],
            'optionsRecruits' => $result['optionsRecruits'],
            'optionsExternal' => $result['optionsExternal'],
            'filters' => $result['filters'],
            'acceptedCount' => $result['counters']['acceptedCount'],
            'maybeCount' => $result['counters']['maybeCount'],
            'noCount' => $result['counters']['noCount'],
            'otherCount' => $result['counters']['otherCount'],
            'langLevels' => $langLevels,
            'countries' => $countries,
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
     * Wyświetla listę aplikacji ze statusem 'no'
     *
     * @param Request $request
     * @return \Inertia\Response
     */

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

    public function export(Request $request)
    {
        $result = $this->filterService->getFilteredApplicationsExportAdmin($request);
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
            \Log::error('Admin Export failed: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getRecruitsByFirm($firmId)
    {
        $recruits = $this->filterService->getRecruitsAdmin($firmId);
        return response()->json($recruits);
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
