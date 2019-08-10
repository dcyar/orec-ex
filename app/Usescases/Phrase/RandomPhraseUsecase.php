<?php

namespace App\Usescases\Phrase;

use App\Repositories\Contracts\PhraseRepositoryInterface;
use App\Usescases\Phrase\Contracts\RandomPhraseUsecaseInterface;

class RandomPhraseUsecase implements RandomPhraseUsecaseInterface
{
    /**
     *
     * @var PhraseRepositoryInterface
     */
    private $phraseRepository;

    /**
     *
     * @param PhraseRepositoryInterface $PhraseRepository
     */
    public function __construct(PhraseRepositoryInterface $phraseRepository)
    {
        $this->phraseRepository = $phraseRepository;
    }

    /**
     *
     * @return void
     */
    public function handle()
    {
        return $this->phraseRepository->inRandomOrder();
    }
}