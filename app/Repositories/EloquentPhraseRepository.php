<?php

namespace App\Repositories;

use App\Entities\Phrase;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\PhraseRepositoryInterface;

class EloquentPhraseRepository implements PhraseRepositoryInterface
{
    /**
     *
     * @return Model
     */
    public function getModel() : Model
    {
        return new Phrase();
    }

    /**
     *
     * @return Collection
     */
    public function all() : Collection
    {
        return $this->getModel()->all();
    }

    /**
     *
     * @return Collection
     */
    public function inRandomOrder() : Collection
    {
        return $this->getModel()->inRandomOrder()->get();
    }
}
