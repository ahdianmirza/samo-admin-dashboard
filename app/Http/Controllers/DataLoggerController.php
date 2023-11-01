<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataLoggerController extends Controller
{
    public function index() {
        return view('data-logger');
    }
}