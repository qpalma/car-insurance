<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/owners');
});
use App\Http\Controllers\OwnerController;

Route::resource('owners', OwnerController::class);

use App\Http\Controllers\CarController;

Route::resource('cars', CarController::class);
