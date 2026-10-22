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
}
