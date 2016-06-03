@extends('layout.site')
@section('cliente', $cliente['nome'])
@section('boxtitle', 'Carrinho')
@section('migalha')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Finalizar Pedido
        <small>Total de itens: {{ $produtos->count() }}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pedido</li>
    </ol>
</section>
@stop

@section('conteudo')
    @if(isset($produtos))
        {!! Form::open(['route' => 'site.pedido.finalizar']) !!}
        <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Produto</th>
                    <th>Serial #</th>
                    <th>Preço</th>
                    <th>Qtd</th>
                    <th>Subtotal</th>
                </tr>
                </thead>
                <tbody>
                @foreach($produtos as $produto)
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ rand(149, 982) . '-' . rand(142,987) . '-' . rand(123,919) }}</td>
                    <td>${{ $produto->valor }}</td>
                    <td>1</td>
                    <td>${{ $produto->valor }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
                <p>SELECIONE A FORMA DE PAGAMENTO</p>

                {!! Form::select('pagamento_id', ['' => 'Selecione', '1' => 'À vista', '2' => 'Boleto', '3' => 'Cartão de crédito'], null, ['class' => 'form-control']) !!}
            </div><!-- /.col -->
            <div class="col-xs-6">
                <p class="lead"></p>
                <div class="table-responsive">
                    <table class="table">
                        <tbody><tr>
                            <th style="width:50%">Subtotal:</th>
                            <td>$250.30</td>
                        </tr>
                        <tr>
                            <th>Frete</th>
                            <td>$10.34</td>
                        </tr>
                        <tr>
                            <th>Desconto:</th>
                            <td>$5.80</td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td>$265.24</td>
                        </tr>
                        </tbody></table>
                </div>
            </div><!-- /.col -->
        </div>
        <div class="row no-print">
            <div class="col-xs-12">
                {!! Form::submit('Fechar Pedido', ['class' => 'btn btn-danger pull-right'])  !!}
            </div>
        </div>
        {!! Form::close() !!}
    @else
        <center><h3>Problema na finalização do seu pedido.</h3></center>
    @endif
@stop