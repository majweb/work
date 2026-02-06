<?php

namespace App\Http\Controllers;

use App\Charts\MonthlyUsersChart;
use App\Models\Aplication;
use App\Models\Project;
use App\Models\ProjectQuestion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();
        $countQuestions = ProjectQuestion::whereNull('accepted')->count();

        // Dane dla pracownika (worker)
        $lastAplications = Aplication::with('project.user')->where('aplication_user_id',auth()->user()->id)->latest()->first();
        $otherAplications = Aplication::with('project.user')
            ->where('aplication_user_id', auth()->user()->id)
            ->when($lastAplications, function ($query) use ($lastAplications) {
                $query->where('id', '!=', $lastAplications->id);
            })
            ->latest()
            ->take(4)
            ->get();

        // Dane dla rekrutera (recruit)
        $recruitData = [];
        $firmData = [];
        if ($user->hasRole('recruit')) {
            // Pobierz projekty rekrutera
            $projects = \App\Models\Project::where('recruiter_id', $user->id)
                ->orWhereJsonContains('other_recruits', $user->id)
                ->withCount([
                    'aplications',
                    'aplications as yes_count' => function ($query) {
                        $query->where('status', 'yes');
                    },
                    'aplications as no_count' => function ($query) {
                        $query->where('status', 'no');
                    },
                    'aplications as maybe_count' => function ($query) {
                        $query->where('status', 'maybe');
                    },
                    'aplications as new_count' => function ($query) {
                        $query->whereNull('status');
                    }
                ])
                ->latest()
                ->take(5)
                ->get()
                ->map(function ($project) {
                    $position = is_string($project->position) ? json_decode($project->position, true) : $project->position;
                    $countryWork = is_string($project->countryWork) ? json_decode($project->countryWork, true) : $project->countryWork;
                    return [
                        'id' => $project->id,
                        'position' => $position['allTranslations']['title'][app()->getLocale()] ?? $position['name'] ?? __('translate.projectWithoutTitle'),
                        'city' => $project->cityWork ?? '',
                        'country' => $countryWork['allTranslations'][app()->getLocale()] ?? $countryWork['name'] ?? '',
                        'is_active' => $project->is_active ?? true,
                        'aplications_count' => $project->aplications_count ?? 0,
                        'views_count' => $project->views_count ?? 0,
                        'yes_count' => $project->yes_count ?? 0,
                        'no_count' => $project->no_count ?? 0,
                        'maybe_count' => $project->maybe_count ?? 0,
                        'new_count' => $project->new_count ?? 0,
                        'created_at' => $project->created_at ? \Carbon\Carbon::parse($project->created_at)->format('d.m.Y H:i') : '',
                        'updated_at' => $project->updated_at ? $project->updated_at->toISOString() : '',
                    ];
                });

            // Pobierz ostatnie aplikacje dla projektów rekrutera
            $recruitApplications = Aplication::with(['user','worker', 'project'])
                ->whereHas('project', function ($query) use ($user) {
                    $query->where('recruiter_id', $user->id)
                        ->orWhereJsonContains('other_recruits', $user->id);
                })
                ->latest()
                ->take(5)
                ->get()
                ->map(function ($app) {
                    $userName = $app->worker && $app->worker->exists
                        ? $app->worker->name
                        : trim($app->name . ' ' . $app->surname);
                    $userPhoto = $app->worker?->profile_photo_url;

                    if (!$userPhoto) {
                        $initials = trim(collect(explode(' ', $userName))
                            ->map(fn ($segment) => mb_substr($segment, 0, 1))
                            ->join(' ')
                        );

                        $userPhoto = 'https://ui-avatars.com/api/?name=' . urlencode($initials) . '&color=7F9CF5&background=EBF4FF';
                    }

                    return [
                        'id' => $app->id,
                        'status' => $app->status,
                        'user' => [
                            'name' => $userName,
                            'profile_photo_url' => $userPhoto,
                        ],
                        'position' => $app->project?->position['allTranslations']['title'][app()->getLocale()] ?? __('translate.projectWithoutTitle'),
                        'app_id' => $app->id,
                        'status_changed_at' => \Carbon\Carbon::parse($app->status_changed_at ?? $app->created_at)->format('d.m.Y H:i'),
                        'created_at' => $app->created_at->toISOString(),
                    ];
                });

            // Statystyki aplikacji dla wykresu
            $totalYes = Aplication::whereHas('project', function ($query) use ($user) {
                $query->where('recruiter_id', $user->id)
                    ->orWhereJsonContains('other_recruits', $user->id);
            })->where('status', 'yes')->count();

            $totalNo = Aplication::whereHas('project', function ($query) use ($user) {
                $query->where('recruiter_id', $user->id)
                    ->orWhereJsonContains('other_recruits', $user->id);
            })->where('status', 'no')->count();

            $totalMaybe = Aplication::whereHas('project', function ($query) use ($user) {
                $query->where('recruiter_id', $user->id)
                    ->orWhereJsonContains('other_recruits', $user->id);
            })->where('status', 'maybe')->count();

            $totalNew = Aplication::whereHas('project', function ($query) use ($user) {
                $query->where('recruiter_id', $user->id)
                    ->orWhereJsonContains('other_recruits', $user->id);
            })->whereNull('status')->count();

            $recruitData = [
                'applications' => $recruitApplications,
                'projects' => $projects,
                'data' => [
                    'yes' => $totalYes,
                    'no' => $totalNo,
                    'maybe' => $totalMaybe,
                    'new' => $totalNew,
                ],
            ];
        }
        if ($user->hasRole('firm')) {

            $recruits = User::where('recruiter_from_firm_id',auth()->id())->orWhere('id', auth()->id())->get();
            $activeRecruits = $recruits->whereNull('user_blocked')->count();
            $noRecruits = $recruits->whereNotNull('user_blocked', false)->count();
            $projectsCount = Project::where('user_id', $user->id)
                ->orWhereJsonContains('other_recruits', $user->id)->count();
            $aplicationCount  =Aplication::query()
                ->forCurrentRecruiter()->count();

            $baseQuery = Aplication::where(function ($q) use ($user) {
                $q->whereHas('project', function ($query) use ($user) {
                    $query->where('recruiter_id', $user->id)
                        ->orWhereJsonContains('other_recruits', $user->id);
                })
                    ->orWhere('user_id', auth()->id());
            });
            $totalYes = (clone $baseQuery)->where('status', 'yes')->count();
            $totalNo = (clone $baseQuery)->where('status', 'no')->count();
            $totalMaybe = (clone $baseQuery)->where('status', 'maybe')->count();
            $totalNew = (clone $baseQuery)->whereNull('status')->count();

            $products = \App\Models\Product::where('product_type', 'Points')
                ->where('active', true)
                ->orderBy('points', 'asc')
                ->get();

            $firmData = [
                'aplications' => [
                    'yes' => $totalYes,
                    'no' => $totalNo,
                    'maybe' => $totalMaybe,
                    'new' => $totalNew,
                ],
                'recruits' => [
                    'active' => $activeRecruits,
                    'no' => $noRecruits,
                ],
            ];
        }

        $notifications = $user->notifications()->latest()->take(10)->get();

        return inertia()->render('Dashboard',[
            'chartRecruit' => $user->hasRole('recruit') ? $recruitData : NULL,
            'chartFirm' => $user->hasRole('firm') ? $firmData : NULL,
            'lastAplications'=>$lastAplications,
            'countQuestions'=>$countQuestions,
            'otherAplications' => $otherAplications,
            'notifications' => $notifications,
            'products' => $products,
            'recruitsCount' => $recruits->count(),
            'projectsCount' => $projectsCount,
            'aplicationCount' => $aplicationCount,
        ]);
    }

}
