<?php

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

Route::get('/parfums/femme', [App\Http\Controllers\ParfumController::class, 'getFemme']);
Route::get('/parfums/homme', [App\Http\Controllers\ParfumController::class, 'getHomme']);
Route::get('/parfums/promotions', [App\Http\Controllers\ParfumController::class, 'getPromotions']);
Route::get('/parfums/nouveautes', [App\Http\Controllers\ParfumController::class, 'getNouveautes']);
Route::get('/parfums/search', [App\Http\Controllers\ParfumController::class, 'search']);
