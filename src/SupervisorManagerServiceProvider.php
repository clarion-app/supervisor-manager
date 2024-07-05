<?php

namespace ClarionApp\SupervisorManager;

use Illuminate\Support\ServiceProvider;

class SupervisorManagerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->commands([
        ]);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
    }
}
