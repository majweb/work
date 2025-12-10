<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;
class FoundationCategory extends Model
{
    use HasFactory;
    use HasTranslations;
    use HasRecursiveRelationships;

    protected $guarded = [];

    public array $translatable = ['name'];

    protected $casts = [
        'name' => 'array',
    ];

    public function foundations()
    {
        return $this->hasMany(Foundation::class, 'category_id');
    }

    public function subcategoryFoundations()
    {
        return $this->hasMany(Foundation::class, 'subcategory_id');
    }
}
