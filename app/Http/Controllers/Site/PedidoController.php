<?php

namespace App\Http\Controllers\Site;

use App\Pedido;
use App\PedidoProduto;
use App\Produto;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PedidoController extends Controller
{
    public function finalizar()
    {
        $produtos_id = session('produtos');
        $cliente = session('cliente');
        $produtos = Produto::whereIn('id', $produtos_id)->get();
        $data = ['cliente', 'produtos'];
        return view('site.pedido.index', compact($data));
    }

    public function finalizado(Request $request)
    {
        $input = $request->except('_token');
        $produtos_id = session('produtos');
        $cliente = session('cliente');

        $produtos = Produto::whereIn('id', $produtos_id)->get();

        if(isset($produtos)) {

            $pedido = Pedido::create([
                'status_id' => 1,
                'cliente_id' => $cliente['id'],
                'frete_id' => rand(1,2),
                'forma_pagamento_id' => $input['pagamento_id'],
                'valor_frete' => rand(10, 30)/3,
                'valor_total' => rand(300,999)/3
            ]);

            foreach($produtos as $produto) {
                PedidoProduto::create([
                    'cliente_id' => $cliente['id'],
                    'pedido_id' => $pedido->id,
                    'produto_id' => $produto->id,
                    'valor' => $produto->valor,
                    'qtd' => rand(1,3)
                ]);
            }
        }

        $data = ['cliente', 'pedido'];

        return view('site.pedido.finalizado', compact($data));




    }
}
