<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProductController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route ::get('dashboard', [App\Http\Controllers\landingPageController::class,'index']);
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
Route::get("/barang/{barang}",[BarangController::class, 'edit'])->name('edit');
Route::put('/barang/{barang}', [BarangController::class, 'update'])->name('update');
Route::delete('/barang/{barang}', [BarangController::class, 'destroy'])->name('destroy'); 