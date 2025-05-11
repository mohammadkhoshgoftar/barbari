<?php

use Illuminate\Support\Facades\Route;
use Modules\BOLManager\app\Http\Controllers\admin\BOLManagerController;

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

Route::prefix('bol')
    ->middleware('auth')
    ->group(function () {
        Route::controller(BOLManagerController::class)->group(function () {
            Route::get('/', 'index')->name('admin.bols')->middleware(['can:index-bol']);
            Route::get('data', 'data')->name('admin.bol.data')->middleware(['can:index-bol']);
            Route::get('create','create')->name('admin.bol.create')->middleware(['can:store-bol']);
            Route::post('store','store')->name('admin.bol.store')->middleware(['can:store-bol']);
            Route::get('edit/{id}','edit')->name('admin.bol.edit')->middleware(['can:update-bol']);
            Route::post('update/{id}','update')->name('admin.bol.update')->middleware(['can:update-bol']);
            Route::get('delete/{id}','destroy')->name('admin.bol.destroy')->middleware(['can:delete-bol']);

            Route::get('export/{id}','exportPdf')->name('admin.bol.export')->middleware(['can:index-bol']);

            Route::Post('search','search')->name('admin.bol.search');
        });
    });
