<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});

Route::resource('/reservas', ReservasController::class);
Route::resource('/homee', HomeController::class);

