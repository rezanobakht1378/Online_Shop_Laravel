<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class,'index'])->name('index');
Route::resource('product', ProductController::class)->except(['index']);
Route::resource('order', OrderController::class);
Route::get('/users', [UserController::class,'index']);
Route::get('/register', [UserController::class,'registerPage'])->name('user.registerPage');
Route::post('/register', [UserController::class,'register'])->name('user.register');
Route::get('/login',[UserController::class,'loginPage'])->name('user.loginPage');
Route::post('/login',[UserController::class,'login'])->name('user.login');
