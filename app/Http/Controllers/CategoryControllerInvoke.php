<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class CategoryControllerInvoke extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($countryCode)
    {
        $categories = Project::all()
            ->map(function ($item) {
                $countryData = is_string($item->countryWork)
                    ? json_decode($item->countryWork, true)
                    : $item->countryWork;

                $categoryData = is_string($item->category)
                    ? json_decode($item->category, true)
                    : $item->category;

                return [
                    'countryCode' => $countryData['countryCode'] ?? null,
                    'category' => $categoryData,
                ];
            })
            ->filter(fn($item) => $item['countryCode'] === $countryCode)
            ->pluck('category')
            ->filter()
            ->unique('value')
            ->values()
            ->map(fn($cat) => [
                'name' => $cat['allTranslations']['title'][app()->getLocale()] ?? $cat['name'], // <- tutaj tłumaczenie
                'value' => $cat['value'],
                'allTranslations' => $cat['allTranslations']['title'],
            ])
            ->toArray();

        return response()->json($categories);
    }
}
