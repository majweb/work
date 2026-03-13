<?php

namespace App\Services;

use App\Http\Resources\MultiselectWithoutDetailResource;
use App\Models\Aplication;
use App\Models\Category;
use App\Models\ExternalCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ApplicationRecruitFilterService
{
    /**
     * Stosuje wspólne filtry dla rekruterów
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $filters
     * @param string|null $status
     */
    private function applyCommonRecruitFilters($query, array $filters, ?string $status = null): void
    {
        // Filtrowanie według CV
        if (isset($filters['has_cv'])) {
            $hasCv = $filters['has_cv'];
            if ($hasCv === 'yes') {
                $query->where(function ($q) {
                    $q->whereHas('cvClassic')
                        ->whereDoesntHave('cvAudio')
                        ->whereDoesntHave('cvVideo')
                        ->orWhereNotNull('pathCv')
                        ->orWhereHas('media', function ($m) {
                            $m->where('collection_name', 'aplications_cvFile');
                        });
                });
            } elseif ($hasCv === 'no') {
                $query->where(function ($q) {
                    $q->whereDoesntHave('cvClassic')
                        ->whereNull('pathCv')
                        ->where(function ($q2) {
                            $q2->has('cvAudio')
                                ->orHas('cvVideo');
                        })
                        ->whereDoesntHave('media', function ($m) {
                            $m->where('collection_name', 'aplications_cvFile');
                        });
                });
            }
        }

        // Podstawowe filtry
        if (!empty($filters['project'])) {
            $query->where('project_id', $filters['project']);
        }

        if (!empty($filters['status']) && $status === null) {
            $query->where('status', $filters['status']);
        }

        // Filtrowanie według lokalizacji (Kraj, Miasto)
        if (!empty($filters['country'])) {
            $countryValue = is_array($filters['country']) ? ($filters['country']['value'] ?? $filters['country']) : $filters['country'];
            $query->whereHas('project', fn ($q) => $q->whereJsonContains('countryWork->value', (int)$countryValue));
        }

        if (!empty($filters['city'])) {
            $cityValue = is_array($filters['city']) ? ($filters['city']['value'] ?? $filters['city']) : $filters['city'];
            $query->whereHas('project', fn ($q) => $q->where('cityWork', $cityValue));
        }

        // Filtrowanie według kategorii, podkategorii, zawodu i stanowiska
        if (!empty($filters['category'])) {
            $categoryValue = is_array($filters['category']) ? ($filters['category']['value'] ?? $filters['category']) : $filters['category'];
            $query->whereHas('project', fn ($q) => $q->whereJsonContains('category->value', (int)$categoryValue));
        }

        if (!empty($filters['categorySub'])) {
            $categorySubValue = is_array($filters['categorySub']) ? ($filters['categorySub']['value'] ?? $filters['categorySub']) : $filters['categorySub'];
            $query->whereHas('project', fn ($q) => $q->whereJsonContains('categorySub->value', (int)$categorySubValue));
        }

        if (!empty($filters['profession'])) {
            $professionValue = is_array($filters['profession']) ? ($filters['profession']['value'] ?? $filters['profession']) : $filters['profession'];
            $query->whereHas('project', fn ($q) => $q->whereJsonContains('profession->value', (int)$professionValue));
        }

        if (!empty($filters['position'])) {
            $positionValue = is_array($filters['position']) ? ($filters['position']['value'] ?? $filters['position']) : $filters['position'];
            $query->whereHas('project', fn ($q) => $q->whereJsonContains('position->value', (int)$positionValue));
        }

        // Filtrowanie według języka
        if (!empty($filters['lang'])) {
            $langValue = is_array($filters['lang']) ? ($filters['lang']['value'] ?? $filters['lang']) : $filters['lang'];
            $levelValue = !empty($filters['Langlevel']) ? (is_array($filters['Langlevel']) ? ($filters['Langlevel']['value'] ?? $filters['Langlevel']) : $filters['Langlevel']) : null;

            $query->whereHas('cvClassic', function ($q) use ($langValue, $levelValue) {
                $q->whereJsonContains('langs', ['name' => ['value' => $langValue]]);
                if ($levelValue) {
                    $q->whereJsonContains('langs', ['level' => ['value' => (int)$levelValue]]);
                }
            });
        }

        // Filtrowanie według doświadczenia
        if (!empty($filters['experience'])) {
            $experienceValue = is_array($filters['experience']) ? ($filters['experience']['value'] ?? $filters['experience']) : $filters['experience'];
            $query->whereHas('cvClassic', function ($q) use ($experienceValue) {
                $q->whereJsonContains('experiences', [
                    'position' => ['value' => (int)$experienceValue],
                ]);
            });
        }

        // Filtrowanie według prawa jazdy
        if (isset($filters['driveLicense']) && $filters['driveLicense'] !== '') {
            $hasDriveLicense = $filters['driveLicense'] === 'yes' || filter_var($filters['driveLicense'], FILTER_VALIDATE_BOOLEAN);
            if ($hasDriveLicense) {
                $query->whereHas('project', function ($q) {
                    $q->whereJsonContains('wait', ['id' => 19]);
                });
            } else {
                $query->whereHas('project', function ($q) {
                    $q->where(function ($sub) {
                        $sub->whereJsonDoesntContain('wait', ['id' => 19])
                            ->orWhereNull('wait');
                    });
                });
            }
        }

        // Kandydat utworzony
        if (isset($filters['has_candidate']) && $filters['has_candidate'] !== '') {
            if ($filters['has_candidate'] === 'yes') {
                $query->whereHas('worker.candidate');
            } else {
                $query->whereDoesntHave('worker.candidate');
            }
        }

        // Filtrowanie po dacie
        if (!empty($filters['date'])) {
            $query->whereDate('created_at', $filters['date']);
        }
    }

    /**
     * Stosuje filtr statusu
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string|null $status
     */
    private function applyStatusFilter($query, ?string $status): void
    {
        if ($status === 'yes') {
            $query->where('status', 'yes');
        } elseif ($status === 'no') {
            $query->where('status', 'no')
                ->where(function ($q) {
                    $q->whereNull('whenDeleted')
                        ->orWhere('whenDeleted', '>=', now()->subDays(90));
                });
        } elseif ($status === 'maybe') {
            $query->where('status', 'maybe');
        } elseif ($status === null) {
            $query->activeStart();
        }
    }

    /**
     * Przygotowuje zapytanie bazowe dla aplikacji
     *
     * @param Request $request
     * @param string|null $status Opcjonalny status aplikacji (yes, no, maybe lub null dla specjalnych warunków)
     * @return array Zawiera zapytanie, aplikacje, kategorie i liczniki statusów
     */
    public function getFilteredApplications(Request $request, ?string $status = null): array
    {
        // Bazowe zapytanie z relacjami
        $query = Aplication::query()
            ->with(['project:id,other_recruits,position,countryWork,cityWork,category,categorySub,profession', 'cvClassic', 'openedBy', 'statusChangedBy', 'worker.candidate', 'cvAudio', 'cvVideo', 'media', 'notes' => function ($q) {
                $q->latest()->limit(1);
            }])
            ->forRecruiterWithOther();

        // Filtrowanie według statusu
        $this->applyStatusFilter($query, $status);

        // Stosowanie wspólnych filtrów
        $this->applyCommonRecruitFilters($query, $request->all(), $status);

        // Pobieranie i cachowanie kategorii
        $categories = $this->getCategories();
        $recruits = $this->getRecruits();
        $externals = $this->getExternal();

        // Przygotowanie danych do widoku
        $applications = $query->orderBy('created_at', 'desc')->paginate(10);
        $counters = $this->getStatusCounters();

        return [
            'applications' => $applications->withQueryString(),
            'optionsPosition' => $categories,
            'optionsRecruits' => $recruits,
            'optionsExternal' => $externals,
            'counters' => $counters,
            'filters' => $request->only([
                'project', 'status', 'category', 'categorySub', 'profession', 'position',
                'experience', 'education', 'course', 'lang', 'skill', 'has_cv', 'Langlevel',
                'date', 'driveLicense', 'country', 'city', 'has_candidate'
            ]),
        ];
    }

    /**
     * Pobiera kategorie z cache lub z bazy danych
     */
    private function getCategories()
    {
        return Cache::remember('categoriesAll_Recruit_v2', now()->addDay(), function() {
            return \App\Models\Category::whereNull('parent_id')
                ->get()
                ->map(fn($cat) => [
                    'name' => $cat->getTranslation('title', app()->getLocale()),
                    'value' => $cat->id,
                ])
                ->toArray();
        });
    }

    private function getExternal()
    {
        return ExternalCompany::where('user_id',auth()->user()->user->id)->get()->map(function ($item) {
            return ['name' => $item['name'], 'value' => $item['id'],'email' => $item['email']];
        });
    }

    private function getRecruits()
    {
        return auth()->user()->recruits()->get()->map(function ($item) {
            return ['name' => $item['name'], 'value' => $item['id']];
        });
    }

    /**
     * Pobiera liczniki dla różnych statusów aplikacji
     */
    private function getStatusCounters(): array
    {
        // Liczba zaakceptowanych aplikacji
        $acceptedCount = Aplication::forRecruiterWithOther()
            ->where('status', 'yes')
            ->count();

        // Liczba aplikacji o statusie 'maybe' lub pustym
        $maybeCount = Aplication::forRecruiterWithOther()
            ->where(function ($q) {
                $q->where('status', 'maybe');
            })
            ->count();

        // Liczba aplikacji o statusie 'no' (nie starszych niż 90 dni)
        $noCount = Aplication::forRecruiterWithOther()
            ->where('status', 'no')
            ->where(function($q) {
                $q->whereNull('whenDeleted')
                    ->orWhere('whenDeleted', '>=', now()->subDays(90));
            })
            ->count();

        // Liczba wszystkich aktywnych aplikacji
        $otherCount = Aplication::forRecruiterWithOther()
            ->activeStart()
            ->count();

        return [
            'acceptedCount' => $acceptedCount,
            'maybeCount' => $maybeCount,
            'noCount' => $noCount,
            'otherCount' => $otherCount
        ];
    }

    public function getFilteredApplicationsExport(Request $request, ?string $status = null): array
    {
        $form = $request->input('form', []);
        $apps = $request->input('apps', []);

        // Bazowe zapytanie z relacjami - takie same jak w getFilteredApplications
        $query = Aplication::query()
            ->with(['project:id,other_recruits,position,wait,recruiter_id,user_id,countryWork,cityWork,category,categorySub,profession', 'cvClassic', 'openedBy', 'statusChangedBy', 'worker.candidate', 'cvAudio', 'cvVideo', 'notes' => function ($q) {
                $q->latest()->limit(1);
            }])
            ->forRecruiterWithOther();

        // Jeśli zaznaczono konkretne aplikacje
        if (!empty($apps)) {
            $query->whereIn('id', (array)$apps);
        }

        // Filtrowanie według statusu
        $this->applyStatusFilter($query, $status);

        // Stosowanie wspólnych filtrów
        $this->applyCommonRecruitFilters($query, $form, $status);

        // Pobieranie i cachowanie kategorii i rekruterów
        $categories = $this->getCategories();
        $recruits = $this->getRecruits();
        $externals = $this->getExternal();

        // Pobranie aplikacji
        $applications = $query->orderBy('created_at', 'desc')->get();

        $counters = $this->getStatusCounters();

        return [
            'applications' => $applications,
            'optionsPosition' => $categories,
            'optionsRecruits' => $recruits,
            'optionsExternal' => $externals,
            'counters' => $counters,
            'filters' => collect($form)->only([
                'project', 'status', 'category', 'categorySub', 'profession', 'position',
                'experience', 'lang', 'skill', 'has_cv', 'Langlevel', 'date', 'driveLicense',
                'country', 'city', 'has_candidate'
            ]),
        ];
    }

}
