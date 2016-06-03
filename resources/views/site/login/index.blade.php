@extends('layout.site')
{{--@section('cliente', 'Dennys Augustus')--}}
@section('boxtitle', 'Login')
@section('migalha')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Login
        <small>entre com seu login e senha</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Login</li>
    </ol>
</section>
@stop

@section('conteudo')
    <div class="login-box">
        <div class="login-logo">
            <b>Vendas</b>ONLINE
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <i class="fa fa-fw fa-exclamation-triangle"></i>
            @if(session()->has('msg'))
                <div class="alert alert-warning"><i class="fa fa-fw fa-exclamation-triangle"></i>{{ session('msg') }}</div>
            @endif

            <p class="login-box-msg">Entre com seu login e senha</p>
            {!! Form::open() !!}
                <div class="form-group has-feedback">
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail']) !!}
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Senha']) !!}
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        <button class="btn btn-primary btn-block btn-flat" type="submit">Entrar</button>
                    </div><!-- /.col -->
                </div>
            {!! Form::close() !!}

            <div class="social-auth-links text-center">
                <p>- OU -</p>
                <a class="btn btn-block btn-social btn-facebook btn-flat" href="#"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
                <a class="btn btn-block btn-social btn-google-plus btn-flat" href="#"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
            </div><!-- /.social-auth-links -->

            <a href="#">Esqueceu a senha</a><br>
            <a class="text-center" href="register.html">Novo Cadastro</a>

        </div><!-- /.login-box-body -->
    </div>
@stop