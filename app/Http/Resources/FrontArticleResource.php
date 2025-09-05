<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FrontArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'sections' => $this->sections,
            'content' => $this->content,
            'lang' => $this->lang,
            'active' => $this->active,
            'user' => [
                    'name'=>$this->user['name'],
                    'logo'=>$this->user['profile_photo_url'],
                    'description'=>$this->user->firm['description'],
                ],
            'photo'=> $this->getFirstMedia('articles_images'), // pierwszy plik z kolekcji
        ];
    }
}
