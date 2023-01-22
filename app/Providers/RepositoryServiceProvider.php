<?php

namespace App\Providers;

use App\Interfaces\DepartmentRepositoryInterface;
use App\Interfaces\PositionRepositoryInterface;
use App\Repositories\API\DepartmentRepository;
use App\Repositories\API\PositionRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DepartmentRepositoryInterface::class, DepartmentRepository::class);
        $this->app->bind(PositionRepositoryInterface::class, PositionRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
