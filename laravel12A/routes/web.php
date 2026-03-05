<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/aboutme', function () {
    return view('aboutme');
})->name('aboutme');
