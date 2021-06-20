<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomePageController::class, 'homepage']);
Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'cliente']);
Route::get('/produtos', [App\Http\Controllers\ProdutosController::class, 'produto']);
Route::post('/save_cliente', [App\Http\Controllers\HomePageController::class, 'store']);
Route::post('/save_produto', [App\Http\Controllers\HomePageController::class, 'store']);
Route::get('/exib_cliente', [App\Http\Controllers\ExibClientesController::class, 'exibcliente']);
Route::get('/exib_produto', [App\Http\Controllers\ExibProdutosControllerss::class, 'exibproduto']);