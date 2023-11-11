<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengaduanController;
use App\Http\Controllers\masyarakatController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginPetugasController;

Route::get('/', function () {return view('welcome');});
Route::get('/app', function () { return view ('layouts.app'); });

Route::get('/tes',[Controller::class,'tes']);

   

Route::get('/halaman', [pengaduanController::class, 'index']);
Route::get('/home', [pengaduanController::class, 'home']);




Route::get('/registrasi', [masyarakatController:: class, 'registrasi']);
Route::post('/registrasi', [masyarakatController:: class, 'proses_registrasi']);
   
Route::get('/login', [LoginController::class, 'login'])->name("login");
Route::post('/login', [LoginController:: class, 'proses_login']);

Route::get('/masyarakat', [masyarakatController::class, 'data_warga']);
Route::get('/data_petugas', [PetugasController:: class, 'data_petugas']);


Route::get('/registrasi_petugas', [PetugasController:: class, 'petugas']);
Route::post('/registrasi_petugas', [PetugasController:: class, 'proses_registrasi_petugas']);
    
Route::get('/login_petugas',[LoginPetugasController::class, 'login_petugas']);
Route::post('/login_petugas',[LoginPetugasController::class, 'proses_login_petugas']);




Route::middleware(['auth'])->group(function(){
    Route::get('/table', [pengaduanController::class, 'table']);
    Route::get('/isi_laporan', [pengaduanController:: class, 'buat']);
    Route::post('/isi_laporan', [pengaduanController:: class, 'proses_tambah_pengaduan']);
    Route::get('/logout',[LoginController::class,'logout']);
    Route::get('/detail_laporan/{id}',[pengaduanController::class,'detail_laporan']);
    Route::get('/detail_pengaduan/{id}', [pengaduanController:: class, 'detail']);
    Route::post('/update_pengaduan/{id}', [pengaduanController:: class, 'proses_update']);
    Route::get('/update_pengaduan/{id}', [pengaduanController::class, 'update']);
    Route::get('/hapus_pengaduan/{id}', [pengaduanController:: class, 'hapus']);
});
    
Route::middleware(['cekpetugas'])->group(function(){
    Route::get('/petugas', [PetugasController:: class, 'halaman_petugas']);
    Route::get('/petugas/logout',[PetugasController::class,'logout']);
    Route::get('/status/{id}', [PetugasController:: class, 'status']);
    Route::post('/status/{id}', [PetugasController:: class, 'proses_status']);

});