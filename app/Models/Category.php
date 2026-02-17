<?php

namespace App\Models;

use App\Http\Resources\MultiselectWithoutDetailResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
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

    public static function getCachedWithoutDetail()
    {
        return Cache::rememberForever('categoriesWithoutDetail', function () {
            return MultiselectWithoutDetailResource::collection(self::isRoot()->get());
        });
    }

    public static function getCachedWithoutPositionsWithoutDetail()
    {
        return Cache::rememberForever('categoriesPositionsWithoutDetail', function() {
            return MultiselectWithoutDetailResource::collection(Category::whereNotNull('parent_id')->get());
        });
    }
}
