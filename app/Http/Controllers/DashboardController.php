<?php

namespace App\Http\Controllers;

use App\Charts\MonitoringChart;
use App\Charts\MonitoringKelembapan;
use App\Charts\MonitoringSuhu;
use App\Http\Controllers\Controller;
use App\Models\DataLogger;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(MonitoringChart $monitoringChart, MonitoringSuhu $monitoringSuhu, MonitoringKelembapan $monitoringKelembapan) {
        return view('dashboard', [
            'title' => 'Dashboard',
            'data_udara' => DataLogger::orderBy('id', 'desc')->first(),
            'udaras' => DataLogger::all(),
            'loggers' => $monitoringChart->build(),
            'chartSuhu' => $monitoringSuhu->build(),
            'chartKelembapan' => $monitoringKelembapan->build(),
        ]);
    }

    public function dataUdara() {
        $data_udara = DataLogger::orderBy('id', 'desc')->first();
        return response()->json($data_udara);
    }
}