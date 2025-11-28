<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MultiselectResourceCountry extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->title ?? $this->name,
            'value' => $this->id,
            'countryCode' => $this->countryCode,
            'detailprojects'=>$this->whenLoaded('detailprojects'),
            'allTranslations'=>$this->getTranslations()
        ];
    }
}
