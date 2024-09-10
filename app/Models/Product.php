<?php

namespace App\Models;

use App\Enum\ProductType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'points',
        'price',
        'active',
        'trans',
        'product_type',
        'trans_name'
    ];

    protected $casts = [
        'active' => 'boolean',
        'trans' => 'array',
        'trans_name' => 'array',
        'product_type' => ProductType::class,
    ];

    public function scopeActive($query)
    {
        return $query->where('active',1);
    }
    public function scopeOnlyPoints($query)
    {
        return $query->where('product_type','Points');
    }
}
