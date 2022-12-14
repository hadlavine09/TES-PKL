<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/beranda', [App\Http\Controllers\TotalController::class, 'index'])->name('home');

// Route::get('/transaksi', function () {
//     return view('transaksi.index');
// });
// Route::resou('/product', function () {
//     return view('product.index');
// });
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', [AdminController::class, 'getData']);
    // tambah disini
    Route::resource('/product', ProductController::class);
    Route::resource('/transaksi', TransaksiController::class);
    Route::resource('/data_user', UserController::class);
});
