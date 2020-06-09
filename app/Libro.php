<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{

    protected $fillable = [
        'contenido',
        'titulo',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}
