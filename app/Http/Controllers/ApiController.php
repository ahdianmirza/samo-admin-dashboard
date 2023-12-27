<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataLogger;
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

    public function dataPersentase(Request $request) {
        $data_post = $request->all();
        $dataPersentase = PersentaseUdara::firstWhere('id', 1)->update([
            'mikronKecil' => $data_post['mikronKecil'],
            'mikronSedang' => $data_post['mikronSedang'],
            'mikronBesar' => $data_post['mikronBesar']
        ]);
        return response()->json($dataPersentase);
    }

    public function indexDataPersentase() {
        return response()->json(PersentaseUdara::all());
    }
}