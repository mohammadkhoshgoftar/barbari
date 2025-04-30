<?php

use Modules\Auth\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('login' , [AuthController::class,'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate'])->name('login.authenticate');
Route::get('logout' , [AuthController::class,'logout'])->name('logout');
Route::prefix('auth')->group(function() {
    Route::get('/', 'AuthController@index');
});
