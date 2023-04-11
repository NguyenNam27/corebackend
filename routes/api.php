<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedJWTController;
use App\Http\Controllers\Api\v1\UserController;

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


Route::prefix('v1')->name('api.v1.')->group(function (){

    Route::prefix('auth')->name('auth.')->controller(AuthenticatedJWTController::class)->group(function (){
        Route::post('login','store')->name('login');
        Route::middleware('auth')->group(function (){
            Route::post('refresh','refresh')->name('refresh');
            Route::post('verify-token','verifyToken')->name('verifyToken');
            Route::post('destroy','deytroy')->name('deytroy');
        });
    });
    //role
    Route::middleware('auth')->group(function (){
        Route::apiResource('users',UserController::class);
    });
});
