<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Agreement extends Model
{
    use HasFactory;
    use HasTranslations;


    protected $fillable = ['description', 'type'];

    public array $translatable = ['description'];

    protected $casts = [
        'description' => 'array',
    ];


}
