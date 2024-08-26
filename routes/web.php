<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class,'index']);
Route::resource('product', ProductController::class)->except(['index']);
Route::resource('order', OrderController::class);
