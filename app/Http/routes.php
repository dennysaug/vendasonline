<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get', 'post'], '/adm/pedido', [
    'as' => 'adm.pedido.index',
    'uses' => 'Adm\PedidoController@index'
]);

Route::get('pedidos/{cliente?}', [
    'as' => 'site.cliente.pedidos',
    'uses' => 'Site\ClienteController@pedidos'
]);

Route::get('produtos', [
    'as' => 'site.produto.index',
    'uses' => 'Site\ProdutoController@index'
]);

Route::post('carrinho', [
    'as' => 'site.carrinho.index',
    'uses' => 'Site\CarrinhoController@index'
]);

Route::get('login', [
    'as' => 'site.login.index',
    'uses' => 'Site\LoginController@index'
]);

Route::post('login', [
    'as' => 'site.login.index',
    'uses' => 'Site\LoginController@login'
]);

Route::get('pedido/finalizar', [
    'as' => 'site.pedido.finalizar',
    'uses' => 'Site\PedidoController@finalizar'
]);

Route::post('pedido/finalizar', [
    'as' => 'site.pedido.finalizar',
    'uses' => 'Site\PedidoController@finalizado'
]);