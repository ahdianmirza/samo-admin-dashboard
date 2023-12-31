<?php

namespace App\Charts;

use App\Models\DataLogger;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonitoringChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $mikronKecil = [];

        for ($i=1; $i <= DataLogger::all()->count(); $i++) {
            $dataMikronKecil = DataLogger::where('id', $i)->value('mikronKecil');
            intval($dataMikronKecil);
            array_push($mikronKecil, $dataMikronKecil);
        }

        return $this->chart->lineChart()
            ->setTitle('Smart Air Monitoring')
            ->setSubtitle('Monitoring Partikel 0.5 Mikron')
            ->addData('Partikel 0.5 Mikron', $mikronKecil)
            ->setXAxis([])
            ->setGrid();
    }
}