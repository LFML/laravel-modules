<?php

namespace Laravel\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Modules\Contracts\RepositoryInterface;
use Laravel\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
