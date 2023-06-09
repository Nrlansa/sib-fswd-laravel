<?php

use App\Http\Controllers\Api\DaftarprodukController;
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
Route::prefix('listproduk')->group(function () {
    route::get('', [DaftarprodukController::class,'index']);
    route::get('/{id}', [DaftarprodukController::class, 'show']);
    Route::put('/{id}', [DaftarprodukController::class, 'update']);
    Route::delete('/{id}', [DaftarprodukController::class, 'destroy']);
   
});
