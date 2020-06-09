<?php

namespace App\Http\Controllers;

use App\Contenido;
use App\Pregunta;
use App\User;
use App\Libro;
use Illuminate\Http\Request;
use Redirect;
use Session;
use App\Http\Requests;
use App\Http\Requests\UserCreateRequest;
use Illuminate\Support\Facades\Input;

class storeController extends Controller
{
    public function libro(Requests\LibroRequest $request)
    {
        Libro::create([
            'contenido' => $request['contenido'],
            'titulo' => $request['titulo'],
            ]);
        Session::flash('flash_message','Libro guardado de manera exitosa');
        return Redirect::to('Libro/mostrarB');

    }

    public function contenido(Requests\ContenidoRequest $request)
    {
        Contenido::create([
            'contenido' => $request['contenido'],
            'titulo' => $request['titulo'],
        ]);
        Session::flash('flash_message','Contenido web guardado de manera exitosa');
        return Redirect::to('Contenido/mostrarC');

    }

    public function pregunta(Requests\PreguntaRequest $request)
    {
        Pregunta::create([
            'contenido' => $request['contenido'],
            'titulo' => $request['titulo'],
        ]);
        Session::flash('flash_message','Preguntas guardadas de manera exitosa');
        return Redirect::to('Cuestionario/mostrarQ');

    }
}
