<?php

namespace App\Http\Controllers;

use App\Models\Aplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class CandidatesController extends Controller
{
    /**
     * Wyświetla listę kandydatów zalogowanej firmy z unikalnymi emailami.
     */
    public function index(Request $request)
    {
        // Pobieramy unikalne emaile z tabeli aplikacji dla zalogowanej firmy
        $query = Aplication::query()
            ->where('user_id', Auth::id())
            ->select('email', DB::raw('MAX(id) as id'))
            ->groupBy('email');

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
            $query->whereHas('project', function ($q) use ($request) {
                $q->where('id', $request->project);
            });
        }

        // Pobieramy ID aplikacji z unikalnymi emailami
        $uniqueIds = $query->pluck('id');

        // Pobieramy pełne dane aplikacji na podstawie unikalnych ID
        $candidatesQuery = Aplication::whereIn('id', $uniqueIds)
            ->with('project')
            ->orderBy('created_at', 'desc');

        $candidates = $candidatesQuery->paginate(10)->withQueryString();

            // Dla każdego kandydata pobieramy unikalne projekty, na które aplikował
            foreach ($candidates as $candidate) {
                $projects = Aplication::where('email', $candidate->email)
                    ->where('user_id', Auth::id())
                    ->with('project')
                    ->get()
                    ->pluck('project')
                    ->filter()
                    ->unique('id')
                    ->values();

                $candidate->projects = $projects;
            }

        // Pobieranie unikalnych projektów dla filtra
        $projects = Aplication::where('user_id', Auth::id())
            ->with('project')
            ->get()
            ->pluck('project')
            ->filter()
            ->unique('id')
            ->values();

        return Inertia::render('Candidates/Index', [
            'candidates' => $candidates,
            'projects' => $projects,
            'filters' => $request->only(['name', 'surname', 'email', 'phone', 'project'])
        ]);
    }

    /**
     * Wyświetla szczegóły kandydata.
     */
    public function show(Aplication $candidate)
    {
        // Sprawdzenie czy kandydat należy do zalogowanej firmy
        if ($candidate->user_id !== Auth::id()) {
            abort(403);
        }

        $candidate->load(['project', 'cvClassic', 'notes']);

        // Pobieranie wszystkich projektów, na które aplikował kandydat
        $candidateProjects = $this->getCandidateProjects($candidate->email);

        // Pobieramy unikalne projekty z pełnymi informacjami
        $candidateFullProjects = Aplication::where('email', $candidate->email)
            ->where('user_id', Auth::id())
            ->with('project')
            ->get()
            ->pluck('project')
            ->filter()
            ->unique('id')
            ->values();

        return Inertia::render('Candidates/Show', [
            'candidate' => $candidate,
            'candidateProjects' => $candidateProjects,
            'candidateFullProjects' => $candidateFullProjects
        ]);
    }

    /**
     * Pobiera listę projektów, na które aplikował kandydat o podanym adresie email.
     * Zapewnia unikalność projektów na podstawie project_id.
     */
    private function getCandidateProjects(string $email)
    {
        $applications = Aplication::where('email', $email)
            ->where('user_id', Auth::id())
            ->with('project')
            ->get();

        // Zbieranie wszystkich aplikacji i grupowanie ich według ID projektu
        $groupedByProject = collect();

        foreach ($applications as $application) {
            if (!$application->project) {
                continue;
            }

            $projectId = $application->project->id;

            // Jeśli mamy już ten projekt, sprawdzamy tylko status
            if (!$groupedByProject->has($projectId)) {
                $groupedByProject->put($projectId, [
                    'application_id' => $application->id,
                    'project_id' => $projectId,
                    'project_name' => $application->project->position,
                    'created_at' => $application->created_at,
                    'status' => $application->status
                ]);
            }
        }

        return $groupedByProject->values();
    }
}
