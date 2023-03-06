<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
////Api Resource to create Message
    Route::post('/message/send',[MessageApiController::class,'messageSend']);

//Api Resource for Messages
    Route::get('/messages',[MessageApiController::class,'messages']);
//Api Resource for single Message
    Route::get('/messages/{id}',[MessageApiController::class,'message']);
