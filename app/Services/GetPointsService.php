<?php

namespace App\Services;

use App\Models\Aplication;
use Illuminate\Http\RedirectResponse;

class GetPointsService
{
    public function getPoints(Aplication $aplication)
    {
        // Jeśli punkty już zostały pobrane, nie wykonujemy dalszych operacji
        if (!is_null($aplication->points_downloaded_at)) {
            return false;
        }

        // Określenie liczby punktów na podstawie typu CV
        $points = $this->calculatePoints($aplication);

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
        $firm->decrement('points', $points);
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
        return 0;
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
        $firm = auth()->user() && auth()->user()->hasRole('firm') ? auth()->user()->firm : (auth()->user() && auth()->user()->hasRole('recruit') ? auth()->user()->user->firm : 0);

        if ($firm->points >= $cost) {
            $firm->decrement('points', $cost);
            return;
        }

        // Rzucamy wyjątek lub zwracamy response z błędem
        abort(403, __('translate.noPoints'));
    }}
