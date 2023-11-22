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
        // $dataLogger = DataLogger::value('mikronKecil');
        $mikronKecil = [];

        for ($i=0; $i <= DataLogger::all()->count(); $i++) { 
            $dataLogger = DataLogger::where('id', $i)->value('mikronKecil');
            intval($dataLogger);
            array_push($mikronKecil, $dataLogger);
        }

        dd($mikronKecil);

        return $this->chart->lineChart()
            ->setTitle('Smart Air Monitoring')
            ->setSubtitle('Monitoring Kualitas Udara')
            ->addData('Monitoring Udara', $mikronKecil)
            ->setXAxis(['Mikron Kecil']);
    }
}