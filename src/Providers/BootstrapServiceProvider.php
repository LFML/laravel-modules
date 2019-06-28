<?php

namespace Laravel\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Modules\Contracts\RepositoryInterface;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Booting the package.
     */
    public function boot()
    {
        $this->app[RepositoryInterface::class]->boot();
    }

    /**
     * Register the provider.
     */
    public function register()
    {
        $this->app[RepositoryInterface::class]->register();
    }
}
