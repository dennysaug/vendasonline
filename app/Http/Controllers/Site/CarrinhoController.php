<?php

namespace App\Http\Controllers\Site;

use App\Produto;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CarrinhoController extends Controller
{
    public function index(Request $request)
    {
        $produtos_id = $request->input('produto_id');
        session(['produtos' => $produtos_id]);

        $produtos = Produto::whereIn('id', $produtos_id)->get();

        return view('site.carrinho.index', compact('produtos'));

    }
}
