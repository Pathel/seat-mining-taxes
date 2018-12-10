<?php

namespace Pathel\Seat\MoonMiningTaxes;

use Illuminate\Support\ServiceProvider;

class MiningTaxesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Include this packages menu items
        $this->mergeConfigFrom(__DIR__ . '/Config/package.sidebar.php', 'package.sidebar');
    }

    /**
     * Include the routes.
     */
    public function add_routes()
    {

        if (!$this->app->routesAreCached()) {
            include __DIR__ . '/Http/routes.php';
        }
    }

    /**
     * Include the package's database migrations.
     */
    private function add_migrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations/');
    }
}