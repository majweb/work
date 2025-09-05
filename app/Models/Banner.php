<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Banner extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $casts = [
        'active'=>'boolean',
        'lang'=>'array',
    ];

    protected $fillable = [
        'user_id',
        'url',
        'lang',
        'active'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function scopeWithActiveBanner($query)
    {
        return $query->active()
            ->lang()
            ->inRandomOrder()
            ->whereHas('user.changeProducts', function ($q) {
                $q->where('product_id', 8)
                    ->whereDate('start', '<=', now())
                    ->whereDate('end', '>=', now());
            });
    }

    public function scopeActive($query)
    {
        return $query->where('active',1);
    }
    public function scopeLang($query)
    {

        $locale = getLocalBrowserLang();
        return $query->whereJsonContains('lang', ['countryCode' => $locale]);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Fit::Fill, 300, 300)
            ->nonQueued();
    }
}
