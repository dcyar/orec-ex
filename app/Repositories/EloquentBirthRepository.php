<?php

namespace App\Repositories;

use Carbon\Carbon;
use App\Entities\Birth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\BirthRepositoryInterface;

class EloquentBirthRepository implements BirthRepositoryInterface
{
    /**
     *
     * @return Model
     */
    public function getModel() : Model
    {
        return new Birth();
    }

    /**
     *
     * @param array $data
     * @return Birth
     */
    public function create(Request $data) : Birth
    {
        if (request()->partida) {
            $imageName = '/orec/nacimientos/' . Str::slug((Carbon::now(). strtolower(($data->nombres .'-'. $data->apellidos))), '-') .'.'.request()->partida->getClientOriginalExtension();
                
            request()->partida->move(public_path('orec/nacimientos/'), $imageName);
        }

        $birth = Birth::create([
            'libro' => $data->libro,
            'acta' => $data->acta,
            'nombres' => $data->nombres,
            'apellidos' => $data->apellidos,
            'dni' => $data->dni,
            'fecha_de_registro' => $data->fecha_de_registro,
            'partida' => $imageName,
        ]);

        return $birth;
    }

    /**
     *
     * @param integer $id
     * @return Birth
     */
    public function findOrFail(int $id) : Birth
    {
        return $this->getModel()->findOrFail($id);
    }

    /**
     *
     * @param Request $data
     * @param integer $id
     * @return Birth
     */
    public function update(Request $data, int $id) : Birth
    {
        $birth = $this->getModel()->findOrFail($id);

        $birth->update($data->all());

        if (request()->partida) {
            $imageName = '/orec/nacimientos/' . Str::slug((Carbon::now(). strtolower(($data->nombres .'-'. $data->apellidos))), '-') .'.'.request()->partida->getClientOriginalExtension();
                
            request()->partida->move(public_path('orec/nacimientos/'), $imageName);

            $birth->partida = $imageName;
            
            $birth->save();
        }

        return $birth;
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
