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
    private $singlenessRepository;

    /**
     *
     * @param SinglenessRepositoryInterface $singlenessRepository
     */
    public function __construct(SinglenessRepositoryInterface $singlenessRepository)
    {
        $this->singlenessRepository = $singlenessRepository;
    }

    /**
     *
     * @return void
     */
    public function handle()
    {
        return $this->singlenessRepository->all();
    }
}