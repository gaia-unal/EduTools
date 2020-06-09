@extends('template.main')

@section('icon')
    <a href="{{ url('/Public') }}">
        <img src="{{ asset('img/questionario.png') }}" width="auto" height="89px" alt="Logo book" title="Logo libro">
    </a>
@endsection

@section('title','Questionario')
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
            @foreach($cuestionarios as $pregunta)
                <h3>Cuestionario #{!!$pregunta->id!!}</h3>
                {!!$pregunta->contenido!!} @endforeach
        </div>
    </section>

    </body>
@endsection

@section('javascript')
    <script type="text/javascript">
        $(document).ready(function() {
            function validaP(formulario, nombre){
                elementos = document.getElementById(formulario).elements;
                longitud = document.getElementById(formulario).length;
                for (var i = 0; i < longitud; i++) {
                    if (elementos[i].name == nombre && elementos[i].type == "radio" && elementos[i].checked == true) {
                        return elementos[i].value;
                    }
                }
                return null;
            };

            $("#verificar").click(function() {
                var correctas = 0;
                $("#elcuestionario form").each(function (index)
                {
                    indice = index+1;
                    var radioU = validaP("pre"+indice, "pre"+indice);
                    var radioP = $("#pre"+indice).attr("opcion");
                    if(radioU==radioP)
                    {
                        $("#pre"+indice).css("background-color","#CCFF90");
                        correctas +=1;
                    }
                    else
                    {
                        $("#pre"+indice).css("background-color","#FF9E80");

                    }

                });
                alert("Preguntas correctas: "+ correctas);

            }); //verificar2
        });//ready
    </script>
@endsection
