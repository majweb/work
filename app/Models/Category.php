<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Category extends Model implements HasMedia
{
    use InteractsWithMedia;
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

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images_category');
    }
}
