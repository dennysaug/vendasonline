@extends('layout.adm')
@section('total', 'Total de pedidos encontrados ' . $pedidos->count())
@section('conteudo')

    @include('includes.filtro')

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Nº Pedido</th>
            <th>Cliente</th>
            <th>Frete</th>
            <th>Pagamento</th>
            <th>Produtos</th>
            <th>Total</th>
            <th class="text-center">Status</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($pedidos))
            @foreach($pedidos as $pedido)
                @if($pedido->produtos->count())
                    <tr>
                        <td><strong>{{ $pedido->id }}</strong></td>
                        <td>{{ $pedido->cliente->nome }}</td>
                        <td>{{ (isset($pedido->frete_id) && $pedido->frete_id == 1) ? 'Sedex' : 'PAC' }} : {{ $pedido->valor_frete }}</td>
                        <td>{{ $pedido->forma_pagamento_id }}</td>
                        <td>
                            <ul>
                                @foreach($pedido->produtos as $produto)
                                    <li>{{ $produto->produto->nome }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{ $pedido->valor_total }}</td>
                        <td class="text-center {{ $pedido->status->color }}">{{ $pedido->status->nome }}</td>
                    </tr>
                @endif
            @endforeach
        @endif
        </tbody>
        @if($paginate)
            <tr>
                <td>
                    <div class="pull-right">
                        {!! $pedidos->render() !!}
                    </div>
                </td>
            </tr>
        @endif
    </table>

@endsection