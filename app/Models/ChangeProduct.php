<?php

namespace App\Models;

use App\Enum\ProductType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChangeProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'start',
        'end',
        'qty'
    ];

    protected $casts = [
        'start' => 'datetime:Y-m-d',
        'end' => 'datetime:Y-m-d',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
