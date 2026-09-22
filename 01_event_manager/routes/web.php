<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/events',[EventController::class, 'index'])->name('events.index');
Route::get('/events/create',[EventController::class, 'create'])->name('events.create');
Route::post('/events',[EventController::class, 'store'])->name('events.store');
