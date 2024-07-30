<?php

namespace App\Providers;

// use App\Admin\Home\AdminHomePageRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Repository\User\Cart\CartRepository;
use App\Repository\Admin\Product\ProductRepository;
use App\Interface\User\Cart\CartRepositoryInterface;
use App\Repository\User\Wishlist\WishlistRepository;
use App\Repository\Admin\Category\CategoryRepository;
use App\Repository\User\UserProduct\UserProductRepository;
use App\Interface\Admin\Product\ProductRepositoryInterface;
use App\Interface\User\Wishlist\WishlistRepositoryInterface;
use App\Interface\Admin\Category\CategoryRepositoryInterface;
use App\Interface\Admin\Home\AdminHomePageRepositoryInterface;
use App\Interface\User\Checkout\CheckoutRepositoryInterface;
use App\Interface\User\UserProduct\UserProductRepositoryInterface;
use App\Repository\Admin\Home\AdminHomePageRepository;
use App\Repository\User\Checkout\CheckoutRepository;

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
        $this->app->bind(WishlistRepositoryInterface::class, WishlistRepository::class);
        $this->app->bind(CartRepositoryInterface::class, CartRepository::class);
        $this->app->bind(CheckoutRepositoryInterface::class, CheckoutRepository::class);
        $this->app->bind(AdminHomePageRepositoryInterface::class, AdminHomePageRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
