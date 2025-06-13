<?php

namespace App\Http\Controllers\Firm;

use App\Http\Controllers\Controller;
use App\Models\Aplication;
use App\Models\ApplicationNote;
use App\Services\ApplicationFilterService;
use App\Services\ApplicationStatusService;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AplicationController extends Controller
{
    protected $filterService;
    protected $statusService;

    /**
     * Konstruktor wstrzykujący serwisy
     */
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
        $result = $this->filterService->getFilteredApplications($request);

        return inertia()->render('Firm/Aplication/Index', [
            'applications' => $result['applications'],
            'optionsPosition' => $result['optionsPosition'],
            'optionsRecruits' => $result['optionsRecruits'],
            'filters' => $result['filters'],
            'acceptedCount' => $result['counters']['acceptedCount'],
            'maybeCount' => $result['counters']['maybeCount'],
            'noCount' => $result['counters']['noCount'],
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

        $aplication->load(['project', 'cvClassic', 'media', 'worker', 'notes']);

        return inertia()->render('Firm/Aplication/Show', [
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

        return inertia()->render('Firm/Aplication/Maybe', [
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
        $result = $this->filterService->getFilteredApplications($request, 'no');

        return inertia()->render('Firm/Aplication/No', [
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
}
