<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/tasks');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index'); // összes rekord

Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create'); // űrlap megjelenítés
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store'); // űrlap mentés

Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy'); // rekord törlése
Route::patch('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update'); // rekord módosítás
