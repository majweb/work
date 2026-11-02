<?php

namespace App\Models;

use App\Casts\TimeCast;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    /**
     * Firma i rekruter edytują ogłoszenie tylko przez tyle godzin od publikacji (admin zawsze).
     */
    public const OWNER_EDIT_HOURS = 24;

    /**
     * Pola, których firma i rekruter nie zmieniają nigdy, także w ciągu 24h od publikacji:
     * pracodawca, stanowisko, stawka (kwota od/do) i miejsce pracy.
     */
    public const OWNER_LOCKED_FIELDS = [
        'external_company_id',
        'category',
        'categorySub',
        'profession',
        'position',
        'basicSalaryFrom',
        'basicSalaryTo',
        'countryWork',
        'cityWork',
        'streetWork',
        'streetWorkNumber',
        'postalWork',
        'lat',
        'lng',
    ];

    protected $fillable = [
        'user_id',
        'recruiter_id',
        'title',
        'category',
        'categorySub',
        'profession',
        'position',
        'workingMode',
        'typeOfContract',
        'days',
        'currency',
        'workLoad',
        'shiftWork',
        'country',
        'workingPlace',
        'basicSalaryFrom',
        'basicSalaryTo',
        'salary_type',
        'inclusive_recruitment',
        'disability_friendly',
        'bonusSalaryFrom',
        'bonusSalaryTo',
        'hoursFrom',
        'hoursTo',
        'hoursTo',
        'payoutMode',
        'paySystem',
        'workNight',
        'offer',
        'wait',
        'experience',
        'welcome',
        'education',
        'countryWork',
        'streetWork',
        'streetWorkNumber',
        'postalWork',
        'cityWork',
        'detailProjects',
        'other_recruits',
        'cv',
        'kraz',
        'external_company_id',
        'is_active',
        'published_at',
        'salary_period',
        'views_count',
        'image_generator',
        'langs',
        'lat',
        'lng',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'published_at' => 'datetime',
        'inclusive_recruitment' => 'boolean',
        'disability_friendly' => 'boolean',
        'title' => 'array',
        'category' => 'array',
        'currency' => 'array',
        'countryWork' => 'array',
        'categorySub' => 'array',
        'payoutMode' => 'array',
        'profession' => 'array',
        'workLoad' => 'array',
        'position' => 'array',
        'workingMode' => 'array',
        'typeOfContract' => 'array',
        'days' => 'array',
        'paySystem' => 'array',
        'country' => 'array',
        'workingPlace' => 'array',
        'offer' => 'array',
        'wait' => 'array',
        'experience' => 'array',
        'detailProjects' => 'array',
        'welcome' => 'array',
        'cv' => 'array',
        'other_recruits' => 'array',
        'langs' => 'array',
        'salary_period' => 'array',
        'basicSalaryFrom' => 'float',
        'basicSalaryTo' => 'float',
        'bonusSalaryFrom' => 'float',
        'bonusSalaryTo' => 'float',
        'lat' => 'float',
        'lng' => 'float',
        'hoursFrom' => TimeCast::class,
        'hoursTo' => TimeCast::class,
    ];

    protected $attributes = [
        'other_recruits' => '[]',
        'cv' => '[]',
    ];

    protected static function booted(): void
    {
        // Publikacja = pierwsza aktywacja; późniejsze wyłączanie i włączanie nie przesuwa tej daty
        static::saving(function (Project $project) {
            if ($project->published_at === null && ($project->is_active ?? true)) {
                $project->published_at = now();
            }
        });
    }

    /**
     * Do kiedy firma/rekruter może edytować ogłoszenie; null - jeszcze nieopublikowane (bez limitu).
     */
    public function ownerEditableUntil(): ?\Carbon\CarbonInterface
    {
        return $this->published_at?->copy()->addHours(self::OWNER_EDIT_HOURS);
    }

    public function isEditableByOwner(): bool
    {
        $until = $this->ownerEditableUntil();

        return $until === null || $until->isFuture();
    }

    /**
     * Wartości pól zablokowanych w zapisie z bazy - nadpisują to, co przyszło z formularza edycji.
     *
     * @return array<string, mixed>
     */
    public function ownerLockedValues(): array
    {
        return collect(self::OWNER_LOCKED_FIELDS)
            ->mapWithKeys(fn (string $field) => [$field => $this->getAttribute($field)])
            ->all();
    }

    /**
     * Stan edycji dla panelu firmy/rekrutera (przycisk "Edytuj", informacja w formularzu).
     *
     * @return array{can_edit: bool, editable_until: ?string, published: bool}
     */
    public function ownerEditState(): array
    {
        return [
            'can_edit' => $this->isEditableByOwner(),
            'editable_until' => $this->ownerEditableUntil()?->toIso8601String(),
            'published' => $this->published_at !== null,
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function recruit(): BelongsTo
    {
        return $this->belongsTo(User::class, 'recruiter_id');
    }

    public function shiftWork(): BelongsTo
    {
        return $this->belongsTo(ShiftWork::class, 'shiftWork');
    }

    public function education(): BelongsTo
    {
        return $this->belongsTo(Education::class, 'education');
    }

    public function detailprojects()
    {
        return $this->belongsToMany(DetailProject::class, 'detailproject_project');
    }

    public function aplications(): HasMany
    {
        return $this->hasMany(Aplication::class);
    }

    public function cvClassics(): HasMany
    {
        return $this->hasMany(CvClassic::class);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(ProjectQuestion::class);
    }

    public function audio()
    {
        return $this->hasOne(CvAudio::class); // lub hasMany, zależnie od relacji
    }

    public function video()
    {
        return $this->hasOne(CvVideo::class); // lub hasMany, zależnie od relacji
    }

    public function externalCompany(): BelongsTo
    {
        return $this->belongsTo(ExternalCompany::class);
    }

    /**
     * Kandydaci, którzy aplikowali na ten projekt
     */
    public function candidates()
    {
        return $this->belongsToMany(Candidate::class, 'candidate_project')
            ->withTimestamps();
    }

    /**
     * Bezpieczna metoda dostępu do tłumaczeń pól
     *
     * @param  string  $field  Nazwa pola
     * @param  string|null  $locale  Kod języka (null dla aktualnego języka)
     * @param  string  $default  Wartość domyślna
     */
    public function getTranslatedAttribute(string $field, ?string $locale = null, string $default = 'Brak nazwy'): string
    {
        $locale = $locale ?? app()->getLocale();
        $value = $this->getAttribute($field);

        if (! is_array($value)) {
            return $value ?: $default;
        }

        if (isset($value[$locale])) {
            return $value[$locale];
        }

        $firstKey = array_key_first($value);

        return ($firstKey !== null && ! empty($value[$firstKey])) ? $value[$firstKey] : $default;
    }

    public function scopeFeatured(Builder $query)
    {
        $query->withCount(['user as is_featured' => function (Builder $q) {
            $q->whereHas('changeProducts', function (Builder $q2) {
                $q2->where('product_id', 9)
                    ->where('start', '<=', now())
                    ->where('end', '>=', now());
            });
        }]);
    }

    public function scopeActive(Builder $query)
    {
        return $query->where('is_active', true);
    }

    public function scopeActiveLang(Builder $query): Builder
    {
        $locale = getSelectedCountry();
        if (! $locale) {
            return $query->active();
        }

        return $query->active()->whereJsonContains('country', ['countryCode' => $locale]);
    }

    public function scopeNewest(Builder $query)
    {
        return $query->latest();
    }

    /**
     * Oferty w promieniu $distance km od najbliższego z punktów $points ([[lat, lng], ...]).
     * Kilka punktów obsługuje miejscowości o tej samej nazwie (np. kilka „Wól” w jednym kraju) -
     * promień liczymy od każdej z nich, a nie od średniej, która mogłaby wypaść daleko od wszystkich.
     */
    public function scopeWithinDistance(Builder $query, array $points, int $distance): Builder
    {
        $expressions = [];
        $bindings = [];

        foreach ($points as [$lat, $lng]) {
            // LEAST/GREATEST: przez błąd zaokrąglenia wartość pod acos potrafi wyjść minimalnie > 1
            // dla punktu w odległości 0 km, wtedy MySQL zwraca NULL i projekt wypada z wyników
            $expressions[] = '(6371 * acos(LEAST(1, GREATEST(-1, cos(radians(?)) * cos(radians(lat)) * cos(radians(lng) - radians(?)) + sin(radians(?)) * sin(radians(lat))))))';
            array_push($bindings, (float) $lat, (float) $lng, (float) $lat);
        }

        // MySQL LEAST wymaga co najmniej dwóch argumentów
        $distanceSql = count($expressions) > 1
            ? 'LEAST('.implode(', ', $expressions).')'
            : $expressions[0];

        // featured() ustawia już kolumny (projects.* + is_featured) - select('*') by je nadpisał
        // i oferty wyróżnione traciłyby wyróżnienie w wynikach wyszukiwania po promieniu
        if (is_null($query->getQuery()->columns)) {
            $query->select('projects.*');
        }

        return $query->selectRaw($distanceSql.' AS distance', $bindings)
            ->having('distance', '<=', $distance)
            // Najbliższe oferty najpierw, przy tej samej odległości najnowsze
            ->reorder('distance')
            ->latest();
    }

    public function scopeLang($query)
    {
        $locale = getSelectedCountry();
        if (! $locale) {
            return $query;
        }

        return $query->whereJsonContains('country', ['countryCode' => $locale]);
    }

    public function getCountryIds(): array
    {
        $countryData = $this->getAttributeFromArray('country');
        $countryIds = [];

        if (is_string($countryData)) {
            $countryData = json_decode($countryData, true);
        }

        if (isset($countryData['value'])) {
            $countryIds = [(int) $countryData['value']];
        } elseif (is_array($countryData) && ! empty($countryData)) {
            $countryIds = collect($countryData)
                ->pluck('value')
                ->filter()
                ->map(fn ($id) => (int) $id)
                ->toArray();
        }

        sort($countryIds);

        return array_values(array_unique($countryIds));
    }
}
