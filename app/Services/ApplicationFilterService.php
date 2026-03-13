<?php

namespace App\Services;

use App\Http\Resources\MultiselectWithoutDetailResource;
use App\Models\Aplication;
use App\Models\Category;
use App\Models\ExternalCompany;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ApplicationFilterService
{
    /**
     * Przygotowuje zapytanie bazowe dla aplikacji
     *
     * @param Request $request
     * @param string|null $status Opcjonalny status aplikacji (yes, no, maybe lub null dla specjalnych warunków)
     * @return array Zawiera zapytanie, aplikacje, kategorie i liczniki statusów
     */
    /**
     * Stosuje wspólne filtry dla firm
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $filters
     * @param string|null $status
     */
    private function applyCommonFirmFilters($query, array $filters, ?string $status = null): void
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

        // Filtrowanie według rekrutera
        if (!empty($filters['recruiter'])) {
            $recruiterValue = is_array($filters['recruiter']) ? ($filters['recruiter']['value'] ?? $filters['recruiter']) : $filters['recruiter'];
            $query->where('recruiter_id', $recruiterValue);
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
     * Stosuje wspólne filtry dla administratora
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $filters
     * @param string|null $status
     */
    private function applyCommonAdminFilters($query, array $filters, ?string $status = null): void
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

        // Podstawowe filtry (ID projektu i status z formularza)
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

        // Filtrowanie według kategorii i zawodu
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

        // Filtrowanie według prawa jazdy (wait.id == 19)
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

        // Filtrowanie według rekrutera i firmy
        if (!empty($filters['recruiter'])) {
            $recruiterValue = is_array($filters['recruiter']) ? ($filters['recruiter']['value'] ?? $filters['recruiter']) : $filters['recruiter'];
            $query->where('recruiter_id', $recruiterValue);
        }

        if (!empty($filters['firm'])) {
            $firmValue = is_array($filters['firm']) ? ($filters['firm']['value'] ?? $filters['firm']) : $filters['firm'];
            $query->whereHas('project.user.firm', fn($q) => $q->where('id', $firmValue));
        }

        // Pozostałe filtry
        if (isset($filters['has_candidate']) && $filters['has_candidate'] !== '') {
            if ($filters['has_candidate'] === 'yes') {
                $query->whereHas('worker.candidate');
            } else {
                $query->whereDoesntHave('worker.candidate');
            }
        }

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

    public function getFilteredApplications(Request $request, ?string $status = null): array
    {
        // Bazowe zapytanie z relacjami
        $query = Aplication::query()
            ->with(['project.user.firm', 'recruit', 'cvClassic', 'openedBy', 'statusChangedBy', 'worker.candidate', 'cvAudio', 'cvVideo', 'notes' => function ($q) {
                $q->latest()->limit(1);
            }])->forCurrentRecruiter();


        // Filtrowanie według statusu
        $this->applyStatusFilter($query, $status);

        // Stosowanie wspólnych filtrów
        $this->applyCommonFirmFilters($query, $request->all(), $status);

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
                'experience', 'lang', 'skill', 'has_cv', 'Langlevel', 'country', 'city',
                'driveLicense', 'date', 'has_candidate', 'recruiter'
            ]),
        ];
    }

    /**
     * Przygotowuje zapytanie bazowe dla aplikacji dla administratora (widzi wszystkie)
     *
     * @param Request $request
     * @param string|null $status Opcjonalny status aplikacji
     * @return array Zawiera zapytanie, aplikacje, kategorie i liczniki statusów
     */
    public function getFilteredApplicationsAdmin(Request $request, ?string $status = null): array
    {
        // Bazowe zapytanie z relacjami - bez forCurrentRecruiter()
        $query = Aplication::query()
            ->with(['project.user.firm', 'recruit', 'cvClassic', 'openedBy', 'statusChangedBy', 'worker.candidate', 'cvAudio', 'cvVideo', 'notes' => function ($q) {
                $q->latest()->limit(1);
            }]);

        // Filtrowanie według statusu
        $this->applyStatusFilter($query, $status);

        // Stosowanie wspólnych filtrów
        $this->applyCommonAdminFilters($query, $request->all(), $status);

        $categories = $this->getCategories();
        $firms = $this->getFirmsAdmin();
        $recruits = $this->getRecruitsAdmin($request->firm);
        $externals = $this->getExternalAdmin();

        $applications = $query->orderBy('created_at', 'desc')->paginate(10);
        $counters = $this->getStatusCountersAdmin();

        return [
            'applications' => $applications->withQueryString(),
            'optionsPosition' => $categories,
            'optionsFirms' => $firms,
            'optionsRecruits' => $recruits,
            'optionsExternal' => $externals,
            'counters' => $counters,
            'filters' => $request->only(['project', 'status', 'category', 'categorySub', 'profession', 'position', 'country', 'city', 'experience', 'lang', 'skill', 'has_cv', 'Langlevel', 'recruiter', 'firm', 'driveLicense', 'has_candidate', 'date', 'has_cv', 'skill']),
        ];
    }

    /**
     * Przygotowuje zapytanie bazowe dla aplikacji dla administratora (widzi wszystkie)
     *
     * @param Request $request
     * @param string|null $status Opcjonalny status aplikacji
     * @return array Zawiera zapytanie, aplikacje, kategorie i liczniki statusów
     */

    public function getFilteredApplicationsExport(Request $request, ?string $status = null): array
    {
        $form = $request->input('form', []);

        $query = Aplication::query()
            ->with(['project', 'cvClassic', 'openedBy', 'statusChangedBy', 'worker.candidate', 'cvAudio', 'cvVideo', 'notes' => function ($q) {
                $q->latest()->limit(1);
            }])->forCurrentRecruiter();

        // Jeśli zaznaczono konkretne aplikacje
        if (!empty($request->apps)) {
            $query->whereIn('id', $request->apps);
        }

        // Filtrowanie według statusu
        $this->applyStatusFilter($query, $status);

        // Stosowanie wspólnych filtrów
        $this->applyCommonFirmFilters($query, $form, $status);

        // Przygotowanie danych do exportu
        $applications = $query->orderBy('created_at', 'desc')->get();

        return [
            'applications' => $applications,
        ];
    }

    public function getFilteredApplicationsExportAdmin(Request $request, ?string $status = null): array
    {
        $form = $request->input('form', []);

        $query = Aplication::query()
            ->with(['project.user.firm', 'project.recruit', 'cvClassic', 'openedBy', 'statusChangedBy', 'worker.candidate', 'cvAudio', 'cvVideo', 'notes' => function ($q) {
                $q->latest()->limit(1);
            }]);

        // Jeśli zaznaczono konkretne aplikacje
        if (!empty($request->apps)) {
            $query->whereIn('id', $request->apps);
        }

        // Filtrowanie według statusu
        $this->applyStatusFilter($query, $status);

        // Stosowanie wspólnych filtrów
        $this->applyCommonAdminFilters($query, $form, $status);

        // Pobieranie i cachowanie kategorii i rekruterów
        $categories = $this->getCategories();
        $firms = $this->getFirmsAdmin();
        $recruits = $this->getRecruitsAdmin($form['firm'] ?? null);

        // Pobranie aplikacji
        $applications = $query->orderBy('created_at', 'desc')->get();

        $counters = $this->getStatusCountersAdmin();

        return [
            'applications' => $applications,
            'optionsPosition' => $categories,
            'optionsFirms' => $firms,
            'optionsRecruits' => $recruits,
            'counters' => $counters,
            'filters' => collect($form)->only(['project', 'status', 'category', 'categorySub', 'profession', 'position', 'country', 'city', 'experience', 'lang', 'skill', 'has_cv', 'Langlevel', 'recruiter', 'firm', 'driveLicense', 'has_candidate', 'date']),
        ];
    }

    /**
     * Pobiera kategorie z cache lub z bazy danych
     */
    private function getCategories()
    {
        return Cache::remember('categoriesAll_Admin', now()->addDay(), function() {
            $categories = \App\Models\Project::all()
                ->map(function ($item) {
                    return is_string($item->category)
                        ? json_decode($item->category, true)
                        : $item->category;
                })
                ->filter()
                ->unique('value')
                ->values()
                ->map(fn($cat) => [
                    'name' => $cat['allTranslations']['title'][app()->getLocale()] ?? $cat['name'],
                    'value' => $cat['value'],
                ])
                ->toArray();

            return $categories;
        });
    }

    private function getRecruits()
    {
        $user = auth()->user();
        $recruits = $user->recruits()->get();

        // Dodajemy samego siebie do listy rekruterów
        return $recruits->prepend($user)->map(function ($item) {
            return ['name' => $item['name'], 'value' => $item['id']];
        });
    }

    public function getRecruitsAdmin($firmId = null)
    {
        $query = User::where(function ($q) {
            $q->whereHas('roles', function ($rq) {
                $rq->whereIn('name', ['recruiter', 'recruit', 'firm']);
            });
        });

        if ($firmId) {
            $firmIdValue = is_array($firmId) ? ($firmId['value'] ?? $firmId) : $firmId;
            $query->where(function ($q) use ($firmIdValue) {
                // Rekruterzy przypisani do tej firmy
                $q->whereHas('user.firm', function ($sq) use ($firmIdValue) {
                    $sq->where('id', $firmIdValue);
                })
                    // Lub główny właściciel firmy
                    ->orWhereHas('firm', function ($sq) use ($firmIdValue) {
                        $sq->where('id', $firmIdValue);
                    });
            });
        }

        return $query->get()->map(function ($item) {
            return ['name' => $item['name'], 'value' => $item['id']];
        });
    }

    private function getFirmsAdmin()
    {
        return \App\Models\Firm::with('user')->get()->map(function ($item) {
            return ['name' => $item->user->name ?? $item->name_invoice ?? 'Brak nazwy', 'value' => $item['id']];
        });
    }

    private function getExternal()
    {
        return ExternalCompany::where('user_id', auth()->id())->get()->map(function ($item) {
            return ['name' => $item['name'], 'value' => $item['id'], 'email' => $item['email']];
        });
    }

    private function getExternalAdmin()
    {
        return ExternalCompany::get()->map(function ($item) {
            return ['name' => $item['name'], 'value' => $item['id'], 'email' => $item['email']];
        });
    }

    /**
     * Pobiera liczniki dla różnych statusów aplikacji
     */
    private function getStatusCounters(): array
    {
        // Liczba zaakceptowanych aplikacji
        $acceptedCount = Aplication::forCurrentRecruiter()
            ->where('status', 'yes')
            ->count();

        // Liczba aplikacji o statusie 'maybe' lub pustym
        $maybeCount = Aplication::forCurrentRecruiter()
            ->where(function ($q) {
                $q->where('status', 'maybe');
            })
            ->count();

        // Liczba aplikacji o statusie 'no' (nie starszych niż 90 dni)
        $noCount = Aplication::forCurrentRecruiter()
            ->where('status', 'no')
            ->where(function ($q) {
                $q->whereNull('whenDeleted')
                    ->orWhere('whenDeleted', '>=', now()->subDays(90));
            })
            ->count();

        // Liczba wszystkich aktywnych aplikacji
        $otherCount = Aplication::forCurrentRecruiter()
            ->activeStart()
            ->count();

        return [
            'acceptedCount' => $acceptedCount,
            'maybeCount' => $maybeCount,
            'noCount' => $noCount,
            'otherCount' => $otherCount
        ];
    }

    /**
     * Pobiera liczniki dla różnych statusów aplikacji dla administratora
     */
    private function getStatusCountersAdmin(): array
    {
        // Liczba zaakceptowanych aplikacji
        $acceptedCount = Aplication::where('status', 'yes')
            ->count();

        // Liczba aplikacji o statusie 'maybe' lub pustym
        $maybeCount = Aplication::where(function ($q) {
            $q->where('status', 'maybe');
        })
            ->count();

        // Liczba aplikacji o statusie 'no' (nie starszych niż 90 dni)
        $noCount = Aplication::where('status', 'no')
            ->where(function ($q) {
                $q->whereNull('whenDeleted')
                    ->orWhere('whenDeleted', '>=', now()->subDays(90));
            })
            ->count();

        // Liczba wszystkich aktywnych aplikacji
        $otherCount = Aplication::activeStart()
            ->count();

        return [
            'acceptedCount' => $acceptedCount,
            'maybeCount' => $maybeCount,
            'noCount' => $noCount,
            'otherCount' => $otherCount
        ];
    }
}
