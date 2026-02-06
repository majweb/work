<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Model reprezentujący kandydata, który może aplikować na wiele projektów
 */
class Candidate extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
        'questions_unlocked_at',
        'created_by_id',
    ];

    protected $casts = [
        'questions_unlocked_at' => 'datetime',
    ];

    /**
     * Zarejestruj kolekcje mediów
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('candidate_cv_files');
    }

    /**
     * Pobierz pliki CV jako tablicę
     */
    public function getCvFilesAttribute()
    {
        return $this->getMedia('candidate_cv_files')->map(function ($file) {
            return [
                'id' => $file->id,
                'name' => $file->file_name,
                'url' => $file->getUrl(),
                'mime' => $file->mime_type,
                'size' => $file->human_readable_size,
                'created_at' => $file->created_at->format('Y-m-d H:i:s'),
            ];
        });
    }

    /**
     * Sprawdza, czy pytania zostały odblokowane dla tej aplikacji
     */
    public function getQuestionsUnlockedAttribute(): bool
    {
        return !is_null($this->questions_unlocked_at);
    }


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

    /**
     * Odpowiedzi kandydata na pytania
     */
    public function answers()
    {
        return $this->hasMany(CandidateAnswer::class, 'candidate_id');
    }

    public function created_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    public function evidences(): HasMany
    {
        return $this->hasMany(CandidateEvidence::class, 'candidate_id');;
    }

    public function tags()
    {
        return $this->belongsToMany(Category::class, 'candidate_tag', 'candidate_id', 'category_id')
            ->withTimestamps();
    }

    public function userByEmail()
    {
        return $this->hasOne(\App\Models\User::class, 'email', 'email');
    }
}
