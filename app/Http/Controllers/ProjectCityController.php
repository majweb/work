<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\JsonResponse;

class ProjectCityController extends Controller
{
    /**
     * Pobiera listę miast z aktywnych projektów.
     * Jeśli $countryCode to 'default', używa scope activeLang (język przeglądarki).
     */
    public function __invoke(string $countryCode): JsonResponse
    {
        $query = Project::whereNotNull('lat')
            ->whereNotNull('lng');

        if ($countryCode === 'default') {
            $query->activeLang();
        } else {
            $query->active()
                ->whereJsonContains('countryWork', ['countryCode' => $countryCode]);
        }

        $projects = $query->get();

        $cities = $projects->groupBy('cityWork')
            ->map(function ($group, $cityName) {
                $first = $group->first();
                return [
                    'name' => $cityName,
                    'value' => $cityName,
                    'lat' => $group->avg('lat'),
                    'lng' => $group->avg('lng'),
                ];
            })
            ->values();

        return response()->json($cities);
    }
}
