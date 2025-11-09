<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index');
});

Route::get('/About', function () {
    return view('About');
});

Route::get('/Produk', function () {
    return view('Produk');
});
