<?php

use App\Http\Controllers\JobApplicationController;
use Illuminate\Support\Facades\Route;


Route::get('/', [JobApplicationController::class, 'index'])()->name('job.index');
Route::get('/jobs', [JobApplicationController::class, 'store'])()->name('job.store');

