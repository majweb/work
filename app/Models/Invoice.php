<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'number',
        'day',
        'month',
        'year',
        'pdf',
        'date_invoice',
        'amount',
        'opened',
    ];

    protected $casts = [
        'opened' => 'boolean',
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }


}
