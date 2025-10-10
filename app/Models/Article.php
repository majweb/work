<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Article extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;


    protected $casts = [
        'active'=>'boolean',
        'category'=>'array',

    ];

    protected $fillable = [
        'user_id',
        'title',
        'active',
        'content',
        'lang',
        'meta_title',
        'meta_description',
        'short_description',
        'alt',
        'meta_keywords',
        'category',

    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active',1);
    }

    public function scopeLang($query)
    {
        return $query->where('lang',app()->getLocale());
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Fit::Fill, 300, 300)
            ->nonQueued();
    }

}
