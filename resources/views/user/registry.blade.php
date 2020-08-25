@extends('template.main')

@section('icon')
    <a href="{{ url('/Public') }}">
        <img src="{{ asset('img/Edutools3.png') }}" width="auto" height="89px" alt="Logo Editor" title="Logo Editor">
    </a>
@endsection

@section('title','Registro')

@section('content')
    {{-- @include('messages.errors.errors')--}}

        <style>
        a{color:#dd4f24}
        .cuerpo{background: #222d32;color:#444;font-family:Georgia;font-size:16px}          
        header{color:#222D32;overflow:hidden;padding:.5em;position:relative;z-index:1;}
        header .titular{margin:0 65px 0 70px;}
        #page-wrapper{background-color: #fff}
    </style>
    
        <body class="cuerpo">
        <div class="well" style="margin-left: 10px">
            <div class="form-group">
                {!! Form::open(['route' => 'Store.store', 'class' => 'form-horizontal col-lg-offset-1','method' => 'POST']) !!}
                <legend>Registro</legend>
                <div class="form-group">
                    {!! Form::text('name',null,['class' => 'form-control col-lg-offset-1', 'placeholder' => 'Nombre completo']) !!}
                </div>

                <div class="form-group">
                    {!! Form::text('username',null,['class' => 'form-control col-lg-offset-1', 'placeholder' => 'Username']) !!}
                </div>

                <div class="form-group">
                    {!! Form::text('email',null,['class' => 'form-control col-lg-offset-1', 'placeholder' => 'example@gmail.com']) !!}
                </div>

                <div class="form-group">
                    {!! Form::password('password1',['class' => 'form-control col-lg-offset-1', 'placeholder' => 'password']) !!}
                </div>

                <div class="form-group">
                    {!! Form::password('password2',['class' => 'form-control col-lg-offset-1', 'placeholder' => 'confirmar password']) !!}
                </div>

                <div class="form-group">

                    {!! Form::submit('Registrarse', ['class' => 'btn btn-primary btn-info pull-right col-lg-offset-1']) !!}

                </div>
                {!! Form::close() !!}
            </div>
        </div>
</body>
@endsection

