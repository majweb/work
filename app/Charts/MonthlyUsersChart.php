<?php

namespace App\Charts;

use marineusde\LarapexCharts\Charts\PieChart AS OriginalPieChart;

class MonthlyUsersChart
{
    public function build(): array
    {
        return (new OriginalPieChart)
            ->setTitle('Rekruterzy')
            ->addData([
                \App\Models\User::whereNotNull('recruiter_from_firm_id')->whereNull('user_blocked')->count(),
                \App\Models\User::whereNotNull('recruiter_from_firm_id')->whereNotNull('user_blocked')->count()
            ])
            ->setHeight(200)
            ->setWidth(500)
            ->setColors(['#00a0e3', '#e31e24'])
            ->setLabels([__('auth.activeRecruits'), __('auth.notActiveRecruits')])
            ->toVue();
    }
}
