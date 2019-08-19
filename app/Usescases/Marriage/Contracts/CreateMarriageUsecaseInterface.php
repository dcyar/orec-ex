<?php

namespace App\Usescases\Marriage\Contracts;

use Illuminate\Http\Request;

interface CreateMarriageUsecaseInterface
{
    public function handle(Request $data);
}