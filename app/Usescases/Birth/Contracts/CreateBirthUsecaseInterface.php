<?php

namespace App\Usescases\Birth\Contracts;

use Illuminate\Http\Request;

interface CreateBirthUsecaseInterface
{
    public function handle(Request $data);
}