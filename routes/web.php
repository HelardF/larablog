<?php

use App\Http\Controllers\pageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::controller(pageController::class)->group(function () {
    Route::get('/',             'home')->name('home');
    Route::get('/blog',         'blog' )->name('blog');
    Route::get('/blog/{post:slug}',  'post')->name('post');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('posts', PostController::class);

require __DIR__.'/auth.php';
