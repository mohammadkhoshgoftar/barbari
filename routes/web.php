<?php

use App\Http\Controllers\client\HomeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', [HomeController::class, 'index']);
Route::get('/', function () {
    return redirect()->route('dashboard');
});