<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Death extends Model implements Searchable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'libro', 'acta', 'nombres', 'apellidos', 'dni', 'fecha_de_registro', 'partida',
    ];

    public function getSearchResult(): SearchResult
    {
        $url = route('defunciones.show', $this->id);

        return new SearchResult(
            $this,
            $this->apellidos,
            $url
         );
    }
}
