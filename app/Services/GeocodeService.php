<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class GeocodeService
{
    public static function getCoordinates($street, $city, $country): array|null
    {
        $query = trim("$street $city $country");

        if (!$query) return null;

        $token = config('services.mapbox.token');

        $url = "https://api.mapbox.com/geocoding/v5/mapbox.places/" . urlencode($query) . ".json";

        $response = Http::get($url, [
            'access_token' => $token,
            'limit' => 1
        ]);

        if (!$response->ok() || empty($response['features'])) {
            return null;
        }

        $coords = $response['features'][0]['center']; // [lng, lat]

        return [
            'longitude' => $coords[0],
            'latitude' => $coords[1],
        ];
    }

    public static function detectCountry($street, $city): ?string
    {
        $query = trim("$street $city");
        if (!$query) return null;

        $token = config('services.mapbox.token');

        $url = "https://api.mapbox.com/geocoding/v5/mapbox.places/" . urlencode($query) . ".json";

        $response = Http::get($url, [
            'access_token' => $token,
            'types' => 'place,locality,address',
            'limit' => 1
        ]);

        if (!$response->ok() || empty($response['features'])) {
            return null;
        }

        foreach ($response['features'][0]['context'] as $context) {
            if (str_contains($context['id'], 'country')) {
                return $context['text'];
            }
        }

        return null;
    }
}
