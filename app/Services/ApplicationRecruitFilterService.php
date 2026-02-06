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
            ->with(['project:id,other_recruits,position','cvClassic','openedBy','statusChangedBy','worker','cvAudio','cvVideo','media','notes' => function ($q) {
                $q->latest()->limit(1);
            }])
            ->forRecruiterWithOther();

        // Filtrowanie według statusu
        if ($status === 'yes') {
            $query->where('status', 'yes');
        } elseif ($status === 'no') {
            $query->where('status', 'no')
                ->where(function($q) {
                    $q->whereNull('whenDeleted')
                      ->orWhere('whenDeleted', '>=', now()->subDays(90));
                });
        } elseif ($status === 'maybe') {
            $query->where(function($q) {
                $q->where('status', 'maybe')
                  ->orWhereNull('status')
                  ->orWhere('status', '');
            });
        } elseif ($status === null) {
            // Dla widoku głównego, użyj scope 'active'
            $query->activeStart();
        }

        // Filtrowanie aplikacji według CV
        $query->when($request->has('has_cv'), function ($q) use ($request) {
            if ($request->has_cv === 'yes') {
                $q->where(function ($query) {
                    $query->whereHas('cvClassic')
                        ->whereDoesntHave('cvAudio')
                        ->whereDoesntHave('cvVideo')
                        ->orWhereNotNull('pathCv')
                        ->orWhereHas('media', function ($q) {
                            $q->where('collection_name', 'aplications_cvFile');
                        });
                });



            } elseif ($request->has_cv === 'no') {
                $q->where(function ($query) {
                    $query->whereDoesntHave('cvClassic')
                        ->whereNull('pathCv')
                        ->orWhereHas('cvAudio')
                        ->orWhereHas('cvVideo')
                        ->whereDoesntHave('media', function ($q) {
                            $q->where('collection_name', 'aplications_cvFile');
                        });
                });
            }
        });

        // Filtrowanie według projektu i kategorii
        $query->when($request->filled('project'), fn($q) => $q->where('id', $request->project))
            ->when($request->filled('status') && $status === null, fn($q) => $q->where('status', $request->status))
            ->when($request->filled('category'), function ($q) use ($request) {
                $q->whereHas('project', fn($query) =>
                $query->whereJsonContains('position->value', (int)$request->category)
                );
            })
            // Filtrowanie według daty utworzenia
            ->when($request->filled('date'), function ($q) use ($request) {
                $q->whereDate('created_at', $request->date);
            })


        // Filtrowanie według Doświadzcenie
        ->when($request->filled('experience'), function ($q) use ($request) {
        $q->whereHas('cvClassic', function ($query) use ($request) {
            $query->whereJsonContains('experiences', [
                'position' => ['value' => (int)$request->experience]
            ]);
        });
    })
        // Filtrowanie według Prawo jazdy
        ->when($request->has('driveLicense'), function ($q) use ($request) {
            if ($request->boolean('driveLicense')) {
                $q->whereHas('project', function ($query) {
                    $query->whereJsonContains('wait', ['id' => 19]);
                });
            } else {
                $q->whereHas('project', function ($query) {
                    $query->whereJsonDoesntContain('wait', ['id' => 19]);
                });
            }
        })
        // Filtrowanie według jezyka
        ->when($request->filled('lang'), function ($q) use ($request) {
            $q->whereHas('cvClassic', function ($query) use ($request) {
                $query->whereJsonContains('langs', [
                    'name' => ['value' => $request->lang]
                ]);
                // Dodatkowe filtrowanie po poziomie języka, jeśli został podany
                if ($request->filled('Langlevel')) {
                    $query->whereJsonContains('langs', [
                        'level' => ['value' => (int)$request->Langlevel]
                    ]);
                }
            });
        });

        // Filtrowanie według rekrutera
        $query->when($request->filled('recruiter'), fn($q) => $q->where('recruiter_id', $request->recruiter));

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
            'filters' => $request->only(['project', 'status', 'category', 'experience', 'education', 'course', 'lang', 'skill', 'has_cv','Langlevel', 'date', 'driveLicense']),
        ];
    }

    /**
     * Pobiera kategorie z cache lub z bazy danych
     */
    private function getCategories()
    {
        return Cache::remember('categoriesWithoutDetail', now()->addDay(), function() {
            return MultiselectWithoutDetailResource::collection(
                Category::whereNotNull('parent_id')->get()
            );
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
                $q->where('status', 'maybe')
                    ->orWhereNull('status')
                    ->orWhere('status', '');
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

        // Bazowe zapytanie z relacjami - takie same jak w getFilteredApplications
        $query = Aplication::query()
            ->with(['project:id,other_recruits,position,wait,recruiter_id,user_id','cvClassic','openedBy','statusChangedBy','worker','cvAudio','cvVideo','notes' => function ($q) {
                $q->latest()->limit(1);
            }])
            ->forRecruiterWithOther();

        // Filtrowanie według statusu (z parametru funkcji)
        if ($status === 'yes') {
            $query->where('status', 'yes');
        } elseif ($status === 'no') {
            $query->where('status', 'no')
                ->where(function ($q) {
                    $q->whereNull('whenDeleted')
                        ->orWhere('whenDeleted', '>=', now()->subDays(90));
                });
        } elseif ($status === 'maybe') {
            $query->where(function ($q) {
                $q->where('status', 'maybe')
                    ->orWhereNull('status')
                    ->orWhere('status', '');
            });
        } elseif ($status === null) {
            $query->activeStart();
        }

        // Filtrowanie według CV
        $query->when(isset($form['has_cv']), function ($q) use ($form) {
            if ($form['has_cv'] === 'yes') {
                $q->where(function ($query) {
                    $query->whereHas('cvClassic')
                        ->whereDoesntHave('cvAudio')
                        ->whereDoesntHave('cvVideo')
                        ->orWhereNotNull('pathCv')
                        ->orWhereHas('media', function ($q) {
                            $q->where('collection_name', 'aplications_cvFile');
                        });
                });
            } elseif ($form['has_cv'] === 'no') {
                $q->where(function ($query) {
                    $query->whereDoesntHave('cvClassic')
                        ->whereNull('pathCv')
                        ->orWhereHas('cvAudio')
                        ->orWhereHas('cvVideo')
                        ->whereDoesntHave('media', function ($q) {
                            $q->where('collection_name', 'aplications_cvFile');
                        });
                });
            }
        });

        // Filtrowanie według projektu - używamy 'id' jak w getFilteredApplications
        $query->when(!empty($form['project']), fn($q) => $q->where('id', $form['project']));

        // Filtrowanie według statusu (z formularza, jeśli nie przekazano jako parametr)
        $query->when(!empty($form['status']) && $status === null, fn($q) => $q->where('status', $form['status']));

        // Filtrowanie po kategorii - używamy 'category->value' jak w getFilteredApplications
        $query->when(!empty($form['category']), function ($q) use ($form) {
            $categoryValue = is_array($form['category']) ? ($form['category']['value'] ?? $form['category']) : $form['category'];
            $q->whereHas('project', fn($query) =>
                $query->whereJsonContains('position->value', (int)$categoryValue)
            );
        });

        // Filtrowanie według daty utworzenia
        $query->when(!empty($form['date']), fn($q) => $q->whereDate('created_at', $form['date']));

        // Filtrowanie według doświadczenia
        $query->when(!empty($form['experience']), function ($q) use ($form) {
            $experienceValue = is_array($form['experience']) ? ($form['experience']['value'] ?? $form['experience']) : $form['experience'];
            $q->whereHas('cvClassic', function ($query) use ($experienceValue) {
                $query->whereJsonContains('experiences', [
                    'position' => ['value' => (int)$experienceValue]
                ]);
            });
        });

        // Filtrowanie według prawa jazdy
        $query->when(isset($form['driveLicense']) && $form['driveLicense'] !== '', function ($q) use ($form) {
            $hasDriveLicense = $form['driveLicense'] === 'yes' || filter_var($form['driveLicense'], FILTER_VALIDATE_BOOLEAN);
            if ($hasDriveLicense) {
                $q->whereHas('project', function ($query) {
                    $query->whereJsonContains('wait', ['id' => 19]);
                });
            } else {
                $q->whereHas('project', function ($query) {
                    $query->where(function($q) {
                        $q->whereJsonDoesntContain('wait', ['id' => 19])
                          ->orWhereNull('wait');
                    });
                });
            }
        });

        // Filtrowanie według języka
        $query->when(!empty($form['lang']), function ($q) use ($form) {
            $langValue = is_array($form['lang']) ? ($form['lang']['value'] ?? $form['lang']) : $form['lang'];
            $q->whereHas('cvClassic', function ($query) use ($form, $langValue) {
                $query->whereJsonContains('langs', [
                    'name' => ['value' => $langValue]
                ]);
                // Dodatkowe filtrowanie po poziomie języka, jeśli został podany
                if (!empty($form['Langlevel'])) {
                    $langLevel = is_array($form['Langlevel']) ? ($form['Langlevel']['value'] ?? $form['Langlevel']) : $form['Langlevel'];
                    $query->whereJsonContains('langs', [
                        'level' => ['value' => (int)$langLevel]
                    ]);
                }
            });
        });

        // Filtrowanie według rekrutera
        $query->when(!empty($form['recruiter']), function($q) use ($form) {
            $recruiterValue = is_array($form['recruiter']) ? ($form['recruiter']['value'] ?? $form['recruiter']) : $form['recruiter'];
            $q->where('recruiter_id', $recruiterValue);
        });

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
            'filters' => collect($form)->only(['project', 'status', 'category', 'experience', 'lang', 'skill', 'has_cv', 'Langlevel', 'date', 'driveLicense']),
        ];
    }

}
