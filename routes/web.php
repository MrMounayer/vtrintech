<?php

use Illuminate\Support\Facades\Route;


Route::domain('{domain}.localhost')->group(function () {
    Route::get('/', [\App\Http\Controllers\VitrineController::class, 'show'])->name('vitrines.show');
});

Route::get('/', function () {
    return view('welcome');
});
