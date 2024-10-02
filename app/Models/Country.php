<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Country extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'continent',
        'name'
    ];
    public array $translatable = ['name','continent'];

    protected $casts = [
        'name' => 'array',
        'continent' => 'array',
    ];
}
