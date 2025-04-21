<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\KrsMahasiswaController;

// Homepage mengarah ke KRS Mahasiswa
Route::get('/', [KrsMahasiswaController::class, 'index'])->name('home');

// CRUD Mahasiswa
Route::resource('mahasiswas', MahasiswaController::class);

// CRUD Dosen
Route::resource('dosens', DosenController::class);

// CRUD Mata Kuliah
Route::resource('mata_kuliahs', MataKuliahController::class);

// CRUD KRS Mahasiswa
Route::get('/krs-mahasiswa/create', [KrsMahasiswaController::class, 'create'])->name('krs-mahasiswa.create');
Route::post('/krs-mahasiswa', [KrsMahasiswaController::class, 'store'])->name('krs-mahasiswa.store');
Route::get('/krs-mahasiswa/{krsMahasiswa}/edit', [KrsMahasiswaController::class, 'edit'])->name('krs-mahasiswa.edit');
Route::put('/krs-mahasiswa/{krsMahasiswa}', [KrsMahasiswaController::class, 'update'])->name('krs-mahasiswa.update');
Route::delete('/krs-mahasiswa/{krsMahasiswa}', [KrsMahasiswaController::class, 'destroy'])->name('krs-mahasiswa.destroy');
