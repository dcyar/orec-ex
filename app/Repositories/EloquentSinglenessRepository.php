<?php

namespace App\Repositories;

use App\Entities\Singleness;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\SinglenessRepositoryInterface;

class EloquentSinglenessRepository implements SinglenessRepositoryInterface
{
    /**
     *
     * @return Model
     */
    public function getModel() : Model
    {
        return new Singleness();
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
