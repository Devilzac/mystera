<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AltController;
use App\Http\Controllers\MainCharactersController;
use App\Http\Controllers\RelationController;
use App\Models\MainCharacters;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

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



Route::post('/unlink/alt/{id}', [AltController::class, 'unlink']);
