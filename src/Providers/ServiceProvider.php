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
        Route::middleware('api')
            ->prefix('api')
            ->group(__DIR__ . '/../routes/api.php');
    }
}
