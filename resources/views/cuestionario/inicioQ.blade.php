@extends('template.main')
@section('icon')
    <a href="{{ url('/Public') }}">
        <img src="{{ asset('img/questionario.png') }}" width="40%" height="90px" alt="Logo Q" title="Logo Q">
    </a>
@endsection
@section('title','QuestionarioHome')

@section('content')

    <body class="cuerpo" >
    <header>
        <style>a{color:#dd4f24}.cuerpo{background: #222d32;color:#444;font-family:georgia;font-size:16px} header{color:#222D32;overflow:hidden;padding:.5em;position:relative;z-index:1;}  header .titular{margin:0 65px 0 70px;}  header .titular .titulo{font-size:22px;font-weight:normal;margin:0;padding:0}  nav{background:#22bce0;border-left:15px solid #fff;position:relative;}  nav:before{border-bottom:20px solid transparent;border-left:7px solid #fff;border-top:20px solid transparent;content:"";left:0;position:absolute;top:0}  nav .menu{height:40px;line-height:20px;margin:0;overflow-x:auto;padding:0;white-space:nowrap;}  nav .menu li{display:inline-block;}  nav .menu li:hover{background:#dd4f24}  nav .menu li a{color:#fff;display:block;margin:.3em;padding:.2em;text-decoration:none}  .principal{padding:.5em;}  .principal #flipbook .page{border-color: #c9302c;border-style: solid;border-width: medium;background:#4e342e;background:#efebe9;}  .principal #flipbook .page .sub{color:#22bce0;}  .principal #flipbook .page .sub:hover{color:#000}  .principal #flipbook .page p{background-color:#b2ebf2;text-align:justify;margin:.5em}  .principal #flipbook .page img{width:250px;height:250px;align-items:center;border-radius:50%;}  .principal #flipbook .page img:hover{border-radius:10%}  .principal #flipbook .hard{border-color: #c9302c;border-style: solid;order-width: medium;background: #336e73;color:#fff;text-align:center;font-size:40px}</style>
    </header>
    <section class="principal">
        <div class="options">
            <h2 style="text-align: center"><strong>Bienvenido al creador de cuestionarios</strong></h2>
            <br>
            <h4>Acá puedes crear tus recursos educativos en forma de Cuestionarios, para iniciar es recomendable que tengas definido el tema que quieres poner en el cuestionario al igual que una idea del contenido de las preguntas</h4>
            <br>
            <div class="contenedor">
                <center>
                    {!! Embed::make('https://youtu.be/AKnhoKxF0Tw')->parseUrl()->getIframe()!!}
                </center>
            </div>
            <center>
                <a class="hvr-bounce-in" href="{{ route('Question.crear') }}">
                    <img src="{{ asset('img/questionario.png') }}" width="auto" height="89px" alt="Logo Cuestionario" title="Logo Q">
                    <br>Crea tu Cuestionario
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
