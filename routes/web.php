<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/sekolah', function () {
    return view('sekolahs.index', [
        'sekolahs' => sekolah::get()
    ]);
});

// Route::get('/Sekolah)

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get("/sekolah", [SekolahController::class, 'index'])->name('sekolahs.index');

Route ::get('/sekolah/tambah', [SekolahController::class, 'tambah']);

Route ::post('/sekolah', [SekolahController::class, 'simpan']);

Route ::get('/sekolah/{id}/edit', [SekolahController::class, 'edit']) ->name('sekolahs.edit');

Route ::put('/sekolah/{id}', [SekolahController::class, 'update']) ->name('sekolahs.update');
Route::delete('/sekolahs/{id}', [SekolahController::class, 'destroy']) ->name('sekolahs.destroy');

require __DIR__.'/auth.php';
