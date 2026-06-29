<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| BERANDA
|--------------------------------------------------------------------------
*/

Route::get('/', [ProfileController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| ROUTE YANG HARUS LOGIN
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | PROJECT
    |--------------------------------------------------------------------------
    */

    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');

    /*
    |--------------------------------------------------------------------------
    | MAHASISWA
    |--------------------------------------------------------------------------
    */

    Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa'])->name('mahasiswa.index');
    Route::get('/mahasiswa/create', [MahasiswaController::class, 'createMahasiswa'])->name('mahasiswa.create');
    Route::post('/mahasiswa/store', [MahasiswaController::class, 'storeMahasiswa'])->name('mahasiswa.store');
    Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'editMahasiswa'])->name('mahasiswa.edit');
    Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'updateMahasiswa'])->name('mahasiswa.update');
    Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroyMahasiswa'])->name('mahasiswa.destroy');

    /*
    |--------------------------------------------------------------------------
    | BUKU
    |--------------------------------------------------------------------------
    */

    Route::get('/buku', [MahasiswaController::class, 'buku'])->name('buku.index');
    Route::get('/buku/create', [MahasiswaController::class, 'createBuku'])->name('buku.create');
    Route::post('/buku/store', [MahasiswaController::class, 'storeBuku'])->name('buku.store');
    Route::get('/buku/{id}/edit', [MahasiswaController::class, 'editBuku'])->name('buku.edit');
    Route::put('/buku/{id}', [MahasiswaController::class, 'updateBuku'])->name('buku.update');
    Route::delete('/buku/{id}', [MahasiswaController::class, 'destroyBuku'])->name('buku.destroy');

    /*
    |--------------------------------------------------------------------------
    | PROFILE
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| HALAMAN UMUM
|--------------------------------------------------------------------------
*/

Route::get('/about', function () {
    return view('about');
});

Route::get('/halo', function () {
    return view('halo_mahasiswa');
});

Route::get('/hobi', function () {
    return view('hobi');
});