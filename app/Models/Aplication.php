<?php

namespace App\Models;

use App\Casts\TimeCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Aplication extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'user_id',
        'recruiter_id',
        'name',
        'surname',
        'phone',
        'email',
        'aplication_user_id',
        'project_id',
        'pathCv',
        'status',
        'whenDeleted',
        'whenMaybe',
    ];

    protected $casts = [
        'whenDeleted' => 'datetime',
        'whenMaybe' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function recruit(): BelongsTo
    {
        return $this->belongsTo(User::class,'recruiter_id');
    }

    public function worker(): BelongsTo
    {
        return $this->belongsTo(User::class,'aplication_user_id');
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class,'project_id');
    }

    public function cvClassic(): HasOne
    {
        return $this->hasOne(CvClassic::class,'aplication_id');
    }

    /**
     * Relacja do notatek
     */
    public function notes(): HasMany
    {
        return $this->hasMany(ApplicationNote::class, 'application_id');
    }

    /**
     * Sprawdza, czy aplikacja jest starsza niż 90 dni
     *
     * @return bool
     */
    public function isOlderThan90Days(): bool
    {
        if ($this->status === 'maybe' && $this->whenMaybe) {
            return $this->whenMaybe->addDays(90)->isPast();
        }

        if ($this->status === 'no' && $this->whenDeleted) {
            return $this->whenDeleted->addDays(90)->isPast();
        }

        return false;
    }

    public function scopeActive($query)
    {
        return $query->where('status', '!=', 'yes')
            ->where(function($q) {
                $q->whereNotIn('status', ['no', 'maybe'])
                    ->orWhere(function($subQ) {
                        $subQ->where('status', 'no')
                            ->whereNull('whenDeleted');
                    })
                    ->orWhere(function($subQ) {
                        $subQ->where('status', 'no')
                            ->whereNotNull('whenDeleted')
                            ->where('whenDeleted', '>=', now()->subDays(90));
                    })
                    ->orWhere(function($subQ) {
                        $subQ->where('status', 'maybe')
                            ->where(function($q) {
                                $q->whereNull('whenMaybe')
                                    ->orWhere('whenMaybe', '>=', now()->subDays(90));
                            });
                    });
            });
    }

    // Scope dla aplikacji zalogowanego rekrutera
    public function scopeForCurrentRecruiter($query)
    {
        return $query->whereHas('project.recruit', function ($query) {
            $query->where('recruiter_from_firm_id', auth()->id());
        });
    }

}
