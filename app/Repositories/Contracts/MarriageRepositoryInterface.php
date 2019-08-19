<?php

namespace App\Repositories\Contracts;

use App\Entities\Marriage;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface MarriageRepositoryInterface 
{
    /**
     *
     * @return Model
     */
    public function getModel() : Model;

    /**
     *
     * @param Request $data
     * @return Marriage
     */
    public function create(Request $data) : Marriage;

    /**
     *
     * @param integer $id
     * @return Marriage
     */
    public function show(int $id) : Marriage;

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
