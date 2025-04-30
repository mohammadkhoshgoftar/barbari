<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')
    ->group(function () {
        Route::get('dashboard', [\Modules\Core\app\Http\Controllers\CoreController::class, 'index'])->name('dashboard');
        Route::get('aboutUs', [\Modules\Core\app\Http\Controllers\CoreController::class, 'aboutUs'])->name('aboutUs');
        Route::get('contactUs', [\Modules\Core\app\Http\Controllers\CoreController::class, 'contactUs'])->name('contactUs');
    });
Route::get('sample_view', [\Modules\Core\app\Http\Controllers\CoreController::class, 'sample_view']);