<div class="col-md-6">
    <!-- general form elements disabled -->
    <div class="box box-warning">
        <div class="box-header">
            <h3 class="box-title">Filtro</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            {!! Form::model(isset($input)?$input:null, ['route' => 'adm.pedido.index', 'role' => 'form']) !!}
            <div class="form-group">
                {!! Form::label('id', 'Nº Pedido') !!}
                {!! Form::text('id', null, ['class' => 'form-control']) !!}
            </div>
            {{--<div class="form-group">--}}
                {{--{!! Form::label('cliente', 'Cliente') !!}--}}
                {{--{!! Form::text('cliente', null, ['class' => 'form-control']) !!}--}}
            {{--</div>--}}
            <div class="form-group">
                {!! Form::label('status', 'Status') !!}
                {!! Form::select('status_id', ['' => 'Selecione']+$status, null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Buscar', ['class' => 'btn btn-lg bg-light-blue-active'])  !!}
            </div>
            {!! Form::close() !!}
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>