<?php

namespace App\Charts;

use App\Models\Project;
use marineusde\LarapexCharts\Charts\PieChart as OriginalPieChart;
use Illuminate\Support\Facades\DB;

class IndustryInterestVisits
{
    public function build()
    {
        // Interest by industry (visits)
        // Group projects by category and sum views_count
        $projectsData = Project::where('user_id', auth()->id())
            ->select('category', DB::raw('SUM(views_count) as total_views'))
            ->groupBy('category')
            ->get();

        $data = [];
        $categoryNames = [];

        foreach ($projectsData as $project) {
            $category = $project->category;
            if (isset($category['value'])) {
                $id = $category['value'];
                $data[$id] = ($data[$id] ?? 0) + $project->total_views;
                if (!isset($categoryNames[$id])) {
                    $categoryNames[$id] = $category['allTranslations']['title'][app()->getLocale()] ?? $category['name'] ?? __('translate.without');
                }
            }
        }

        arsort($data);
        $topData = array_slice($data, 0, 5, true);

        $finalData = [];
        $finalLabels = [];
        foreach ($topData as $id => $val) {
            $finalData[] = $val;
            $finalLabels[] = $categoryNames[$id];
        }

        return (new OriginalPieChart)
            ->addData($finalData)
            ->setLabels($finalLabels)
            ->toVue();
    }
}
