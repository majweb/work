<?php

namespace App\Charts;

use App\Models\Aplication;
use marineusde\LarapexCharts\Charts\PieChart as OriginalPieChart;

class AppsStatus
{
    public function build()
    {

        $statuses = Aplication::selectRaw("status, COUNT(*) as total")
            ->where('user_id', auth()->id())
            ->where(function ($q) {
                $q->whereIn('status', ['yes', 'no', 'maybe'])
                    ->orWhereNull('status');
            })
            ->groupBy('status')
            ->get()
            ->pluck('total', 'status');

        // przypisanie do zmiennych
        $yes   = $statuses['yes']   ?? 0;
        $no    = $statuses['no']    ?? 0;
        $maybe = $statuses['maybe'] ?? 0;
        $empty = $statuses[null]    ?? 0;

        return (new OriginalPieChart)
            ->setTitle(__('translate.statusApps'))
            ->setSubtitle(__('translate.podzial'))
            ->addData([$yes, $no, $maybe, $empty])
            ->setColors(['#16a34a', '#dc2626', '#eab308','gray'])
            ->setLabels(['Tak', 'Nie', 'Może','Brak'])
            ->toVue();
    }
}
