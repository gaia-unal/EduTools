@extends('template.main')
@section('icon')
    <a href="{{ url('/Public') }}">
        <img src="{{ asset('img/editor2.png') }}" width="auto" height="89px" alt="Logo Editor" title="Logo editor"style="background-color: ghostwhite; border-radius: 10%">
    </a>
@endsection
@section('title','ContentCreator')

@section('content')
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>editor</title>
    <style>
        a{color:#dd4f24}
        .cuerpo{background: #222d32;color:#444;font-family:georgia;font-size:16px} 
        header{color:#222D32;overflow:hidden;padding:.5em;position:relative;z-index:1;}  
        header .titular{margin:0 65px 0 70px;}  
        header .titular .titulo{font-size:22px;font-weight:normal;margin:0;padding:0}  
        nav{background:#22bce0;border-left:15px solid #fff;position:relative;}  nav:before{border-bottom:20px solid transparent;border-left:7px solid #fff;border-top:20px solid transparent;content:"";left:0;position:absolute;top:0}  nav .menu{height:40px;line-height:20px;margin:0;overflow-x:auto;padding:0;white-space:nowrap;}  nav .menu li{display:inline-block;}  nav .menu li:hover{background:#dd4f24}  nav .menu li a{color:#fff;display:block;margin:.3em;padding:.2em;text-decoration:none}  .principal{padding:.5em;}  .principal #flipbook .page{border-color: #c9302c;border-style: solid;border-width: medium;background:#4e342e;background:#efebe9;}  .principal #flipbook .page .sub{color:#22bce0;}  .principal #flipbook .page .sub:hover{color:#000}  .principal #flipbook .page p{background-color:#b2ebf2;text-align:justify;margin:.5em}  .principal #flipbook .page img{width:250px;height:250px;align-items:center;border-radius:50%;}  .principal #flipbook .page img:hover{border-radius:10%}  .principal #flipbook .hard{border-color: #c9302c;border-style: solid;order-width: medium;background: #336e73;color:#fff;text-align:center;font-size:40px}</style>

</head>

<body class="cuerpo">
    <section class="principal">
        <h2 style="text-align: center;"><strong> Bienvenido al creador de contenido</strong></h2>
        <br>
        <h4>Para iniciar a crear tu página te recomendamos tener preparado el contenido que quieras insertar en ella</h4>
        <h4>Recuerda que puedes utilizar imagenes y videos que muestren lo que quieres compartir.</h4>
       
        <div class="contenedor">
            <center>
                {!! Embed::make('https://youtu.be/h7nYXyQZkR0')->parseUrl()->getIframe()!!}
            </center>
        </div>
        <center>
            <a class="hvr-bounce-in" href="{{ route('Contenido.creador') }}">
                <img src="{{ asset('img/editor2.png') }}" width="auto" height="89px" alt="Logo editor" title="Logo editor">
                <br>Crea tu contenido web
            </a>
        </center>

    </section>
</body>
@endsection
@section('javascript')
    <script>
    </script>
@endsection