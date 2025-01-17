<?php

use App\Models\Pelanggan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\WaiterController;
use App\Http\Controllers\MakanController;
use App\Http\Controllers\MinumController;
use App\Http\Controllers\TransaksiController;

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

Route::get('/Profile', function () {
    return view('profile');
});
Route::get('/', [PelangganController::class, 'registrasi']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function () {
    Route::resource('Pelanggan',PelangganController::class);
});
Route::get('Pelanggan/laporan/cetak',[PelangganController::class,'laporan']);

Route::get('Pelanggan/cari/data',[PelangganController::class,'cari']);
Route::resource('Waiter',WaiterController::class);
Route::get('Waiter/laporan/cetak',[WaiterController::class,'laporan']);
Route::get('Waiter/cari/data',[WaiterController::class,'cari']);
Route::resource('Makan',MakanController::class);
Route::get('Makan/laporan/cetak',[MakanController::class,'laporan']);
Route::get('Makan/cari/data',[MakanController::class,'cari']);
Route::resource('Minum',MinumController::class);
Route::get('Minum/laporan/cetak',[MinumController::class,'laporan']);
Route::get('Minum/cari/data',[MinumController::class,'cari']);
Route::resource('Transaksi',TransaksiController::class);
Route::get('Transaksi/laporan/cetak',[TransaksiController::class,'laporan']);
Route::get('Transaksi/cari/data',[TransaksiController::class,'cari']);


