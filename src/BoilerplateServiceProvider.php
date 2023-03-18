<?php

namespace Nhn\Boilerplate;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class BoilerplateServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        Str::macro('nhn', function ($value) {
            return $value;
        });
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/boilerplate.php', 'boilerplate');
    }
}
