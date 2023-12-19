<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataLogger;
use Illuminate\Http\Request;

class PrediksiController extends Controller
{
    public function index() {
        return view('prediksi', [
            'title' => 'Prediksi Kualitas Udara',
            'dataLogger' => DataLogger::latest()->get()->first()
        ]);
    }
}