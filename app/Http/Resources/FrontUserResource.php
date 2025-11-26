<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class FrontUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'logo' => $this->profilePhotoUrl,
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->firm->contact_phone,
            'opinion_google' => $this->firm->opinion_google,
            'opinion_trust' => $this->firm->opinion_trust,
            'opinion_facebook' => $this->firm->opinion_facebook,
            'city' => $this->firm->city,
            'postal' => $this->firm->postal,
            'nip' => $this->firm->nip,
            'regon' => $this->firm->regon,
            'description' => $this->firm->description,
            'extra_description' => $this->firm->extra_description,
            'website' => $this->firm->www,
            'count_workers' => $this->firm->count_workers,
            'video' => Storage::url($this->firm->video),
            'street' => $this->firm->street,
            'number' => $this->firm->number,
            'country' => $this->firm->country,
            'countryJson' => $this->firm->countryJson,
            'annual_turnover' => $this->firm->annual_turnover,
            'social_facebook' => $this->firm->social_facebook,
            'social_google' => $this->firm->social_google,
            'social_x' => $this->firm->social_x,
            'social_instagram' => $this->firm->social_instagram,
            'social_linkedin' => $this->firm->social_linkedin,
            'social_tiktok' => $this->firm->social_tiktok,
            'points' => $this->firm->points,
            'currency' => $this->firm->currency,
            'projects' => $this->whenLoaded('projects'),
        ];
    }
}
