<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/category',[CategoryController::class,'index']);
Route::post('/category', [CategoryController::class, 'store']);
Route::get('/category/{category}', [CategoryController::class, 'show']);
Route::put('/category/{category}', [CategoryController::class, 'update']);
Route::delete('/category/{category}', [CategoryController::class, 'delete']);

Route::get('/product',[ProductController::class,'index']);
Route::post('/product', [ProductController::class, 'store']);


Route::get('/news',[NewsController::class,'index']);
Route::post('/news', [NewsController::class, 'store']);
Route::get('/news/{post}', [NewsController::class, 'show']);
Route::put('/news/{post}', [NewsController::class, 'update']);
Route::delete('/news/{post}', [NewsController::class, 'delete']);
