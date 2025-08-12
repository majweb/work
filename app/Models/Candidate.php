<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Model reprezentujący kandydata, który może aplikować na wiele projektów
 */
class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
    ];

    /**
     * Projekty, na które aplikował kandydat
     */
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'candidate_project')
            ->withTimestamps();
    }

    /**
     * Dodaje relację do aplikacji kandydata
     */
    public function applications()
    {
        return $this->hasMany(Aplication::class, 'email', 'email');
    }
}
