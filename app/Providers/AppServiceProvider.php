<?php

namespace App\Providers;

use App\Repositories\Contracts\BasketRepositoryContract;
use App\Repositories\Contracts\CheckoutRepositoryContract;
use App\Repositories\Sessions\BasketRepository;
use App\Repositories\Sessions\CheckoutRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
        BasketRepositoryContract::class => BasketRepository::class,
        CheckoutRepositoryContract::class => CheckoutRepository::class

    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
