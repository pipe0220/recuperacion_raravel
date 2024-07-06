<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViajeroController;
use App\Http\Controllers\ViajeController;

Route::get('/', function () {
    return view('welcome');
});



Route::resource('viajeros', ViajeroController::class);
Route::resource('viajes', ViajeController::class);
