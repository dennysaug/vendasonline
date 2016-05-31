@extends('layout.site')
@section('cliente', $cliente->nome)
@section('boxtitle', 'Histórico de pedidos');
@section('migalha')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Pedidos
        <small>Consulte seus pedidos</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pedidos</li>
    </ol>
</section>
@stop
@section('conteudo')
    @if($cliente->pedidos->count() > 0)
    <p>Total de pedidos encontrados {{ $cliente->pedidos->count() }}</p>
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Nº Pedido</th>
                <th>Frete</th>
                <th>Pagamento</th>
                <th>Produtos</th>
                <th>Total</th>
                <th class="text-center">Status</th>
            </tr>
            </thead>
            <tbody>

            @foreach($cliente->pedidos as $pedido)
                @if($pedido->produtos->count())
                    <tr>
                        <td><strong>{{ $pedido->id }}</strong></td>
                        <td>{{ (isset($pedido->frete_id) && $pedido->frete_id == 1) ? 'Sedex' : 'PAC' }} : {{ $pedido->valor_frete }}</td>
                        <td>{{ (isset($pedido->forma_pagamento_id) && $pedido->forma_pagamento_id == 1) ? 'Boleto' : 'À Vista' }}</td>
                        <td>
                            <ul>
                                @foreach($pedido->produtos as $produto)
                                    <li>{{ $produto->produto->nome }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{ $pedido->valor_total }}</td>
                        <td style="height: 15px" class="text-center {{ $pedido->status->color }}">{{ $pedido->status->nome }}</td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    @else
        <center>
            <h2>Nenhum pedido localizado</h2>
        </center>
    @endif
@endsection