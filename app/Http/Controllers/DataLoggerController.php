<?php

namespace App\Http\Controllers;

use App\Exports\ExportDataLogger;
use App\Http\Controllers\Controller;
use App\Models\DataLogger;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DataLoggerController extends Controller
{
    public function index() {
        return view('data-logger', [
            'title' => 'Data Loger',
            "dataLoggers" => DataLogger::orderBy('created_at', 'asc')->filter(request(['search']))->paginate(25)->withQueryString()
        ]);
    }

    public function indexTable() {
        return view('DataLogger.table', [
            'title' => 'Data Logger Table',
            'dataLogger' => DataLogger::orderBy('created_at', 'asc')->get()
        ]);
    }

    public function exportTable() {
        return Excel::download(new ExportDataLogger, 'Data Kualitas Udara Samo.xlsx');
    }
}