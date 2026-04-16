<?php

use App\Http\Controllers\ApiIntegrationController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/products', [ProductController::class, "index"]);
Route::post('/products', [ProductController::class, "store"]);

Route::get('users/', [ApiIntegrationController::class, "getUsers"]);
Route::post('users/', [ApiIntegrationController::class, "createUser"]);