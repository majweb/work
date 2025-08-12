<?php

namespace App\Http\Controllers;

use App\Models\Aplication;
use App\Models\Candidate;
use App\Models\Project;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        // Pobieramy kandydatów, którzy aplikowali na projekty zalogowanej firmy
        $query = Candidate::whereHas('applications', function($q) {
            $q->where('user_id', Auth::id());
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

        // Pobieramy kandydatów z ich projektami
        $candidates = $query->with('projects')->orderBy('created_at', 'desc')->paginate(10)->withQueryString();

        // Pobieranie unikalnych projektów dla filtra
        $projectIds = Aplication::where('user_id', Auth::id())
            ->distinct()
            ->pluck('project_id');

        $projects = Project::whereIn('id', $projectIds)->get();

        return Inertia::render('Candidates/Index', [
            'candidates' => $candidates,
            'projects' => $projects,
            'filters' => $request->only(['name', 'surname', 'email', 'phone', 'project'])
        ]);
    }

    /**
     * Wyświetla szczegóły kandydata.
     */
    public function show(Candidate $candidate)
    {
        // Sprawdzenie czy kandydat ma aplikację w firmie zalogowanego użytkownika
        if (!$candidate->applications()->where('user_id', Auth::id())->exists()) {
            abort(403);
        }

        // Pobieranie wszystkich projektów, na które aplikował kandydat
        $candidateProjects = $candidate->projects;

        // Pobieranie ostatniej aplikacji kandydata w celu pobrania dodatkowych danych
        $lastApplication = $candidate->applications()
            ->where('user_id', Auth::id())
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
        dd($categories);
        $customTags = Auth::user()->tags()->orderBy('name')->get();

        // Pobieranie tagów przypisanych do kandydata
        $candidateTags = [];
        // Tutaj pobieranie tagów kandydata - implementacja w zależności od struktury DB

        // Przygotowanie danych dla widoku
        $candidateData = [
            'id' => $candidate->id,
            'name' => $candidate->name,
            'surname' => $candidate->surname,
            'email' => $candidate->email,
            'phone' => $candidate->phone,
            'created_at' => $candidate->created_at,
            'status' => $lastApplication ? $lastApplication->status : null,
            'notes' => $lastApplication ? $lastApplication->notes : null,
        ];

        return Inertia::render('Candidates/Show', [
            'candidate' => $candidateData,
            'candidateProjects' => $this->formatCandidateProjects($candidate),
            'candidateFullProjects' => $candidateProjects,
            'categories' => $categories,
            'customTags' => $customTags,
            'selectedCandidateTags' => $candidateTags
        ]);
    }

    /**
     * Formatuje projekty kandydata do odpowiedniego formatu dla widoku.
     */
    private function formatCandidateProjects(Candidate $candidate)
    {
        $formattedProjects = collect();

        $applications = $candidate->applications()
            ->where('user_id', Auth::id())
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
                'status' => $application->status
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
        if (!$candidate->applications()->where('user_id', Auth::id())->exists()) {
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
        if (!$candidate->applications()->where('user_id', Auth::id())->exists()) {
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
}
