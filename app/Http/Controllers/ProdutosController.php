<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produtos;

class ProdutosController extends Controller
{
    public function produto()
    {

        return view('site.produtos');
    }

    public function store(Request  $request)
    {

        $produto = new Produtos;

        $produto->marca = $request->marca;
        $produto->valor_u = $request->valor_u;
        $produto->unidade_m = $request->unidade_m;
        $produto->desc_produto = $request->desc_produto;
        $produto->det_produto = $request->det_produto;
        $produto->create_at = $request->create_at;

        $produto->save();

        return redirect('/exib_produto');
    }
}