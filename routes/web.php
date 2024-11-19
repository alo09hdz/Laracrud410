<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
}) -> name('index');

Route::resource('/products',App\Http\Controllers\ProductController::class);

Route::resource('/brands',App\Http\Controllers\BrandController::class);

Route::get('/products/{product}/delete',[App\Http\Controllers\ProductController::class, 'delete'])->name('products.delete');

Route::resource('/clients',App\Http\Controllers\ClientController::class);

Route::resource('/sales',App\Http\Controllers\SaleController::class);

