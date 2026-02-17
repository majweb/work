<?php

namespace App\Charts;

use Illuminate\Support\Facades\DB;
use marineusde\LarapexCharts\Charts\PieChart as OriginalPieChart;

class IndustryInterestApps
{
    public function build()
    {
        // Interest by industry (applications)
        // Count applications grouped by project's category to avoid relying on withCount and model casting
        $rows = DB::table('aplications')
            ->join('projects', 'aplications.project_id', '=', 'projects.id')
            ->where('aplications.user_id', auth()->id())
            ->select('projects.category', DB::raw('COUNT(*) as total_apps'))
            ->groupBy('projects.category')
            ->get();

        $data = [];
        $categoryNames = [];

        foreach ($rows as $row) {
            $category = json_decode($row->category, true);
            // Support different possible shapes stored in JSON
            $id = $category['value'] ?? $category['id'] ?? null;
            if ($id === null) {
                continue;
            }

            $data[$id] = ($data[$id] ?? 0) + (int) $row->total_apps;

            if (!isset($categoryNames[$id])) {
                $categoryNames[$id] = $category['allTranslations']['title'][app()->getLocale()] ?? $category['name'] ?? __('translate.without');
            }
        }

        arsort($data);
        $topData = array_slice($data, 0, 5, true);

        $finalData = [];
        $finalLabels = [];
        foreach ($topData as $id => $val) {
            $finalData[] = $val;
            $finalLabels[] = $categoryNames[$id] ?? __('translate.without');
        }

        return (new OriginalPieChart)
            ->addData($finalData)
            ->setLabels($finalLabels)
            ->toVue();
    }
}
