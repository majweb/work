<?php

namespace App\Models;

use App\Enum\ProductType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    use HasTranslations;

    public array $translatable = ['type','name'];

    protected $fillable = [
        'name',
        'points',
        'price',
        'active',
        'type',
        'product_type',
        'name'
    ];

    protected $casts = [
        'active' => 'boolean',
        'type' => 'array',
        'name' => 'array',
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
