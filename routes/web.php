<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/keranjang', function () {
    return view('keranjang');
});
// Route::get('/detailproduk', function () {
//     return view('detail_produk');
// });
Route::get('/checkout', function () {
    return view('checkout');
});

Route::post('/auth',[UserController::class, 'auth']);
Route::get('/finalcheckout',[UserController::class, 'finalcheckout']);

Route::get('/user',[UserController::class, 'user']);
Route::get('/detailproduk/{id}',[UserController::class, 'detailProduk']);


