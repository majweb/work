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
            ->whereNotNull('lng')
            ->activeLang();

        if ($countryCode !== 'default') {
            $query->whereJsonContains('countryWork', ['countryCode' => $countryCode]);
        }

        $projects = $query->get();

        $cities = $projects->groupBy('cityWork')
            ->map(function ($group, $cityName) {
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
