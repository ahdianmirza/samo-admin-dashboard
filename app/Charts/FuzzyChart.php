<?php

namespace App\Charts;

use App\Models\Fuzzy;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class FuzzyChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $fuzzy = Fuzzy::select('nilaiPrediksi')->GroupBy(DB::raw("Hour(created_at)"))->pluck('nilaiPrediksi');
        $hour = Fuzzy::select('created_at')->GroupBy(DB::raw("Hour(created_at)"))->pluck('created_at');
        dd($fuzzy);

        // for ($i=1; $i <= Fuzzy::all()->count(); $i++) {
        //     $dataFuzzy = fuzzy::where('id', $i)->value('nilaiPrediksi');
        //     array_push($fuzzy, $dataFuzzy);
        // }

        return $this->chart->lineChart()
            ->setTitle('Smart Air Monitoring')
            ->setSubtitle('Monitoring Nilai Prediksi Fuzzy')
            ->addData('Nilai Prediksi Fuzzy', $fuzzy)
            ->setXAxis([1,2,3])
            ->setGrid();
    }
}