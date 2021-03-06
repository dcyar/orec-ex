<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Marriage extends Model implements Searchable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'libro', 'acta', 'nombres', 'apellidos', 'dni', 'nombres_esposa', 'apellidos_esposa', 'dni_esposa', 'fecha_de_registro', 'partida',
    ];

    public function getSearchResult(): SearchResult
    {
        $url = route('matrimonios.show', $this->id);

        return new SearchResult(
            $this,
            $this->apellidos,
            $url
         );
    }
}
