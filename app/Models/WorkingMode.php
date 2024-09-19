<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class WorkingMode extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'title'
    ];

    public array $translatable = ['title'];

    protected $casts = [
        'title' => 'array',
    ];

}
