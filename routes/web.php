<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\TestimonialController;

Route::get('/', function () {
    return view('auth/login');
});

// Route::get('/dashboard', function () {
//     return view('components/dashboard/dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->prefix('/dashboard')->group(function () {
    Route::get('/', function() {
        return view('components/dashboard/dashboard');
    })->name('dashboard');

    Route::get('/user', function() {
        return view('components/dashboard/user');
    })->name('user');

    Route::get('/blog', function() {
        return view('components/dashboard/blog');
    })->name('blog');

    //Admin Timeline
    Route::get('/timeline/create-page',[TimelineController::class,'createTimelinePage'])->name('timeline.createPage');
    Route::post('/timeline/create',[TimelineController::class,'createTimeline'])->name('timeline.create');
    Route::get('/timeline/list',[TimelineController::class,'timelineList'])->name('timeline.list');
    Route::get('/timeline/edit/{id}',[TimelineController::class,'timelineEdit'])->name('timeline.edit');
    Route::post('/timeline/update/{id}',[TimelineController::class,'timelineUpdate'])->name('timeline.update');
    Route::get('/timeline/delete/{id}',[TimelineController::class,'timelineDelete'])->name('timeline.delete');

    //Admin Testimonial
    Route::get('/testimonial/list',[TestimonialController::class,'testimonialList'])->name('testimonial.list');
    Route::get('/testimonial/create-page',[TestimonialController::class,'createTestimonialPage'])->name('testimonial.createPage');
    Route::post('/testimonial/create',[TestimonialController::class,'createTestimonial'])->name('testimonial.create');
    Route::get('/testimonial/edit/{id}',[TestimonialController::class,'testimonialEdit'])->name('testimonial.edit');
    Route::post('/testimonial/update/{id}',[TestimonialController::class,'testimonialUpdate'])->name('testimonial.update');
    Route::get('/testimonial/delete/{id}',[TestimonialController::class,'testimonialDelete'])->name('testimonial.delete');


});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
