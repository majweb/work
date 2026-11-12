<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Tłumaczenie artykułu admina na jeden język: wybrane rynki tego języka, stan i utworzona wersja (szkic).
 */
class ArticleTranslation extends Model
{
    public const STATUS_PENDING = 'pending';

    public const STATUS_TRANSLATING = 'translating';

    public const STATUS_DONE = 'done';

    public const STATUS_FAILED = 'failed';

    // Tłumaczenie trwające dłużej niż limit zadania (TranslateArticle::$timeout) zostało przerwane
    // (np. restart workera) - można je wznowić
    public const STALLED_AFTER_MINUTES = 35;

    protected $fillable = [
        'source_article_id',
        'locale',
        'article_id',
        'status',
        'countries',
        'error',
        'edited_manually',
        'prompt_tokens',
        'completion_tokens',
        'cost_usd',
    ];

    protected $casts = [
        'countries' => 'array',
        'edited_manually' => 'boolean',
        'cost_usd' => 'float',
    ];

    public function source(): BelongsTo
    {
        return $this->belongsTo(Article::class, 'source_article_id');
    }

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }

    public function isStalled(): bool
    {
        return $this->status === self::STATUS_TRANSLATING
            && $this->updated_at?->lt(now()->subMinutes(self::STALLED_AFTER_MINUTES));
    }

    /**
     * Tłumaczenie właśnie trwa (w kolejce albo w toku, bez przerwanych).
     */
    public function isInProgress(): bool
    {
        return $this->status === self::STATUS_PENDING
            || ($this->status === self::STATUS_TRANSLATING && ! $this->isStalled());
    }

    /**
     * Do wznowienia: błąd (np. brak środków na OpenAI) albo przerwane tłumaczenie.
     */
    public function isResumable(): bool
    {
        return $this->status === self::STATUS_FAILED || $this->isStalled();
    }
}
