<?php

namespace App\Http\Controllers\Site;

use App\Cliente;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class ClienteController extends Controller
{
    public function pedidos(Cliente $cliente)
    {
        return view('site.cliente.pedidos', compact('cliente'));
    }
}
