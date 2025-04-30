<?php

use Illuminate\Support\Facades\Route;
use Modules\User\app\Http\Controllers\admin\UserController;

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

//Route::group([], function () {
//    Route::resource('user', UserController::class)->names('user');
//});
Route::prefix('user')
    ->middleware('auth')
    ->group(function () {
        Route::controller(UserController::class)->group(function () {
            Route::get('/', 'index')->name('users')->middleware(['can:index-user']);
            Route::get('data', 'data')->name('users.data')->middleware(['can:index-user']);
            Route::get('create', 'create')->name('create.user')->middleware(['can:store-user']);
            Route::post('store', 'store')->name('store.user')->middleware(['can:store-user']);
            Route::get('edit/{id}', 'edit')->name('edit.user')->middleware(['can:update-user']);
            Route::post('update/{id}', 'update')->name('update.user')->middleware(['can:update-user']);
            Route::get('delete/{id}', 'destroy')->name('admin.user.destroy')->middleware(['can:delete-user']);

            Route::post('change-psw', 'changePsw')->name('changePsw')->middleware(['can:change-psw-user']);
            Route::Post('search', 'search')->name('admin.user.search');

            Route::Post('add-initial-debt/{id}', 'addInitialDebt')->name('admin.add.initial.debt')->middleware(['can:store-user']);
        });
    });