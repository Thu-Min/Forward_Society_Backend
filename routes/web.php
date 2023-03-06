<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Models\blog;
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

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');

    Route::get('/blog/detail/{id}', [BlogController::class, 'show'])->name('blog.show');
    
    Route::get('/blog/add', [BlogController::class, 'create'])->name('blog.create');

    Route::post('/blog/add', [BlogController::class, 'store'])->name('blog.store');
    
    Route::get('/blog/delete/{id}', [BlogController::class, 'destroy']);

    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');

    Route::post('/blog/edit/{id}', [BlogController::class, 'update'])->name('blog.update');    
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
