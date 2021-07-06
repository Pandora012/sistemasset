<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PersetujuanController;
use App\Http\Controllers\TambahController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home']);
Route::get('/dataaset', [DataController::class, 'data']);
Route::get('/persetujuanaset', [PersetujuanController::class, 'persetujuan']);

Route::group(['middleware'=>['role:pegawai']], function(){
    //data asset
    Route::get('/dataaset/edit/{id}', [TambahController::class, 'edit']);
    Route::post('/dataaset/update/{id}', [TambahController::class, 'update']);
    Route::get('/dataaset/delete/{id}', [TambahController::class, 'delete']);


    //tambah asset
    Route::get('/tambahaset', [TambahController::class, 'buat'])->name('tambahaset');
    Route::post('/tambahaset/insert', [TambahController::class, 'insert']);

    //pengajuanasset
    Route::get('/pengajuanaset', [PengajuanController::class, 'pengajuan'])->name('pengajuanaset');
    Route::post('/pengajuanaset/insert', [PengajuanController::class, 'insert']);
});

Route::group(['middleware'=>['role:manager']], function(){
    //persetujuan
    Route::put('/persetujuanaset/setuju/{id}', [PersetujuanController::class, 'setuju']);
    Route::put('/persetujuanaset/tolak/{id}', [PersetujuanController::class, 'tolak']);
});



Route::get('/akun', function () {
    return view('admin.akun');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('dashboard');
