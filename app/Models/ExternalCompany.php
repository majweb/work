<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ExternalCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'abbreviation',
        'user_id'
    ];

    /**
     * Użytkownik, który utworzył firmę zewnętrzną
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Projekty powiązane z tą firmą zewnętrzną
     */
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
