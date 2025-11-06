<?php

namespace App\Services;

use App\Lang\Lang;
use App\Models\Country;
use App\Models\Invoice;
use App\Models\Project;

class Helper{

    public function makeCountriesToSelect()
    {
//        $exists = collect(Lang::cases())->map(fn($case) => $case->label());
        $countries = Country::get()->groupBy('continent')->toArray();

        foreach ($countries as $key => $value){
            $data[] = [
                'group'=>$key,
                'elements' =>array_map(function($el){
                    return [
                        'name' =>$el['name'][app()->getLocale()],
                        'value'=>$el['id'],
                        'countryCode'=>$el['countryCode'],
                        'allTranslations'=>$el['name']
                    ];
                },$value)
            ];
        }
        return $data;

    }
    public function makeCountriesToSelectHasProjects()
    {

        $countryCodes = Project::all()
            ->pluck('countryWork')
            ->filter()
            ->map(function ($item) {
                // jeśli $item jest stringiem JSON → dekoduj
                if (is_string($item)) {
                    $decoded = json_decode($item, true);
                } elseif (is_array($item)) {
                    $decoded = $item;
                } else {
                    return null;
                }

                // sprawdź, czy mamy 'countryCode'
                if (isset($decoded['countryCode'])) {
                    return $decoded['countryCode'];
                }

                return null;
            })
            ->filter()
            ->unique()
            ->toArray();


        if(!empty($countryCodes)){
            // Pobierz kraje, które mają projekty
            $countries = Country::whereIn('countryCode', $countryCodes)
                ->get()
                ->groupBy('continent')->toArray(); // przykładowa grupa, możesz grupować np. po kontynencie

            foreach ($countries as $key => $value) {
                $data[] = [
                    'group' => $key,
                    'elements' =>array_map(function($el){
                        return [
                            'name' =>$el['name'][app()->getLocale()],
                            'value'=>$el['id'],
                            'countryCode'=>$el['countryCode'],
                            'allTranslations'=>$el['name']
                        ];
                    },$value)
                ];
            }
            return $data;
        } else {
            return [];
        }

    }
}
