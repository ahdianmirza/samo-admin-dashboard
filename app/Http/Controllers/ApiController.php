<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataLogger;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function dataUdara(Request $request) {
        $dataUdara = $request->all();
        DataLogger::create($dataUdara);
    }

    public function indexDataUdara() {
        return response()->json(DataLogger::orderBy('id', 'desc')->first());
    }
}