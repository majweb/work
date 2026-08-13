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
        $projects = Project::whereNotNull('lat')
            ->whereNotNull('lng')
            ->active()
            ->get();

        $cities = $projects->groupBy('cityWork')
            ->map(function ($group, $cityName) use ($countryCode) {
                $first = $group->first();
                $countryData = is_string($first->countryWork)
                    ? json_decode($first->countryWork, true)
                    : $first->countryWork;

                if (($countryData['countryCode'] ?? null) !== $countryCode) {
                    return null;
                }

                return [
                    'name' => $cityName,
                    'value' => $cityName,
                    'lat' => $group->avg('lat'),
                    'lng' => $group->avg('lng'),
                ];
            })
            ->filter()
            ->values();

        return response()->json($cities);
    }
}
