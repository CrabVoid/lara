<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\BookController;

Route::get('/Books', [BookController::class, 'index']);
Route::get('/Books/create', [BookController::class, 'create']);
Route::post('/Books', [BookController::class, 'store']);