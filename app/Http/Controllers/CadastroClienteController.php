<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  APP\Models\Tb_Cliente;

class CadastroClienteController extends Controller
{
    public function cadastrarcliente()
    {
        return view('site.cad_cliente');
    }

    public function store(Request  $request)
    {

      $tb_cliente = new Tb_Cliente;

        $tb_cliente->nm = $request->nm;
        $tb_cliente->email = $request->email;
        $tb_cliente->nm_pai = $request->nm_pai;
        $tb_cliente->nm_mae = $request->nm_mae;
        $tb_cliente->dt_nascimento = $request->dt_nascimento;
        $tb_cliente->telefone = $request->telefone;
        $tb_cliente->cpf = $request->cpf;
        $tb_cliente->rg = $request->rg;
        $tb_cliente->cep = $request->cep;
        $tb_cliente->rua = $request->rua;
        $tb_cliente->bairro = $request->bairro;
        $tb_cliente->cidade = $request->cidade;
        $tb_cliente->rm = $request->rm;
        $tb_cliente->uf = $request->uf;

         $tb_cliente->save();

        return redirect('/exib_cliente');
    }
}