<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;

use App\Http\Controllers\user\RoleController;
use App\Http\Controllers\slider\SliderController;
use App\Http\Controllers\produk\LprodukController;
use App\Http\Controllers\produk\KategoriController;

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
Route::resource('/', LandingController::class);
Route::get('/dashboard', function () {
    return view('welcome');
});
Route::resource('/user', UserController::class);
Route::resource('/kategori', KategoriController::class);
Route::resource('/listproduk', LprodukController::class);
Route::resource('/role', RoleController::class);
Route::resource('/slider', SliderController::class);



