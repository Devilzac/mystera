<?php

use App\Http\Controllers\AltController;
use App\Http\Controllers\MainCharactersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainCharactersController::class, 'index']);
Route::get('/main/{id}', [MainCharactersController::class, 'show']);
Route::get('/alt/{id}', [AltController::class, 'show']);

Route::get('/search', [MainCharactersController::class, 'search'])->name('character.search');