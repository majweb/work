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
                $q->where('status', 'maybe');
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
                        ->where(function ($q2) {
                            $q2->has('cvAudio')
                                ->orHas('cvVideo');
                        })
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
                    $langValue = is_array($request->lang) ? ($request->lang['value'] ?? $request->lang) : $request->lang;
                    $levelValue = $request->filled('Langlevel') ? (is_array($request->Langlevel) ? ($request->Langlevel['value'] ?? $request->Langlevel) : $request->Langlevel) : null;

                    $query->where(function ($q_lang) use ($langValue, $levelValue) {
                        $langFilter = ['name' => ['value' => $langValue]];
                        if ($levelValue) {
                            $langFilter['level'] = ['value' => (int)$levelValue];
                        }
                        $q_lang->whereJsonContains('langs', $langFilter);
                    });
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
            ->with(['project.user.firm','recruit', 'cvClassic', 'openedBy', 'statusChangedBy', 'worker.candidate', 'cvAudio', 'cvVideo', 'notes' => function ($q) {
                $q->latest()->limit(1);
            }]);

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
                $q->where('status', 'maybe');
            });
        } elseif ($status === null) {
            $query->activeStart();
        }

        // Filtrowanie aplikacji według CV (analogicznie do getFilteredApplications)
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
                        ->where(function ($q2) {
                            $q2->has('cvAudio')
                                ->orHas('cvVideo');
                        })
                        ->whereDoesntHave('media', function ($q) {
                            $q->where('collection_name', 'aplications_cvFile');
                        });
                });
            }
        });
        // Filtrowanie według projektu, kategorii, doświadczenia, prawa jazdy, języka
        $query->when($request->filled('project'), fn ($q) => $q->where('project_id', $request->project))
            ->when($request->filled('status') && $status === null, fn ($q) => $q->where('status', $request->status))
            ->when($request->filled('country'), function ($q) use ($request) {
                $countryValue = is_array($request->country) ? ($request->country['value'] ?? $request->country) : $request->country;
                $q->whereHas('project', fn ($query) => $query->whereJsonContains('countryWork->value', (int)$countryValue));
            })
            ->when($request->filled('city'), function ($q) use ($request) {
                $cityValue = is_array($request->city) ? ($request->city['value'] ?? $request->city) : $request->city;
                $q->whereHas('project', fn ($query) => $query->where('cityWork', $cityValue));
            })
            ->when($request->filled('category'), function ($q) use ($request) {
                $categoryValue = is_array($request->category) ? ($request->category['value'] ?? $request->category) : $request->category;
                $q->whereHas('project', fn ($query) => $query->whereJsonContains('category->value', (int)$categoryValue));
            })
            ->when($request->filled('categorySub'), function ($q) use ($request) {
                $categorySubValue = is_array($request->categorySub) ? ($request->categorySub['value'] ?? $request->categorySub) : $request->categorySub;
                $q->whereHas('project', fn ($query) => $query->whereJsonContains('categorySub->value', (int)$categorySubValue));
            })
            ->when($request->filled('profession'), function ($q) use ($request) {
                $professionValue = is_array($request->profession) ? ($request->profession['value'] ?? $request->profession) : $request->profession;
                $q->whereHas('project', fn ($query) => $query->whereJsonContains('profession->value', (int)$professionValue));
            })
            ->when($request->filled('position'), function ($q) use ($request) {
                $positionValue = is_array($request->position) ? ($request->position['value'] ?? $request->position) : $request->position;
                $q->whereHas('project', fn ($query) => $query->whereJsonContains('position->value', (int)$positionValue));
            })
            ->when($request->filled('experience'), function ($q) use ($request) {
                $experienceValue = is_array($request->experience) ? ($request->experience['value'] ?? $request->experience) : $request->experience;
                $q->whereHas('cvClassic', function ($query) use ($experienceValue) {
                    $query->whereJsonContains('experiences', [
                        'position' => ['value' => (int)$experienceValue]
                    ]);
                });
            })
            ->when($request->filled('driveLicense'), function ($q) use ($request) {
                $hasDriveLicense = $request->driveLicense === 'yes' || $request->boolean('driveLicense');
                if ($hasDriveLicense) {
                    $q->whereHas('project', function ($query) {
                        $query->whereJsonContains('wait', ['id' => 19]);
                    });
                } else {
                    $q->whereHas('project', function ($query) {
                        $query->where(function ($q) {
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
            })
            ->when($request->filled('has_candidate'), function ($q) use ($request) {
                if ($request->has_candidate === 'yes') {
                    $q->whereHas('worker.candidate');
                } elseif ($request->has_candidate === 'no') {
                    $q->whereDoesntHave('worker.candidate');
                }
            })
            ->when($request->filled('date'), function ($q) use ($request) {
                $q->whereDate('created_at', $request->date);
            });

        // Filtrowanie według rekrutera
        $query->when($request->filled('recruiter'), function ($q) use ($request) {
            $recruiterValue = is_array($request->recruiter) ? ($request->recruiter['value'] ?? $request->recruiter) : $request->recruiter;
            $q->where('recruiter_id', $recruiterValue);
        });

        // Filtrowanie według firmy
        $query->when($request->filled('firm'), function ($q) use ($request) {
            $firmValue = is_array($request->firm) ? ($request->firm['value'] ?? $request->firm) : $request->firm;
            $q->whereHas('project.user.firm', fn($query) => $query->where('id', $firmValue));
        });

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
            ->with(['project','cvClassic','openedBy','statusChangedBy','worker','cvAudio','cvVideo','notes' => function ($q) {
                $q->latest()->limit(1);
            }])->forCurrentRecruiter();

        // Jeśli zaznaczono konkretne aplikacje
        if (!empty($request->apps)) {
            $query->whereIn('id', $request->apps);
        }

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
                $q->where('status', 'maybe');
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
                        ->where(function ($q2) {
                            $q2->has('cvAudio')
                                ->orHas('cvVideo');
                        })
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

        // Filtrowanie według lokalizacji i kategorii
        $query->when(!empty($form['country']), function ($q) use ($form) {
            $countryValue = is_array($form['country']) ? ($form['country']['value'] ?? $form['country']) : $form['country'];
            $q->whereHas('project', fn ($query) => $query->whereJsonContains('countryWork->value', (int)$countryValue));
        })
            ->when(!empty($form['city']), function ($q) use ($form) {
                $cityValue = is_array($form['city']) ? ($form['city']['value'] ?? $form['city']) : $form['city'];
                $q->whereHas('project', fn ($query) => $query->where('cityWork', $cityValue));
            })
            ->when(!empty($form['category']), function ($q) use ($form) {
                $categoryValue = is_array($form['category']) ? ($form['category']['value'] ?? $form['category']) : $form['category'];
                $q->whereHas('project', fn ($query) => $query->whereJsonContains('category->value', (int)$categoryValue));
            })
            ->when(!empty($form['categorySub']), function ($q) use ($form) {
                $categorySubValue = is_array($form['categorySub']) ? ($form['categorySub']['value'] ?? $form['categorySub']) : $form['categorySub'];
                $q->whereHas('project', fn ($query) => $query->whereJsonContains('categorySub->value', (int)$categorySubValue));
            })
            ->when(!empty($form['profession']), function ($q) use ($form) {
                $professionValue = is_array($form['profession']) ? ($form['profession']['value'] ?? $form['profession']) : $form['profession'];
                $q->whereHas('project', fn ($query) => $query->whereJsonContains('profession->value', (int)$professionValue));
            })
            ->when(!empty($form['position']), function ($q) use ($form) {
                $positionValue = is_array($form['position']) ? ($form['position']['value'] ?? $form['position']) : $form['position'];
                $q->whereHas('project', fn ($query) => $query->whereJsonContains('position->value', (int)$positionValue));
            });

        // Filtrowanie według języka
        $query->when(!empty($form['lang']), function ($q) use ($form) {
            $langValue = is_array($form['lang']) ? ($form['lang']['value'] ?? $form['lang']) : $form['lang'];
            $levelValue = !empty($form['Langlevel']) ? (is_array($form['Langlevel']) ? ($form['Langlevel']['value'] ?? $form['Langlevel']) : $form['Langlevel']) : null;

            $q->whereHas('cvClassic', function ($query) use ($langValue, $levelValue) {
                $langFilter = ['name' => ['value' => $langValue]];
                if ($levelValue) {
                    $langFilter['level'] = ['value' => (int)$levelValue];
                }
                $query->whereJsonContains('langs', $langFilter);
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

        // Filtrowanie po tym czy ma utworzonego kandydata
        $query->when(isset($form['has_candidate']) && $form['has_candidate'] !== '', function ($q) use ($form) {
            if ($form['has_candidate'] === 'yes') {
                $q->whereHas('worker.candidate');
            } else {
                $q->whereDoesntHave('worker.candidate');
            }
        })
            ->when(!empty($form['date']), function ($q) use ($form) {
                $q->whereDate('created_at', $form['date']);
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
            'filters' => collect($form)->only(['project', 'status', 'category', 'categorySub', 'profession', 'position', 'country', 'city', 'experience', 'lang', 'skill', 'has_cv', 'Langlevel', 'recruiter', 'driveLicense', 'has_candidate', 'date']),
        ];
    }

    public function getFilteredApplicationsExportAdmin(Request $request, ?string $status = null): array
    {
        $form = $request->input('form', []);

        $query = Aplication::query()
            ->with(['project.user.firm','cvClassic','openedBy','statusChangedBy','worker.candidate','cvAudio','cvVideo','notes' => function ($q) {
                $q->latest()->limit(1);
            }]);

        // Jeśli zaznaczono konkretne aplikacje
        if (!empty($request->apps)) {
            $query->whereIn('id', $request->apps);
        }

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
                $q->where('status', 'maybe');
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
                        ->where(function ($q2) {
                            $q2->has('cvAudio')
                                ->orHas('cvVideo');
                        })
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

        // Filtrowanie według lokalizacji i kategorii
        $query->when(!empty($form['country']), function ($q) use ($form) {
            $countryValue = is_array($form['country']) ? ($form['country']['value'] ?? $form['country']) : $form['country'];
            $q->whereHas('project', fn ($query) => $query->whereJsonContains('countryWork->value', (int)$countryValue));
        })
            ->when(!empty($form['city']), function ($q) use ($form) {
                $cityValue = is_array($form['city']) ? ($form['city']['value'] ?? $form['city']) : $form['city'];
                $q->whereHas('project', fn ($query) => $query->where('cityWork', $cityValue));
            })
            ->when(!empty($form['category']), function ($q) use ($form) {
                $categoryValue = is_array($form['category']) ? ($form['category']['value'] ?? $form['category']) : $form['category'];
                $q->whereHas('project', fn ($query) => $query->whereJsonContains('category->value', (int)$categoryValue));
            })
            ->when(!empty($form['categorySub']), function ($q) use ($form) {
                $categorySubValue = is_array($form['categorySub']) ? ($form['categorySub']['value'] ?? $form['categorySub']) : $form['categorySub'];
                $q->whereHas('project', fn ($query) => $query->whereJsonContains('categorySub->value', (int)$categorySubValue));
            })
            ->when(!empty($form['profession']), function ($q) use ($form) {
                $professionValue = is_array($form['profession']) ? ($form['profession']['value'] ?? $form['profession']) : $form['profession'];
                $q->whereHas('project', fn ($query) => $query->whereJsonContains('profession->value', (int)$professionValue));
            })
            ->when(!empty($form['position']), function ($q) use ($form) {
                $positionValue = is_array($form['position']) ? ($form['position']['value'] ?? $form['position']) : $form['position'];
                $q->whereHas('project', fn ($query) => $query->whereJsonContains('position->value', (int)$positionValue));
            });

        // Filtrowanie według języka
        $query->when(!empty($form['lang']), function ($q) use ($form) {
            $langValue = is_array($form['lang']) ? ($form['lang']['value'] ?? $form['lang']) : $form['lang'];
            $levelValue = !empty($form['Langlevel']) ? (is_array($form['Langlevel']) ? ($form['Langlevel']['value'] ?? $form['Langlevel']) : $form['Langlevel']) : null;

            $q->whereHas('cvClassic', function ($query) use ($langValue, $levelValue) {
                $langFilter = ['name' => ['value' => $langValue]];
                if ($levelValue) {
                    $langFilter['level'] = ['value' => (int)$levelValue];
                }
                $query->whereJsonContains('langs', $langFilter);
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

        // Filtrowanie po firmie
        $query->when(!empty($form['firm']), function ($q) use ($form) {
            $firmValue = is_array($form['firm']) ? ($form['firm']['value'] ?? $form['firm']) : $form['firm'];
            $q->whereHas('project.user.firm', fn($query) => $query->where('id', $firmValue));
        });

        // Filtrowanie po tym czy ma utworzonego kandydata
        $query->when(isset($form['has_candidate']) && $form['has_candidate'] !== '', function ($q) use ($form) {
            if ($form['has_candidate'] === 'yes') {
                $q->whereHas('worker.candidate');
            } else {
                $q->whereDoesntHave('worker.candidate');
            }
        })
            ->when(!empty($form['date']), function ($q) use ($form) {
                $q->whereDate('created_at', $form['date']);
            });

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
        return auth()->user()->recruits()->get()->map(function ($item) {
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
