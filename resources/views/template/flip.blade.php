@extends('template.main')
@section('title','este es el flip')
@section('content')

    <body class="cuerpo" >
<header>
    <style>a{color:#dd4f24}.cuerpo{background:#e8e8e8;color:#444;font-family:Georgia;font-size:16px}footer{background:#dd4f24;color:rgba(255,255,255,0.5);padding:1em 0;text-align:center;width:100%;} .logo{border-right: 1px solid #dd4f24; border-radius: 2px;float: left; width: 50px;}footer h3{font-size:14px;font-weight:normal;}footer h3 strong{display:block}footer h3 .mejor:before,footer h3 .mejor:after{content:" - "}header{background:#444;box-shadow:0 5px rgba(0,0,0,0.2);color:#fff;overflow:hidden;padding:.5em;position:relative;z-index:1;}header .titular{margin:0 65px 0 70px;}header .titular .titulo{font-size:22px;font-weight:normal;margin:0;padding:0}nav{background:#22bce0;border-left:15px solid #fff;position:relative;}nav:before{border-bottom:20px solid transparent;border-left:7px solid #fff;border-top:20px solid transparent;content:"";left:0;position:absolute;top:0}nav .menu{height:40px;line-height:20px;margin:0;overflow-x:auto;padding:0;white-space:nowrap;}nav .menu li{display:inline-block;}nav .menu li:hover{background:#dd4f24}nav .menu li a{color:#fff;display:block;margin:.3em;padding:.2em;text-decoration:none}.principal{padding:.5em;}.principal #flipbook .page{background:#607d8b;}.principal #flipbook .page .sub{color:#22bce0;}.principal #flipbook .page .sub:hover{color:#000}.principal #flipbook .page p{background-color:#b2ebf2;text-align:justify;margin:.5em}.principal #flipbook .page img{width:250px;height:250px;float:right;border-radius:50%;}.principal #flipbook .page img:hover{border-radius:10%}.principal #flipbook .hard{background:#00695c;color:#fff;text-align:center;font-size:40px}</style>
    <img src="img/logo.png" alt="logo" class="logo">
    <div class="titular">
        <h1 class="titulo">
            Librito
        </h1>
    </div>
</header>
<nav>
    <ul class="menu">
        <li> <a href="#">Inicio</a> </li>
        <li> <a href="#">Libro</a> </li>
        <li> <a href="#">Manual</a> </li>
        <li> <a href="#">Manual</a> </li>
    </ul>
</nav>
<section class="principal">
    <div>
        <select name="contenido" id="contenido">
            <h3>seleccione el contenido a agregar</h3>
            <option value="titulo">titulo</option>
            <option value="subtitulo">subtitulo</option>
            <option value="parrafo">parrafo</option>
            <option value="imagen">imagen</option>
        </select>
        <input type="file" id="img" style="display: none">
        <textarea id="texto" type="text" rows="4" cols="50"  style="max-height: 6.4em; max-width: 300px;" placeholder="Digite el contenido a agregar!"></textarea>
        <button id="boton">Agregar</button>
        <br>
        <p>Crear pagina despues de </p> <input id="add_p" type="number" placeholder="pagina despues de"><button id="addpage">Crear</button>
        <p>Eliminar la pagina:</p> <input id="rem_p" type="number" placeholder="pagina a eliminar"><button id="rempage">Eliminar</button>
    </div>
    <br>
    <div id="flipbook">
        <div class="hard"> Turn.js </div>
        <div class="hard">Prologo</div>
        <div class="page">Page 1
            <h1 class="sub">PRESENTACION</h1>
            <div id="content">
            </div>
            <img src="img/bg2.jpg" alt="">
        </div>
        <div class="page">Page 2
            <h1 class="sub">subtitulo</h1>
            <img src="img/bg2.jpg">
        </div>
        <div class="page">Page 3
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="page">Page 4
            <div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        <div class="hard"> conclusiones </div>
        <div class="hard">Juanset 2016</div>
    </div>
</section>

<footer class="piep">
    <h3>
        <strong>Powered By Juanset</strong>
				<span class="mejor">
					compuset.co 2016
				</span>
    </h3>
</footer>
</body>
    @endsection

