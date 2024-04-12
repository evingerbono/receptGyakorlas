<?php

use App\Http\Controllers\ReceptekController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/receptek', [ReceptekController::class, 'recepteklist']);
Route::get('/receptnevek', [ReceptekController::class, 'receptnevek']);
Route::post('/receptek/create', [ReceptekController::class, 'store']);
Route::delete('/receptek/{id}/delete', [ReceptekController::class, 'destroy']);
