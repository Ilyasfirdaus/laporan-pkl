<?php

use App\Http\Controllers\KunjunganController;
use  App\Http\Controllers\PengunjungController;
use  App\Http\Controllers\InstitusiController;
use App\Models\Pengunjung;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/loginadmin', function () {
    return view('loginadmin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/kunjungan',[KunjunganController::class,'index']) ->name('kunjungan.index');
Route::get('/kunjungan/create',[KunjunganController::class,'create'])->name('kunjungan.create');
Route::post('/kunjungan/store',[KunjunganController::class,'store'])->name('kunjungan.store');
Route::get('/kunjungan/edit/{id}',[KunjunganController::class,'edit'])->name('kunjungan.edit');
Route::post('/kunjungan/update/{id}', [KunjunganController::class,'update'])->name('kunjungan.update');
Route::delete('/kunjungan', [kunjunganController::class,'destroy'])->name('kunjungan.destroy');  
Route::get('/kunjungan/cetak_pdf', 'KunjunganController@cetak_pdf');    
Route::resource('kunjungan', kunjunganController::class);

Route::get('/pengunjung/{id?}',[PengunjungController::class,'index']) ->name('pengunjung');
Route::get('/pengunjung/edit/{id}',[KunjunganController::class,'edit'])->name('pengunjung.edit');
Route::post('/pengunjung/update/{id}', [KunjunganController::class,'update'])->name('pengunjung.update');
Route::resource('pengunjung', PengunjungController::class);

Route::get('/institusi/{id?}',[InstitusiController::class,'index']) ->name('institusi');
Route::resource('institusi', InstitusiController::class);


require __DIR__.'/auth.php';
