<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Wysyłka newslettera napisana po polsku; wersje językowe w NewsletterCampaignLocale.
 */
class NewsletterCampaign extends Model
{
    protected $fillable = [
        'subject',
        'preheader',
        'title',
        'intro',
        'content',
        'cta_text',
        'cta_url',
        'offer_ids',
        'category_ids',
        'created_by',
    ];

    protected $casts = [
        'offer_ids' => 'array',
        'category_ids' => 'array',
    ];

    public function locales(): HasMany
    {
        return $this->hasMany(NewsletterCampaignLocale::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
