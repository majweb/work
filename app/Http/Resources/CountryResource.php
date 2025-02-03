<?php

namespace App\Http\Resources;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $countries = Country::get()->groupBy('continent')->toArray();
        $data=[];

        foreach ($countries as $key => $value){
            $data[] = [
                'group'=>$key,
                'elements' =>array_map(function($el){
                    return [
                        'name' =>$el['name'][app()->getLocale()],
                        'value'=>$el['id'],
                        'allTranslations'=>$el['name']
                    ];
                },$value)
            ];
        }
        return $data;
    }
}
