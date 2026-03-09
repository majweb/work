<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aplication;
use App\Models\Project;
use App\Models\User;
use App\Models\Foundation;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Carbon\Carbon;
use marineusde\LarapexCharts\Charts\BarChart;
use marineusde\LarapexCharts\Charts\LineChart;

class StatisticsController extends Controller
{
    public function index(Request $request)
    {
        $period = $request->query('period', 'all');

        $data = [
            'applications' => $this->getStats(Aplication::query(), $period),
            'projects' => $this->getStats(Project::query(), $period),
            'users' => $this->getStats(User::query(), $period),
            'foundations' => $this->getStats(Foundation::query(), $period),
        ];

        return Inertia::render('Admin/Statistics/Index', [
            'stats' => $data,
            'period' => $period,
            'charts' => Inertia::lazy(fn () => [
                'activityTrend' => $this->getActivityTrendChart($period),
                'contentDistribution' => $this->getContentDistributionChart(),
            ])
        ]);
    }

    public function charts(Request $request)
    {
        $period = $request->query('period', 'all');

        return response()->json([
            'activityTrend' => $this->getActivityTrendChart($period),
            'contentDistribution' => $this->getContentDistributionChart(),
        ]);
    }

    public function cardStats(Request $request)
    {
        $category = $request->query('category');
        $period = $request->query('period', 'all');

        $query = match ($category) {
            'applications' => Aplication::query(),
            'projects' => Project::query(),
            'users' => User::query(),
            'foundations' => Foundation::query(),
            default => null,
        };

        if (!$query) {
            return response()->json(['error' => 'Invalid category'], 400);
        }

        return response()->json($this->getStats($query, $period));
    }

    private function getStats($query, $period)
    {
        $currentQuery = clone $query;
        $previousQuery = clone $query;

        $now = Carbon::now();
        $startOfCurrent = null;
        $startOfPrevious = null;
        $endOfCurrent = $now->copy()->endOfDay();

        switch ($period) {
            case 'week':
                // Bieżący tydzień (Poniedziałek - Dzisiaj)
                $startOfCurrent = $now->copy()->startOfWeek();
                $endOfCurrent = $now->copy()->endOfDay();

                // Poprzedni tydzień (Poprzedni Poniedziałek - Poprzednia Niedziela)
                $startOfPrevious = $now->copy()->subWeek()->startOfWeek();
                $endOfPrevious = $now->copy()->subWeek()->endOfWeek();
                break;
            case 'previous_week':
                // Poprzedni tydzień jako okres bieżący
                $startOfCurrent = $now->copy()->subWeek()->startOfWeek();
                $endOfCurrent = $now->copy()->subWeek()->endOfWeek();

                // Tydzień przed poprzednim jako okres porównawczy
                $startOfPrevious = $now->copy()->subWeeks(2)->startOfWeek();
                $endOfPrevious = $now->copy()->subWeeks(2)->endOfWeek();
                break;
            case 'month':
                // Bieżący miesiąc
                $startOfCurrent = $now->copy()->startOfMonth();
                $endOfCurrent = $now->copy()->endOfDay();

                // Poprzedni miesiąc
                $startOfPrevious = $now->copy()->subMonth()->startOfMonth();
                $endOfPrevious = $now->copy()->subMonth()->endOfMonth();
                break;
            case 'year':
                // Bieżący rok
                $startOfCurrent = $now->copy()->startOfYear();
                $endOfCurrent = $now->copy()->endOfDay();

                // Poprzedni rok
                $startOfPrevious = $now->copy()->subYear()->startOfYear();
                $endOfPrevious = $now->copy()->subYear()->endOfYear();
                break;
            default:
                return [
                    'total' => $query->count(),
                    'diff' => 0,
                    'trend' => 'up'
                ];
        }

        $currentCount = $currentQuery->whereBetween('created_at', [$startOfCurrent, $endOfCurrent])->count();
        $previousCount = $previousQuery->whereBetween('created_at', [$startOfPrevious, $endOfPrevious])->count();

        $diff = $currentCount - $previousCount;
        $trend = $diff >= 0 ? 'up' : 'down';

        return [
            'total' => $query->count(),
            'current_period' => $currentCount,
            'previous_period' => $previousCount,
            'diff' => abs($diff),
            'trend' => $trend
        ];
    }

    private function getActivityTrendChart($period)
    {
        $chart = new LineChart();

        $labels = [];
        $appsData = [];
        $projectsData = [];

        $count = match ($period) {
            'year' => 12,
            'month' => 30,
            'previous_week' => 7,
            default => 7,
        };
        $format = $period === 'year' ? 'M' : 'd.m';

        // Jeśli używamy okna kroczącego w getStats, to tutaj też powinniśmy pokazywać ostatnie X dni/miesięcy
        for ($i = $count - 1; $i >= 0; $i--) {
            if ($period === 'previous_week') {
                $date = Carbon::now()->subWeek()->startOfWeek()->addDays(6 - $i);
            } else {
                $date = $period === 'year' ? Carbon::now()->subMonths($i) : Carbon::now()->subDays($i);
            }
            $labels[] = $date->format($format);

            $start = $date->copy()->startOfDay();
            $end = $date->copy()->endOfDay();
            if ($period === 'year') {
                $start = $date->copy()->startOfMonth();
                $end = $date->copy()->endOfMonth();
            }

            $appsData[] = Aplication::whereBetween('created_at', [$start, $end])->count();
            $projectsData[] = Project::whereBetween('created_at', [$start, $end])->count();
        }

        return $chart->setTitle(__('translate.activityTrend') ?? 'Trend aktywności')
            ->setLabels($labels)
            ->setDataset([
                [
                    'name' => __('translate.applications') ?? 'Aplikacje',
                    'data' => $appsData
                ],
                [
                    'name' => __('translate.projects') ?? 'Oferty',
                    'data' => $projectsData
                ]
            ])
            ->setColors(['#60A5FA', '#F87171'])
            ->toVue();
    }

    private function getContentDistributionChart()
    {
        $chart = new BarChart();

        return $chart->setTitle(__('translate.contentDistribution') ?? 'Rozkład treści')
            ->setLabels([
                __('translate.users') ?? 'Użytkownicy',
                __('translate.foundations') ?? 'Fundacje',
                __('translate.partners') ?? 'Partnerzy'
            ])
            ->setDataset([
                [
                    'name' => __('translate.total') ?? 'Suma',
                    'data' => [
                        User::count(),
                        Foundation::count(),
                        \App\Models\Partner::count()
                    ]
                ]
            ])
            ->setColors(['#0A2C5C'])
            ->toVue();
    }
}
