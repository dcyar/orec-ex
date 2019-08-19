<?php

namespace App\Repositories\Contracts;

use App\Entities\Death;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface DeathRepositoryInterface 
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
    public function create(Request $data) : Death;

    /**
     *
     * @param integer $id
     * @return Death
     */
    public function show(int $id) : Death;

    /**
     *
     * @param Request $data
     * @param integer $id
     * @return Death
     */
    public function update(Request $data, int $id) : Death;
    
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
