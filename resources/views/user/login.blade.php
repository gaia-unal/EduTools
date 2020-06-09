

@extends('template.main')
@section('icon')
    <a href="{{ url('/Public') }}">
        <img src="{{ asset('img/Edutools3.png') }}" width="auto" height="89px" alt="Logo Editor" title="Logo Editor">
    </a>
@endsection
@section('title','Edutools')
@section('content')
    @include('messages.errors.login_failed')
    @include('messages.success.registry')

    <div class="well" style="margin-left: 10px">
        <div class="form-group">
            {!! Form::open(['route' => 'log.store','class' => 'form-horizontal col-lg-offset-1', 'method' => 'POST']) !!}
            <legend>Iniciar Sesión</legend>
            <div class="form-group" >
                    {!! Form::text('username',null,['class' => 'form-control col-lg-offset-1', 'placeholder' => 'Username', 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::password('password',['class' => 'form-control col-lg-offset-1', 'placeholder' => 'password', 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Iniciar sesión', ['class' => 'btn btn-primary  col-lg-offset-1']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection

