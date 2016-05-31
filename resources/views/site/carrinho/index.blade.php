@extends('layout.site')
@section('cliente', 'Dennys Augustus')
@section('boxtitle', 'Carrinho')
@section('migalha')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Carrinho
        <small>finalizar compra</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Carrinho</li>
    </ol>
</section>
@stop

@section('conteudo')
    @if(isset($produtos))
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
                <p class="lead">Formas de Pagamento:</p>
                <img alt="Visa" src="/dist/img/credit/visa.png">
                <img alt="Mastercard" src="/dist/img/credit/mastercard.png">
                <img alt="American Express" src="/dist/img/credit/american-express.png">
                <img alt="Paypal" src="/dist/img/credit/paypal2.png">
                <p style="margin-top: 10px;" class="text-muted well well-sm no-shadow">
                    Compra realiza via cartão de crédito aprovação será mediante análise no prazo de 2 (dois) dias uteis.
                </p>
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
                <a class="btn btn-default" target="_blank" href="javascript:print();"><i class="fa fa-print"></i> Imprimir</a>
                <a href="{{ route('site.login.index') }}" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Finalizar Pedido</a>
            </div>
        </div>
    @else
        <center><h3>Nenhum produto adicionado ao carrinho.</h3></center>
    @endif
@stop