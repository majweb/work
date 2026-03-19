<?php

namespace App\Http\Resources;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FrontArticleResource extends JsonResource
{
    protected static $usedImages = [];

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

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
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'lang' => $this->lang,
            'active' => $this->active,
            'user' => [
                    'name'=>$this->user['name'],
                    'logo'=>$this->user['profile_photo_url'],
                    'description'=>$this->user->firm['description'],
                ],
            'photo'=> $this->getFirstMedia('articles_images'), // pierwszy plik z kolekcji
            'photo_fb'=> $this->getRandomCategoryImage(), // pierwszy plik z kolekcji
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'short_description' => $this->short_description,
            'alt' => $this->alt,
            'meta_keywords' => $this->meta_keywords,
            'category' => $this->category,
            'created_at' => $this->created_at,
            'comments' => $this->whenLoaded('comments'),

        ];
    }
}
