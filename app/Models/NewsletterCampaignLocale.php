<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Jedna wersja językowa wysyłki - tłumaczenie i szkic w GetResponse.
 */
class NewsletterCampaignLocale extends Model
{
    public const STATUS_PENDING = 'pending';

    public const STATUS_TRANSLATING = 'translating';

    public const STATUS_DRAFT_CREATED = 'draft_created';

    public const STATUS_FAILED = 'failed';

    protected $fillable = [
        'newsletter_campaign_id',
        'locale',
        'recipients_count',
        'status',
        'translated',
        'getresponse_newsletter_id',
        'error',
    ];

    protected $casts = [
        'translated' => 'array',
    ];

    public function campaign(): BelongsTo
    {
        return $this->belongsTo(NewsletterCampaign::class, 'newsletter_campaign_id');
    }
}
