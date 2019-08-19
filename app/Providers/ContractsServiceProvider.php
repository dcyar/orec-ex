<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Usescases\Birth\CreateBirthUsecase;
use App\Usescases\Death\CreateDeathUsecase;
use App\Repositories\{EloquentBirthRepository, EloquentPhraseRepository, EloquentDeathRepository, EloquentMarriageRepository, EloquentSinglenessRepository};
use App\Repositories\Contracts\{BirthRepositoryInterface, PhraseRepositoryInterface, DeathRepositoryInterface, MarriageRepositoryInterface, SinglenessRepositoryInterface};
use App\Usescases\Birth\Contracts\CreateBirthUsecaseInterface;
use App\Usescases\Death\Contracts\CreateDeathUsecaseInterface;
use App\Usescases\Marriage\Contracts\CreateMarriageUsecaseInterface;
use App\Usescases\Marriage\CreateMarriageUsecase;
use App\Usescases\Singleness\ListSinglenessUsecase;
use App\Usescases\Singleness\Contracts\ListSinglenessUsecaseInterface;

class ContractsServiceProvider extends ServiceProvider
{    
    /**
     *
     * @var array
     */
    public $bindings = [
        // Repositories
        SinglenessRepositoryInterface::class => EloquentSinglenessRepository::class,
        PhraseRepositoryInterface::class => EloquentPhraseRepository::class,
        BirthRepositoryInterface::class => EloquentBirthRepository::class,
        DeathRepositoryInterface::class => EloquentDeathRepository::class,
        MarriageRepositoryInterface::class => EloquentMarriageRepository::class,
    
        //Usecases
        ListSinglenessUsecaseInterface::class => ListSinglenessUsecase::class,
        CreateBirthUsecaseInterface::class => CreateBirthUsecase::class,
        CreateDeathUsecaseInterface::class => CreateDeathUsecase::class,
        CreateMarriageUsecaseInterface::class => CreateMarriageUsecase::class,
        // RandomPhraseUsecaseInterface::class => RandomPhraseUsecase::class,
    
        //Services

    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
