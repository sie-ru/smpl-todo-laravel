<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/task/{id}', [PageController::class, 'editPage']);

Route::post('/add', [TaskController::class, 'add']);
Route::post('/remove', [TaskController::class, 'remove']);
Route::post('/edit', [TaskController::class, 'edit']);

