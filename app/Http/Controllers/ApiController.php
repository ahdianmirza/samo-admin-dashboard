<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataLogger;
use App\Models\PersentaseFuzzy;
use App\Models\PersentaseUdara;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function dataUdara(Request $request) {
        $dataUdara = $request->all();
        $createDataUdara = DataLogger::create($dataUdara);
        return response()->json($createDataUdara);
    }

    public function indexDataUdara() {
        return response()->json(DataLogger::orderBy('id', 'desc')->first());
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
}