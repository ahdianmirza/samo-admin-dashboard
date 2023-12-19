<?php

namespace App\Charts;

use App\Models\DataLogger;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MonitoringKelembapan
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $kelembapan = [];

        for ($i=1; $i <= DataLogger::all()->count(); $i++) {
            $dataKelembapan = DataLogger::where('id', $i)->value('kelembapan');
            intval($dataKelembapan);
            array_push($kelembapan, $dataKelembapan);
        }

        return $this->chart->lineChart()
            ->setTitle('Smart Air Monitoring')
            ->setSubtitle('Monitoring Kelembapan Ruangan')
            ->addData('Kelembapan Ruangan', $kelembapan)
            ->setXAxis([]);
    }
}