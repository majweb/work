<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class WorkLoad extends Model
{
    use HasFactory;
    use HasTranslations;


    protected $fillable = [
        'name'
    ];

    public array $translatable = ['name'];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'workLoad');
    }

}
