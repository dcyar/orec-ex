<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\SinglenessRepositoryInterface;
use App\Repositories\EloquentSinglenessRepository;
use App\Usescases\Singleness\Contracts\ListSinglenessUsecaseInterface;
use App\Usescases\Singleness\ListSinglenessUsecase;

class ContractsServiceProvider extends ServiceProvider
{

    // protected $classes = [
    //     // Repositories
    //     SinglenessRepositoryInterface::class => EloquentSinglenessRepository::class,

    //     //Usecases
    //     ListSinglenessUsecaseInterface::class => ListSinglenessUsecase::class,

    //     //Services
    // ];
    
    /**
     *
     * @var array
     */
    public $bindings = [
        // Repositories
        SinglenessRepositoryInterface::class => EloquentSinglenessRepository::class,
    
        //Usecases
        ListSinglenessUsecaseInterface::class => ListSinglenessUsecase::class,
    
        //Services

    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // foreach ($this->classes as $interface => $implementation) {
        //     $this->app->bind($interface, $implementation);
        // }
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
