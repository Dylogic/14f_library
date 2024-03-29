<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('books', [BookController::class, 'index']);
Route::get('books/{Book}', [BookController::class, 'show']);

Route::get('catergories', [BookController::class, 'index']);
Route::get('catergories/{Catergories}', [BookController::class, 'show']);
