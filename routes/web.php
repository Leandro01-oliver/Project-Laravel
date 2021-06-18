<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\HomePageController::class, 'paginaprincipal']);
Route::get('/cad_cliente', [App\Http\Controllers\CadastroClienteController::class, 'cadastrarcliente']);
Route::get('/cad_produto', [App\Http\Controllers\CadastroProdutoController::class, 'cadastrarproduto']);
Route::post('/save_cliente', [App\Http\Controllers\CadastroClienteController::class, 'store']);
Route::post('/save_produto', [App\Http\Controllers\CadastroProdutoController::class, 'store']);
Route::get('/exib_cliente', [App\Http\Controllers\ExibClienteController::class, 'exibclientes']);
Route::get('/exib_produto', [App\Http\Controllers\ExibProdutoController::class, 'exibprodutos']);