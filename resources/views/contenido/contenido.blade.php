@extends('template.main')

@section('icon')
    <a href="{{ url('/Public') }}">
        <img src="{{ asset('img/Edutools1.png') }}" width="auto" height="89px" alt="Logo Contenido" title="Logo Contenido"style="border-radius: 10%">
    </a>
@endsection

@section('title','Contenido')
@if(Session::has('flash_message'))
    <div class="alert alert-success">{{Session::get('flash_message')}}</div>
@endif
@section('content')

    <body class="cuerpo" >
    <header>
        <style>.principal{margin-left: 10px;padding-top: 10px;}</style>
    </header>
    <section class="principal">
        <div>
            @foreach($contenidos as $contenido)
                <h3>{!!$contenido->titulo!!}</h3>
                <div>{!!$contenido->contenido!!}</div>
            @endforeach
        </div>
    </section>

    </body>
@endsection

@section('javascript')
    <script type="text/javascript">

    </script>
@endsection
