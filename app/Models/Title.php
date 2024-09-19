<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Title extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'category_id',
        'title'
    ];
    public array $translatable = ['title'];

    protected $casts = [
        'title' => 'array',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'parent_id');
    }
}
