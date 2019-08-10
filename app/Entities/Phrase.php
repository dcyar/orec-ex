<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Phrase extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'frase', 'autor',
    ];
}
