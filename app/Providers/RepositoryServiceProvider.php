<?php

namespace App\Providers;

// use App\Admin\Home\AdminHomePageRepositoryInterface;

use App\Interface\Admin\AdminControlOnSeller\AdminSellerInterface;
use App\Interface\Admin\AdminControlOnUser\AdminUserInterface;
use App\Interface\Admin\Contact\AdminContactInterface;
use App\Interface\User\Category\CategoryInterface;
use App\Repository\Admin\Contact\AdminContactRepository;
use Illuminate\Support\ServiceProvider;
use App\Repository\User\Cart\CartRepository;
use App\Repository\User\Home\HomeRepository;
use App\Repository\User\Review\ReviewRepository;
use App\Repository\Admin\Product\ProductRepository;
use App\Interface\User\Cart\CartRepositoryInterface;
use App\Interface\User\Home\HomeRepositoryInterface;
use App\Repository\User\Checkout\CheckoutRepository;
use App\Repository\User\Wishlist\WishlistRepository;
use App\Repository\Admin\Category\CategoryRepository;
use App\Repository\Admin\Home\AdminHomePageRepository;
use App\Interface\User\Review\ReviewRepositoryInterface;
use App\Repository\User\UserProduct\UserProductRepository;
use App\Interface\Admin\Product\ProductRepositoryInterface;
use App\Interface\User\Checkout\CheckoutRepositoryInterface;
use App\Interface\User\Wishlist\WishlistRepositoryInterface;
use App\Interface\Admin\Category\CategoryRepositoryInterface;
use App\Interface\Admin\Home\AdminHomePageRepositoryInterface;
use App\Interface\User\Contact\ContactInterface;
use App\Interface\User\OrderHistory\UserOrderHistoryInterface;
use App\Interface\User\Seller\SellerRequestInterface;
use App\Interface\User\UserProduct\UserProductRepositoryInterface;
use App\Repository\Admin\AdminControlOnSeller\AdminSellerRepository;
use App\Repository\Admin\AdminControlOnUser\AdminUserRepository;
use App\Repository\User\Contact\ContactRepository;
use App\Repository\User\OrderHistory\UserOrderHistoryRepository;
use App\Repository\User\Seller\SellerRequestRepository;

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
        $this->app->bind(HomeRepositoryInterface::class, HomeRepository::class);
        $this->app->bind(ReviewRepositoryInterface::class, ReviewRepository::class);
        $this->app->bind(UserOrderHistoryInterface::class, UserOrderHistoryRepository::class);
        $this->app->bind(CategoryInterface::class, CategoryRepository::class);
        $this->app->bind(ContactInterface::class, ContactRepository::class);
        $this->app->bind(SellerRequestInterface::class, SellerRequestRepository::class);
        $this->app->bind(AdminSellerInterface::class, AdminSellerRepository::class);
        $this->app->bind(AdminUserInterface::class, AdminUserRepository::class);
        $this->app->bind(AdminContactInterface::class, AdminContactRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
