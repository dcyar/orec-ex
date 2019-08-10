<?php

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface SinglenessRepositoryInterface 
{
    /**
     *
     * @return Model
     */
    public function getModel() : Model;

    /**
     *
     * @return Collection
     */
    public function all() : Collection;
}
