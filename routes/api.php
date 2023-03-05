<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageApiController;
use App\Http\Controllers\TestimonialApiController;

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
//Api Resource for Testimonials
    Route::get('/testimonials',[TestimonialApiController::class,'testimonials']);
//Api Resource for single Testimonial
    Route::get('/testimonials/{id}',[TestimonialApiController::class,'testimonial']);

    //Api Resource to create  Messages
    Route::post('/messages/send',[MessageApiController::class,'messageSend']);
//Api Resource for Messages
    Route::get('/messages',[MessageApiController::class,'messages']);
//Api Resource for single Testimonial
    Route::get('/messages/{id}',[MessageApiController::class,'message']);
