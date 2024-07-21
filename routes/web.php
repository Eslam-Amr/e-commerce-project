<?php

// use App\Livewire\Counter;
use App\Http\Controllers\Admin\Contact\AdminContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\Cart\CartController;
use App\Http\Controllers\User\Home\HomeController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\User\Review\ReviewController;
use App\Http\Controllers\User\Wishlist\WishlistController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Home\AdminHomePageController;
use App\Http\Controllers\Admin\Seller\Order\OrderController;
use App\Http\Controllers\User\Contact\UserContactController;
use App\Http\Controllers\User\Product\UserProductController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\User\Checkout\UserCheckoutController;
use App\Http\Controllers\Admin\Seller\Product\ProductController;
use App\Http\Controllers\Admin\Seller\Checkout\CheckoutController;


use App\Http\Controllers\User\OrderHistory\UserOrderHistoryController;

// Route::get('/counter', Counter::class);
Route::view('/te','test');
// Route::livewire('/te','test');

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::view('/test','user.main.auth.register');
// Route::resource('/category',  CategoryController::class );
// Route::resource('/category/delete',  CategoryController::class )->name('category.delete');


/*
user => and his history
make seller review
contact page
page for all seller in admin
best seller
make user can be seller in profile page and admin can accept or reject
make bolck for user seller and make delete seller
make admin can accept or reject products
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale() . '/admin',
        'middleware' => [ ('auth:admin,seller'),'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ],
        'as'=>'admin.'
    ], function(){ //...
        Route::view('/test','admin.doctors.index');
     //############################### Admin Category   ###############################
     Route::get('/contact/all' , [AdminContactController::class,'displayAll'])->name('contact.all');
        Route::resource('/contact',  AdminContactController::class);
        Route::resource('/category',  CategoryController::class )->middleware('auth:admin');
        Route::resource('/order',  OrderController::class )->except('destroy','show','update');
        Route::delete('/order/{checkout}',[  OrderController::class,'destroy'] )->name('order.destroy')->middleware('auth:seller');
        Route::get('/order/{checkout}/show',[  OrderController::class,'show'] )->name('order.show');
        Route::put('/order/update/{checkout}',[  OrderController::class,'update'] )->name('order.update')->middleware('auth:seller');
     //############################### Admin Product   ###############################
        Route::post('/logout',  [AuthController::class, 'adminLogout'] )->name('logout');
        Route::resource('/product',  ProductController::class );
        // Route::view('/','admin.index')->name('index');
        Route::get('/',AdminHomePageController::class)->name('index');
    });
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//############################### Admin login   ###############################
Route::post('/admin/login',[AuthController::class , 'login'])->name('admin.login');
//############################### User Home Page   ###############################
Route::get('/', HomeController::class)->name('home');
//############################### User Auth   ###############################
require __DIR__ . '/auth.php';

//############################### User Product   ###############################
Route::get('/product/show/{product}', [UserProductController::class,'show'])->name('user.product.show');
Route::get('/product', [UserProductController::class,'index'])->name('user.product.index');
//############################### User wishlist   ###############################
Route::get('/wishlist', [WishlistController::class,'index'])->name('wishlist.index');
Route::delete('/wishlist/{wishlist}', [WishlistController::class,'destroy'])->name('wishlist.destroy');
Route::post('/wishlist/{id}', [WishlistController::class,'store'])->name('wishlist.store');
//############################### User product review   ###############################
Route::resource('/review',ReviewController::class)->except('show');
//############################### User order history   ###############################
Route::resource('/orders',UserOrderHistoryController::class)->except('show');
Route::get('/orders/{checkout}',[UserOrderHistoryController::class,'show'])->name('user.order.show')->middleware('auth:web');
Route::put('/orders/cancel/{checkout}',[UserOrderHistoryController::class,'cancel'])->name('user.order.cancel')->middleware('auth:web');

//############################### User cart   ###############################
Route::post('/cart/add/{id}', [CartController::class, 'store'])->name('cart.store');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index'); // Assuming you have an index method to display the cart
Route::get('/cart/increment/{id}', [CartController::class, 'increment'])->name('cart.increment'); // Assuming you have an index method to display the cart
Route::get('/cart/decrement/{id}', [CartController::class, 'decrement'])->name('cart.decrement'); // Assuming you have an index method to display the cart
Route::delete('/cart/destroy/{id}', [CartController::class, 'destroy'])->name('cart.destroy'); // Assuming you have an index method to display the cart
//############################### User contact   ###############################
// Route::get('/contact', [UserContactController::class, 'index'])->name('contact.index'); // Assuming you have an index method to display the cart
Route::resource('/contact', UserContactController::class)->only('index','store'); // Assuming you have an index method to display the cart
//############################### User checkout   ###############################
Route::get('/checkout', [UserCheckoutController::class , 'create'])->name('checkout.create'); // Assuming you have an index method to display the cart
Route::post('/checkout/store', [UserCheckoutController::class , 'store'])->name('checkout.store'); // Assuming you have an index method to display the cart
// Route::resource('/checkout', UserCheckoutController::class ); // Assuming you have an index method to display the cart

//############################### Admin dashboard   ###############################
Route::get('/{page}', [AdminController::class,'index']);
