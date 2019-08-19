<?php

namespace App\Usescases\Death;

use App\Repositories\Contracts\DeathRepositoryInterface;
use App\Usescases\Death\Contracts\CreateDeathUsecaseInterface;
use Illuminate\Http\Request;

class CreateDeathUsecase implements CreateDeathUsecaseInterface
{
    /**
     *
     * @var private
     */
    private $deathRepository;

    /**
     *
     * @param DeathRepositoryInterface $deathRepository
     */
    public function __construct(DeathRepositoryInterface $deathRepository)
    {
        $this->deathRepository = $deathRepository;
    }

    /**
     *
     * @param Request $data
     * @return void
     */
    public function handle(Request $data)
    {
        return $this->deathRepository->create($data);
    }
}