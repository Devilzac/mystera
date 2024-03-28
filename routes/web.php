<?php

use App\Http\Controllers\AltController;
use App\Http\Controllers\MainCharactersController;
use App\Http\Controllers\RelationController;
use App\Models\MainCharacters;
use App\Http\Controllers\DiscordMessageController;
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
Route::get('/alts', [AltController::class, 'index']);

Route::get('/main/{id}', [MainCharactersController::class, 'show']);
Route::get('/alt/{id}', [AltController::class, 'show']);

Route::get('/search', [MainCharactersController::class, 'search'])->name('character.search');


Route::get('/add/alt', [AltController::class, 'create']);
Route::get('/add/main', [MainCharactersController::class, 'create']);
Route::post('/adding/main', [MainCharactersController::class, 'store']);
Route::post('/adding/alt', [AltController::class, 'store']);
Route::get('/relation', [RelationController::class, 'index']);
Route::post('/relationship', [RelationController::class, 'relationing']);

Route::get('/fetch-messages', [DiscordMessageController::class, 'fetchMessages']);
Route::get('/missing', [DiscordMessageController::class, 'index']);
