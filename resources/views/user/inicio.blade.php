@extends('template.main')
@section('icon')
    <a href="{{ url('/Public') }}">
   
        <img src="{{ asset('img/Edutools3.png') }}" width="auto" height="89px" alt="Logo Editor" title="Logo Editor" style=" border-radius: 5.5%">
    </a>
@endsection
@section('title','Edutools')

@section('content')
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <style>
        a{color:#dd4f24}
        .cuerpo{background: #222d32;color:#444;font-family:Georgia;font-size:16px}          
        header{background:#E8E8E8;box-shadow:0 5px rgba(0,0,0,0.2);color:#222D32;overflow:hidden;padding:.5em;position:relative;z-index:1;}
        header .titular{margin:0 65px 0 70px;}  
        header .titular .titulo{font-size:22px;font-weight:normal;margin:0;padding:0}
        nav{background:#22bce0;border-left:15px solid #fff;position:relative;}  
        nav:before{border-bottom:20px solid transparent;border-left:7px solid #fff;border-top:20px solid transparent;content:"";left:0;
            position:absolute;top:0}  
        nav .menu{height:40px;line-height:20px;margin:0;overflow-x:auto;padding:0;white-space:nowrap;}
        nav .menu li{display:inline-block;}
        nav .menu li:hover{background:#dd4f24}
        nav .menu li a{color:#fff;display:block;margin:.3em;padding:.2em;text-decoration:none}
        .principal{padding:.5em;}
        .principal #flipbook .page{border-color: #c9302c;border-style: solid;border-width: medium;background:#4e342e;background:#efebe9;}
        .principal #flipbook .page .sub{color:#22bce0;}
        .principal #flipbook .page .sub:hover{color:#000}  
        .principal #flipbook .page p{background-color:#b2ebf2;text-align:justify;margin:.5em} 
        .principal #flipbook .page img{width:250px;height:250px;align-items:center;border-radius:50%;}
        .principal #flipbook .page img:hover{border-radius:10%}  
        .principal #flipbook .hard{border-color: #c9302c;border-style: solid;order-width: medium;background: #336e73;color:#fff;text-align:center;font-size:40px}
        #page-wrapper{background-color: #fff}
    </style>
</head>

<body class="cuerpo">
<section class="principal">
    <h3 style="text-align: center;"><strong>Bienvenido a la herramienta de autor HTML: EduTools</strong></h3>
    <br>
    <h4 style="text-align:justify">La herramienta EduTools permite a los usuarios crear objetos de aprendizaje con tres diferentes tipos de actividades o contenidos: libros, contenidos web (paginas HTML), cuestionarios de verdadero/falso y cuestionarios de selección múltiple con única respuesta. La herramienta permite almacenar los objetos creados para ser consultados posteriormente y también permite que estos sean exportados en formato HTML sin la necesidad de que el usuario posea conocimientos en programación, el usuario solamente debe tener claro el objetivo educativo de su objeto de aprendizaje y el contenido que desea incluir en el mismo.</h4>
    <h4>Para iniciar selecciona el tipo de contenido a crear, puede ser un <a class="hvr-pulse" href="{{ route('Book.inicioB') }}">libro</a>, un <a class="hvr-pulse"href="{{ route('Contenido.inicioC') }}">contenido web</a> o un <a class="hvr-pulse"href="{{ route('Question.inicioQ') }}">cuestionario</a>, solo necesitas tener lo que deseas utilizar en la creación de estos recursos</h4>
    <br>
    <div>
        <center>
            <a style="margin: 20px; border:2px solid #1489A8; border-radius: 7%; padding-left: 30px; padding-right: 30px; padding-top: 15px; box-shadow: 7px 7px grey;" class="hvr-grow hvr-underline-from-center" href="{{ route('Book.inicioB') }}">
                <img src="{{ asset('img/libro.png') }}" width="auto" height="89px" alt="Logo book" title="Logo book"><br>Crea tu libro
            </a>
            <a style="margin: 20px; border:2px solid #1489A8; border-radius: 7%; padding: 8px; box-shadow: 7px 7px grey" class="hvr-grow hvr-underline-from-center" href="{{ route('Contenido.inicioC') }}">
                <img src="{{ asset('img/editor2.png') }}" width="auto" height="89px" alt="Logo editor" title="Logo editor" ><br>Crea tu contenido web
            </a>
            <a style="margin: 20px; border:2px solid #1489A8; border-radius: 7%; padding: 8px; box-shadow: 7px 7px grey" class="hvr-grow hvr-underline-from-center" href="{{ route('Question.inicioQ') }}">
                <img src="{{ asset('img/questionario.png') }}" width="auto" height="89px" alt="Logo Cuestionario" title="Logo Q"><br>Crea tu cuestionario
            </a>
        </center>
    </div>
</section>
</body>

@endsection

@section('javascript')
    <script>

    </script>
@endsection