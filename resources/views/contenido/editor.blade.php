@extends('template.main')
@section('icon')
    <a href="{{ url('/Public') }}">
        <img src="{{ asset('img/editor2.png') }}" width="40%" height="90px" alt="Logo Editor" title="Logo editor" style="background-color: ghostwhite; border-radius: 10%">
    </a>
@endsection
@section('title','ContentCreator')

@section('content')
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>editor</title>
    <style>
        input{
            border:1px solid #000;
            background:#CCCCCC;
            font-family:Verdana, Arial, Helvetica, sans-serif;
            font-size:9px;
            margin-bottom:3px;
        }
    </style>

</head>

<body class="cuerpo">
<style >
    a{color:#dd4f24}
    .cuerpo{background:#e8e8e8;color:#444;font-family:georgia;font-size:16px}
    header{color:#222D32;overflow:hidden;padding:.5em;position:relative;z-index:1;}
    header .titular{margin:0 65px 0 70px;}
    header .titular .titulo{font-size:22px;font-weight:normal;margin:0;padding:0}
    nav{background:#22bce0;border-left:15px solid #fff;position:relative;}
    nav:before{border-bottom:20px solid transparent;border-left:7px solid #fff;border-top:20px solid transparent;content:"";left:0;position:absolute;top:0}
    nav .menu{height:40px;line-height:20px;margin:0;overflow-x:auto;padding:0;white-space:nowrap;}
    nav .menu li{display:inline-block;}
    nav .menu li:hover{background:#dd4f24}
    nav .menu li a{color:#fff;display:block;margin:.3em;padding:.2em;text-decoration:none}
    .principal{padding:.5em;}
    .principal #flipbook .page{width: 500px; height: 500px;border-color: #c9302c;border-style: solid;border-width: medium;background:#4e342e;background:#efebe9;}.principal #flipbook .page .sub{color:#22bce0;}
    .principal #flipbook .page .sub:hover{color:#000}
    .principal #flipbook .page p{background-color:#b2ebf2;text-align:justify;margin:.5em}
    .principal #flipbook .page img{width:250px;height:250px;}
       
</style>
<section class="principal">
<form id="form1" name="form1" method="post" action="">
    <input type="button" name="Submit" value="N" onclick="formato('bold')" />
    <input type="button" name="Submit2" value="C" onclick="formato('italic')" />
    <input type="button" name="Submit3" value="S" onclick="formato('underline')" />
    <input type="button" name="Submit4" value="remover formato" onclick="formato('RemoveFormat')" />
    <input type="button" name="Submit5" value="link" onclick="insertarEnlace()" />
    <input type="button" name="Submit9" value="quitar link" onclick="formato('Unlink')" />
    <input type="button" name="Submit6" value="imagen" onclick="insertarImagen()" />
    <input type="button" name="Submit7" value="texto rojo" onclick="color('#FF0000')" />
    <input type="button" name="Submit8" value="fondo rojo" onclick="colorFondo('#FF0000')" />
    <input type="button" name="Submit10" value="deshacer" onclick="formato('undo')" />
    <input type="button" name="Submit11" value="rehacer" onclick="formato('redo')" />

    <input type="button" name="Submit12" value="insertar html" onclick="inHTML()" />
    <br />
    <iframe id="edit" width="100%" height="300" style=" border:1px solid #000;"></iframe>
    <div id="ht" style="width:100%; height:300px; overflow:auto; border:1px solid #000; display:none"></div>
    <div style="margin-top:3px;"><input name="ver" type="button" id="ver" onclick="htmlOEditor(event)" value="html" /></div>
</form>
</section>
</body>
@endsection

@section('javascript')
    <script>
        var editor;
        function $(id){
            return document.getElementById(id);
        }
        function formato(f){
            editor.execCommand(f, false, null);
        }
        function rev(t)    {
            return t.split("<").join("&lt;").split(">").join("&gt;").split("\"").join("&quot;");
        }
        function insertarEnlace(){
            var u;
            if(!(u=prompt('ingresar url','http://')))return;
            editor.execCommand("CreateLink",false,u);
        }
        function insertarImagen(){
            var u;
            if(!(u=prompt('ingresar url','http://')))return;
            editor.body.focus();
            editor.execCommand("InsertImage",false,u);
        }
        function color(c){
            editor.execCommand("forecolor",false,c);
        }

        function colorFondo(c){
            var h=window.ActiveXObject?'backcolor':'hilitecolor';
            editor.execCommand(h,false,c);
        }
        function inHTML(){
            var u,u2;
            if(!(u=prompt('ingresar html','')))return;

            try{
                editor.execCommand("inserthtml",false,u);
            }catch(e){
                try{
                    editor.body.focus();
                    u2=editor.selection.createRange();
                    u2.pasteHTML(u);
                }catch(E){
                    alert('nop');
                }
            }
        }

        function htmlOEditor(e){
            e=e || window.event;
            ob=e.target || e.srcElement
            $('edit').style.display=(ob.value=='html')?'none':'block';
            $('ht').style.display=(ob.value!='html')?'none':'block';
            $('ht').innerHTML=rev(editor.body.innerHTML);
            ob.value=(ob.value=='html')?'editor':'html';
        }
        window.onload=function(){

            editor=$('edit').contentDocument || $('edit').contentWindow.document;
            editor.designMode='on';
        }
    </script>
@endsection