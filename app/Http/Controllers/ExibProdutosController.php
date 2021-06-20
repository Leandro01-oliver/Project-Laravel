<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

class ExibProdutosController extends Controller
{
    public function exibproduto()
    {
        $produto = Produtos::all();

        return view('site.exib_produto', ['produto' => $produto]);
    }
}