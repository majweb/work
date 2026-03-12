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

        return inertia()->render('Admin/Aplication/Index', [
            'applications' => $result['applications'],
            'optionsPosition' => $result['optionsPosition'],
            'optionsRecruits' => $result['optionsRecruits'],
            'optionsExternal' => $result['optionsExternal'],
            'filters' => $result['filters'],
            'acceptedCount' => $result['counters']['acceptedCount'],
            'maybeCount' => $result['counters']['maybeCount'],
            'noCount' => $result['counters']['noCount'],
            'otherCount' => $result['counters']['otherCount'],
            'langLevels' => $langLevels,
        ]);
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
        $langLevels = Cache::rememberForever('langLevels', function() {
            return MultiselectWithoutDetailResource::collection(LangLevel::get());
        });

        return inertia()->render('Admin/Aplication/Accepted', [
            'applications' => $result['applications'],
            'optionsPosition' => $result['optionsPosition'],
            'optionsRecruits' => $result['optionsRecruits'],
            'optionsExternal' => $result['optionsExternal'],
            'filters' => $result['filters'],
            'acceptedCount' => $result['counters']['acceptedCount'],
            'maybeCount' => $result['counters']['maybeCount'],
            'noCount' => $result['counters']['noCount'],
            'otherCount' => $result['counters']['otherCount'],
            'langLevels' => $langLevels,
        ]);
    }

    /**
     * Wyświetla listę aplikacji o statusie 'maybe'
     *
     * @param Request $request
     * @return \Inertia\Response
     */
    public function maybeApplications(Request $request)
    {
        $result = $this->filterService->getFilteredApplicationsAdmin($request, 'maybe');
        $langLevels = Cache::rememberForever('langLevels', function() {
            return MultiselectWithoutDetailResource::collection(LangLevel::get());
        });

        return inertia()->render('Admin/Aplication/Maybe', [
            'applications' => $result['applications'],
            'optionsPosition' => $result['optionsPosition'],
            'optionsRecruits' => $result['optionsRecruits'],
            'optionsExternal' => $result['optionsExternal'],
            'filters' => $result['filters'],
            'acceptedCount' => $result['counters']['acceptedCount'],
            'maybeCount' => $result['counters']['maybeCount'],
            'noCount' => $result['counters']['noCount'],
            'otherCount' => $result['counters']['otherCount'],
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
        $result = $this->filterService->getFilteredApplicationsAdmin($request, 'no');
        $langLevels = Cache::rememberForever('langLevels', function() {
            return MultiselectWithoutDetailResource::collection(LangLevel::get());
        });

        return inertia()->render('Admin/Aplication/No', [
            'applications' => $result['applications'],
            'optionsPosition' => $result['optionsPosition'],
            'optionsRecruits' => $result['optionsRecruits'],
            'optionsExternal' => $result['optionsExternal'],
            'filters' => $result['filters'],
            'acceptedCount' => $result['counters']['acceptedCount'],
            'maybeCount' => $result['counters']['maybeCount'],
            'noCount' => $result['counters']['noCount'],
            'otherCount' => $result['counters']['otherCount'],
            'langLevels' => $langLevels,
        ]);
    }

    /**
     * Eksportuje aplikacje do pliku Excel
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function export(Request $request)
    {
        $status = $request->input('status_type');
        $result = $this->filterService->getFilteredApplicationsExportAdmin($request, $status);

        return Excel::download(
            new ApplicationsExport($result['applications']),
            'aplikacje_admin_' . now()->format('Y-m-d') . '.xlsx',
            ExcelFormat::XLSX
        );
    }
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
