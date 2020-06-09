<?php

namespace App\Http\Controllers;


use App\Contenido;


class ContentController extends Controller
{
    public function inicioC()
    {
        return view('contenido/inicioC');
    }

//******************Contenido web*********************
    public function creador()
    {
        return view('contenido/creador');
    }
//Controlador del editor personalizado creado
    public function editor()
    {
        return view('contenido/editor');
    }
//muestra todos los contenidos creados
    public function mostrarC()
    {
        $contenidos = Contenido::all();
        return view('contenido/mostrarC', compact('contenidos'));
    }
//Muestra un contenido creado
    public function contenido($id)
    {
        $contenidos = Contenido::where('id',$id)
            ->get();
        return view('contenido.contenido',compact('contenidos'));
    }

    public function editContenido($id)
    {
        $contenidos = Contenido::where('id',$id)
            ->get();
        return view('user.editContenido',compact('contenidos'));
    }

    public function deleteContent($id)
    {
        $object = Contenido::find($id);
        $object->delete();

        return view('user.delete',compact('object'));
    }

}


