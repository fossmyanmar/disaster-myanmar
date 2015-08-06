<?php

namespace Disaster\Providers;

use Illuminate\Support\ServiceProvider;

class DisasterProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //States Interface and Repository Bind
        $this->app->bind(
            'Disaster\DisasterLib\Interfaces\StatesInterface',
            'Disaster\DisasterLib\Repositories\StatesRepository'
        );

        //City Interface and Repository Bind
        $this->app->bind(
            'Disaster\DisasterLib\Interfaces\CitiesInterface',
            'Disaster\DisasterLib\Repositories\CitiesRepository'
        );

        //Village Interface and Repository Bind
        $this->app->bind(
            'Disaster\DisasterLib\Interfaces\VillagesInterface',
            'Disaster\DisasterLib\Repositories\VillagesRepository'
        );

        //Ngo Interface and Repository Bind
        $this->app->bind(
            'Disaster\DisasterLib\Interfaces\NgosInterface',
            'Disaster\DisasterLib\Repositories\NgosRepository'
        );
    }
}
