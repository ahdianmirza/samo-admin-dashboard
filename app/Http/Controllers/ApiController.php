<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataLogger;
use App\Models\Fuzzy;
use App\Models\MonitoringUdara;
use App\Models\PersentaseFuzzy;
use App\Models\PersentaseUdara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function dataUdara(Request $request) {
        $monitoringUdara = MonitoringUdara::first()->update([
            'mikronKecil' => $request->mikronKecil,
            'mikronSedang' => $request->mikronSedang,
            'mikronBesar' => $request->mikronBesar,
            'suhu' => $request->suhu,
            'kelembapan' => $request->kelembapan,
            'karbonDioksida' => $request->karbonDioksida,
            'alkohol' => $request->alkohol,
            'dataPrediksi' => $request->dataPrediksi,
        ]);
        return response()->json($monitoringUdara);
    }

    public function indexDataUdara() {
        return response()->json(MonitoringUdara::first());
    }

    public function dataLogger(Request $request) {
        $dataUdara = $request->all();

        $createDataUdara = DataLogger::create([
            'mikronKecil' => $dataUdara['mikronKecil'],
            'mikronSedang' => $dataUdara['mikronSedang'],
            'mikronBesar' => $dataUdara['mikronBesar'],
            'suhu' => $dataUdara['suhu'],
            'kelembapan' => $dataUdara['kelembapan'],
            'karbonDioksida' => $dataUdara['karbonDioksida'],
            'alkohol' => $dataUdara['alkohol'],
            'dataPrediksi' => $dataUdara['dataPrediksi']
        ]);
        return response()->json($createDataUdara);
    }

    public function indexDataLogger() {
        return response()->json(DataLogger::all());
    }

    public function postPersentaseUdara(Request $request) {
        $data_post = $request->all();
        $dataPersentase = PersentaseUdara::firstWhere('id', 1)->update([
            'mikronKecil' => $data_post['mikronKecil'],
            'mikronSedang' => $data_post['mikronSedang'],
            'mikronBesar' => $data_post['mikronBesar'],
            'suhu' => $data_post['suhu'],
            'kelembapan' => $data_post['kelembapan'],
            'alkohol' => $data_post['alkohol'],
            'karbonDioksida' => $data_post['karbonDioksida'],
        ]);
        return response()->json($dataPersentase);
    }

    public function indexPersentaseUdara() {
        return response()->json(PersentaseUdara::all());
    }

    public function indexPersentaseFuzzy() {
        return response()->json(PersentaseFuzzy::all());
    }

    public function postPersentaseFuzzy(Request $request) {
        $data_post = $request->all();
        $dataPersentase = PersentaseFuzzy::firstWhere('id', 1)->update([
            'mikronKecil' => $data_post['mikronKecil'],
            'mikronSedang' => $data_post['mikronSedang'],
            'mikronBesar' => $data_post['mikronBesar']
        ]);
        return response()->json($dataPersentase);
    }

    public function indexFuzzy() {
        $hour = Fuzzy::select('created_at')->pluck('created_at');
        $hour = $hour->groupBy(function($hour){
            return date('H',strtotime($hour));
        });
        return response()->json($hour);
    }
}