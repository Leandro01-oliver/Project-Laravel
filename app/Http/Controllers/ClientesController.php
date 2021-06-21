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
        $clientes = new Clientes;

        $clientes->nm                = $request->nm;
        $clientes->email             = $request->email;
        $clientes->nm_pai            = $request->nm_pai;
        $clientes->nm_mae            = $request->nm_mae;
        $clientes->dt_nascimento     = $request->dt_nascimento;
        $clientes->telefone          = $request->telefone;
        $clientes->cpf               = $request->cpf;
        $clientes->rg                = $request->rg;
        $clientes->cep               = $request->cep;
        $clientes->rua               = $request->rua;
        $clientes->bairro            = $request->bairro;
        $clientes->cidade            = $request->cidade;
        $clientes->rm                = $request->rm;
        $clientes->uf                = $request->uf;
        $clientes->created_at         = $request->created_at;



        $clientes->save();

        return redirect('/exib_cliente');
    }
}