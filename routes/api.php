<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/schedule/', [\App\Http\Controllers\Api\ScheduleController::class, 'index']);
//Route::get('/application/', [\App\Http\Controllers\Api\ScheduleController::class, 'create']);
Route::post('/application/create', [\App\Http\Controllers\Api\ScheduleController::class, 'store']);
