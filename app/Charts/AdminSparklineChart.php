<?php

namespace App\Charts;

use marineusde\LarapexCharts\Charts\LineChart as OriginalLineChart;

class AdminSparklineChart
{
    public function build(array $data, string $color = '#38bdf8'): array
    {
        $chart = (new OriginalLineChart)
            ->setAdditionalOptions([
                'chart' => [
                    'sparkline' => [
                        'enabled' => true,
                    ],
                    'toolbar' => [
                        'show' => false
                    ],
                    'animations' => [
                        'enabled' => true
                    ],
                    'height' => 60,
                ],
                'stroke' => [
                    'curve' => 'smooth',
                    'width' => 3,
                ],
                'colors' => [$color],
                'tooltip' => [
                    'fixed' => [
                        'enabled' => false
                    ],
                    'x' => [
                        'show' => false
                    ],
                    'y' => [
                        'title' => [
                            'formatter' => '',
                        ]
                    ],
                    'marker' => [
                        'show' => false
                    ]
                ]
            ]);

        $chart->addData('Stat', $data);

        return $chart->toVue();
    }
}
