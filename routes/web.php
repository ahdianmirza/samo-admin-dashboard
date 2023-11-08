<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataLoggerController;
use App\Http\Controllers\PrediksiController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/data-udara', [DashboardController::class, 'dataUdara'])->name('dataUdara');

Route::get('/prediksi', [PrediksiController::class, 'index']);
Route::get('/data-logger', [DataLoggerController::class, 'index']);
Route::get('/status', [StatusController::class, 'index']);