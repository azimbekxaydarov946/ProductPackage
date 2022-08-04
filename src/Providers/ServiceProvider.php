<?php

namespace ProductMicroServices\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        //views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ProductMicroServices');

        //migration
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        //migration copy file

        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations'),
            __DIR__ . '/../database/factories' => database_path('factories'),
            __DIR__ . '/../database/seeders' => database_path('seeders'),
        ], 'all');

        // //factories

        // $this->loadFactoriesFrom(__DIR__ . '/../database/factories');

        // //seeders

        // $this->loadSeedsFrom(__DIR__ . '/../database/seedrs');

        Route::middleware('api')
            ->prefix('api')
            ->group(__DIR__ . '/../routes/api.php');

        Route::middleware('web')
            ->group(__DIR__.'/../routes/web.php');
    }
}
