<?php


use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;



Route::controller(pageController::class)->group(function () {
    Route::get('/',             'home')->name('home');
    Route::get('/blog',         'blog' )->name('blog');
    Route::get('/blog/{post:slug}',  'post')->name('post');
});

