<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\matakuliahcontroller;

Route::get('/', function () {
    // return view('welcome');
    // return mahasiswa::with('matakuliah')->get();
});

Route::get('/absensi', [AbsensiController::class, 'index']);
Route::post('/absensis', [AbsensiController::class, 'store']);
Route::get('/absensi/{id}', [AbsensiController::class, 'show']);
Route::get('/edit-absensi/{id}', [AbsensiController::class, 'edit']);
Route::put('/absensi/{id}', [AbsensiController::class, 'update']);

Route::get('/matakuliah', [matakuliahcontroller::class, 'index']);
Route::get('/create-matakuliah', [matakuliahcontroller::class, 'create']);
Route::post('/matakuliah', [matakuliahcontroller::class, 'store']);
Route::get('/matakuliah/{id}', [matakuliahcontroller::class, 'show']);
Route::get('/edit-matakuliah/{id}', [matakuliahcontroller::class, 'edit']);
Route::put('/matakuliah/{id}', [matakuliahcontroller::class, 'update']);
Route::delete('/matakuliah/{id}', [matakuliahcontroller::class, 'destroy']);