<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  APP\Models\Tb_Produto;

class CadastroProdutoController extends Controller
{

    public function cadastrarproduto()
    {
        return view('site.cad_produto');
    }

    public function store(Request  $request)
    {

        $tb_produto = new Tb_Produto;

        $tb_produto->marca = $request->marca;
        $tb_produto->valor_u = $request->valor_u;
        $tb_produto->unidade_m = $request->unidade_m;
        $tb_produto->desc_produto = $request->desc_produto;
        $tb_produto->det_produto = $request->det_produto;

        $tb_produto->save();

        return redirect('/exib_produto');
    }
}