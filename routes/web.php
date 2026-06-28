<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProjectController;

Route::get('/halo', function () {
    return view('halo_mahasiswa');
});

Route::get('/hobi', function () {
    return view('hobi');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/beranda', [ProfileController::class, 'index']);
Route::get('/', [ProfileController::class, 'index']);

Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa']);
Route::get('/buku', [MahasiswaController::class, 'buku']);

Route::get('/projects/create', [ProjectController::class, 'create']); // Tampilan Form
Route::post('/projects', [ProjectController::class, 'store']); // Proses Simpan

// MAHASISWA
Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa'])->name('mahasiswa.index');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'createMahasiswa'])->name('mahasiswa.create');
Route::post('/mahasiswa/store', [MahasiswaController::class, 'storeMahasiswa'])->name('mahasiswa.store');

// BUKU
Route::get('/buku', [MahasiswaController::class, 'buku'])->name('buku.index');
Route::get('/buku/create', [MahasiswaController::class, 'createBuku'])->name('buku.create');
Route::post('/buku/store', [MahasiswaController::class, 'storeBuku'])->name('buku.store');

Route::get('/projects/{id}/edit', [ProjectController::class, 'edit']);

Route::put('/projects/{id}', [ProjectController::class, 'update']);

// EDIT & UPDATE MAHASISWA
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'editMahasiswa'])->name('mahasiswa.edit');
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'updateMahasiswa'])->name('mahasiswa.update');

// EDIT & UPDATE BUKU
Route::get('/buku/{id}/edit', [MahasiswaController::class, 'editBuku'])->name('buku.edit');
Route::put('/buku/{id}', [MahasiswaController::class, 'updateBuku'])->name('buku.update');