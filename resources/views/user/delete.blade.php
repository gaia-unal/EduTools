@extends('template.main')

@section('icon')
    <a href="{{ url('/Public') }}">
        <img src="{{ asset('img/Edutools3.png') }}" width="auto" height="89px" alt="Logo book" title="Logo libro">
    </a>
@endsection

@section('title','ELIMINADO')
@if(Session::has('flash_message'))
    <div class="alert alert-success">{{Session::get('flash_message')}}</div>
@endif
@section('content')
    <body>
    <div class="container">
    <h3 class="alert alert-success">
    El contenido se eliminó correctamente
    <a href="{{route('Public.index')}}">Ir al inicio</a>
    </h3>
    </div>
    </body>
@endsection

@section('javascript')

@endsection
