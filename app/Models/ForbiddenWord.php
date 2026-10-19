<?php

namespace App\Models;

use App\Services\ForbiddenWordFilter;
use Illuminate\Database\Eloquent\Model;

/**
 * Zakazane słowo lub fraza w wiadomościach. "*" na końcu = rdzeń (wszystkie odmiany).
 */
class ForbiddenWord extends Model
{
    protected $fillable = ['word', 'is_active', 'note'];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected static function booted(): void
    {
        // Filtr trzyma gotowe wzorce w cache - każda zmiana listy je odświeża
        static::saved(fn () => ForbiddenWordFilter::forget());
        static::deleted(fn () => ForbiddenWordFilter::forget());
    }
}
