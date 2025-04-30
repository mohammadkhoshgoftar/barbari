<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\AuthController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login',[AuthController::class,'login']);
Route::post('sign-up',[AuthController::class,'signUp']);
Route::post('verification-code',[AuthController::class,'verificationCode']);
Route::get('check-auth',function (){
  $user =auth('api')->user();
    return $user;
})->middleware('auth:api');
