<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class LangLevel extends Model
{
    use HasFactory;
    use HasTranslations;


    protected $fillable = [
        'name'
    ];

    protected $casts = [
        'name' => 'array'
    ];

    public array $translatable = ['name'];
}
