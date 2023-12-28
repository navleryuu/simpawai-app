<?php

use App\Http\Controllers\LoginControler;
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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {
        return view('auth.login');
    });
    
    Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
    Route::post('/login-proses', [App\Http\Controllers\LoginController::class, 'login_proses'])->name('login-proses');
    
});

Route::group(['middleware' => 'auth'], function () {
    //dua"
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/jabatan', [App\Http\Controllers\JabatansController::class, 'index'])->name('jabatan');
        Route::get('/create/jabatan', [App\Http\Controllers\JabatansController::class, 'create'])->name('jabatan.create');
        Route::post('/store/jabatan', [App\Http\Controllers\JabatansController::class, 'store'])->name('jabatan-store');
        Route::get('/edit/jabatan/{id}', [App\Http\Controllers\JabatansController::class, 'edit'])->name('jabatan-edit');
        Route::put('/update/jabatan/{id}', [App\Http\Controllers\JabatansController::class, 'update'])->name('jabatan.update');
        Route::delete('/delete/jabatan/{id}', [App\Http\Controllers\JabatansController::class, 'destroy'])->name('jabatan.delete');

        Route::get('/pengaduan', [App\Http\Controllers\PengaduanController::class, 'index'])->name('pengaduan');
        Route::put('/pengaduan/{id}', [App\Http\Controllers\PengaduanController::class, 'update'])->name('pengaduan.update');





        Route::get('/tanggapan', [App\Http\Controllers\TanggapanController::class, 'index'])->name('tanggapan');



        Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
        Route::get('/create/user', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
        Route::post('/store/user', [App\Http\Controllers\UserController::class, 'store'])->name('user-store');
        Route::get('/edit/user/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user-edit');
        Route::put('/update/user/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
        Route::delete('/delete/user/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.delete');


        Route::get('/pegawai', [App\Http\Controllers\PegawaiController::class, 'index'])->name('pegawai');
        Route::get('/create/pegawai', [App\Http\Controllers\PegawaiController::class, 'create'])->name('pegawai.create');
        Route::post('/store/pegawai', [App\Http\Controllers\PegawaiController::class, 'store'])->name('pegawai-store');
        Route::get('/edit/pegawai/{id}', [App\Http\Controllers\PegawaiController::class, 'edit'])->name('pegawai-edit');
        Route::put('/update/pegawai/{id}', [App\Http\Controllers\PegawaiController::class, 'update'])->name('pegawai.update');
        Route::delete('/delete/pegawai/{id}', [App\Http\Controllers\PegawaiController::class, 'destroy'])->name('pegawai.delete');

        
    });

    Route::group(['middleware' => ['role:pegawai']], function () {
        Route::get('/pengaduan-user', [App\Http\Controllers\PengaduanUserController::class, 'index'])->name('pengaduan-user');
        Route::get('/create/pengaduan-user', [App\Http\Controllers\PengaduanUserController::class, 'create'])->name('pengaduan-user.create');
        Route::post('/store/pengaduan-user', [App\Http\Controllers\PengaduanUserController::class, 'store'])->name('pengaduan-user.store');
        Route::get('/edit/pengaduan-user/{id}', [App\Http\Controllers\PengaduanUserController::class, 'edit'])->name('pengaduan-user.edit');
        Route::put('/update/pengaduan-user/{id}', [App\Http\Controllers\PengaduanUserController::class, 'update'])->name('pengaduan-user.update');
        Route::delete('/delete/pengaduan-user/{id}', [App\Http\Controllers\PengaduanUserController::class, 'destroy'])->name('pengaduan-user.delete');

    });
});
