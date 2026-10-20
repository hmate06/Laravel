<?php

use App\Http\Controllers\JobApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobApplicationController::class, 'index'])->name('jobs.index');
Route::post('/jobs', [JobApplicationController::class, 'store'])->name('jobs.store');
