<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
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

Route::resource('customers', CustomerController::class);
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
Route::get('/clientes/novo', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer.create');
Route::get('/produtos/novo', [App\Http\Controllers\ProductController::class, 'index'])->name('product.create');
Route::get('/pedidos/novo', [App\Http\Controllers\OrderController::class, 'index'])->name('order.create');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
