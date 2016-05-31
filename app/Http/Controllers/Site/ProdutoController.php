<?php

namespace App\Http\Controllers\Site;

use App\Produto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;

class ProdutoController extends Controller
{

    public function index()
    {
        $produtos = Produto::all();
        return view('site.produto.index', compact('produtos'));
    }

}
