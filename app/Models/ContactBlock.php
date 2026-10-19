<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Blokada kontaktu w wiadomościach: na 24 godziny albo bezterminowo (blocked_until = null).
 */
class ContactBlock extends Model
{
    protected $fillable = ['blocker_id', 'blocked_id', 'blocked_until'];

    protected $casts = [
        'blocked_until' => 'datetime',
    ];

    public function blocker(): BelongsTo
    {
        return $this->belongsTo(User::class, 'blocker_id');
    }

    public function blocked(): BelongsTo
    {
        return $this->belongsTo(User::class, 'blocked_id');
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where(fn (Builder $q) => $q->whereNull('blocked_until')->orWhere('blocked_until', '>', now()));
    }
}
