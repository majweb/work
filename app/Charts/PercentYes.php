<?php

namespace App\Charts;

use App\Models\Aplication;
use marineusde\LarapexCharts\Charts\BarChart as OriginalBarChart;
use marineusde\LarapexCharts\Charts\DonutChart AS OriginalDonutChart;

class PercentYes
{
    public function build()
    {
        // Pobierz liczbę aplikacji w każdym statusie w jednym zapytaniu
        $statusCounts = Aplication::where('user_id', auth()->id())->selectRaw("
            SUM(CASE WHEN status = 'yes' THEN 1 ELSE 0 END) AS yes,
            SUM(CASE WHEN status = 'no' THEN 1 ELSE 0 END) AS no,
            SUM(CASE WHEN status = 'maybe' THEN 1 ELSE 0 END) AS maybe,
            SUM(CASE WHEN status IS NULL THEN 1 ELSE 0 END) AS `empty_count`
        ")
            ->first();

        $total = $statusCounts->yes + $statusCounts->no + $statusCounts->maybe + $statusCounts->empty_count;

        // Oblicz procenty
        $yesPercent   = $total > 0 ? round($statusCounts->yes / $total * 100, 2) : 0;
        $noPercent    = $total > 0 ? round($statusCounts->no / $total * 100, 2) : 0;
        $maybePercent = $total > 0 ? round($statusCounts->maybe / $total * 100, 2) : 0;
        $emptyPercent = $total > 0 ? round($statusCounts->empty_count / $total * 100, 2) : 0;

        return (new OriginalDonutChart)
            ->setTitle(__('translate.percentApp'))
            ->setSubtitle(__('translate.percentAppSub'))
            ->addData([$yesPercent, $noPercent, $maybePercent, $emptyPercent])
            ->setLabels([
                __("translate.yes") . " $yesPercent%",
                __("translate.no") . " $noPercent%",
                __("translate.statusMaybe") . " $maybePercent%",
                __("translate.without") . " $emptyPercent%"
            ])
            ->setColors(['#16a34a', '#dc2626', '#eab308', 'gray'])
            ->setDataLabels(true)
            ->toVue();
    }
}
