@extends('layout.site')
@section('cliente', 'Dennys Augustus')
@section('boxtitle', 'Lista de Produtos');
@section('migalha')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Produtos
        <small>Selecione os produtos</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Produtos</li>
    </ol>
</section>
@stop

@section('conteudo')
    @if(isset($produtos))
    {!! Form::open(['route' => 'site.carrinho.index', 'class' => 'form-horizontal']) !!}
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th></th>
                <th>Produto</th>
                <th>Valor</th>
            </tr>
            </thead>
            <tbody>
            @foreach($produtos as $produto)
                <tr>
                    <td>{!! Form::checkbox('produto_id[]', $produto->id, null) !!}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->valor }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    <div class="clearfix"></div>
    <div class="col-lg-6">
        {!! Form::submit('Comprar', ['class' => 'btn btn-primary pull-right']) !!}
    </div>
    {!! Form::close() !!}
    <br/><br/>
    @else
        <center>
            <h2>Nenhum produto localizado</h2>
        </center>
    @endif
@endsection