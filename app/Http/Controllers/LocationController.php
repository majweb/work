<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($countryCode)
    {
        $projects = Project::whereNotNull('lat')
            ->whereNotNull('lng')
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
