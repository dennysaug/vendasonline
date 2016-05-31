@extends('layout.site')
@section('cliente', 'Dennys Augustus')
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
            <a href="../../index2.html"><b>Vendas</b>ONLINE</a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Entre com seu login e senha</p>
            <form method="post" action="../../index2.html">
                <div class="form-group has-feedback">
                    <input type="text" placeholder="Email" class="form-control">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" placeholder="Password" class="form-control">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                    </div><!-- /.col -->
                    <div class="col-xs-4">
                        <button class="btn btn-primary btn-block btn-flat" type="submit">Entrar</button>
                    </div><!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a class="btn btn-block btn-social btn-facebook btn-flat" href="#"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
                <a class="btn btn-block btn-social btn-google-plus btn-flat" href="#"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
            </div><!-- /.social-auth-links -->

            <a href="#">Esqueceu a senha</a><br>
            <a class="text-center" href="register.html">Novo Cadastro</a>

        </div><!-- /.login-box-body -->
    </div>
@stop