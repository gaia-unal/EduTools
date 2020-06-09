<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{

    protected $fillable = [
        'contenido',
        'titulo',
    ];
}
