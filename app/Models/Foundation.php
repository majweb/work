<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Foundation extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $fillable = [
        'country',
        'name',
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


    /**
     * Główna kategoria fundacji
     */


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('foundation_logo');
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    protected static function booted()
    {
        static::created(function ($foundation) {
            if (empty($foundation->registration_code)) {
                $foundation->registration_code =
                    'FND-' .
                    $foundation->id . '-' .
                    strtoupper(Str::random(4));

                $foundation->saveQuietly(); // ⬅️ ważne
            }
        });
    }
}
