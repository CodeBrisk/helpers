<?php

namespace CodeBrisk\Helpers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use CodeBrisk\Helpers\Custom;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/web.php');

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('codebrisk', Custom::class);
    }
}
