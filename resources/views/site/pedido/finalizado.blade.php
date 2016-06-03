@extends('layout.site')
@section('cliente', $cliente['nome'])
@section('boxtitle', 'Pedido Nº ' . $pedido->id)
@section('migalha')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Pedido Finalizado
        {{--<small></small>--}}
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pedido</li>
    </ol>
</section>
@stop

@section('conteudo')
        <div class="login-box-body">
            <div class="alert alert-success text-center">
                <i class="fa fa-check fa-3x"></i><h1>Pedido finalizado com sucesso!</h1>
            </div>
        </div><!-- /.login-box-body -->

@stop