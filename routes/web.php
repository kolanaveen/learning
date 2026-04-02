<?php

use Illuminate\Support\Facades\Route;

// testing
Route::get('/', fn() => view('home'))->name('home');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/skills', fn() => view('skills'))->name('skills');
