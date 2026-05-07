<?php

namespace App\Services;

use App\Models\Aplication;
use Illuminate\Http\RedirectResponse;

class GetPointsService
{
    public function __construct(protected PointService $pointService)
    {
    }

    public function getPoints(Aplication $aplication)
    {
        // Jeśli punkty już zostały pobrane, nie wykonujemy dalszych operacji
        if (!is_null($aplication->points_downloaded_at)) {
            return false;
        }

        // Określenie liczby punktów na podstawie typu CV
        $points = $this->calculatePoints($aplication);
        $actionName = $this->getActionName($aplication);

        // Sprawdzenie czy użytkownik ma odpowiednią rolę i firmę
        $firm = $this->getFirmForUser($aplication);

        if (!$firm) {
            return false;
        }

        // Sprawdzenie czy firma ma wystarczającą liczbę punktów
        if ($firm->points <= $points) {
            session()->flash('flash.banner', __('translate.noPoints'));
            session()->flash('flash.bannerStyle', 'danger');
            return redirect()->back();
        }

        // Aktualizacja punktów i znacznika czasu
        $this->pointService->decrement($firm->user, $points, $actionName);
        $aplication->update(['points_downloaded_at' => now()]);

        return true;
    }

    private function calculatePoints(Aplication $aplication): int
    {
        if ($aplication->cvClassic) {
            return config('getPoints.OpenAppWithPdf');
        }
        if ($aplication->cvAudio) {
            return config('getPoints.OpenAppWithAudio');
        }
        if ($aplication->cvVideo) {
            return config('getPoints.OpenAppWithVideo');
        }
        return config('getPoints.OpenAppWithNoAuth', 0);
    }

    private function getActionName(Aplication $aplication): string
    {
        if ($aplication->cvClassic) {
            return 'OpenAppWithPdf';
        }
        if ($aplication->cvAudio) {
            return 'OpenAppWithAudio';
        }
        if ($aplication->cvVideo) {
            return 'OpenAppWithVideo';
        }
        // ZMIANA: Zamiast OpenAppUnknown, używamy konkretnej nazwy
        return 'OpenAppWithNoAuth';
    }

    private function getFirmForUser(Aplication $aplication)
    {
        if (!auth()->check()) {
            return null;
        }

        $user = auth()->user();

        if ($user->hasRole('firm') && $user->firm()->exists()) {
            return $user->firm;
        }

        if ($user->hasRole('recruit')) {
            return $aplication->recruit->user->firm;
        }
        return null;
    }

    /**
     * Obsługuje odejmowanie punktów za eksport aplikacji
     *
     * @return RedirectResponse|null
     */
    public function handleExportPoints(): void
    {
        $cost = config('getPoints.ExportAplications');
        $user = auth()->user();
        if (!$user) {
            abort(403, 'Unauthorized');
        }

        $firm = $user->hasRole('firm') ? $user->firm : ($user->hasRole('recruit') ? $user->user->firm : null);

        if ($firm && $firm->points >= $cost) {
            $this->pointService->decrement($firm->user, $cost, 'ExportAplications');
            return;
        }

        // Rzucamy wyjątek lub zwracamy response z błędem
        abort(403, __('translate.noPoints'));
    }
}
