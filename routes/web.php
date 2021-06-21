<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomePageController::class, 'homepage']);
Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'cliente']);
Route::get('/produtos', [App\Http\Controllers\ProdutosController::class, 'produto']);
Route::get('/exib_cliente', [App\Http\Controllers\ExibClientesController::class, 'exibcliente']);
Route::get('/exib_produto', [App\Http\Controllers\ExibProdutosController::class, 'exibproduto']);

Route::post('/cad_cliente', [App\Http\Controllers\ClientesController::class, 'store']);
Route::post('/cad_produto', [App\Http\Controllers\ProdutosController::class, 'store']);