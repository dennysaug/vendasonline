<?php

namespace App\Http\Controllers\Adm;

use App\Pedido;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return view('adm.pedido.index', compact('pedidos'));
    }

}
