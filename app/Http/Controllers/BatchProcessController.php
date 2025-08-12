<?php

namespace App\Http\Controllers;

use App\Models\Aplication;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BatchProcessController extends Controller
{
    /**
     * Proces aktualizacji istniejących aplikacji i przypisanie ich do kandydatów
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function syncExistingApplicationsWithCandidates()
    {
        try {
            // Pobierz wszystkie aplikacje
            $applications = Aplication::all();
            $count = 0;

            // Dla każdej aplikacji utwórz lub zaktualizuj kandydata
            foreach ($applications as $application) {
                // Sprawdź czy aplikacja ma email
                if (empty($application->email)) {
                    continue;
                }

                // Utwórz lub pobierz kandydata
                $candidate = Candidate::firstOrCreate(
                    ['email' => $application->email],
                    [
                        'name' => $application->name,
                        'surname' => $application->surname,
                        'phone' => $application->phone
                    ]
                );

                // Dodaj powiązanie z projektem, jeśli istnieje
                if ($application->project_id) {
                    $candidate->projects()->syncWithoutDetaching([$application->project_id]);
                    $count++;
                }
            }

            return response()->json([
                'success' => true,
                'message' => "Zsynchronizowano {$count} aplikacji z kandydatami."
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Wystąpił błąd podczas synchronizacji: ' . $e->getMessage()
            ], 500);
        }
    }
}
