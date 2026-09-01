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
         $categories = Project::active()->get()
             ->map(function ($item) {
                 $countryData = is_string($item->country)
                     ? json_decode($item->country, true)
                     : $item->country;

                 $categoryData = is_string($item->category)
                     ? json_decode($item->category, true)
                     : $item->category;
                 return [
                     'countryCode' => $countryData['countryCode'] ?? null,
                     'category' => $categoryData,
                 ];
             })
             ->when($countryCode, function ($collection) use ($countryCode) {
                 return $collection->filter(fn($item) => $item['countryCode'] === $countryCode);
             })
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
