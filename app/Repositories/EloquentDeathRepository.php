<?php

namespace App\Repositories;

use Carbon\Carbon;
use App\Entities\Death;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\DeathRepositoryInterface;

class EloquentDeathRepository implements DeathRepositoryInterface
{
    /**
     *
     * @return Model
     */
    public function getModel() : Model
    {
        return new Death();
    }

    /**
     *
     * @param array $data
     * @return Death
     */
    public function create(Request $data) : Death
    {
        if (request()->partida) {
            $imageName = '/orec/defunciones/' . Str::slug((Carbon::now(). strtolower(($data->nombres .'-'. $data->apellidos))), '-') .'.'.request()->partida->getClientOriginalExtension();
                
            request()->partida->move(public_path('orec/defunciones/'), $imageName);
        }

        $death = Death::create([
            'libro' => $data->libro,
            'acta' => $data->acta,
            'nombres' => $data->nombres,
            'apellidos' => $data->apellidos,
            'dni' => $data->dni,
            'fecha_de_registro' => $data->fecha_de_registro,
            'partida' => $imageName,
        ]);

        return $death;
    }

    /**
     *
     * @param integer $id
     * @return Death
     */
    public function show(int $id) : Death
    {
        return $this->getModel()->findOrFail($id);
    }

    /**
     *
     * @param Request $data
     * @param integer $id
     * @return Death
     */
    public function update(Request $data, int $id) : Death
    {
        $death = $this->getModel()->findOrFail($id);

        $death->update($data->all());

        if (request()->partida) {
            $imageName = '/orec/defunciones/' . Str::slug((Carbon::now(). strtolower(($data->nombres .'-'. $data->apellidos))), '-') .'.'.request()->partida->getClientOriginalExtension();
                
            request()->partida->move(public_path('orec/defunciones/'), $imageName);

            $death->partida = $imageName;
            
            $death->save();
        }

        return $death;
    }

    /**
     *
     * @param integer $id
     * @return void
     */
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
