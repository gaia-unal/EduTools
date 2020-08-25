@extends('template.main')
@section('icon')
    <a href="{{ url('/Public') }}">
        <img src="{{ asset('img/libro2.png') }}" width="auto" height="89px" alt="Logo libro" title="Logo libro"style="background-color: ghostwhite; border-radius: 10%">
    </a>
@endsection
@section('title','EditorBook')
@if(Session::has('flash_message'))
    <div class="alert alert-success">{{Session::get('flash_message')}}</div>
@endif
@section('content')

    <body class="cuerpo" >
    <header>
        <style>
            a{color:#dd4f24}
            .contenedor{heigth:0;overflow:hidden;padding_bottom:56.25%;paddong-top:30px;position:relative}
            .contenedor.iframe,nav:before{left:0;position:absolute;top:0}
            .contenedor.iframe{height:100%;width:100%}header,nav{position:relative}
            .cuerpo{background:#222d32;color:#444;font-family:georgia;font-size:16px}
            header{color:#222D32;overflow:hidden;/*padding*/:.5em;position: relative; z-index:1;}
            header .titular{margin:0 65px 0 70px}
            header .titular .titulo{font-size:22px;font-weight:400;margin:0;padding:0}
            nav{background:#22bce0;border-left:15px solid #fff}nav:before{border-bottom:20px solid transparent;border-left:7px solid #fff;border-top:20px solid transparent;content:""}nav .menu{height:40px;line-height:20px;margin:0;overflow-x:auto;padding:0;white-space:nowrap}nav .menu li{display:inline-block}nav .menu li:hover{background:#dd4f24}nav .menu li a{color:#fff;display:block;margin:.3em;padding:.2em;text-decoration:none}.principal{padding:.5em}.principal #flipbook .page{border-color:#0f3875;border-style:solid;border-width:medium;background:#efebe9}.principal #flipbook .page .sub{color:#22bce0}.principal #flipbook .page .sub:hover{color:#000}.principal #flipbook .page p{text-align:justify;margin:.5em}.principal #flipbook .page img{width:250px;height:250px;align-items:center;border-radius:85%}.principal #flipbook .hard{border-color:#c9302c;border-style:solid;border-width:medium;background:#336e73;color:#fff;text-align:center}</style>
    </header>
    <section class="principal">
        <div class="options">
            <h2 style="text-align: center;"><strong>Bienvenido al creador de libro</strong></h2>
            <br>
            <h4>Acá puedes crear tus recursos educativos en forma de libro, para iniciar es recomendable que tengas definido el tema que quieres poner en el libro, como el contenido que va a tener el libro</h4>
            <h4>Debes seleccionar el tipo de contenido, la página e insertar el contenido.</h4>
            <div class="contenedor">
                <center>
                    {!! Embed::make('https://youtu.be/nkDGrcEFajk')->parseUrl()->getIframe()!!}
                </center>
            </div>
            
            <center>
                <a class="hvr-bounce-in" href="{{ route('Book.crear') }}">
                    <img src="{{ asset('img/libro.png') }}" width="auto" height="89px" alt="Logo book" title="Logo book">
                    <br>Crea tu libro
                </a>
            </center>

        </div>
        <br>

    </section>
    </body>
@endsection
@section('javascript')
    <script type="text/javascript">
    </script>
@endsection
