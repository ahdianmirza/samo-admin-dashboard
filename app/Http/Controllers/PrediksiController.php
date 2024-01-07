<?php

namespace App\Http\Controllers;

use App\Charts\FuzzyChart;
use App\Http\Controllers\Controller;
use App\Models\DataLogger;
use App\Models\Fuzzy;
use App\Models\MonitoringUdara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrediksiController extends Controller
{
    public function index() {
        $fuzzy = Fuzzy::select('nilaiPrediksi')->GroupBy(DB::raw("Hour(created_at)"))->pluck('nilaiPrediksi');
        $hour = Fuzzy::select('created_at')->GroupBy(DB::raw("Hour(created_at)"))->pluck('created_at');

        return view('prediksi', [
            'title' => 'Prediksi Kualitas Udara',
            'dataFuzzy' => MonitoringUdara::first(),
            'dataPrediksi' => Fuzzy::orderBy('created_at', 'asc')->filter(request(['search', 'prediksi']))->paginate(25)->withQueryString(),
            'fuzzy' => $fuzzy,
            'hour' => $hour
        ]);
    }
}