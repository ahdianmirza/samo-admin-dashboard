<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataLoggerController;
use App\Http\Controllers\LoginController;
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

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/data-udara', [DashboardController::class, 'dataUdara'])->name('dataUdara')->middleware('auth');
Route::get('/prediksi', [PrediksiController::class, 'index'])->middleware('auth');
Route::get('/data-logger', [DataLoggerController::class, 'index'])->middleware('auth');
// Route::get('/status', [StatusController::class, 'index'])->middleware('auth');