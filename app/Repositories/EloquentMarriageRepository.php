<?php

namespace App\Repositories;

use Carbon\Carbon;
use App\Entities\Marriage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\MarriageRepositoryInterface;

class EloquentMarriageRepository implements MarriageRepositoryInterface
{
    /**
     *
     * @return Model
     */
    public function getModel() : Model
    {
        return new Marriage();
    }

    /**
     *
     * @param Request $data
     * @return Marriage
     */
    public function create(Request $data) : Marriage
    {
        if (request()->partida) {
            $imageName = '/orec/matrimonios/' . Str::slug((Carbon::now(). strtolower(($data->nombres .'-'. $data->apellidos))), '-') .'.'.request()->partida->getClientOriginalExtension();
                
            request()->partida->move(public_path('orec/matrimonios/'), $imageName);
        }

        $marriage = Marriage::create([
            'libro' => $data->libro,
            'acta' => $data->acta,
            'nombres' => $data->nombres,
            'apellidos' => $data->apellidos,
            'dni' => $data->dni,
            'nombres_esposa' => $data->nombres_esposa,
            'apellidos_esposa' => $data->apellidos_esposa,
            'dni_esposa' => $data->dni_esposa,
            'fecha_de_registro' => $data->fecha_de_registro,
            'partida' => $imageName,
        ]);

        return $marriage;
    }

    /**
     *
     * @param integer $id
     * @return Marriage
     */
    public function show(int $id) : Marriage
    {
        return $this->getModel()->findOrFail($id);
    }


    public function delete(int $id)
    {
        return $this->getModel()->findOrFail($id)->delete();
    }

    /**
     *
     * @return Collection
     */
    public function all() : Collection
    {
        return $this->getModel()->all();
    }
}
