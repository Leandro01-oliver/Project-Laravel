<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ClientesController extends Controller
{
    public function cliente()
    {

        return view('site.clientes');
    }
    public function store(Request  $request)
    {
        $cliente = new Clientes;

        $cliente->nm = $request->nm;
        $cliente->email = $request->email;
        $cliente->nm_pai = $request->nm_pai;
        $cliente->nm_mae = $request->nm_mae;
        $cliente->dt_nascimento = $request->dt_nascimento;
        $cliente->telefone = $request->telefone;
        $cliente->cpf = $request->cpf;
        $cliente->rg = $request->rg;
        $cliente->cep = $request->cep;
        $cliente->rua = $request->rua;
        $cliente->bairro = $request->bairro;
        $cliente->cidade = $request->cidade;
        $cliente->rm = $request->rm;
        $cliente->uf = $request->uf;
        $cliente->create_at = $request->create_at;

        $cliente->save();

        return redirect('/exib_cliente');
      
    }
}