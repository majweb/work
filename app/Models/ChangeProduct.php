<?php

namespace App\Models;

use App\Enum\ProductType;
use Carbon\Carbon;
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
        'qty',
        'certificate_pdf',
    ];

    protected $casts = [
        'start' => 'datetime:Y-m-d',
        'end' => 'datetime:Y-m-d',
    ];

    /**
     * Scope to check if the product is currently active.
     */
    public function scopeIsCurrent($query)
    {
        return $query->where('start', '<=', Carbon::now())
            ->where('end', '>=', Carbon::now());
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
