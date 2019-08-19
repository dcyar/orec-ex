<?php

namespace App\Usescases\Marriage;

use App\Repositories\Contracts\MarriageRepositoryInterface;
use App\Usescases\Marriage\Contracts\CreateMarriageUsecaseInterface;
use Illuminate\Http\Request;

class CreateMarriageUsecase implements CreateMarriageUsecaseInterface
{
    /**
     *
     * @var private
     */
    private $marriageRepository;

    /**
     *
     * @param MarriageRepositoryInterface $marriageRepository
     */
    public function __construct(MarriageRepositoryInterface $marriageRepository)
    {
        $this->marriageRepository = $marriageRepository;
    }

    /**
     *
     * @param Request $data
     * @return void
     */
    public function handle(Request $data)
    {
        return $this->marriageRepository->create($data);
    }
}