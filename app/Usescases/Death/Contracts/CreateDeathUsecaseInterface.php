<?php

namespace App\Usescases\Death\Contracts;

use Illuminate\Http\Request;

interface CreateDeathUsecaseInterface
{
    public function handle(Request $data);
}