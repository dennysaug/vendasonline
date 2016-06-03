<?php

namespace App\Http\Controllers\Site;

use App\Cliente;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login.index');
    }

    public function login(Request $request)
    {
        $input = $request->except('_token');
        $cliente = Cliente::where('email', $input['email'])
                          ->where('password', $input['password'])
                          ->first();

        if(isset($cliente) && $cliente) {
            session(['cliente' => $cliente->toArray()]);
            return redirect()->route('site.pedido.finalizar');
        }

        session()->flash('msg','Usuário e/ou senha inválidos.');
        return redirect()->back();
    }
}
