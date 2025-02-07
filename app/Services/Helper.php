<?php

namespace App\Services;

use App\Lang\Lang;
use App\Models\Country;
use App\Models\Invoice;

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
}
