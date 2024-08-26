<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [PageController::class,'index']);
Route::resource('product', ProductController::class);
Route::resource('order', OrderController::class);
