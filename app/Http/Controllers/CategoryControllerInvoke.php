<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class CategoryControllerInvoke extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($countryCode = null)
    {
        $query = Project::active();

        if ($countryCode) {
            $query->whereJsonContains('countryWork', ['countryCode' => $countryCode]);
        } else {
            $query->lang();
        }

        $categories = $query->get()
            ->map(function ($item) {
                $categoryData = is_string($item->category)
                    ? json_decode($item->category, true)
                    : $item->category;

                return [
                    'category' => $categoryData,
                ];
            })
            ->pluck('category')
            ->filter()
            ->unique('value')
            ->values()
            ->map(fn ($cat) => [
                'name' => $cat['allTranslations']['title'][app()->getLocale()] ?? $cat['name'] ?? '',
                'value' => $cat['value'] ?? null,
                'allTranslations' => $cat['allTranslations']['title'] ?? [],
            ])
            ->toArray();

        return response()->json($categories);
    }
}
