<?php

use App\Http\Controllers\HotelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// pada api.php
// adalah tempat untuk menyimpan route api
Route::post('/posts/store', [HotelController::class, "store"]);
Route::get('/show/hotel', [HotelController::class, "showHotel"]);
Route::get('/show/hotel/detail/{id}', [HotelController::class, "showById"]);
Route::post('/create/hotel', [HotelController::class, "tambah_hotel"]);
