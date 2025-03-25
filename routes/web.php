<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/save-data', [SensorController::class, 'store']);