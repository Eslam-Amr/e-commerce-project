<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Admin\Product\ProductRepository;
use App\Repository\Admin\Category\CategoryRepository;
use App\Repository\User\UserProduct\UserProductRepository;
use App\Interface\Admin\Product\ProductRepositoryInterface;
use App\Interface\Admin\Category\CategoryRepositoryInterface;
use App\Interface\User\UserProduct\UserProductRepositoryInterface;
// App\Repository\Home\UserProductRepository
// use App\Repository\Product\ProductRepository;
// use App\Repository\Category\CategoryRepository;
// use App\Interface\Product\ProductRepositoryInterface;
// use App\Interface\Category\CategoryRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(UserProductRepositoryInterface::class, UserProductRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
