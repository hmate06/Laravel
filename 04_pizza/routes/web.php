<?php

use App\Http\Controllers\PizzaOrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PizzaOrderController::class, 'index'])->name('orders.index');
Route::post('/orders', [PizzaOrderController::class, 'store'])->name('orders.store');
