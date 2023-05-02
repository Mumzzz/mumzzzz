<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
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
    return view('dashboard');
});
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::put('kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('kategori/show/{id}', [KategoriController::class, 'show'])->name('kategori.show');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');