<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CandidateQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'answer_type',  // 'text' lub 'boolean'
        'created_by_id',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    public function answers(): HasMany
    {
        return $this->hasMany(CandidateAnswer::class);
    }
}
