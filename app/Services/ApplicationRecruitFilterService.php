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
            ->with(['project:id,other_recruits','cvClassic','openedBy','statusChangedBy'])
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
                $q->whereHas('cvClassic');
            } elseif ($request->has_cv === 'no') {
                $q->whereDoesntHave('cvClassic');
            }
        });

        // Filtrowanie według projektu i kategorii
        $query->when($request->filled('project'), fn($q) => $q->where('project_id', $request->project))
            ->when($request->filled('status') && $status === null, fn($q) => $q->where('status', $request->status))
            ->when($request->filled('category'), function ($q) use ($request) {
                $q->whereHas('project', fn($query) =>
                $query->whereJsonContains('position->value', (int)$request->category)
                );
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
                        'level' => ['allTranslations' => ['name' => [app()->getLocale() => $request->Langlevel]]]
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
            'filters' => $request->only(['project', 'status', 'category', 'experience', 'education', 'course', 'lang', 'skill', 'has_cv','Langlevel']),
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

        $query = Aplication::query()
            ->with(['project', 'cvClassic'])
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
                $q->whereHas('cvClassic');
            } elseif ($form['has_cv'] === 'no') {
                $q->whereDoesntHave('cvClassic');
            }
        });

        // Filtrowanie według projektu
        $query->when(!empty($form['project']), fn($q) => $q->where('project_id', $form['project']));
        // Filtrowanie według statusu (z formularza, jeśli nie przekazano jako parametr)
        $query->when(!empty($form['status']) && $status === null, fn($q) => $q->where('status', $form['status']));
        // Filtrowanie po kategorii
        $query->when(!empty($form['category']), function ($q) use ($form) {
            $q->whereHas('project', function ($query) use ($form) {
                $query->whereJsonContains('categorySub', [
                    'value' => (int)data_get($form, 'category.value'),
                ]);
            });
        });

        // Filtrowanie według języka i poziomu
        $query->when(!empty($form['lang']), function ($q) use ($form) {
            $langValue = data_get($form, 'lang.value');
            $langLevel = data_get($form, 'Langlevel.value');

            $q->whereHas('cvClassic', function ($query) use ($langValue, $langLevel) {
                $query->whereJsonContains('langs', [
                    'name' => ['value' => $langValue],
                ]);

                if ($langLevel) {
                    $query->whereJsonContains('langs', [
                        'level' => ['value' => (int)$langLevel],
                    ]);
                }
            });
        });

        // Filtrowanie według doświadczenia
        $query->when(!empty($form['experience']), function ($q) use ($form) {
            $q->whereHas('cvClassic', function ($query) use ($form) {
                $query->whereJsonContains('experiences', [
                    'position' => ['value' => (int)data_get($form, 'experience.value')],
                ]);
            });
        });

        // Filtrowanie według prawa jazdy (wait.id == 19)
        $query->when(array_key_exists('driveLicense', $form), function ($q) use ($form) {
            if (filter_var($form['driveLicense'], FILTER_VALIDATE_BOOLEAN)) {
                $q->whereHas('project', function ($query) {
                    $query->whereJsonContains('wait', ['id' => 19]);
                });
            } else {
                $q->whereHas('project', function ($query) {
                    $query->whereJsonDoesntContain('wait', ['id' => 19]);
                });
            }
        });

        // Filtrowanie po rekruterze
        $query->when(!empty($form['recruiter']), fn($q) => $q->where('recruiter_id', $form['recruiter']));

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

}
