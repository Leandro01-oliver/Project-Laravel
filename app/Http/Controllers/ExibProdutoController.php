<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  APP\Models\Tb_Produto;

class ExibProdutoController extends Controller
{
    public function exibprodutos()
    {
        $tb_produto = Tb_Produto::all();

        return view('site.exib_produto' . ['tb_produto' => $tb_produto]);
    }
}