<?php

namespace App\Http\Controllers;

use App\Contenido;
use App\Pregunta;
use App\Libro;


class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//**************++Inicio*********************
    public function index()
    {
        return view('inicio');
    }

    public function mostrarT()
    {
        $libros = Libro::all();
        $contenidos = Contenido::all();
        $preguntas = Pregunta::all();
        return view('mostrarT', compact('preguntas','contenidos','libros'));
    }


}
