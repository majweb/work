<?php

namespace App\Charts;

use marineusde\LarapexCharts\Charts\PieChart AS OriginalPieChart;

class ProjectsRecruits
{
    public function build()
    {
        $recruiters = auth()->user()
            ->recruits()
            ->withCount('projectsRecruits')
            ->orderByDesc('projects_recruits_count')
            ->take(5) // np. TOP 5 rekruterów
            ->get();
        return (new OriginalPieChart)
            ->setTitle(__('translate.recruiterProjects'))
            ->setSubtitle('Top 5')
            ->addData($recruiters->pluck('projects_recruits_count')->toArray())
            ->setLabels($recruiters->pluck('name')->toArray())
            ->toVue();
    }
}
