<?php

use App\Http\Controllers\CocktailController;
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return redirect('login');
});

Route::get('/dashboard', function () {
    return redirect()->route('cocktail.index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(callback: function () {
    Route::get('/random-coctel', function () {
        return view('cocktail.random');
    })->name('cocktail.random');
    Route::resource('cocktail', CocktailController::class);
});

