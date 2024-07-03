<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Product\ProductRepository;
use App\Repository\Category\CategoryRepository;
use App\Interface\Product\ProductRepositoryInterface;
use App\Interface\Category\CategoryRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
