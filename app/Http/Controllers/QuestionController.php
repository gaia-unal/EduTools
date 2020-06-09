<?php

namespace App\Http\Controllers;

use App\Pregunta;


class QuestionController extends Controller
{
    public function inicioQ()
    {
        return view('cuestionario/inicioQ');
    }

    public function crear()
    {
        return view('cuestionario/crear');
    }

    public function mostrarQ()
    {
        $preguntas = Pregunta::all();
        return view('cuestionario/mostrarQ', compact('preguntas'));
    }
    public function cuestionario($id)
    {
        $cuestionarios = Pregunta::where('id',$id)
            ->get();
        return view('user.cuestionario',compact('cuestionarios'));
    }

    public function deleteQuest($id)
    {
        $object = Pregunta::find($id);
        $object->delete();

        return view('user.delete',compact('object'));
    }

}
