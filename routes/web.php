<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::post('createTodo', [TodoController::class, 'store'])->name('create-todo');
    Route::get('todos', [TodoController::class, 'index'])->name('todos-page');
    Route::get('filterTodos', [TodoController::class, 'todosFilter'])->name('filter-todos');
    Route::delete('deleteTodo', [TodoController::class, 'destroy'])->name('delete-todo');
    Route::patch('updateTodo', [TodoController::class, 'update'])->name('update-todo');
});

require __DIR__.'/auth.php';
