<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.homepage');
})->name('homepage');

Route::get('/detail', function () {
    return view('pages.detail');
})->name('detail');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');