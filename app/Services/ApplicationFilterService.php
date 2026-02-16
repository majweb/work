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
    public function getFilteredApplications(Request $request, ?string $status = null): array
    {
        // Bazowe zapytanie z relacjami
        $query = Aplication::query()
            ->with(['project','cvClassic','openedBy','statusChangedBy','worker','cvAudio','cvVideo','notes' => function ($q) {
                $q->latest()->limit(1);
            }])->forCurrentRecruiter();


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
        $query->when($request->filled('project'), fn($q) => $q->where('project_id', $request->project))
            ->when($request->filled('status') && $status === null, fn($q) => $q->where('status', $request->status))
            ->when($request->filled('category'), function ($q) use ($request) {
                $categoryValue = is_array($request->category) ? ($request->category['value'] ?? $request->category) : $request->category;
                $q->whereHas('project', fn($query) =>
                    $query->whereJsonContains('categorySub->value', (int)$categoryValue)
                );
            })

            // Filtrowanie według Doświadzcenie
            ->when($request->filled('experience'), function ($q) use ($request) {
                $experienceValue = is_array($request->experience) ? ($request->experience['value'] ?? $request->experience) : $request->experience;
                $q->whereHas('cvClassic', function ($query) use ($experienceValue) {
                    $query->whereJsonContains('experiences', [
                        'position' => ['value' => (int)$experienceValue]
                    ]);
                });
            })
        // Filtrowanie według Prawo jazdy
        ->when($request->has('driveLicense'), function ($q) use ($request) {
            $hasDriveLicense = $request->driveLicense === 'yes' || $request->boolean('driveLicense');
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
        $query->when($request->filled('recruiter'), function($q) use ($request) {
            $recruiterValue = is_array($request->recruiter) ? ($request->recruiter['value'] ?? $request->recruiter) : $request->recruiter;
            $q->where('recruiter_id', $recruiterValue);
        });

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
            'filters' => $request->only(['project', 'status', 'category', 'experience', 'lang', 'skill', 'has_cv','Langlevel']),
        ];
    }
    public function getFilteredApplicationsExport(Request $request, ?string $status = null): array
    {
        $form = $request->input('form', []);

        $query = Aplication::query()
            ->with(['project','cvClassic','openedBy','statusChangedBy','worker','cvAudio','cvVideo','notes' => function ($q) {
                $q->latest()->limit(1);
            }])->forCurrentRecruiter();

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

        // Filtrowanie według projektu
        $query->when(!empty($form['project']), fn($q) => $q->where('project_id', $form['project']));

        // Filtrowanie według statusu (z formularza, jeśli nie przekazano jako parametr)
        $query->when(!empty($form['status']) && $status === null, fn($q) => $q->where('status', $form['status']));

        // Filtrowanie po kategorii
        $query->when(!empty($form['category']), function ($q) use ($form) {
            $categoryValue = is_array($form['category']) ? ($form['category']['value'] ?? $form['category']) : $form['category'];
            $q->whereHas('project', function ($query) use ($categoryValue) {
                $query->whereJsonContains('categorySub->value', (int)$categoryValue);
            });
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

        // Filtrowanie według doświadczenia
        $query->when(!empty($form['experience']), function ($q) use ($form) {
            $experienceValue = is_array($form['experience']) ? ($form['experience']['value'] ?? $form['experience']) : $form['experience'];
            $q->whereHas('cvClassic', function ($query) use ($experienceValue) {
                $query->whereJsonContains('experiences', [
                    'position' => ['value' => (int)$experienceValue],
                ]);
            });
        });

        // Filtrowanie według prawa jazdy (wait.id == 19)
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

        // Filtrowanie po rekruterze
        $query->when(!empty($form['recruiter']), function($q) use ($form) {
            $recruiterValue = is_array($form['recruiter']) ? ($form['recruiter']['value'] ?? $form['recruiter']) : $form['recruiter'];
            $q->where('recruiter_id', $recruiterValue);
        });

        // Pobieranie i cachowanie kategorii i rekruterów
        $categories = $this->getCategories();
        $recruits = $this->getRecruits();

        // Pobranie aplikacji
        $applications = $query->orderBy('created_at', 'desc')->get();

        $counters = $this->getStatusCounters();

        return [
            'applications' => $applications,
            'optionsPosition' => $categories,
            'optionsRecruits' => $recruits,
            'counters' => $counters,
            'filters' => collect($form)->only(['project', 'status', 'category', 'experience', 'lang', 'skill', 'has_cv', 'Langlevel']),
        ];
    }

    public function getFilteredApplicationsAdmin(Request $request, ?string $status = null): array
    {
        // Bazowe zapytanie z relacjami
        $query = Aplication::query()
            ->with(['project', 'cvClassic']);


        // Filtrowanie według statusu
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
        $query->when($request->filled('project'), fn($q) => $q->where('project_id', $request->project))
            ->when($request->filled('status') && $status === null, fn($q) => $q->where('status', $request->status))
            ->when($request->filled('category'), function ($q) use ($request) {
                $categoryValue = is_array($request->category) ? ($request->category['value'] ?? $request->category) : $request->category;
                $q->whereHas('project', fn($query) =>
                    $query->whereJsonContains('categorySub->value', (int)$categoryValue)
                );
            })
            // Filtrowanie według Doświadzcenie
            ->when($request->filled('experience'), function ($q) use ($request) {
                $experienceValue = is_array($request->experience) ? ($request->experience['value'] ?? $request->experience) : $request->experience;
                $q->whereHas('cvClassic', function ($query) use ($experienceValue) {
                    $query->whereJsonContains('experiences', [
                        'position' => ['value' => (int)$experienceValue]
                    ]);
                });
            })
            // Filtrowanie według Prawo jazdy
            ->when($request->has('driveLicense'), function ($q) use ($request) {
                $hasDriveLicense = $request->driveLicense === 'yes' || $request->boolean('driveLicense');
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
            })
            // Filtrowanie według jezyka
            ->when($request->filled('lang'), function ($q) use ($request) {
                $langValue = is_array($request->lang) ? ($request->lang['value'] ?? $request->lang) : $request->lang;
                $q->whereHas('cvClassic', function ($query) use ($request, $langValue) {
                    $query->whereJsonContains('langs', [
                        'name' => ['value' => $langValue]
                    ]);
                    // Dodatkowe filtrowanie po poziomie języka, jeśli został podany
                    if ($request->filled('Langlevel')) {
                        $langLevel = is_array($request->Langlevel) ? ($request->Langlevel['value'] ?? $request->Langlevel['name'] ?? $request->Langlevel) : $request->Langlevel;
                        $query->whereJsonContains('langs', [
                            'level' => ['allTranslations' => ['name' => [app()->getLocale() => $langLevel]]]
                        ]);
                    }
                });
            });


        // Filtrowanie według rekrutera
        $query->when($request->filled('recruiter'), function($q) use ($request) {
            $recruiterValue = is_array($request->recruiter) ? ($request->recruiter['value'] ?? $request->recruiter) : $request->recruiter;
            $q->where('recruiter_id', $recruiterValue);
        });

        // Pobieranie i cachowanie kategorii
        $categories = $this->getCategories();
        $recruits = $this->getRecruitsAdmin();

        // Przygotowanie danych do widoku
        $applications = $query->orderBy('created_at', 'desc')->paginate(10);
        $counters = $this->getStatusCountersAdmin();
        return [
            'applications' => $applications->withQueryString(),
            'optionsPosition' => $categories,
            'optionsRecruits' => $recruits,
            'counters' => $counters,
            'filters' => $request->only(['project', 'status', 'category', 'experience', 'lang', 'skill', 'has_cv','Langlevel']),
        ];
    }

    public function getFilteredApplicationsAdminExport(Request $request, ?string $status = null): array
    {
        // Bazowe zapytanie z relacjami
        $query = Aplication::query()
            ->with(['project', 'cvClassic']);


        // Filtrowanie według statusu
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
        $query->when($request->filled('project'), fn($q) => $q->where('project_id', $request->project))
            ->when($request->filled('status') && $status === null, fn($q) => $q->where('status', $request->status))
            ->when($request->filled('category'), function ($q) use ($request) {
                $categoryValue = is_array($request->category) ? ($request->category['value'] ?? $request->category) : $request->category;
                $q->whereHas('project', function($query) use ($categoryValue) {
                    $query->whereJsonContains('categorySub->value', (int)$categoryValue);
                });
            })

            // Filtrowanie według jezyka
            ->when($request->filled('lang'), function ($q) use ($request) {
                $langValue = is_array($request->lang) ? ($request->lang['value'] ?? $request->lang) : $request->lang;
                $q->whereHas('cvClassic', function ($query) use ($langValue) {
                    $query->whereJsonContains('langs', [
                        'name' => ['value' => $langValue],
                    ]);
                });
            })
            // Filtrowanie według Doświadzcenie
            ->when($request->filled('experience'), function ($q) use ($request) {
                $experienceValue = is_array($request->experience) ? ($request->experience['value'] ?? $request->experience) : $request->experience;
                $q->whereHas('cvClassic', function ($query) use ($experienceValue) {
                    $query->whereJsonContains('experiences', [
                        'position' => ['value' => (int)$experienceValue]
                    ]);
                });
            })
            // Filtrowanie według Prawo jazdy
            ->when($request->has('driveLicense'), function ($q) use ($request) {
                $hasDriveLicense = $request->driveLicense === 'yes' || $request->boolean('driveLicense');
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
            })



            // Filtrowanie według jezyka
            ->when($request->filled('lang'), function ($q) use ($request) {
                $langValue = is_array($request->lang) ? ($request->lang['value'] ?? $request->lang) : $request->lang;
                $q->whereHas('cvClassic', function ($query) use ($langValue, $request) {
                    $query->whereJsonContains('langs', [
                        'name' => ['value' => $langValue]
                    ]);
                    // Dodatkowe filtrowanie po poziomie języka, jeśli został podany
                    if ($request->filled('Langlevel')) {
                        $langLevel = is_array($request->Langlevel) ? ($request->Langlevel['value'] ?? $request->Langlevel['name'] ?? $request->Langlevel) : $request->Langlevel;
                        $query->whereJsonContains('langs', [
                            'level' => ['allTranslations' => ['name' => [app()->getLocale() => $langLevel]]]
                        ]);
                    }
                });
            });






        // Filtrowanie według rekrutera
        $query->when($request->filled('recruiter'), fn($q) => $q->where('recruiter_id', $request->recruiter));

        // Pobieranie i cachowanie kategorii
        $categories = $this->getCategories();
        $recruits = $this->getRecruitsAdmin();

        // Przygotowanie danych do widoku
        $applications = $query->orderBy('created_at', 'desc')->get();
        $counters = $this->getStatusCounters();
        return [
            'applications' => $applications,
            'optionsPosition' => $categories,
            'optionsRecruits' => $recruits,
            'counters' => $counters,
            'filters' => $request->only(['project', 'status', 'category', 'experience', 'lang', 'skill', 'has_cv','Langlevel']),
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

    private function getRecruits()
    {
        return auth()->user()->recruits()->get()->map(function ($item) {
            return ['name' => $item['name'], 'value' => $item['id']];
        });
    }

    private function getRecruitsAdmin()
    {
        return User::role('recruit')->get()->map(function ($item) {
            return ['name' => $item['name'], 'value' => $item['id']];
        });
    }

    private function getExternal()
    {
        return ExternalCompany::where('user_id',auth()->id())->get()->map(function ($item) {
            return ['name' => $item['name'], 'value' => $item['id'],'email' => $item['email']];
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
                $q->where('status', 'maybe')
                    ->orWhereNull('status')
                    ->orWhere('status', '');
            })
            ->count();

        // Liczba aplikacji o statusie 'no' (nie starszych niż 90 dni)
        $noCount = Aplication::forCurrentRecruiter()
            ->where('status', 'no')
            ->where(function($q) {
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
    private function getStatusCountersAdmin(): array
    {
        // Liczba zaakceptowanych aplikacji
        $acceptedCount = Aplication::where('status', 'yes')
            ->count();

        // Liczba aplikacji o statusie 'maybe' lub pustym
        $maybeCount = Aplication::where(function ($q) {
                $q->where('status', 'maybe')
                    ->orWhereNull('status')
                    ->orWhere('status', '');
            })
            ->count();

        // Liczba aplikacji o statusie 'no' (nie starszych niż 90 dni)
        $noCount = Aplication::where('status', 'no')
            ->where(function($q) {
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
