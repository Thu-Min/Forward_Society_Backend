<?php

use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

    Route::get('/events',[EventController::class,'index'])->name('events');
    Route::get('/events/create',[EventController::class,'create'])->name('events.create');
    Route::post('/events/store',[EventController::class,'store'])->name('events.store');
    Route::get('/events/{event:slug}',[EventController::class,'edit'])->name('events.edit');
    Route::patch('/events/{event:slug}',[EventController::class,'update'])->name('events.update');
    Route::delete('/events/{event:slug}',[EventController::class,'destroy'])->name('events.delete');

    Route::get('/event-categories',[EventCategoryController::class,'index'])->name('eventCategories');
    Route::get('/event-categories/create',[EventCategoryController::class,'create'])->name('eventCategories.create');
    Route::post('/event-categories/store',[EventCategoryController::class,'store'])->name('eventCategories.store');
    Route::get('/event-categories/{eventCategory:slug}',[EventCategoryController::class,'edit'])->name('eventCategories.edit');
    Route::patch('/event-categories/{eventCategory:slug}',[EventCategoryController::class,'update'])->name('eventCategories.update');
    Route::delete('/event-categories/{eventCategory:slug}',[EventCategoryController::class,'destroy'])->name('eventCategories.delete');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
