<?php

use App\Http\Controllers\CampApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CampApplicationController::class, 'index'])->name('camp-applications.index');
Route::post('/camp-applications', [CampApplicationController::class, 'store'])->name('camp-applications.store');
