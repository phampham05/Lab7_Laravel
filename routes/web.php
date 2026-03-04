<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'list']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/bang-cuu-chuong/{n}', [HomeController::class, 'multiplication']);