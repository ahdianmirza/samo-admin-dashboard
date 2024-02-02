<?php

namespace App\Exports;

use App\Models\DataLogger;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportDataLogger implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $data = DataLogger::orderBy('created_at', 'asc')->get();
        return view('DataLogger.table', [
            'title' => 'Data Logger Table',
            'dataLogger' => $data
        ]);
    }
}