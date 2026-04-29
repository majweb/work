<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TypeOfContractResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $id = $this->id ?? $this->value;

        return [
            'id' => $id,
            'value' => $id, // Dodanie 'value' naprawi problem w komponentach typu select/multiselect
            'name'=>$this->name,
            'allTranslations'=>$this->getTranslations()
        ];
    }
}
