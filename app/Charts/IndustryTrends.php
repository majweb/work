<?php

namespace App\Charts;

use App\Models\Aplication;
use App\Models\Project;
use marineusde\LarapexCharts\Charts\LineChart as OriginalLineChart;
use Carbon\Carbon;

class IndustryTrends
{
    public function build(string $period = 'month')
    {
        // Line chart: Application count per period per top 3 industries
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

        $labels = [];
        $dateFormat = $period === 'day' ? 'd.m' : 'm.Y';
        $dbFormat = $period === 'day' ? '%Y-%m-%d' : '%Y-%m';
        $count = $period === 'day' ? 14 : 5; // 14 days or 6 months

        for ($i = $count; $i >= 0; $i--) {
            if ($period === 'day') {
                $date = Carbon::now()->subDays($i);
                $labels[] = $date->format($dateFormat);
            } else {
                $date = Carbon::now()->subMonths($i);
                $labels[] = $date->format($dateFormat);
            }
        }

        $startDate = $period === 'day' ? Carbon::now()->subDays($count)->startOfDay() : Carbon::now()->subMonths($count)->startOfMonth();

        // Debugging info (can be seen in Inertia response)
        // \Log::info("Trend period: $period, Labels: " . implode(', ', $labels));

        // Pre-fetch all application counts for top industries in one go
        $counts = \Illuminate\Support\Facades\DB::table('aplications')
            ->join('projects', 'aplications.project_id', '=', 'projects.id')
            ->where('aplications.user_id', auth()->id())
            ->where('aplications.created_at', '>=', $startDate)
            ->selectRaw("DATE_FORMAT(aplications.created_at, '$dbFormat') as time_label, projects.category, count(*) as count")
            ->groupBy('time_label', 'projects.category')
            ->get();

        $chart = (new OriginalLineChart)
            ->setAdditionalOptions([
                'chart' => [
                    'toolbar' => [
                        'show' => false
                    ],
                    'animations' => [
                        'enabled' => false
                    ]
                ],
                'xaxis' => [
                    'categories' => $labels,
                    'type' => 'category',
                    'labels' => [
                        'rotate' => -45,
                        'style' => [
                            'fontSize' => '10px'
                        ]
                    ]
                ]
            ]);

        foreach ($topIndustryIds as $industryId) {
            $data = [];
            $industryName = $categoryNames[$industryId];

            foreach ($labels as $index => $label) {
                // We need to match the time_label from DB with the correct date for that label
                $matchDate = $period === 'day'
                    ? Carbon::now()->subDays($count - $index)->format('Y-m-d')
                    : Carbon::now()->subMonths($count - $index)->format('Y-m');

                $c = $counts->filter(function($item) use ($matchDate, $industryId) {
                    $cat = json_decode($item->category, true);
                    return $item->time_label === $matchDate && isset($cat['value']) && $cat['value'] === $industryId;
                })->sum('count');

                $data[] = $c;
            }
            $chart->addData($industryName, $data);
        }

        return $chart->toVue();
    }
}
