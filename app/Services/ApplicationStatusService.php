<?php

namespace App\Services;

use App\Mail\ApplicationConsideredMail;
use App\Models\Aplication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ApplicationStatusService
{
    /**
     * Aktualizuje status aplikacji i wykonuje odpowiednie operacje
     *
     * @param Aplication $aplication Aplikacja do aktualizacji
     * @param string $status Nowy status aplikacji
     * @return bool Czy operacja się powiodła
     */
    public function updateStatus(Aplication $aplication, string $status): bool
    {
        // Sprawdź czy aplikacja nie jest starsza niż 90 dni
        if ($aplication->isOlderThan90Days()) {
            return false;
        }

        // Przygotuj dane do aktualizacji
        $data = $this->prepareStatusUpdateData($status);

        // Zaktualizuj aplikację
        $updated = $aplication->update($data);

        // Wyślij e-mail z powiadomieniem
        if ($updated) {
            $this->sendStatusUpdateEmail($aplication,$status);
        }

        return $updated;
    }

    /**
     * Przygotowuje dane do aktualizacji statusu aplikacji
     *
     * @param string $status Nowy status aplikacji
     * @return array Dane do aktualizacji
     */
    private function prepareStatusUpdateData(string $status): array
    {
        $data = ['status' => $status];

        if ($status === 'no') {
            $data['whenDeleted'] = now();
            $data['whenMaybe'] = null;
        } elseif ($status === 'maybe') {
            $data['whenMaybe'] = now();
            $data['whenDeleted'] = null;
        } else {
            $data['whenDeleted'] = null;
            $data['whenMaybe'] = null;
        }

        return $data;
    }

    /**
     * Wysyła e-mail z powiadomieniem o zmianie statusu
     *
     * @param Aplication $aplication Aplikacja, której status został zmieniony
     * @return void
     */
    private function sendStatusUpdateEmail(Aplication $aplication, string $status): void
    {
        $lang = app()->getLocale();
        Mail::to($aplication->email)
            ->locale($lang)
            ->send(new ApplicationConsideredMail($aplication, $status));
    }
}
