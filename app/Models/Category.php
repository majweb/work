<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Category extends Model
{
    use HasFactory;
    use HasRecursiveRelationships;
    use HasTranslations;

    public array $translatable = ['title'];
    protected $guarded = [];

    protected $casts = [
        'title' => 'array',
    ];
    public function detailprojects()
    {
        return $this->belongsToMany(DetailProject::class,'category_detailproject');
    }
}
