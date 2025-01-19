<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlinikController;


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
Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('/event', function () {
    return view('event');
})->name('event');

Route::get('/map', function () {
    return view('map');
})->name('map');

Route::get('/ulasan', function () {
    return view('ulasan');
})->name('ulasan');

Route::get('/create', function () {
    return view('klinik.create');
})->name('create');


Route::get('/api/klinik-data', [KlinikController::class, 'getKlinikData']);

// Menambahkan data klinik
Route::post('/klinik', [KlinikController::class, 'store'])->name('klinik.store');

// Mengupdate data klinik
Route::put('/klinik/{id}', [KlinikController::class, 'update']);

// Menghapus data klinik
Route::delete('/klinik/{id}', [KlinikController::class, 'destroy']);

Route::get('/klinik', [KlinikController::class, 'index'])->name('klinik.index');

Route::get('/search-klinik', [KlinikController::class, 'search'])->name('search-klinik');

Route::get('/klinik/{id}', [KlinikController::class, 'show'])->name('klinik.show');

Route::get('/klinik/{id}/edit', [KlinikController::class, 'edit'])->name('klinik.edit');

Route::post('/klinik/{id}/edit', [KlinikController::class, 'update'])->name('klinik.update');

Route::delete('/klinik/{id}', [KlinikController::class, 'destroy'])->name('klinik.destroy');


require __DIR__.'/auth.php';
