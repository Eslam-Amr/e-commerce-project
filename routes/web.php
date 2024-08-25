<?php

// use App\Livewire\Counter;

use App\Http\Controllers\Admin\AdminControlOnSeller\ShowSellerReviewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\Cart\CartController;
use App\Http\Controllers\User\Home\HomeController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\User\Review\ReviewController;
use App\Http\Controllers\User\Settings\SettingsCotroller;
use App\Http\Controllers\User\Wishlist\WishlistController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Home\AdminHomePageController;
use App\Http\Controllers\Admin\Seller\Order\OrderController;
use App\Http\Controllers\User\Contact\UserContactController;
use App\Http\Controllers\User\Product\UserProductController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Admin\Contact\AdminContactController;
use App\Http\Controllers\User\Checkout\UserCheckoutController;
use App\Http\Controllers\Admin\Seller\Product\ProductController;
use App\Http\Controllers\Admin\Seller\Checkout\CheckoutController;
use App\Http\Controllers\Admin\Seller\AdminSellerRequestController;
use App\Http\Controllers\Admin\AdminControlOnUser\AdminUserController;


use App\Http\Controllers\User\OrderHistory\UserOrderHistoryController;
use App\Http\Controllers\User\Settings\UserSellerRegisterationController;
use App\Http\Controllers\Admin\AdminControlOnSeller\AdminSellerController;
use App\Http\Controllers\Admin\Seller\Product\ProductRequestController;
use App\Http\Controllers\Admin\Seller\Product\ShowProductReviewController;
use App\Http\Controllers\User\Review\SellerReviewController;

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
// user => and his history
make no product added to cart when user blocked ro no checkout
make seller review
for seller request make table to catch new seller id when admin confirm role change in database and coumlb delete
contact page
page for all seller in admin
best seller
make user can be seller in profile page and admin can accept or reject
make bolck for user seller and make delete seller
make admin can accept or reject products
block and unblock seller and user in admin page
checkout total not ok
*/
/*
reposaiory => command or interface and class
migartion files

*/
//------------------------------------
// cehck for admincontactcontroller for make repostary desgin pattern for the program
//check for admin route
// check for user contact page
// check for user checkout page
//check vaildation for admin sigin in page
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale() . '/admin',
        'middleware' => [ ('auth:admin,seller'),'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ],
        'as'=>'admin.'
    ], function(){ //...
        Route::view('/test','admin.doctors.index');
        //############################### Admin Contact   ###############################
        Route::get('/contact/all' , [AdminContactController::class,'displayAll'])->name('contact.all');
        Route::resource('/contact',  AdminContactController::class)->only('update','index','show','destroy');
        //############################### end Admin Contact   ###########################
        //############################### Admin Category   ###############################
        Route::resource('/category',  CategoryController::class )->middleware('auth:admin');
        //############################### end Admin Category   ###########################
        //############################### Admin order   ###############################
        Route::resource('/order',  OrderController::class )->except('destroy','show','update');
        Route::delete('/order/{checkout}',[  OrderController::class,'destroy'] )->name('order.destroy')->middleware('auth:seller');
        Route::get('/order/{checkout}/show',[  OrderController::class,'show'] )->name('order.show');
        Route::put('/order/update/{checkout}',[  OrderController::class,'update'] )->name('order.update')->middleware('auth:seller');
        //############################### end Admin order   ###########################
        //############################### Admin logout   ###########################
        Route::post('/logout',  [AuthController::class, 'adminLogout'] )->name('logout');
        //############################### end Admin logout   ###########################
     //############################### Admin Product   ###############################
     Route::resource('/product',  ProductController::class );
     Route::get('/product/{product}/review',  ShowProductReviewController::class )->name('product.review');
     Route::resource('/product-requests',  ProductRequestController::class );
     Route::post('/product-requests/accept/{product}',  [ProductRequestController::class,'accept'] )->name('product-request.accept')->middleware('auth:admin');
     Route::post('/product-requests/reject/{product}',  [ProductRequestController::class ,'reject'])->name('product-request.reject')->middleware('auth:admin');
     Route::post('/product-requests/hide/{product}',  [ProductRequestController::class ,'hide'])->name('product-request.hide');
     Route::post('/product-requests/unhide/{product}',  [ProductRequestController::class ,'unhide'])->name('product-request.unhide');
     Route::post('/product-requests/show/{product}',  [ProductRequestController::class ,'show'])->name('product-request.show')->middleware('auth:admin');
     //############################### end Admin Product   ###############################
     Route::middleware('auth:admin')->group(function (){

         //###############################  Admin seller   ###############################
         Route::resource('/seller',  AdminSellerController::class )->only('index','destroy');
         Route::get('/seller/{seller}/review',  ShowSellerReviewController::class )->name('seller.review');
         Route::put('/seller/block/{seller}',  [AdminSellerController::class,'block'] )->name('seller.block');
         Route::put('/seller/unblock/{seller}',  [AdminSellerController::class,'unblock'] )->name('seller.unblock');
         Route::resource('/seller-request',  AdminSellerRequestController::class );
         Route::post('/seller-request/{seller_request}/accept',  [AdminSellerRequestController::class,'accept'] )->name('seller-request.accept');
         //###############################  end Admin seller   ###############################
         //###############################   Admin users   ###############################
         Route::resource('/user',  AdminUserController::class )->only('index','destroy');
         Route::put('/user/block/{user}',  [AdminUserController::class,'block'] )->name('user.block');
         Route::put('/user/unblock/{user}',  [AdminUserController::class,'unblock'] )->name('user.unblock');
         //###############################  end Admin users   ###############################
});
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
//############################### end Admin login   ###############################









//############################### User Route #####################################
//############################### User Home Page   ###############################
Route::get('/', HomeController::class)->name('home');
//############################### User settings Page   ###############################
Route::get('/settings', [SettingsCotroller::class,'index'])->name('settings.index')->middleware('auth:web');
Route::post('/settings/seller-registeration', UserSellerRegisterationController::class)->name('user.seller-request')->middleware('auth:web');
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
Route::post('/review',ReviewController::class)->name('review.store')->middleware('auth:web');
//############################### User seller review   ###############################
Route::post('/seller-review',SellerReviewController::class)->name('seller-review.store')->middleware('auth:web');
//############################### User order history   ###############################
Route::resource('/orders',UserOrderHistoryController::class)->only('index');
Route::get('/orders/{checkout}',[UserOrderHistoryController::class,'show'])->name('user.order.show')->middleware('auth:web');
Route::put('/orders/cancel/{checkout}',[UserOrderHistoryController::class,'cancel'])->name('user.order.cancel')->middleware('auth:web');

//############################### User cart   ###############################
Route::post('/cart/add/{id}', [CartController::class, 'store'])->name('cart.store');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart/increment/{id}', [CartController::class, 'increment'])->name('cart.increment');
Route::get('/cart/decrement/{id}', [CartController::class, 'decrement'])->name('cart.decrement');
Route::delete('/cart/destroy/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
//############################### User contact   ###############################
// Route::get('/contact', [UserContactController::class, 'index'])->name('contact.index');
Route::resource('/contact', UserContactController::class)->only('index','store');
//############################### User checkout   ###############################
Route::get('/checkout', [UserCheckoutController::class , 'create'])->name('checkout.create');
Route::post('/checkout/store', [UserCheckoutController::class , 'store'])->name('checkout.store');
// Route::resource('/checkout', UserCheckoutController::class );
//############################### end User Route #################################

//############################### Admin dashboard   ###############################
Route::get('/{page}', [AdminController::class,'index']);
