<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DataLogger;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard', [
            'title' => 'Dashboard',
            'data_udara' => DataLogger::orderBy('id', 'desc')->first()
        ]);
    }
}