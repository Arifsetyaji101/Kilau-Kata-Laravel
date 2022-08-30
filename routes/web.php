<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\ProductController;
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
    return view('pages.landing.home');
});
Route::get('/home', [HomeController::class, 'index'])->name('landing-home');
Route::get('/products', [ProductController::class, 'index'])->name('landing-product');
Route::get('/about-us', [AboutController::class, 'index'])->name('landing-about');
Route::get('/join-us', [JoinController::class, 'index'])->name('landing-join-us');
