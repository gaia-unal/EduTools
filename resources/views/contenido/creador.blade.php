@extends('template.main')
@section('icon')
    <a href="{{ url('/Public') }}">
        <img src="{{ asset('img/editor.png') }}" width="40%" height="90px" alt="Logo Editor" title="Logo editor">
    </a>
@endsection
@section('title','ContentCreator')

@section('content')

    <body class="cuerpo" >
    <header>

        <style>a{color:#dd4f24}.cuerpo{background:#222d32;;color:#444;font-family:georgia;font-size:16px}header{color:#222D32;overflow:hidden;padding:.5em;position:relative;z-index:1;}header .titular{margin:0 65px 0 70px;}header .titular .titulo{font-size:22px;font-weight:normal;margin:0;padding:0}nav{background:#22bce0;border-left:15px solid #fff;position:relative;}nav:before{border-bottom:20px solid transparent;border-left:7px solid #fff;border-top:20px solid transparent;content:"";left:0;position:absolute;top:0}nav .menu{height:40px;line-height:20px;margin:0;overflow-x:auto;padding:0;white-space:nowrap;}nav .menu li{display:inline-block;}nav .menu li:hover{background:#dd4f24}nav .menu li a{color:#fff;display:block;margin:.3em;padding:.2em;text-decoration:none}.principal{padding:.5em;}.principal #flipbook .page{width: 500px; height: 500px;border-color: #c9302c;border-style: solid;border-width: medium;background:#4e342e;background:#efebe9;}.principal #flipbook .page .sub{color:#22bce0;}.principal #flipbook .page .sub:hover{color:#000}.principal #flipbook .page p{background-color:#b2ebf2;text-align:justify;margin:.5em}.principal #flipbook .page img{width:250px;height:250px;align-items:center;border-radius:50%;}.principal #flipbook .page img:hover{border-radius:10%}.principal #flipbook .hard{border-color: #033863;border-style: solid;border-width: medium;background: #acb4b6;color:#fff;text-align:center;font-size:40px}</style>
    </header>
    <section class="principal">
        <h3>Agrega en el editor el contenido que quieras en la página</h3>

        {!! Form::open(['route' => 'Store.contenido', 'method' => 'POST', 'id' => 'form_contenido', 'class'=>'form-horizontal']) !!}
        <div class="form-group">
            <h4 style="margin-left: 19px">Título del contenido:</h4>
            <input type="text" id="titulo" name="titulo" required>
            <br><br>

            <h4 style="margin-left: 10px">Inserta el contenido</h4>
            <textarea id="texto" name="texto" type="text" rows="40" cols="50"  style="max-height: 800px; max-width: 400px;" placeholder="Digite el contenido a agregar!"></textarea>
        <!--
            <input type="hidden" name="_method" value="POST">
            {!! Form::textarea('contenido',null,['class' => 'form-control col-lg-offset-1','id' => 'kontenido','style'=>'display:none;']) !!}
            -->
            <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
        </div>
        <button type="submit" class="btn btn-primary" value="Guardar" id="btnGuardar">Guardar</button>
        {!! Form::close() !!}
    </section>
    </body>

@endsection

@section('javascript')
    <script>
        CKEDITOR.replace('texto');
        $(document).ready(function() {
            //Guardar el contenido AJAX post

            $("#btnGuardar").click(function () {
                var editor_data = CKEDITOR.instances.texto.getData();
                var contenido = editor_data;
                var titulo = $("#titulo").val();
                var form = $("#form_contenido");
                var url = form.attr('action');
                var token = $("#token").val();
                //$("#kontenido").val(contenido);
                //var contenido2 = $("#kontenido").val();

                $.post(url, { contenido: contenido, titulo: titulo }, function (result) {
                     alert("Contenido almacenado");
                });


            });
        });
    </script>

@endsection
