<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataLogger;
use Illuminate\Http\Request;

class DataLoggerController extends Controller
{
    public function index() {
        return view('data-logger', [
            'title' => 'Data Loger',
            "dataLoggers" => DataLogger::paginate(20)->withQueryString()
        ]);
    }
}