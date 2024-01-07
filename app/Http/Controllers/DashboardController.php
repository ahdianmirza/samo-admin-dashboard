<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataLogger;
use App\Models\MonitoringUdara;
use App\Models\PersentaseUdara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {
        $mikronKecil = DataLogger::select('mikronKecil')->GroupBy(DB::raw("Hour(created_at)"))->pluck('mikronKecil');
        $hour = DataLogger::select('created_at')->GroupBy(DB::raw("Hour(created_at)"))->pluck('created_at');

        return view('dashboard', [
            'title' => 'Dashboard',
            'dataMonitoring' => MonitoringUdara::first(),
            'dataPersentase' => PersentaseUdara::firstWhere('id', 1),
            'mikronKecil' => $mikronKecil,
            'hour' => $hour
        ]);
    }

    public function dataUdara() {
        $data_udara = DataLogger::orderBy('id', 'desc')->first();
        return response()->json($data_udara);
    }
}