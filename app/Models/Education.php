<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Education extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'name'
    ];
    protected $casts = [
        'name' => 'array',
    ];
    protected $table = 'education';

    public array $translatable = ['name'];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'education');
    }
}
