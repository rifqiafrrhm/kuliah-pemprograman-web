<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'Home']);

Route::get('/About', [AboutController::class,'About']);

Route::get('/Produk', [ProductController::class,'Produk']);
