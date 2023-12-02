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
        $suhu = [];
        $kelembapan = [];

        for ($i=1; $i <= DataLogger::all()->count(); $i++) {
            $dataMikronKecil = DataLogger::where('id', $i)->value('mikronKecil');
            $dataSuhu = DataLogger::where('id', $i)->value('suhu');
            $dataKelembapan = DataLogger::where('id', $i)->value('kelembapan');
            intval($dataMikronKecil);
            intval($dataSuhu);
            intval($dataKelembapan);
            array_push($mikronKecil, $dataMikronKecil);
            array_push($suhu, $dataSuhu);
            array_push($kelembapan, $dataKelembapan);
        }

        return $this->chart->lineChart()
            ->setTitle('Smart Air Monitoring')
            ->setSubtitle('Monitoring Partikel 0.5 Mikron')
            ->addData('Partikel 0.5 Mikron', $mikronKecil)
            ->addData('Suhu', $suhu)
            ->addData('Kelembapan', $kelembapan)
            ->setXAxis([])
            ->setGrid();
    }
}