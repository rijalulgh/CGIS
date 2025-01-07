<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/explore', function () {
    return view('explore');
})->name('explore');

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

Route::get('/explore', function () {
    return view('klinik.index');
})->name('explore');

Route::get('/create', function () {
    return view('klinik.create');
})->name('create');


use App\Http\Controllers\KlinikController;
Route::get('/api/klinik-data', [KlinikController::class, 'getKlinikData']);

// Menambahkan data klinik
Route::post('/klinik', [KlinikController::class, 'store']);

// Mengupdate data klinik
Route::put('/klinik/{id}', [KlinikController::class, 'update']);

// Menghapus data klinik
Route::delete('/klinik/{id}', [KlinikController::class, 'destroy']);



require __DIR__.'/auth.php';
