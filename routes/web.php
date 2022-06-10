<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::get('/book/popular', [HomeController::class, 'popular'])->name('popular');
Route::get('/book/all', [HomeController::class, 'post'])->name('book');
Route::get('/book/bestseller', [HomeController::class, 'seller'])->name('bestseller');

Route::get('/book/{slug}', [DetailController::class, 'index'])->name('detail');



Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');

Route::get('/auth-with-google', [AuthController::class, 'google'])->name('auth-with-google');
Route::get('/auth/callback', [AuthController::class, 'handleProviderCallback']);

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/category', CategoryController::class);
    Route::resource('/book', BookController::class);
    Route::resource('/banner', BannerController::class);
});
