<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Foundation extends Model implements HasMedia
{
    use HasFactory,HasSlug, InteractsWithMedia;

    protected $fillable = [
        'country',
        'name',
        'slug',
        'iban',
        'swift',
        'krs',
        'category_id',
        'subcategory_id',
        'phone',
        'email',
        'www',
        'description',
        'address_street',
        'address_city',
        'address_country',
        'year_of_foundation',
        'worker_count',
        'benefit_organization',
        'latitude',
        'longitude',
        'active',
        'facebook_url',
        'instagram_url',
        'linkedin_url',
        'x_url',
        'tiktok_url',
        'address_postcode',
        'registration_code',
    ];

    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float',
        'active' => 'boolean',
        'benefit_organization' => 'boolean',
        'category_id' => 'json',
        'subcategory_id' => 'json',
        'address_country' => 'json',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Główna kategoria fundacji
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('foundation_logo');
    }

    public function invoice(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }

    protected static function booted()
    {
        static::created(function ($foundation) {
            if (empty($foundation->registration_code)) {
                $foundation->registration_code =
                    'FND-'.
                    $foundation->id.'-'.
                    strtoupper(Str::random(4));

                $foundation->saveQuietly(); // ⬅️ ważne
            }
        });
    }
}
