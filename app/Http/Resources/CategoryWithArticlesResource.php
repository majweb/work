<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\NewestArticleArticlesPageResource;

class CategoryWithArticlesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if (!$this->resource) {
            return [];
        }
        return [
            'name' => $this->resource['name'], // pobieramy z tablicy resource
            'value' => $this->resource['value'], // pobieramy z tablicy resource
            'articles' => NewestArticleArticlesPageResource::collection($this->resource['articles']),
        ];
    }
}
