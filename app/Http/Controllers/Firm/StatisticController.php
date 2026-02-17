<?php

namespace App\Http\Controllers\Firm;

use App\Charts\AppsRecruits;
use App\Charts\AppsStatus;
use App\Charts\AppsStatusPercentYes;
use App\Charts\AppWithStatus;
use App\Charts\PercentYes;
use App\Charts\ProjectsRecruits;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function index(
        \App\Charts\IndustryInterestVisits $visitsChart,
        \App\Charts\IndustryInterestApps $appsChart,
        \App\Charts\AppsStatus $statusChart,
        \App\Charts\IndustryTrends $trendsChart
    ) {
        $user = auth()->user();

        // 1. KPI Tiles (Statystyki ogólne)
        $recruitersCount = $user->recruits()->whereNull('user_blocked')->count() + 1; // +1 for the owner

        $projectsStats = \App\Models\Project::where('user_id', $user->id)
            ->selectRaw('count(*) as count, sum(views_count) as total_views')
            ->first();

        $projectsCount = $projectsStats->count;
        $totalVisits = $projectsStats->total_views ?? 0;

        $appsStats = \App\Models\Aplication::where('user_id', $user->id)
            ->selectRaw("
                count(*) as total_count,
                count(case when status = 'yes' then 1 end) as yes_count,
                count(case when status = 'maybe' then 1 end) as maybe_count,
                count(case when status = 'no' then 1 end) as no_count
            ")
            ->first();

        $appsCount = $appsStats->total_count;
        $statusStats = [
            'yes' => $appsStats->yes_count,
            'maybe' => $appsStats->maybe_count,
            'no' => $appsStats->no_count,
        ];

        // 2. Recruiter Table (Statystyki szczegółowe)
        $recruiters = $user->recruits()
            ->withCount([
                'projectsRecruits',
                'applicationsRecruits',
                'applicationsRecruits as yes_count' => fn($q) => $q->where('status', 'yes'),
                'applicationsRecruits as no_count' => fn($q) => $q->where('status', 'no'),
                'applicationsRecruits as maybe_count' => fn($q) => $q->where('status', 'maybe'),
            ])
            ->withAggregate('applicationsRecruits as last_activity_date', 'max(status_changed_at)')
            ->get()
            ->map(function ($recruit) {
                $total = $recruit->applications_recruits_count;
                $recruit->quality = $total > 0 ? round(($recruit->yes_count / $total) * 100, 2) : 0;
                $recruit->last_activity = $recruit->last_activity_date
                    ? $this->formatLastActivity($recruit->last_activity_date)
                    : __('translate.NoData');

                return $recruit;
            });

        // Add owner to recruiters list
        $owner = \App\Models\User::withCount([
            'projectsRecruits',
            'applicationsRecruits',
            'applicationsRecruits as yes_count' => fn($q) => $q->where('status', 'yes'),
            'applicationsRecruits as no_count' => fn($q) => $q->where('status', 'no'),
            'applicationsRecruits as maybe_count' => fn($q) => $q->where('status', 'maybe'),
        ])
        ->withAggregate('applicationsRecruits as last_activity_date', 'max(status_changed_at)')
        ->find($user->id);

        if ($owner) {
            $ownerTotal = $owner->applications_recruits_count;
            $owner->quality = $ownerTotal > 0 ? round(($owner->yes_count / $ownerTotal) * 100, 2) : 0;
            $owner->last_activity = $owner->last_activity_date
                ? $this->formatLastActivity($owner->last_activity_date)
                : __('translate.NoData');
            $recruiters->prepend($owner);
        }

        // 3. Projects Table (Statystyki szczegółowe)
        $projects = \App\Models\Project::where('user_id', $user->id)
            ->with(['recruit:id,name,profile_photo_path'])
            ->withCount([
                'aplications',
                'aplications as yes_count' => fn($q) => $q->where('status', 'yes'),
                'aplications as no_count' => fn($q) => $q->where('status', 'no'),
                'aplications as maybe_count' => fn($q) => $q->where('status', 'maybe'),
            ])
            ->latest()
            ->get()
            ->map(function ($project) {
                $total = $project->aplications_count;
                $project->distribution = [
                    'yes' => $total > 0 ? round(($project->yes_count / $total) * 100) : 0,
                    'maybe' => $total > 0 ? round(($project->maybe_count / $total) * 100) : 0,
                    'no' => $total > 0 ? round(($project->no_count / $total) * 100) : 0,
                ];
                $project->position_name = $project->position['allTranslations']['title'][app()->getLocale()] ?? $project->position['name'] ?? __('translate.projectWithoutTitle');
                return $project;
            });

        return inertia()->render('Statistic/Index', [
            'kpi' => [
                'recruiters' => $recruitersCount,
                'projects' => $projectsCount,
                'applications' => $appsCount,
                'visits' => $totalVisits,
            ],
            'statusStats' => $statusStats,
            'charts' => [
                'visitsByIndustry' => $visitsChart->build() ?: ['options' => [], 'series' => []],
                'appsByIndustry' => $appsChart->build() ?: ['options' => [], 'series' => []],
                'statusDistribution' => $statusChart->build() ?: ['options' => [], 'series' => []],
                'industryTrends' => $trendsChart->build() ?: ['options' => [], 'series' => []],
            ],
            'recruiters' => $recruiters,
            'projects' => $projects,
        ]);
    }

    private function formatLastActivity($date)
    {
        $dt = \Carbon\Carbon::parse($date);
        if ($dt->isToday()) {
            return $dt->diffForHumans();
        }
        if ($dt->isYesterday()) {
            return __('translate.yesterday');
        }
        return $dt->diffForHumans();
    }
}
