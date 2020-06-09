<?php

namespace App\Http\Controllers;

use App\Contenido;
use Illuminate\Http\Request;
use Redirect;
use Session;


class UpdateController extends Controller
{
    public function contenido(Request $request, $id)
    {
        /*$rules = array(
            'contenido' => 'required',
            'titulo' => 'required',
        );*/
        $contenido = Contenido::find($id);

        $contenido->contenido =  $request['contenido'];
        $contenido->titulo = $request['titulo'];

        $contenido->save();

        Session::flash('flash_message','Contenido web actualizado de manera exitosa');
        return Redirect::to('Contenido/mostrarC');

    }
}
