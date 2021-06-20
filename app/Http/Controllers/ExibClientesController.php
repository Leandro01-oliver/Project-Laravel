<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clientes;

class ExibClientesController extends Controller
{
    public function exibcliente()
    {
        $cliente = Clientes::all();

        return view('site.exib_cliente', ['cliente' => $cliente]);
    }
}