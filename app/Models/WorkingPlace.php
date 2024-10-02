<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class WorkingPlace extends Model
{
    use HasFactory;
    use HasTranslations;


    protected $fillable = [
        'name'
    ];

    public array $translatable = ['name'];

    protected $casts = [
        'name' => 'array',
    ];
}
