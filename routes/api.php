<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/category', [CategoryController::class, 'index']);
        Route::get('/category/{category}', [CategoryController::class, 'show']);

        Route::get('/product', [ProductController::class, 'index']);
        Route::get('/product/{product}', [ProductController::class, 'show']);
    });

    Route::middleware('check')->group(function () {
        Route::post('/category', [CategoryController::class, 'store']);
        Route::put('/category/{category}', [CategoryController::class, 'update']);
        Route::delete('/category/{category}', [CategoryController::class, 'delete']);

        Route::post('/product', [ProductController::class, 'store']);
        Route::put('/product/{product}', [ProductController::class, 'update']);
        Route::delete('/product/{product}', [ProductController::class, 'destroy']);
    });
});

Route::get('/news', [NewsController::class, 'index']);
Route::post('/news', [NewsController::class, 'store']);
Route::get('/news/{post}', [NewsController::class, 'show']);
Route::put('/news/{post}', [NewsController::class, 'update']);
Route::delete('/news/{post}', [NewsController::class, 'delete']);

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);
