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
       var correctas = 0;
var pregun=0;
var nota;

function validaP(nombre){
	var elementos = document.getElementById(nombre).elements;
	var longitud = document.getElementById(nombre).length;
	for (var i = 0; i < longitud; i++) {
		if (elementos[i].name == nombre && elementos[i].type == "radio" && elementos[i].checked == true) {
			return elementos[i].value;
		}
	}
	return -1;
}

jQuery(document).ready(function($) {
      
      $("#verificar").click(function() {
        var band=true;
        $("#elcuestionario form").each(function (index){
          indice = index+1;
          var radioP = $("#pre"+indice).attr("opcion");
          if(radioP=="multiplex"){
            if(band){
              band=false;
              $('input[min="1"]').each(function (itera){
                iter = itera+1;
                var op = $("#op"+iter).attr("opcion");
                var val=$("#op"+iter).val();

                // alert(op+"--"+val);
                if(op==val && op!=undefined){
                  correctas +=1;
                }else{
                  $("#pre"+iter).css("background-color","#FF9E80");
                }
                if(op!=undefined ){pregun+=1;}
              });
            }
            pregun-=1;
          }else{
            var radioU = validaP("pre"+indice);
            if(radioU==radioP){
              $("#pre"+indice).css("background-color","#CCFF90");
              correctas +=1;
            }else{
              $("#pre"+indice).css("background-color","#FF9E80");
            }
          }
          pregun+=1;
        });
        nota = correctas * (5 / pregun); 
        alert("Cantidad de preguntas: "+pregun+"\nPreguntas correctas: "+ correctas+"\nNota: "+nota);
        correctas = 0;
        pregun=0;
      }); 
});

    </script>
@endsection
