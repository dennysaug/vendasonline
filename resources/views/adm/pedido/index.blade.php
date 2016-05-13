@extends('layout.adm')
@section('conteudo')
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
                        <td>{{ (isset($pedido->forma_pagamento_id) && $pedido->forma_pagamento_id == 1) ? 'Boleto' : 'À Vista' }}</td>
                        <td>
                            <ul>
                                @foreach($pedido->produtos as $produto)
                                    <li>{{ $produto->produto->nome }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{ $pedido->valor_total }}</td>
                        <td class="text-center alert {{ $pedido->status->color }}">{{ $pedido->status->nome }}</td>
                    </tr>
                @endif
            @endforeach
        @endif
        </tbody>
    </table>
@endsection