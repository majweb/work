<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
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
        'countries' => 'array',
    ];

    protected $fillable = [
        'user_id',
        'title',
        'active',
        'active_admin',
        'content',
        'country_code',
        'meta_title',
        'meta_description',
        'short_description',
        'alt',
        'meta_keywords',
        'category',
        'slug',
        'source_article_id',
        'locale',
        'countries',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(fn (Article $article) => $article->isVersion() ? $article->versionSlugSource() : (string) $article->title)
            ->saveSlugsTo('slug')
            // Adres opublikowanej wersji językowej nie zmienia się przy ponownym tłumaczeniu
            ->skipGenerateWhen(fn () => $this->isVersion() && $this->exists);
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

    /**
     * Artykuły wybranego rynku - każdy artykuł należy do jednego kraju (jak baner).
     */
    public function scopeLang($query)
    {
        $market = getSelectedCountry() ?: getLocalBrowserLang();

        // Wersja językowa jest widoczna we wszystkich wybranych krajach swojego języka (kolumna countries)
        return $query->where(fn ($q) => $q
            ->where('country_code', $market)
            ->orWhereJsonContains('countries', $market));
    }

    /**
     * Polski oryginał wersji językowej.
     */
    public function source(): BelongsTo
    {
        return $this->belongsTo(Article::class, 'source_article_id');
    }

    public function versions(): HasMany
    {
        return $this->hasMany(Article::class, 'source_article_id');
    }

    public function translations(): HasMany
    {
        return $this->hasMany(ArticleTranslation::class, 'source_article_id');
    }

    /**
     * Adres wersji językowej: tytuł w łacince i kod języka ("erster-tag-im-neuen-job-de").
     * Pisma, których nie da się zapisać łacinką (tajski, birmański), dostają "artykul-{id oryginału}-{język}".
     */
    public function versionSlugSource(): string
    {
        $ascii = Str::slug((string) $this->title);

        return (strlen($ascii) >= 3 ? Str::limit($ascii, 80, '') : 'artykul '.$this->source_article_id).' '.$this->locale;
    }

    public function isVersion(): bool
    {
        return $this->source_article_id !== null;
    }

    /**
     * Zdjęcie artykułu - wersja językowa korzysta ze zdjęcia oryginału (bez kopiowania plików).
     */
    public function coverMedia(): ?Media
    {
        return $this->getFirstMedia('articles_images') ?? $this->source?->getFirstMedia('articles_images');
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
