<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\ColaboradorController;

Route::resource('proyectos', ProyectoController::class);
Route::resource('colaboradors', ColaboradorController::class);
