<?php

namespace App\Charts;

use App\Models\DataLogger;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonitoringSuhu
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $suhu = [];

        for ($i=1; $i <= DataLogger::all()->count(); $i++) {
            $dataSuhu = DataLogger::where('id', $i)->value('suhu');
            intval($dataSuhu);
            array_push($suhu, $dataSuhu);
        }

        return $this->chart->lineChart()
            ->setTitle('Smart Air Monitoring')
            ->setSubtitle('Monitoring Suhu Ruangan')
            ->addData('Suhu Ruangan', $suhu)
            ->setXAxis([]);
    }
}