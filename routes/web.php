<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/generate', [HomeController::class, 'generate'])->name('generate');
Route::post('/reservations', [HomeController::class, 'reserve'])->name('reservations.store');
Route::get('/availability', [HomeController::class, 'availability'])->name('availability');
