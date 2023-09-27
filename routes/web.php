<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\OrcamentoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\HomeController;
use App\Models\Cliente;

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

Route::get('/',[HomeController::class,'index'])->name('home');

//listando rota por rota
Route::get('/clientes',[ClienteController::class,'index'])->name('clientes.index');
Route::get('/clientes/create',[ClienteController::class,'create'])->name('clientes.create');
Route::post('/clientes',[ClienteController::class,'store'])->name('clientes.store');
Route::get('/clientes/{cliente}',[ClienteController::class,'show'])->name('clientes.show');
Route::get('/clientes/{cliente}/edit',[ClienteController::class,'edit'])->name('clientes.edit');
Route::put('/clientes/{cliente}',[ClienteController::class,'update'])->name('clientes.update');
Route::delete('/clientes/{cliente}',[ClienteController::class,'destroy'])->name('clientes.destroy');

//listando todas as rotas resource
Route::resource('vendas', VendaController::class);

