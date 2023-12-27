<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/data-udara', [ApiController::class, 'indexDataUdara']);
Route::post('/data-udara', [ApiController::class, 'dataUdara']);

Route::get('/data-persentase', [ApiController::class, 'indexDataPersentase']);
Route::post('/data-persentase', [ApiController::class, 'dataPersentase']);