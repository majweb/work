<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class DetailProject extends Model
{
    use HasFactory;

    use HasTranslations;

    protected $table = 'detail_projects';

    protected $fillable = [
        'name'
    ];
    public array $translatable = ['name'];

    protected $casts = [
        'name' => 'array',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_detailproject');
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class,'detailproject_project');
    }
}
