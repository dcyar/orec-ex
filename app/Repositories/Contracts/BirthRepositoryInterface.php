<?php

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Entities\Birth;
use Illuminate\Http\Request;

interface BirthRepositoryInterface 
{
    /**
     *
     * @return Model
     */
    public function getModel() : Model;

    /**
     *
     * @param Request $data
     * @return array
     */
    public function create(Request $data) : Birth;

    /**
     *
     * @return Birth
     */
    public function findOrFail(int $id) : Birth;

    /**
     *
     * @param Request $data
     * @param integer $id
     * @return Birth
     */
    public function update(Request $data, int $id) : Birth;

    /**
     *
     * @param integer $id
     * @return void
     */
    public function delete(int $id);

    /**
     *
     * @return Collection
     */
    public function all() : Collection;
}
