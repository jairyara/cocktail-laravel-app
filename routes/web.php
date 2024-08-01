<?php

use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return redirect('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/crear-coctel', function () {
        return view('cocktail.create');
    })->name('crear-coctel');
    Route::get('/random-coctel', function () {
        return view('cocktail.random');
    })->name('random-coctel');
});
