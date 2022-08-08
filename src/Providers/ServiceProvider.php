<?php

namespace ProductMicroServices\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/AppProduct.php', 'AppProduct'
        );
    }

    public function boot()
    {
        //controller  publishes
        // $this->publishes([
        //     __DIR__.'/../controllers' => app_path('Http/Controllers/'),
        // ],'controller');


        //views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ProductMicroServices');

        //migration
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        //migration copy file

        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations'),
        ], 'migrations');

        // $this->publishes([
        //     __DIR__ . '/../database/migrations' => database_path('migrations'),
        //     __DIR__ . '/../database/factories' => database_path('factories'),
        //     __DIR__ . '/../database/seeders' => database_path('seeders'),
        // ], 'all');

        // //factories

        // $this->loadFactoriesFrom(__DIR__ . '/../database/factories');

        // //seeders

        // $this->loadSeedsFrom(__DIR__ . '/../database/seedrs');

        //config
        $this->publishes([
            __DIR__ . '/../config/AppProduct.php' => config_path('AppProduct.php'),
        ]);

        //routes
        Route::middleware('api')
            ->prefix('api')
            ->group(__DIR__ . '/../routes/api.php');

        Route::middleware('web')
            ->group(__DIR__.'/../routes/web.php');
    }
}
