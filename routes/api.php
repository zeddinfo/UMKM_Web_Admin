<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UmkmController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

///UMKM 
Route::get('umkm', [UmkmController::class, 'umkm']);
Route::get('umkm/{id}', [UmkmController::class, 'detail_umkm']);
Route::get('umkm_products/{id}', [UmkmController::class, 'umkm_products']);
Route::post('umkm_terdekat', [UmkmController::class, 'umkm_terdekat']);

///Products
// Route::get('products/{id}', [ProductController::class, 'products']);
Route::get('product/{id}', [ProductController::class, 'detail_produk']);
