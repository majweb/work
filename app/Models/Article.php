<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Article extends Model implements HasMedia
{
    use HasFactory;
    use HasSlug;
    use InteractsWithMedia;

    protected $casts = [
        'active' => 'boolean',
        'active_admin' => 'boolean',
        'category' => 'array',
    ];

    protected $fillable = [
        'user_id',
        'title',
        'active',
        'active_admin',
        'content',
        'lang',
        'meta_title',
        'meta_description',
        'short_description',
        'alt',
        'meta_keywords',
        'category',
        'slug',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1)->where('active_admin', 1);
    }

    public function scopeLang($query)
    {
        return $query->where('lang', app()->getLocale());
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Fit::Fill, 300, 300)
            ->quality(80)
            ->nonQueued();
    }

    // app/Models/Article.php
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
