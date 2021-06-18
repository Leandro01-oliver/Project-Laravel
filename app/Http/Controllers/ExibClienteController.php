<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  APP\Models\Tb_Cliente;

class ExibClienteController extends Controller
{
    public function exibclientes()
    {
        $tb_cliente =  Tb_Cliente::all();

        return view('api.site.exib_cliente' . ['tb_cliente' => $tb_cliente]);
    }
}
