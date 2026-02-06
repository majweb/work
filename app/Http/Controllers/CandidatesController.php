<?php

namespace App\Http\Controllers;

use App\Http\Resources\MultiselectWithoutDetailResource;
use App\Models\Aplication;
use App\Models\Candidate;
use App\Models\CandidateEvidence;
use App\Models\CandidateQuestion;
use App\Models\ExternalCompany;
use App\Models\Project;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use App\Services\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class CandidatesController extends Controller
{
    /**
     * Bezpieczna metoda do pobierania wartości z tablicy z uwzględnieniem języka
     *
     * @param array|null $array Tablica do odczytu
     * @param string|null $preferredKey Preferowany klucz (np. język)
     * @param string $default Domyślna wartość
     * @return string
     */
    private function safeArrayAccess(?array $array, ?string $preferredKey = null, string $default = 'Brak nazwy'): string
    {
        if (empty($array)) {
            return $default;
        }

        if ($preferredKey && isset($array[$preferredKey])) {
            return $array[$preferredKey];
        }

        $firstKey = array_key_first($array);
        return ($firstKey !== null && !empty($array[$firstKey])) ? $array[$firstKey] : $default;
    }
    /**
     * Wyświetla listę kandydatów zalogowanej firmy.
     */
    public function index(Request $request)
    {
        $locale = app()->getLocale();
        $categories = Category::whereNotNull('parent_id')
            ->get()
            ->filter(function($category) use ($locale) {
                $title = json_decode($category,true)['title'];
                return isset($title[$locale]) && !empty($title[$locale]);
            })
            ->values();
        $customTags = Auth::user()->tags()->orderBy('name')->get();

        // Pobieramy kandydatów, którzy aplikowali na projekty zalogowanej firmy
        $query = Candidate::whereHas('applications', function($q) {
            $q->where(function ($qq) {
                $qq->where('user_id', Auth::id())
                    ->orWhere('recruiter_id', Auth::id());
            });
        });

        // Filtry
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('surname')) {
            $query->where('surname', 'like', '%' . $request->surname . '%');
        }

        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->email . '%');
        }

        if ($request->filled('phone')) {
            $query->where('phone', 'like', '%' . $request->phone . '%');
        }

        if ($request->filled('project')) {
            $query->whereHas('projects', function ($q) use ($request) {
                $q->where('projects.id', $request->project);
            });
        }

        if ($request->filled('recruiter')) {
            $query->where('created_by_id',$request->recruiter);
        }

        if ($request->filled('position')) {
            $query->whereHas('tags', function ($q) use ($request) {
                $q->where('categories.id', $request->position);
            });
        }
        if ($request->filled('tags')) {
            $tags = array_filter(explode(',', $request->tags));

            $categoryTags = array_filter($tags, fn($t) => strpos($t, 's') === false);
            $pivotTags    = array_filter($tags, fn($t) => strpos($t, 's') !== false);

            $query->where(function($q) use ($categoryTags, $pivotTags) {
                // filtr po categories.id przez relację tags()
                if (!empty($categoryTags)) {
                    $q->whereHas('tags', function($sub) use ($categoryTags) {
                        $sub->whereIn('categories.id', $categoryTags);
                    });
                }

                // filtr po candidate_tag.tag_id
                if (!empty($pivotTags)) {
                    $pivotTagsIds = array_map(fn($t) => str_replace('s','',$t), $pivotTags);

                    $q->orWhereExists(function ($sub) use ($pivotTagsIds) {
                        $sub->selectRaw(1)
                            ->from('candidate_tag')
                            ->whereColumn('candidate_tag.candidate_id', 'candidates.id')
                            ->whereIn('candidate_tag.tag_id', $pivotTagsIds);
                    });
                }

            });
        }


        // Pobieramy kandydatów z ich projektami
        $candidates = $query->with('projects','created_by:id,color','tags','userByEmail')->orderBy('created_at', 'desc')->paginate(10)->withQueryString();
        // Pobieranie unikalnych projektów dla filtra
        $projectIds = Aplication::where(function ($q) {
            $q->where('user_id', Auth::id())
                ->orWhere('recruiter_id', Auth::id());
        })
            ->distinct()
            ->pluck('project_id');

        $projects = Project::whereIn('id', $projectIds)->get();
        $optionsRecruits = auth()->user()->recruits()->get()->map(function ($item) {
        return ['name' => $item['name'], 'value' => $item['id']];
        });
        $optionsPosition = Cache::remember('categoriesWithoutDetail', now()->addDay(), function() {
            return MultiselectWithoutDetailResource::collection(Category::whereNotNull('parent_id')->get());
        });

        return Inertia::render('Candidates/Index', [
            'candidates' => $candidates,
            'optionsRecruits' => $optionsRecruits,
            'optionsPosition' => $optionsPosition,
            'projects' => $projects,
            'categories' => $categories,
            'customTags' => $customTags,
            'filters' => $request->only(['name', 'surname', 'email', 'phone', 'project','recruiter','position','tags'])
        ]);
    }

    /**
     * Wyświetla szczegóły kandydata.
     */
    public function show(Candidate $candidate)
    {

        // Sprawdzenie czy kandydat ma aplikację w firmie zalogowanego użytkownika
        if (
            !$candidate->applications()
                ->where(function ($q) {
                    $q->where('user_id', Auth::id())
                        ->orWhere('recruiter_id', Auth::id());
                })
                ->exists()
        ) {
            abort(403);
        }
        $candidate->load('media','created_by');
        // Pobieranie wszystkich projektów, na które aplikował kandydat
        $candidateProjects = $candidate->projects->map(function($project) {
                return [
                    'application_id'   => $project->application_id,
                    'project_id'   => $project->project_id,
                    'project_name' => $project->project_name,
                    'created_at'   => $project->created_at,
                    'status'       => $project->status,
                ];
            });




        // Pobieranie ostatniej aplikacji kandydata w celu pobrania dodatkowych danych
        $lastApplication = $candidate->applications()
            ->where(function ($q) {
                $q->where('user_id', Auth::id())
                    ->orWhere('recruiter_id', Auth::id());
            })
            ->with(['project', 'cvClassic', 'notes'])
            ->latest()
            ->first();

        // Pobieranie kategorii i tagów dla widoku
        $locale = app()->getLocale();
        $categories = Category::whereNotNull('parent_id')
            ->get()
            ->filter(function($category) use ($locale) {
                $title = json_decode($category,true)['title'];
                return isset($title[$locale]) && !empty($title[$locale]);
            })
            ->values();
        $customTags = Auth::user()->tags()->orderBy('name')->get();

        // Pobieranie tagów przypisanych do kandydata
        $candidateTags = [];
        // Tutaj pobieranie tagów kandydata - implementacja w zależności od struktury DB

        // Pobierz tylko aktywne pytania z odpowiedziami kandydata
        $candidateQuestions = CandidateQuestion::where('is_active', true)
            ->where('created_by_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->with(['answers' => function($query) use ($candidate) {
                $query->where('candidate_id', $candidate->id);
            }])
            ->get();

        // Zmień nazwę relacji dla widoku Vue
        $candidateQuestions->each(function ($question) {
            $question->candidate_answers = $question->answers;
            unset($question->answers);
        });

//        dd(User::where('email',$candidate->email)->first(),$candidate->email);


        // Przygotowanie danych dla widoku
        $candidateData = [
            'id' => $candidate->id,
            'name' => $candidate->name,
            'surname' => $candidate->surname,
            'email' => $candidate->email,
            'worker_image'=> User::where('email',$candidate->email)->first()->profile_photo_url ?? null,
            'phone' => $candidate->phone,
            'questions_unlocked_at' => $candidate->questions_unlocked_at,
            'created_at' => $candidate->created_at,
            'status' => $lastApplication ? $lastApplication->status : null,
            'notes' => $lastApplication ? $lastApplication->notes : null,
          'cv_file' => $candidate->getMedia('candidate_cv_files')->last() ? [
            'id' => $candidate->getMedia('candidate_cv_files')->last()->id,
            'name' => $candidate->getMedia('candidate_cv_files')->last()->file_name,
            'url' => $candidate->getMedia('candidate_cv_files')->last()->getUrl(),
            'mime' => $candidate->getMedia('candidate_cv_files')->last()->mime_type,
            'size' => $candidate->getMedia('candidate_cv_files')->last()->size,
            'created_at' => $candidate->getMedia('candidate_cv_files')->last()->created_at->format('Y-m-d H:i:s'),
        ] : null,
            'created_by' => $candidate->created_by ? [
                'id' => $candidate->created_by->id,
                'color' => $candidate->created_by->color,
                'name' => $candidate->created_by->name.''.$candidate->created_by->surname,
                'avatar' => $candidate->created_by->profile_photo_url,
            ] : null,
        ];

        return Inertia::render('Candidates/Show', [
            'candidate' => $candidateData,
            'candidateProjects' => $this->formatCandidateProjects($candidate),
            'categories' => $categories,
            'customTags' => $customTags,
            'selectedCandidateTags' => $candidateTags,
            'candidateQuestions' => $candidateQuestions,
        ]);
    }

    /**
     * Formatuje projekty kandydata do odpowiedniego formatu dla widoku.
     */
    private function formatCandidateProjects(Candidate $candidate)
    {
        $formattedProjects = collect();

        $applications = $candidate->applications()
            ->where(function ($q) {
                $q->where('user_id', Auth::id())
                    ->orWhere('recruiter_id', Auth::id());
            })
            ->with('project')
            ->get();

        foreach ($applications as $application) {
            if (!$application->project) {
                continue;
            }

            // Użycie metody pomocniczej z modelu Project
            $projectPosition = $application->project->position['allTranslations']['title'][app()->getLocale()];
            $formattedProjects->push([
                'application_id' => $application->id,
                'project_id' => $application->project->id,
                'project_name' => $projectPosition,
                'created_at' => $application->created_at,
                'status' => $application->status,
                'country'       => $application->project?->countryWork['allTranslations'][app()->getLocale()],
                'city'       => $application->project?->cityWork,
                'price'       => $application->project?->basicSalaryFrom,
                'currency'       => $application->project?->currency['name'],
            ]);
        }

        return $formattedProjects->unique('project_id')->values();
    }

    /**
     * Pobiera tagi przypisane do kandydata.
     */
    public function getTags(Candidate $candidate)
    {
        // Sprawdzenie czy kandydat należy do zalogowanej firmy
        if (
            !$candidate->applications()
                ->where(function ($q) {
                    $q->where('user_id', Auth::id())
                        ->orWhere('recruiter_id', Auth::id());
                })
                ->exists()
        ) {
            abort(403);
        }
        // Pobieranie tagów kandydata
        $tags = DB::table('candidate_tag')
            ->where('candidate_id', $candidate->id)
            ->get();

        $result = [];

        // Przygotowanie tagów firmowych
        $customTags = DB::table('candidate_tag')
            ->join('tags', 'candidate_tag.tag_id', '=', 'tags.id')
            ->where('candidate_id', $candidate->id)
            ->whereNotNull('tag_id')
            ->select('tags.id', 'tags.name', DB::raw("'custom' as type"))
            ->get();

        // Przygotowanie tagów kategorii
        $categoryTags = DB::table('candidate_tag')
            ->join('categories', 'candidate_tag.category_id', '=', 'categories.id')
            ->where('candidate_id', $candidate->id)
            ->whereNotNull('category_id')
            ->select('categories.id', 'categories.title', DB::raw("'category' as type"))
            ->get();

        // Łączenie wyników
        foreach($customTags as $tag) {
            $result[] = [
                'id' => $tag->id,
                'name' => $tag->name,
                'type' => 'custom'
            ];
        }

        foreach($categoryTags as $tag) {
            // Pobierz zdekodowany tytuł
            $titleData = json_decode($tag->title, true);

            $result[] = [
                'id' => $tag->id,
                'title' => $titleData, // Pełny obiekt z tłumaczeniami
                'rawTitle' => $titleData, // Zachowujemy pełne dane dla przyszłego użycia
                'type' => 'category'
            ];
        }

        return response()->json($result);
    }

    /**
     * Zapisuje tagi dla kandydata.
     */
    public function saveTags(Request $request, Candidate $candidate)
    {
        // Sprawdzenie czy kandydat należy do zalogowanej firmy
        if (
            !$candidate->applications()
                ->where(function ($q) {
                    $q->where('user_id', Auth::id())
                        ->orWhere('recruiter_id', Auth::id());
                })
                ->exists()
        ) {
            abort(403);
        }

        // Walidacja danych
        $request->validate([
            'tags' => 'present|array',
            'tags.*.id' => 'required|integer',
            'tags.*.type' => 'required|in:custom,category'
        ]);

        // Rozpoczęcie transakcji
        DB::beginTransaction();

        try {
            // Usunięcie istniejących powiązań
            DB::table('candidate_tag')->where('candidate_id', $candidate->id)->delete();

            // Dodanie nowych powiązań jeśli są jakieś tagi
            if ($request->has('tags') && is_array($request->tags) && count($request->tags) > 0) {
                foreach($request->tags as $tag) {
                    if ($tag['type'] === 'custom') {
                        // Sprawdzenie czy tag należy do zalogowanej firmy
                        $tagExists = Tag::where('id', $tag['id'])
                            ->where('user_id', Auth::id())
                            ->exists();

                        if ($tagExists) {
                            DB::table('candidate_tag')->insert([
                                'candidate_id' => $candidate->id,
                                'tag_id' => $tag['id'],
                                'category_id' => null,
                                'created_at' => now(),
                                'updated_at' => now()
                            ]);
                        }
                    } else {
                        // Sprawdzenie czy kategoria istnieje
                        $categoryExists = Category::where('id', $tag['id'])->exists();

                        if ($categoryExists) {
                            DB::table('candidate_tag')->insert([
                                'candidate_id' => $candidate->id,
                                'tag_id' => null,
                                'category_id' => $tag['id'],
                                'created_at' => now(),
                                'updated_at' => now()
                            ]);
                        }
                    }
                }
            }

            session()->flash('flash.banner', __('translate.updateTags'));
            session()->flash('flash.bannerStyle', 'success');
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => __('translate.errorUpdatingTags')], 500);
        }
    }

    public function evidence(Candidate $candidate)
    {
        // Sprawdzenie czy kandydat ma aplikację w firmie zalogowanego użytkownika
        if (!$candidate->where('created_by_id', Auth::id())) {
            abort(403);
        }
        $candidate->load('media','created_by');
        $optionsPosition = Cache::remember('categoriesWithoutDetail', now()->addDay(), function() {
            return MultiselectWithoutDetailResource::collection(Category::whereNotNull('parent_id')->get());
        });
        $externalCompanies = ExternalCompany::where('user_id',auth()->user()->id)->latest()->get();
        $countries = Cache::rememberForever('countries_'.app()->getLocale(), function() {
            return (new Helper())->makeCountriesToSelect();
        });
        $currencies = Cache::rememberForever('currencies', function() {
            return config('currencyShorts');
        });

        $candidate->load(['evidences' => function($query) {
            $query->orderBy('date_of_hire', 'desc'); // 'desc' dla malejąco
        }]);

        return Inertia::render('Candidates/Evidence', [
            'candidate' => $candidate,
            'externalCompanies' =>$externalCompanies,
            'countries' =>$countries,
            'optionsPosition' =>$optionsPosition,
            'currencies' =>$currencies,
        ]);
    }

    public function evidencesStore(Request $request, Candidate $candidate)
    {
        $validated = $request->validate([
        'external_company'=>'required|array',
        'position'=>'required',
        'salary' => 'required|numeric|min:0|max:99999999.99', // DECIMAL(10,2) maksymalnie 10 cyfr, 2 po przecinku
        'currency'=>'required_with:salary|nullable|array',
        'date_of_hire'=>'required|date',
        'country'=>'required',
        'notes'=>'nullable|string|max:1500',
        ],[],[
            'salary'=>strtolower(__('translate.salary')),
            'position'=>strtolower(__('translate.position')),
            'external_company_id'=>strtolower(__('translate.externalCompany')),
            'currency'=>strtolower(__('translate.currency')),
            'date_of_hire'=>strtolower(__('translate.date_of_hire')),
            'country'=>strtolower(__('translate.country')),
            'external_company'=>strtolower(__('translate.external_company')),
        ]);


        $candidate->evidences()->create($validated);

        session()->flash('flash.banner', __('translate.evidencesCreated'));
        session()->flash('flash.bannerStyle','success');
        return back();

    }

    public function evidencesUpdate(Request $request, Candidate $candidate, CandidateEvidence $evidence)
    {
        if ($evidence->candidate_id !== $candidate->id) {
            abort(403, 'Unauthorized action.');
        }
        $validated = $request->validate([
            'external_company'=>'required|array',
            'position'=>'required',
            'salary' => 'required|numeric|min:0|max:99999999.99', // DECIMAL(10,2) maksymalnie 10 cyfr, 2 po przecinku
            'currency'=>'required_with:salary|nullable|array',
            'date_of_hire'=>'required|date',
            'country'=>'required',
            'notes'=>'nullable|string|max:1500',
        ],[],[
            'salary'=>strtolower(__('translate.salary')),
            'position'=>strtolower(__('translate.position')),
            'external_company_id'=>strtolower(__('translate.externalCompany')),
            'currency'=>strtolower(__('translate.currency')),
            'date_of_hire'=>strtolower(__('translate.date_of_hire')),
            'country'=>strtolower(__('translate.country')),
        ]);
        $evidence->update($validated);
        session()->flash('flash.banner', __('translate.evidencesUpdated'));
        session()->flash('flash.bannerStyle','success');
        return back();
    }

    public function evidencesDelete(Candidate $candidate,CandidateEvidence $evidence)
    {
        if ($evidence->candidate_id !== $candidate->id) {
            abort(403, 'Unauthorized action.');
        }
        $evidence->delete();
        session()->flash('flash.banner', __('translate.evidencesDeleted'));
        session()->flash('flash.bannerStyle','success');
        return back();
    }
}
