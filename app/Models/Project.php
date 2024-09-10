<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    protected $fillable = [
        'user_id',
        'recruiter_id',
        'title'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function recruit(): BelongsTo
    {
        return $this->belongsTo(User::class, 'recruiter_id');
    }

}
