<?php

use Modules\Permission\app\Http\Controllers\PermissionController;
use Modules\Permission\app\Http\Controllers\RoleController;
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

Route::prefix('permission')
    ->middleware('auth')
    ->group(function () {
        Route::controller(PermissionController::class)->group(function () {
            Route::get('/', 'index')->name('admin.permissions')/*->middleware(['can:index-category'])*/;
            Route::get('sync', 'sync')->name('admin.permission.sync')/*->middleware(['can:index-permission'])*/;
        });
    });


Route::prefix('role')
    ->middleware('auth')
    ->group(function () {
        Route::controller(RoleController::class)->group(function () {
            Route::get('/', 'index')->name('admin.roles')/*->middleware(['can:index-category'])*/;
            Route::get('data', 'data')->name('admin.role.data')/*->middleware(['can:index-role'])*/;
            Route::get('create','create')->name('admin.role.create');
            Route::post('store','store')->name('admin.role.store');
            Route::get('edit/{id}','edit')->name('admin.role.edit');
            Route::post('update/{id}','update')->name('admin.role.update');
        });
    });
