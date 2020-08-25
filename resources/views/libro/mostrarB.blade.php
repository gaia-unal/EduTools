@extends('template.main')
@section('icon')
    <a href="{{ url('/Public') }}">
        <img src="{{ asset('img/verLibro.png') }}" width="auto" height="89px" alt="Logo Q" title="Logo Q">
    </a>
@endsection
@section('title','Libros Creados')

@section('content')

    <body class="cuerpo" >
    <header>
        <style>a{color:#dd4f24}.contenedor{height:0;overflow:hidden;padding-bottom:56.25%;padding-top:30px;position:relative}.contenedor.iframe,nav:before{left:0;position:absolute;top:0}.contenedor.iframe{height:100%;width:100%}header,nav{position:relative}.cuerpo{background:#222d32;color:#444;font-family:georgia;font-size:16px} header{color:#222D32;overflow:hidden;padding:.5em;z-index:1}header .titular{margin:0 65px 0 70px}header .titular .titulo{font-size:22px;font-weight:400;margin:0;padding:0}nav{background:#22bce0;border-left:15px solid #fff}nav:before{border-bottom:20px solid transparent;border-left:7px solid #fff;border-top:20px solid transparent;content:""}nav .menu{height:40px;line-height:20px;margin:0;overflow-x:auto;padding:0;white-space:nowrap}nav .menu li{display:inline-block}nav .menu li:hover{background:#dd4f24}nav .menu li a{color:#fff;display:block;margin:.3em;padding:.2em;text-decoration:none}.principal{padding:.5em}#flipbook .page{background:#efebe9}#flipbook .subt{color:#19db37}#flipbook p{color:#000;text-align:justify;margin:.5em}#flipbook img{width:250px;height:250px;align-items:center;border-radius:4%}#flipbook .hard{background:#02204e;color:#fff;text-align:center}#flipbook .title{color:#e6dcdc}</style>
    </header>
    <section class="principal">
        <div class="options">
            <h3>Tus libros</h3>
            <h4 class="page-header">Estos son los libros que se han creado:</h4>

            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Libro</th>
                    <th>Ver</th>
                    <th>Exportar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($libros as $libro)
                    <tr>
                        <td>{{$libro->id}}</td>
                        <td>{{$libro->titulo}}</td>
                        <td><a href="{{route("Book.libro",$libro->id)}}"><i class="glyphicon glyphicon-eye-open"></i></a>
                        </td>
                        <td>
                            <a href="{{route("Book.exportBook",$libro->id)}}"><i class=" glyphicon glyphicon-export"></i></a>
                        </td>
                        <td>
                            {!!Form::open(['route'=>['Book.deleteBook', $libro->id],'method'=>'delete'])!!}
                            <button type="submit" title="Eliminar" disabled="true" id="Eliminar">
                                <i class="glyphicon glyphicon-trash"></i>
                            </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <br>
        @if (Auth::guest())
            document.getElemtById("Eliminar).disable=false; 
       
        @endif
    </section>

    </body>
@endsection
@section('javascript')
    <script type="text/javascript">

            
    </script>
@endsection
