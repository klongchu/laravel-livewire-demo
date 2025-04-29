<?php

use Illuminate\Support\Facades\Route;


//
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', App\Livewire\Login::class)->name('login');
    Route::get('/register', App\Livewire\Register::class)->name('register');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', App\Livewire\Home::class)->name('home');
    Route::get('/about', App\Livewire\About::class)->name('about');
});
