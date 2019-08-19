<?php

namespace App\Usescases\Birth;

use App\Repositories\Contracts\BirthRepositoryInterface;
use App\Usescases\Birth\Contracts\CreateBirthUsecaseInterface;
use Illuminate\Http\Request;

class CreateBirthUsecase implements CreateBirthUsecaseInterface
{
    /**
     *
     * @var private
     */
    private $birthRepository;

    /**
     *
     * @param BirthRepositoryInterface $birthRepository
     */
    public function __construct(BirthRepositoryInterface $birthRepository)
    {
        $this->birthRepository = $birthRepository;
    }

    /**
     *
     * @param Request $data
     * @return void
     */
    public function handle(Request $data)
    {
        return $this->birthRepository->create($data);
    }
}