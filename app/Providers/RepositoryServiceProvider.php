<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Category\CategoryRepository;
use App\Interface\Category\CategoryRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
