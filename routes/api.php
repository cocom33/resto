<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);
Route::post('/testko', function(Request $request) {
    return response()->json([
        "status" => "success",
        "data" => $request->password
     ], 200);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware(["auth:sanctum"])->group(function () {
    Route::get('/product', [App\Http\Controllers\Api\ProductController::class, 'index']);

    Route::get('/category', [App\Http\Controllers\Api\CategoryController::class, 'index']);
// });