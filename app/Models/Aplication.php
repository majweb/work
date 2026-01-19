<?php

namespace App\Models;

use App\Casts\TimeCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Prompts\Note;
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
        'opened_by_user_id',
        'opened_at',
        'status_changed_by_user_id',
        'status_changed_at',
        'points_downloaded_at'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'status_changed_at' => 'datetime',
        'whenDeleted' => 'datetime',
        'whenMaybe' => 'datetime',
    ];

    protected $appends = ['HasCv'];


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
     * Relacja do nagrań audio
     */
    public function cvAudio(): HasOne
    {
        return $this->hasOne(CvAudio::class, 'aplication_id');
    }

    /**
     * Relacja do nagrań wideo
     */
    public function cvVideo(): HasOne
    {
        return $this->hasOne(CvVideo::class, 'aplication_id');
    }

    /**
     * Relacja do notatek
     */
    public function notes(): HasMany
    {
        return $this->hasMany(ApplicationNote::class, 'application_id');
    }

    public function candidateAnswers(): HasMany
    {
        return $this->hasMany(CandidateAnswer::class, 'aplication_id');
    }



    public function opened_by()
    {
        return $this->belongsTo(User::class, 'opened_by_user_id');
    }

    public function status_changed_by()
    {
        return $this->belongsTo(User::class, 'status_changed_by_user_id');
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

    public function scopeActiveStart($query)
    {
        return $query->whereNull('status')
            ->orWhere(function($q) {
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
            $query->where(function ($query) {
                $query->where('recruiter_id', auth()->id())
                    ->orWhere('recruiter_from_firm_id', auth()->id());
            });
        });
    }

    public function scopeForRecruiterWithOther($query)
    {
        return $query->where('recruiter_id', auth()->id())
            ->orWhereHas('project', function ($q) {
                $q->whereJsonContains('other_recruits', ['value' => auth()->user()->id]);
            });
    }

    // Dodaj nowe relacje
    public function openedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'opened_by_user_id');
    }

    public function statusChangedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'status_changed_by_user_id');
    }

    /**
     * Relacja do kandydata
     */
    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'email', 'email');
    }

    public function getHasCvAttribute()
    {
        return  $this->media()->where('collection_name', 'aplications_cvFile')->first() || !is_null($this->pathCv);
    }

    public function resolvedDate(): ?\Carbon\Carbon
    {
        return $this->whenDeleted
            ?? $this->whenMaybe
            ?? ($this->status === 'yes' ? $this->status_changed_at : null)
            ?? $this->created_at;
    }

    public function statusDates(): array
    {
        return [
            'sent' => optional($this->created_at)?->format('d.m.Y H:i'),
            'review' => $this->whenMaybe
                ? optional($this->whenMaybe)->format('d.m.Y H:i')
                : null,
            'accepted' => ($this->status === 'yes' && $this->status_changed_at)
                ? optional($this->status_changed_at)->format('d.m.Y H:i')
                : null,
            'rejected' => $this->whenDeleted
                ? optional($this->whenDeleted)->format('d.m.Y H:i')
                : null,
        ];
    }

}
