<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashController;
use App\Http\Controllers\Umkm\UmkmControllerr;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\LoginController;


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

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard');

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/tambah', [UserController::class, 'create'])->name('tambah_user');
Route::post('/user/tambah', [UserController::class, 'create'])->name('tambah_user');
Route::get('/user/update/{id}', [UserController::class, 'update'])->name('update_user');
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('update_user');
Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('delete_user');

Route::get('/umkm', [UmkmControllerr::class, 'index'])->name('umkm');
Route::get('/umkm/tambah', [UmkmControllerr::class, 'create'])->name('tambah_umkm');
Route::post('/umkm/tambah', [UmkmControllerr::class, 'create'])->name('tambah_umkm');
Route::get('/umkm/update/{id}', [UmkmControllerr::class, 'update'])->name('update_umkm');
Route::post('/umkm/update/{id}', [UmkmControllerr::class, 'update'])->name('update_umkm');
Route::get('/umkm/delete/{id}', [UmkmControllerr::class, 'delete'])->name('delete_umkm');

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/tambah', [ProductController::class, 'create'])->name('tambah_product');
Route::post('/product/tambah', [ProductController::class, 'create'])->name('tambah_product');
Route::get('/product/update/{id}', [ProductController::class, 'update'])->name('update_product');
Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('update_product');
Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('delete_product');
