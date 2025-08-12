<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NoteController;

Route::post('/note/create', [NoteController::class, 'store']);
Route::patch('/note/update/{id}', [NoteController::class, 'update']);
Route::delete('/note/delete/{id}', [NoteController::class, 'destroy']);
Route::get('/notes', [NoteController::class, 'index']);

Route::apiResource('categories', CategoryController::class);
