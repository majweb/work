<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchStatistic extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'country',
        'city',
        'category',
        'category_sub',
        'profession',
        'position',
    ];
}
