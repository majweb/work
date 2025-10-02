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

        $cities = Project::all()
            ->map(function ($item) {
                // dekodujemy JSON z kolumny countryWork
                $countryData = is_string($item->countryWork)
                    ? json_decode($item->countryWork, true)
                    : $item->countryWork;

                return [
                    'countryCode' => $countryData['countryCode'] ?? null,
                    'cityWork' => $item->cityWork,
                ];
            })
            ->filter(function ($item) use ($countryCode) {
                return $item['countryCode'] === $countryCode;
            })
            ->pluck('cityWork')
            ->filter()
            ->unique()
            ->values();

        $data = $cities->map(fn($city) => [
            'name' => $city,
            'value' => $city,
        ])->toArray(); // 👈 bardzo ważne
        return response()->json($data);
    }
}
