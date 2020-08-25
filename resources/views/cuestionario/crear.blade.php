@extends('template.main')
@section('icon')
    <a href="{{ url('/Public') }}">
        <img src="{{ asset('img/questionario.png') }}" width="auto" height="89px" alt="Logo Q" title="Logo Q">
    </a>
@endsection
@section('title','Questionario')

@section('content')

    <body class="cuerpo" >
    <header>
        <style>a{color:#dd4f24}.cuerpo{background: #222d32;color:#444;font-family:georgia;font-size:16px} header{color:#222D32;overflow:hidden;padding:.5em;position:relative;z-index:1;}  header .titular{margin:0 65px 0 70px;}  header .titular .titulo{font-size:22px;font-weight:normal;margin:0;padding:0}  nav{background:#22bce0;border-left:15px solid #fff;position:relative;}  nav:before{border-bottom:20px solid transparent;border-left:7px solid #fff;border-top:20px solid transparent;content:"";left:0;position:absolute;top:0}  nav .menu{height:40px;line-height:20px;margin:0;overflow-x:auto;padding:0;white-space:nowrap;}  nav .menu li{display:inline-block;}  nav .menu li:hover{background:#dd4f24}  nav .menu li a{color:#fff;display:block;margin:.3em;padding:.2em;text-decoration:none}  .principal{padding:.5em;}  .principal #flipbook .page{border-color: #c9302c;border-style: solid;border-width: medium;background:#4e342e;background:#efebe9;}  .principal #flipbook .page .sub{color:#22bce0;}  .principal #flipbook .page .sub:hover{color:#000}  .principal #flipbook .page p{background-color:#b2ebf2;text-align:justify;margin:.5em}  .principal #flipbook .page img{width:250px;height:250px;align-items:center;border-radius:50%;}  .principal #flipbook .page img:hover{border-radius:10%}  .principal #flipbook .hard{border-color: #c9302c;border-style: solid;order-width: medium;background: #336e73;color:#fff;text-align:center;font-size:40px}</style>
    </header>
    <section class="principal">
        <div class="options">

            <h3>Seleccione el tipo de pregunta a agregar</h3>
            <input type="button" class="btn btn-primary" id="vf" value="Verdadero/Falso">
            <input type="button" class="btn btn-primary" id="selmul" value="Selección Múltiple">
            <input type="button" class="btn btn-primary" id="aso" value="Asociación">
            <input type="button" class="btn btn-warning" id="btRemove" value="Eliminar Elemento" class="bt" />
            <input type="button" class="btn btn-danger" id="btRemoveAll" value="Eliminar Todo" class="bt" />
            <br />

        </div>
        <br>
        <div id="qvf" style="display: none;border: solid; border-color: #a3bde3">

                Crearas una pregunta de verdadero falso, escribe la pregunta y selecciona la respuesta correcta
                <br>
                <section id="questionVF">

                        <textarea class="con_pre" id="textoVF" type="text" rows="2" cols="50" style="max-height: 6.4em; max-width: 300px;" placeholder="Digite la pregunta a agregar!"></textarea>
                        <br>
                        <form id="opcionVF" action="">
                            <input type="radio" id="true" name="tf" value="true">
                            <label for="true">Verdadero</label>
                            <br>
                            <input type="radio" id="false" name="tf" value="false">
                            <label for="false">Falso</label>
                            <br>
                        </form>
                        <input class="guardar btn btn-info" id="guardarVF" type="button" value="Guardar">

                </section>

        </div>
        <div id="qsm" style="display: none; border: solid; border-color:lightsteelblue">
            Esta es una pregunta de de selección múltiple
            <br>
            <form name="form_SM">
                <section id="artisanquestionSM">
                    <textarea class="con_pre" id="textoSM" type="text" rows="2" cols="50" style="max-height: 6.4em; max-width: 300px;" placeholder="Digite la pregunta a agregar!"></textarea>
                    <br>
                    <textarea class="con_pre" id="textoOptSM" type="text" rows="1" cols="25" style="max-height: 6.4em; max-width: 300px;" placeholder="Digite la opción a agregar!"></textarea>
                    <br>
                </section>
            </form>
            <form id="questionOpciones">

            </form>


            </form>
            <input type="button" class="btn btn-default" id="opc" value="Opción">
            <br>
            <!--<input type="button" value="elim"> <br>-->
            <input class="guardar btn btn-info" id="guardarSM" type="button" value="Guardar">
        </div>

        <div id="qaso" style="display: none; border: solid; border-color:lightsteelblue">
            Asociación de conceptos 
            <br>
            <form name="form_AS">
                <section id="questionAS">
                <textarea class="con_pre" id="concepto" type="text" rows="1" cols="25" style="max-height: 6.4em; max-width: 300px;" placeholder="Digite el concepto a agregar!"></textarea>
                <br>
                <textarea class="con_pre" id="significado" type="text" rows="2" cols="50" style="max-height: 6.4em; max-width: 300px;" placeholder="Digite el significado a agregar!"></textarea>
                <br>
                </section>
            </form>

            <form id="opcionesAS"></form>

            <input type="button" class="btn btn-default" id="ag" value="Agregar">
            <br>
            <input class="guardar btn btn-info" id="guardarAS" type="button" value="Guardar">
        </div>
        
    </section>


    <section id="cuestionario" style="border-style: groove; border-radius: 5px;">
        <div id="elcuestionario"></div>
    </section>

    {!! Form::open(['route' => 'Store.pregunta', 'method' => 'POST', 'id' => 'form_pregunta', 'class'=>'form-horizontal']) !!}
    <div class="form-group">
        <h4 style="margin-left: 19px">Título del cuestionario:</h4>
        <input type="text" id="titulo" name="titulo" required>
        <br><br>
        <input type="hidden" name="_method" value="POST">
        {!! Form::text('contenido',null,['class' => 'form-horizontal form-control col-lg-offset-1','id' => 'kontenido','style'=>'display:none;']) !!}
        <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
    </div>
    <button type="submit" class="btn btn-success" value="Guardar" id="guardar">Guardar</button>
    {!! Form::close() !!}
    </body>
@endsection @section('javascript')
    <script type="text/javascript">
        $(document).ready(function() {
            //Mostrar o no
            $('#vf').on('click', function(event) {
                $('#qvf').toggle('show');
                $('#qsm').hide();
                $('#qaso').hide();
                $('#qop').hide();  //no existe
            });
            $('#selmul').on('click', function(event) {
                $('#qsm').toggle('show');
                $('#qvf').hide();
                $('#qaso').hide();
                $('#qop').hide(); //no existe
            });
            $('#aso').on('click', function(event) {
                $('#qaso').toggle('show');
                $('#qsm').hide();
                $('#qvf').hide();
                $('#qop').hide(); //no existe
            });

            var p = 0;

            //Guarda pregunta Verdadero Falso
            $("#guardarVF").click(function() {
                if (p <= 9) {
                    p++;
                    pregunta = "pre" + p;
                    var contenido = $('textarea[id=textoVF]').val();
                    console.log("Esta pregunta es: " + contenido);
                    var opt_vf = obtenerRadioSeleccionado("opcionVF", "tf");

                    if(opt_vf=="true"){
                        $("#elcuestionario").append('<form class="pregunta" opcion="true" id="' + pregunta + '" style="border-style: solid; border-color: #acb4b6; border-radius: 10px;"><p class="q" >' + contenido + '</p>' + '<input type="radio" id="true' + p + '" name="pre' + p + '" value="true">' + '<label for="true' + p + '">' + 'Verdadero' + '</label>' + '<br>' + '<input type="radio" id="false' + p + '" name="pre' + p + '" value="false">' + '<label for="false' + p + '">' + 'Falso' + '</label></form>' + '<br>');}
                    else if(opt_vf=="false") {
                        $("#elcuestionario").append('<form class="pregunta" opcion="false" id="' + pregunta + '" style="border-style: solid; border-color: #acb4b6; border-radius: 10px;"><p class="q" >' + contenido + '</p>' + '<input type="radio" id="true' + p + '" name="pre' + p + '" value="true">' + '<label for="true' + p + '">' + 'Verdadero' + '</label>' + '<br>' + '<input type="radio" id="false' + p + '" name="pre' + p + '" value="false">' + '<label for="false' + p + '">' + 'Falso' + '</label></form>' + '<br>');}
                        else {alert("Seleccione una respuesta");
                            p--;
                            }
                    //$("#cuestionario").append('<section class="pregunta" id="' + pregunta + '" style="border-style: solid; border-color: #acb4b6"><p class="q" >' + contenido + '</p>' + '<input type="radio" id="true' + p + '" name="ft' + p + '" value="true">' + '<label for="true' + p + '">' + 'Verdadero' + '</label>' + '<br>' + '<input type="radio" id="false' + p + '" name="ft' + p + '" value="false">' + '<label for="false' + p + '">' + 'Falso' + '</label></section>' + '<br>');
                    $("#textoVF").val("");
                } else { //se establece un limite para añadir elementos, 10 es el limite
                    $("#elcuestionario").append('<label id="limit">Limite Alcanzado</label>');
                    $('#vf').attr('class', 'btn bt-disable');
                    $('#vf').attr('disabled', 'disabled');

                    $('#selmul').attr('class', 'btn bt-disable');
                    $('#selmul').attr('disabled', 'disabled');
                    
                    $('#aso').attr('class', 'btn bt-disable');
                    $('#aso').attr('disabled', 'disabled');

                    $('#guardarVF').attr('class', 'btn bt-disable');
                    $('#guardarVF').attr('disabled', 'disabled');
                    
                    $('#guardarSM').attr('class', 'btn bt-disable');
                    $('#guardarSM').attr('disabled', 'disabled');

                    $('#guardarAS').attr('class', 'btn bt-disable');
                    $('#guardarAS').attr('disabled', 'disabled');
                }
            });
            //Guarda pregunta seleccion multiple
            $("#guardarSM").click(function() {
                if (p <= 9) {
                    p++;
                    pregunta = "pre" + p;
                    var contenido2 = $('textarea[id=textoSM]').val();
                    // console.log("Esta pregunta es: " + contenido2);
                    var opt_sm = obtenerRadioSeleccionado("questionOpciones", "pre"+p);
                    if (opt_sm==null) {alert("seleccione una respuesta");
                        p--;
                    }
                    else{
                    $("#elcuestionario").append('<form class="pregunta" id="' + pregunta + '" opcion="'+opt_sm+'" style="border-style: solid; border-color: #acb4b6; border-radius: 10px;"><p class="q">' + contenido2 + '</p></form>' + '<br>');
                    $("#textoSM").val("");
                    //$("#questionOpciones").clone().appendTo("#" + pregunta);
                    var questionSet = $("#questionOpciones").html();
                    $("#" + pregunta).append(questionSet);
                    $("#questionOpciones").empty();
                    }
                } else { //se establece un limite para añadir elementos, 10 es el limite
                    $("#elcuestionario").append('<label id="limit">Limite Alcanzado</label>');
                    $('#vf').attr('class', 'btn bt-disable');
                    $('#vf').attr('disabled', 'disabled');

                    $('#selmul').attr('class', 'btn bt-disable');
                    $('#selmul').attr('disabled', 'disabled');
                    
                    $('#aso').attr('class', 'btn bt-disable');
                    $('#aso').attr('disabled', 'disabled');

                    $('#guardarVF').attr('class', 'btn bt-disable');
                    $('#guardarVF').attr('disabled', 'disabled');
                    
                    $('#guardarSM').attr('class', 'btn bt-disable');
                    $('#guardarSM').attr('disabled', 'disabled');

                    $('#guardarAS').attr('class', 'btn bt-disable');
                    $('#guardarAS').attr('disabled', 'disabled');
                }
            });
            //Guarda opcion de seleccion multiple
            $("#opc").click(function() {
                var contenido3 = $('textarea[id=textoOptSM]').val();
                console.log("Esta opcion es: " + contenido3);
                var pp = p+1;
                $("#questionOpciones").append('<input type="radio" name="pre'+pp+'" value="' + contenido3 + '" style=" font-weight: bold;">' + contenido3 + '<br>');
                $("#textoOptSM").val("");

            });

            //Guarda pregunta de asociación
            $("#guardarAS").click(function() {
                if (p <= 9) {
                    p++;
                    var flag=true;
                    pregunta = "pre" + p;
                    var contenidoAS = $('textarea[id=concepto]').val();
                    for (let i = (cod-num+1); i < cod && flag; i++) {
                        var opt = $('input[id="op'+i+'"]').val();
                        if (opt=='' || opt==null) {
                            alert("Seleccione un número para cada opción "+i);
                            p--;
                            flag=false;
                        }else{
                            $('input[id="op'+i+'"]').attr('opcion', opt);
                            $('input[id="op'+i+'"]').val(null);
                        }
                    }
                    
                    if(flag){
                        // var opt_sm=123;
                        $("#elcuestionario").append('<form class="pregunta" id="' + pregunta + '" opcion="multiplex" style="border-style: solid; border-color: #acb4b6; border-radius: 10px;"><p class="q"> Asocie el concepto</p></form> <br>');
                        // $("#textoSM").val("");
                        
                        var questionSet = $("#opcionesAS").html();

                        $("#" + pregunta).append(questionSet);
                        $("#opcionesAS").empty();
                        num=1;
                    }
                } else { //se establece un limite para añadir elementos, 10 es el limite
                    $("#elcuestionario").append('<label id="limit">Limite Alcanzado</label>');
                    $('#vf').attr('class', 'btn bt-disable');
                    $('#vf').attr('disabled', 'disabled');

                    $('#selmul').attr('class', 'btn bt-disable');
                    $('#selmul').attr('disabled', 'disabled');
                    
                    $('#aso').attr('class', 'btn bt-disable');
                    $('#aso').attr('disabled', 'disabled');

                    $('#guardarVF').attr('class', 'btn bt-disable');
                    $('#guardarVF').attr('disabled', 'disabled');
                    
                    $('#guardarSM').attr('class', 'btn bt-disable');
                    $('#guardarSM').attr('disabled', 'disabled');

                    $('#guardarAS').attr('class', 'btn bt-disable');
                    $('#guardarAS').attr('disabled', 'disabled');
                    
                }
            });

            var num=1;
            var cod=1;
            //Guarda asociación
            $("#ag").click(function() {
                var concepto = $('textarea[id=concepto]').val();
                var significado = $('textarea[id=significado]').val();
                
                $("#opcionesAS").append('<b>'+num+'). </b> <p style="display: inline-block; width: 160px;">'+concepto+'</p><input type="number" id="op'+cod+'"   min=1 style="width:42px; height:20px;text-align: center;"> '+significado+'<br />');
                $("#significado").val("");
                $("#concepto").val("");
                num++;
                cod++;
            });

            $('#btRemove').click(function() { // Elimina un elemento por click
                if (p != 0) {
                    $('#pre' + p).remove();
                    p = p - 1;
                }
                if (p < 10) {
                    $("#limit").remove();
                    $('#vf').removeAttr('disabled');
                    $('#vf').attr('class', 'btn btn-primary');
                    $('#selmul').removeAttr('disabled');
                    $('#selmul').attr('class', 'btn btn-primary');
                    $('#guardarSM').removeAttr('disabled');
                    $('#guardarSM').attr('class', 'btn btn-info');
                    $('#guardarVF').removeAttr('disabled');
                    $('#guardarVF').attr('class', 'btn btn-info');

                }
                if (p == 0) {
                    $("#elcuestionario").empty();
                    $('#vf').removeAttr('disabled');
                    $('#vf').attr('class', 'btn btn-primary');
                    $('#selmul').removeAttr('disabled');
                    $('#selmul').attr('class', 'btn btn-primary');
                    $('#guardarSM').removeAttr('disabled');
                    $('#guardarSM').attr('class', 'btn btn-info');
                    $('#guardarVF').removeAttr('disabled');
                    $('#guardarVF').attr('class', 'btn btn-info');

                }
            });

            $('#btRemoveAll').click(function() { // Elimina todos los elementos del contenedor

                $("#elcuestionario").empty();
                $('#vf').removeAttr('disabled');
                $('#vf').attr('class', 'btn btn-primary');
                $('#selmul').removeAttr('disabled');
                $('#selmul').attr('class', 'btn btn-primary');
                $('#guardarSM').removeAttr('disabled');
                $('#guardarSM').attr('class', 'btn btn-info');
                $('#guardarVF').removeAttr('disabled');
                $('#guardarVF').attr('class', 'btn btn-info');

            });

            //Guardar el contenido AJAX post
            $("#guardar").click(function() {
                $("#elcuestionario").append(' <input class="btn btn-success"  type="button" id="verificar" name="verifica" value="Verificar">');
                var contenido = $("#cuestionario").html();
                var titulo = $("#titulo").val();
                var form = $("#form_contenido");
                var url = form.attr('action');
                var token = $("#token").val();
                $("#kontenido").val(contenido);
                var contenido2 = $("#kontenido").val();
                $.post(url,  { contenido: contenido2, titulo: titulo }, function(result) {
                    alert("Cuestionario almacenado!");
                });

            });

            function obtenerRadioSeleccionado(formulario, nombre) {
                elementos = document.getElementById(formulario).elements;
                longitud = document.getElementById(formulario).length;
                for (var i = 0; i < longitud; i++) {
                    if (elementos[i].name == nombre && elementos[i].type == "radio" && elementos[i].checked == true) {
                        return elementos[i].value;
                    }
                }
                return null;
            }


            });
    </script>
@endsection