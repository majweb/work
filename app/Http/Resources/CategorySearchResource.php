<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategorySearchResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $ancestors = $this->ancestors->sortBy('depth')->map(function ($ancestor) {
            return [
                'id' => $ancestor->id,
                'name' => $ancestor->title,
                'value' => $ancestor->id,
                'allTranslations' => $ancestor->getTranslations(),
            ];
        })->values()->toArray();

        return [
            'id' => $this->id,
            'name' => $this->title,
            'value' => $this->id,
            'allTranslations' => $this->getTranslations(),
            'path' => $ancestors,
        ];
    }
}
