<?php

use App\Http\Controllers\EspejoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesorController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/espejos', EspejoController::class);
Route::resource('/profesores', ProfesorController::class);

