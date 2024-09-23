<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');  // Returns the 'login' view
})->name('login'); 

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/product', function () {
    return view('shop');  // Returns the 'login' view
})->name('shop'); 

Route::get('/product-details', function () {
    return view('product-details');  // Returns the 'login' view
})->name('product-details'); 