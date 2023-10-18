<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengaduanController;
use App\Http\Controllers\masyarakatController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {return view('welcome');});
Route::get('/app', function () { return view ('layouts.app'); });



   

Route::get('/halaman', [pengaduanController::class, 'index']);
Route::get('/home', [pengaduanController::class, 'home']);


Route::get('/isi_laporan', [pengaduanController:: class, 'buat']);
Route::post('/isi_laporan', [pengaduanController:: class, 'proses_tambah_pengaduan']);

Route::get('/registrasi', [masyarakatController:: class, 'registrasi']);
Route::post('/registrasi', [masyarakatController:: class, 'proses_registrasi']);
   
Route::get('/masyarakat', [masyarakatController::class, 'data_warga']);

Route::get('/hapus_pengaduan/{id}', [pengaduanController:: class, 'hapus']);

Route::get('/login', [LoginController::class, 'login'])->name("login");
Route::post('/login', [LoginController:: class, 'proses_login']);
    

Route::get('/petugas', [PetugasController:: class, 'petugas']);
Route::post('/petugas', [PetugasController:: class, 'proses_registrasi_petugas']);
Route::get('/data_petugas', [PetugasController:: class, 'data_petugas']);

Route::post('/update_pengaduan/{id}', [pengaduanController:: class, 'proses_update']);
Route::get('/update_pengaduan/{id}', [pengaduanController::class, 'update']);

Route::get('/detail_laporan/{id}',[pengaduanController::class,'detail_laporan']);
Route::get('/detail_pengaduan/{id}', [pengaduanController:: class, 'detail']);

//Route::middleware(['auth'])->group(function(){
    Route::get('/table', [pengaduanController::class, 'table']);

//});