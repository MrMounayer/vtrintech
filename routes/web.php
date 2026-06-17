<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/vitrines/{vitrine}', [\App\Http\Controllers\VitrineController::class, 'show'])->name('vitrines.show');
