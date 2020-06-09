<?php

namespace App\Http\Controllers;

use App\Libro;

class BookController extends Controller
{
    public function inicioB()
    {
        return view('libro/inicioB');

    }

    //***********Libro*************************************

    public function crear()
    {
        return view('libro/crear');
    }

    public function mostrarB()
    {
        $libros = Libro::all();
        return view('libro/mostrarB', compact('libros'));
    }

    public function libro($id)
    {
        $libros = Libro::where('id',$id)
            ->get();
        return view('user.libro',compact('libros'));
    }

    /***********DELETE ******************/
    public function deleteBook($id)
    {
        $object =Libro::find($id);
        $object->delete();

        return view('user.delete',compact('object'));
    }



}
