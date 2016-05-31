<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Pedido;
use App\Status;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index(Request $request)
    {
        $paginate = false;
        if($request->isMethod('post')) {
            $input = $request->except('_token');
            $pedidos = Pedido::filtro($input)->orderBy('pedidos.created_at', 'desc')->get();
        } else {
            $paginate = true;
            $pedidos = Pedido::paginate(50);
        }

        $status = Status::all()->lists('nome', 'id')->toArray();
        $data = ['pedidos', 'status', 'paginate'];
        return view('adm.pedido.index', compact($data));
    }

}
