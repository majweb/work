<?php

namespace App\Charts;

use marineusde\LarapexCharts\Charts\PieChart as OriginalPieChart;

class AppsRecruits
{
    public function build()
    {
        $recruiters = auth()->user()
            ->recruits()
            ->withCount('applicationsRecruits')
            ->orderByDesc('applications_recruits_count')
            ->take(5) // np. TOP 5 rekruterów
            ->get();

        return (new OriginalPieChart)
            ->setTitle('Aplikacje rekruterów')
            ->setHeight(200)
            ->setWidth(500)
            ->setSubtitle('Top 5')
            ->addData($recruiters->pluck('applications_recruits_count')->toArray())
            ->setLabels($recruiters->pluck('name')->toArray())
            ->toVue();
    }
}
