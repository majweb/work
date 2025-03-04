<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkerDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'contact_phone',
        'surname'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
