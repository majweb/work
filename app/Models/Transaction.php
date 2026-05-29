<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'price',
        'session_id',
        'user_id',
        'credits',
        'cart_data',
        'foundation_id',
    ];

    protected function casts(): array
    {
        return [
            'cart_data' => 'array',
        ];
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
