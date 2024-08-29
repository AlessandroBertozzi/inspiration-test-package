<?php

namespace AlessandroBertozzi\Inspire\Providers;

use Illuminate\Support\ServiceProvider;

class InspirationProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'inspire');
        $this->loadMigrationsFrom(__DIR__.'/../migrations');
        $this->publishes([
            __DIR__.'/../migrations' => database_path('migrations')
        ], 'inspire-migrations');
    }
}
