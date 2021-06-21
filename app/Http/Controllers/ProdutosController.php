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

    public function store(Request $request)
    {

        $produtos = new Produtos;

        $produtos->marca            = $request->marca;
        $produtos->valor_u          = $request->valor_u;
        $produtos->unidade_m        = $request->unidade_m;
        $produtos->desc_produto     = $request->desc_produto;
        $produtos->det_produto      = $request->det_produto;
        $produtos->created_at       = $request->created_at;

        $produtos->save();

        return redirect('/exib_produto');
    }
}