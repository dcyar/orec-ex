<?php

namespace App\Usescases\Singleness;

use App\Repositories\Contracts\SinglenessRepositoryInterface;
use App\Usescases\Singleness\Contracts\ListSinglenessUsecaseInterface;

class ListSinglenessUsecase implements ListSinglenessUsecaseInterface
{
    /**
     *
     * @var SinglenessRepositoryInterface
     */
    private $singlenesRepository;

    /**
     *
     * @param SinglenessRepositoryInterface $singlenesRepository
     */
    public function __construct(SinglenessRepositoryInterface $singlenesRepository)
    {
        $this->singlenesRepository = $singlenesRepository;
    }

    /**
     *
     * @return void
     */
    public function handle()
    {
        return $this->singlenesRepository->all();
    }
}