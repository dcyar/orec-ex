<?php

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface PhraseRepositoryInterface 
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

    /**
     *
     * @return Collection
     */    
    public function inRandomOrder() : Collection;
}
