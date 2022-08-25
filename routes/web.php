<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\JurnalController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/tanaman', [TanamanController::class, 'index']);
Route::get('/search', [TanamanController::class, 'search']);
Route::resource('tanaman', TanamanController::class);

Route::get('/edit-tanaman', function () {
    return view('edit-tanaman');
});

Route::get('/outlet', [OutletController::class, 'index']);
Route::resource('outlet', OutletController::class);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::resource('kategori', KategoriController::class);
Route::get('/edit-kategori', function () {
    return view('edit-kategori'); 
});

Route::get('/jurnal', [JurnalController::class, 'index']);
Route::resource('jurnal', JurnalController::class);
Route::get('/edit-jurnal', function () {
    return view('edit-jurnal');

});

Route::get('/laporan-stok', function () {
    return view('table-stok');
});