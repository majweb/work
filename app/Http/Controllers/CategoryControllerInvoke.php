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
                 // Dekodowanie kolumny 'country', która zawiera tablicę krajów
                 $countries = is_string($item->country)
                     ? json_decode($item->country, true)
                     : $item->country;

                 // Pobranie wszystkich kodów krajów przypisanych do projektu
                 $countryCodes = collect($countries)->pluck('countryCode')->toArray();

                 $categoryData = is_string($item->category)
                     ? json_decode($item->category, true)
                     : $item->category;

                 return [
                     'countryCodes' => $countryCodes,
                     'category' => $categoryData,
                 ];
             })
             ->when($countryCode, function ($collection) use ($countryCode) {
                 // Filtrowanie: sprawdzenie czy szukany kod kraju znajduje się w tablicy krajów projektu
                 return $collection->filter(fn($item) => in_array($countryCode, $item['countryCodes']));
             })
             ->pluck('category')
             ->filter()
             ->unique('value')
             ->values()
             ->map(fn($cat) => [
                 'name' => $cat['allTranslations']['title'][app()->getLocale()] ?? $cat['name'],
                 'value' => $cat['value'],
                 'allTranslations' => $cat['allTranslations']['title'] ?? [],
             ])
             ->toArray();

         return response()->json($categories);
     }
 }
