<?php

use App\Http\Controllers\ConnectController;
use App\Http\Controllers\CartController;
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
    return redirect('home');
});


//Router Auth
Route::get('/login',[ConnectController::class, 'getLogin'])->name('login');
Route::post('/login',[ConnectController::class, 'postLogin'])->name('login');
Route::get('/recover',[ConnectController::class, 'getRecover'])->name('recover');
Route::post('/recover',[ConnectController::class, 'postRecover'])->name('recover');
Route::get('/reset',[ConnectController::class, 'getReset'])->name('reset');
Route::post('/reset',[ConnectController::class, 'postReset'])->name('reset');
Route::get('/register',[ConnectController::class, 'getRegister'])->name('register');
Route::post('/register',[ConnectController::class, 'postRegister'])->name('register');
Route::get('/logout',[ConnectController::class, 'getLogout'])->name('logout');

Route::get('/inicio', function () {
    return view('welcome');
})->name('inicio');

Route::get('/rebajas', function () {
    return view('rebajas');
})->name('rebajas')->middleware('auth');

Route::get('/liquidacion', function () {
    return view('liquidacion');
})->name('liquidaciones')->middleware('auth');

Route::get('/promociones', function () {
    return view('promociones');
})->name('promociones')->middleware('auth');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros')->middleware('auth');

Route::get('/juegosyaccesorios', function () {
    return view('juegosaccesorios');
})->name('juegosyacc')->middleware('auth');

Route::get('/consolas', function () {
    return view('consola');
})->name('consolas')->middleware('auth');

Route::get('/programas', function () {
    return view('programas');
})->name('programas')->middleware('auth');

Route::get('/cuenta', function () {
    return view('cuenta');
})->name('cuenta')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/compras', [ProductController::class, 'productList'])->name('products.list');
Route::get('/cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('/cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clearAllCart'])->name('cart.clear');