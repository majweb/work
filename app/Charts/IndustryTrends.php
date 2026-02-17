<?php

namespace App\Charts;

use App\Models\Aplication;
use App\Models\Project;
use marineusde\LarapexCharts\Charts\LineChart as OriginalLineChart;
use Carbon\Carbon;

class IndustryTrends
{
    public function build()
    {
        // Line chart: Application count per month per top 3 industries
        // Get top 3 industries - optimized grouping
        $projectsData = Project::where('user_id', auth()->id())
            ->withCount('aplications')
            ->select('category')
            ->get();

        $industryTotals = [];
        $categoryNames = [];

        foreach ($projectsData as $project) {
            $cat = $project->category;
            if (isset($cat['value'])) {
                $id = $cat['value'];
                $industryTotals[$id] = ($industryTotals[$id] ?? 0) + $project->aplications_count;
                if (!isset($categoryNames[$id])) {
                    $categoryNames[$id] = $cat['allTranslations']['title'][app()->getLocale()] ?? $cat['name'] ?? __('translate.without');
                }
            }
        }
        arsort($industryTotals);
        $topIndustryIds = array_slice(array_keys($industryTotals), 0, 3);

        $months = [];
        for ($i = 5; $i >= 0; $i--) {
            $months[] = Carbon::now()->subMonths($i)->format('Y-m');
        }

        // Pre-fetch all application counts for top industries in one go to avoid N+1 in months loop
        // Let's optimize by fetching all counts for all industries and months in one query to avoid complex JSON filtering in SQL
        $counts = \Illuminate\Support\Facades\DB::table('aplications')
            ->join('projects', 'aplications.project_id', '=', 'projects.id')
            ->where('aplications.user_id', auth()->id())
            ->where('aplications.created_at', '>=', Carbon::now()->subMonths(5)->startOfMonth())
            ->selectRaw("DATE_FORMAT(aplications.created_at, '%Y-%m') as month, projects.category, count(*) as count")
            ->groupBy('month', 'projects.category')
            ->get();

        $chart = (new OriginalLineChart)
            ->setLabels($months);

        foreach ($topIndustryIds as $industryId) {
            $monthlyData = [];
            $industryName = $categoryNames[$industryId];

            foreach ($months as $month) {
                $count = $counts->filter(function($item) use ($month, $industryId) {
                    $cat = json_decode($item->category, true);
                    return $item->month === $month && isset($cat['value']) && $cat['value'] === $industryId;
                })->sum('count');

                $monthlyData[] = $count;
            }
            $chart->addData($industryName, $monthlyData);
        }

        return $chart->toVue();
    }
}
