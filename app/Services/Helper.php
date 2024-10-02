<?php

namespace App\Services;

use App\Models\Country;
use App\Models\Invoice;

class Helper{

    public function makeCountriesToSelect()
    {
        $countries = Country::get()->groupBy('continent')->toArray();
        foreach ($countries as $key => $value){
            $data[] = [
                'group'=>$key,
                'elements' =>array_map(function($el){
                    return [
                        'name' =>$el['name'][app()->getLocale()],
                        'value'=>$el['id']
                    ];
                },$value)
            ];
        }
        return $data;

    }
}
