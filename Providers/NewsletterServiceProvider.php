<?php

namespace Modules\Newsletters\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class NewsletterServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Route::namespace('Modules\Newsletters\Http\Controllers')
            ->middleware(['web'])
            ->group(__DIR__. '/../Routes/web.php');

            $this->loadViewsFrom(__DIR__.'/../Views', 'Newsletter');

            $this->loadMigrationsFrom(__DIR__.'/../Migrations');

            $this->publishes([
                __DIR__.'/../Views' => resource_path('views/vendor/Newsletter'),
            ], 'views');

            
            $this->publishes([
                __DIR__.'/../Config/newsletters.php' => config_path('newsletters.php'),
            ], 'config');
            
    }
    public function register()
    {        
        $this->mergeConfigFrom(
            __DIR__.'/../Config/newsletters.php',
            'newsletters'
        );        
    }
}