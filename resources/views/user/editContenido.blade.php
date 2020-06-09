@extends('template.main')

@section('icon')
    <a href="{{ url('/Public') }}">
        <img src="{{ asset('img/Edutools1.png') }}" width="auto" height="89px" alt="Logo book" title="Logo libro">
    </a>
@endsection

@section('title','Editor de contenido')
@if(Session::has('flash_message'))
    <div class="alert alert-success">{{Session::get('flash_message')}}</div>
@endif
@section('content')

    <body class="cuerpo" >
    <header>
        <style>.principal #flipbook .page{border-color: #c9302c;border-style: solid;border-width: medium;background:#4e342e;background:#efebe9;}  .principal #flipbook .page .sub{color:#22bce0;}  .principal #flipbook .page .sub:hover{color:#000}  .principal #flipbook .page p{background-color:#b2ebf2;text-align:justify;margin:.5em}  .principal #flipbook .page img{width:250px;height:250px;align-items:center;border-radius:50%;}  .principal #flipbook .page img:hover{border-radius:10%}  .principal #flipbook .hard{border-color: #c9302c;border-style: solid;order-width: medium;background: #336e73;color:#fff;text-align:center;font-size:40px}</style>
    </header>
    <section class="principal">
        @foreach($contenidos as $contenido)
        {!! Form::model($contenido->id,['route' => ['Update.contenido',$contenido->id], 'method' => 'POST', 'id' => 'form_contenido', 'class'=>'form-horizontal']) !!}
        <div class="form-group">
            <h4 style="margin-left: 20px">Título del contenido:</h4>

                <input type="text" id="titulo" name="titulo" value="{!!$contenido->titulo!!}"><br><br>
                <div>
                    <h4 style="margin-left: 20px">Edita el contenido</h4>
                    <textarea id="texto" name="texto" type="text" rows="40" cols="500"  style="max-height: 800px; max-width: 400px;">
                        {!!$contenido->contenido!!}
                    </textarea>
                </div>
            <input type="hidden" name="_method" value="POST">
            {!! Form::textarea('contenido',null,['class' => 'form-control col-lg-offset-1','id' => 'kontenido','style'=>'display:none;']) !!}
            <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
        </div>
        <button type="submit" class="btn btn-primary" value="Actualizar" id="btnUpdate">Actualizar</button>
        {!! Form::close() !!}
        @endforeach
    </section>

    </body>
@endsection

@section('javascript')
    <script type="text/javascript">
        CKEDITOR.replace('texto');
        $(document).ready(function() {
            //Guardar el contenido AJAX post

            $("#btnUpdate").click(function () {
                var editor_data = CKEDITOR.instances.texto.getData();
                var contenido = editor_data;
                var titulo = $("#titulo").val();
                //alert("Error al guardar, no se pudo obtener el contenido completo."+ editor_data+contenido);
                var form = $("#form_contenido");
                var url = form.attr('action');
                var token = $("#token").val();
                $("#kontenido").val(contenido);
                var contenido2 = $("#kontenido").val();
                /*$.post(url, { contenido: contenido2, titulo: titulo }, function (result) {
                    alert(result);
                });
                   */
                $.ajax({
                    method: "POST",
                    url: url,
                    data: $( "#form_contenido" ).serialize(),
                });

            });
        });

    </script>
@endsection
