<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasFactory;
    use HasTranslations;

    public array $translatable = ['title', 'image', 'description', 'keywords', 'content'];

    protected $fillable = [
        'name',
        'title',
        'image',
        'description',
        'keywords',
        'content',
    ];

    protected $casts = [
        'content' => 'array',
    ];
}
