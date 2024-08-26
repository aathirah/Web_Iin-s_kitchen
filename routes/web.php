<?php

use App\Http\Controllers\OrderController;
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
    return redirect()->to('/home');
});


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get("/home", [App\Http\Controllers\HomeController::class, "index"]);

Route::resource('menu', App\Http\Controllers\menuController::class);
Route::resource('cart', App\Http\Controllers\OrderController::class);

Route::get('/login', [App\Http\Controllers\UserController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [App\Http\Controllers\UserController::class, 'authenticate']);

Route::post('/register', [App\Http\Controllers\UserController::class, 'register']);

Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout']);

Route::get("increase-quantity/{id}", [OrderController::class, "increaseQuantity"]);
Route::get("decrease-quantity/{id}", [OrderController::class, "decreaseQuantity"]);
Route::get("detail-transaksi", [OrderController::class, "detailtransaksi"]);
Route::get("update-status", [OrderController::class, "updateStatus"]);
Route::post('order-transaction', [OrderController::class, 'orderTransaction']);

Route::resource('pelanggan', App\Http\Controllers\PelangganController::class);
Route::resource('transaksi', App\Http\Controllers\TransaksiController::class);

Route::get("cetak-transaksi", [OrderController::class, "cetakTransaksi"]);
Route::get('/cari', [OrderController::class, "cari"]);
