<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Singleness extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres', 'apellidos', 'dni', 'domicilio', 'fecha_de_expedicion', 'libro', 'acta',
    ];
}
