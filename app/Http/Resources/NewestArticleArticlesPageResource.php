<?php

namespace App\Http\Resources;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewestArticleArticlesPageResource extends JsonResource
{
    protected static $usedImages = [];


    public function toArray($request)
    {
        return [
            'created' => $this->created_at,
            'id' => $this->id,
            'avatar' => $this->user->profilePhotoUrl,
            'title' => $this->title,
            'content' => $this->content,
            'author' => $this->user ? $this->user->name : null,
            'image' => $this->getRandomCategoryImage(),
        ];
    }

    protected function getRandomCategoryImage()
    {
        if (!isset($this->category)) return null;

        $categoryId = $this->category['value'] ?? null;
        if (!$categoryId) return null;

        $category = Category::find($categoryId);
        if (!$category) return null;

        $mediaItems = $category->getMedia('images_category')->values();
        if ($mediaItems->isEmpty()) return null;

        $usedIds = static::$usedImages[$categoryId] ?? [];

        // Filtrujemy media, które nie były jeszcze użyte
        $available = $mediaItems->filter(fn($media) => !in_array($media->id, $usedIds))->values();

        if ($available->isEmpty()) {
            // Wszystkie media zostały już użyte → resetujemy
            $available = $mediaItems;
            static::$usedImages[$categoryId] = [];
        }

        // Losujemy jeden z dostępnych
        $randomMedia = $available->random();

        // Zapisujemy go jako użyty
        static::$usedImages[$categoryId][] = $randomMedia->id;

        return $randomMedia->getUrl();
    }
}
