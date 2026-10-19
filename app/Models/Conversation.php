<?php

namespace App\Models;

use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Rozmowa pracownika z pracodawcą albo pracodawcy z administracją serwisu. Wiadomości nigdy
 * nie są usuwane (archiwum) - usunięcie rozmowy tylko ją ukrywa u jednej ze stron.
 *
 * Strony rozmowy: "pracodawca" (employer_id - konto firmy albo rekrutera) i "druga strona" -
 * pracownik (worker_id) albo administracja, czyli wspólna skrzynka wszystkich adminów.
 */
class Conversation extends Model
{
    public const TYPE_WORKER = 'worker';

    public const TYPE_ADMIN = 'admin';

    public const STATUS_PENDING = 'pending';

    public const STATUS_ACCEPTED = 'accepted';

    protected $fillable = [
        'type',
        'employer_id',
        'worker_id',
        'admin_id',
        'project_id',
        'status',
        'accepted_at',
        'last_message_at',
        'employer_deleted_at',
        'participant_deleted_at',
    ];

    protected $attributes = [
        'type' => self::TYPE_WORKER,
    ];

    protected $casts = [
        'accepted_at' => 'datetime',
        'last_message_at' => 'datetime',
        'employer_deleted_at' => 'datetime',
        'participant_deleted_at' => 'datetime',
    ];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'employer_id');
    }

    public function worker(): BelongsTo
    {
        return $this->belongsTo(User::class, 'worker_id');
    }

    public function admin(): BelongsTo
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    public function latestMessage(): HasOne
    {
        return $this->hasOne(Message::class)->latestOfMany();
    }

    public function isPending(): bool
    {
        return $this->status === self::STATUS_PENDING;
    }

    public function isWithAdmin(): bool
    {
        return $this->type === self::TYPE_ADMIN;
    }

    public function hasParticipant(User $user): bool
    {
        if ($this->isEmployer($user)) {
            return true;
        }

        return $this->isWithAdmin() ? $user->isMessengerAdmin() : $this->worker_id === $user->id;
    }

    /**
     * Firma podgląda rozmowę swojego rekrutera z pracownikiem (tylko odczyt).
     */
    public function isOverseenBy(User $user): bool
    {
        if ($this->type !== self::TYPE_WORKER || ! $user->hasRole('firm')) {
            return false;
        }

        $employer = $this->employer;

        return $employer !== null && $employer->isRecruiter() && $employer->recruiter_from_firm_id === $user->id;
    }

    /**
     * Rozmowy rekruterów firmy z pracownikami - do podglądu przez firmę.
     */
    public function scopeOfFirmRecruiters(Builder $query, User $firm): Builder
    {
        return $query->where('type', self::TYPE_WORKER)
            ->whereIn('employer_id', User::where('recruiter_from_firm_id', $firm->id)->select('id'));
    }

    public function isEmployer(User $user): bool
    {
        return $this->employer_id === $user->id;
    }

    /**
     * Czy wiadomość wysłała ta sama strona rozmowy co użytkownik. W skrzynce administracji
     * wiadomości innych adminów też są "nasze".
     */
    public function isSameSide(User $user, int $senderId): bool
    {
        return $this->isEmployer($user) === ($senderId === $this->employer_id);
    }

    /**
     * Druga strona jako konkretny użytkownik - null dla pracodawcy w rozmowie z administracją.
     */
    public function otherParticipant(User $user): ?User
    {
        if (! $this->isEmployer($user)) {
            return $this->employer;
        }

        return $this->isWithAdmin() ? null : $this->worker;
    }

    public function deletedAtFor(User $user): ?CarbonInterface
    {
        return $this->isEmployer($user) ? $this->employer_deleted_at : $this->participant_deleted_at;
    }

    /**
     * Wiadomości widoczne dla użytkownika - po jednostronnym usunięciu starsza historia jest ukryta.
     */
    public function visibleMessagesFor(User $user): HasMany
    {
        return $this->messages()
            ->when($this->deletedAtFor($user), fn ($query, $deletedAt) => $query->where('created_at', '>', $deletedAt));
    }

    /**
     * Rozmowy użytkownika, których nie usunął albo w których po usunięciu pojawiła się nowa wiadomość.
     */
    public function scopeVisibleFor(Builder $query, User $user): Builder
    {
        $notDeleted = fn (string $column) => fn (Builder $q) => $q->whereNull($column)->orWhereColumn('last_message_at', '>', $column);

        return $query->where(function (Builder $query) use ($user, $notDeleted) {
            $query->where(fn (Builder $q) => $q->where('employer_id', $user->id)->where($notDeleted('employer_deleted_at')));

            if ($user->isMessengerAdmin()) {
                $query->orWhere(fn (Builder $q) => $q->where('type', self::TYPE_ADMIN)->where($notDeleted('participant_deleted_at')));
            } else {
                $query->orWhere(fn (Builder $q) => $q->where('type', self::TYPE_WORKER)
                    ->where('worker_id', $user->id)
                    ->where($notDeleted('participant_deleted_at')));
            }
        });
    }
}
