<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\Cart\CartController;
use App\Http\Controllers\User\Home\HomeController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\User\Wishlist\WishlistController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\User\Product\UserProductController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Admin\Seller\Product\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::view('/test','user.main.auth.register');
// Route::resource('/category',  CategoryController::class );
// Route::resource('/category/delete',  CategoryController::class )->name('category.delete');
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale() . '/admin',
        'middleware' => [ ('auth:admin,seller'),'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ],
        'as'=>'admin.'
    ], function(){ //...
        Route::view('/test','admin.doctors.index');
     //############################### Admin Category   ###############################
        Route::resource('/category',  CategoryController::class )->middleware('auth:admin');
     //############################### Admin Product   ###############################
        Route::resource('/product',  ProductController::class );
        Route::view('/','admin.index')->name('index');
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
//############################### Admin dashboard   ###############################
// Route::get('/{page}', [AdminController::class,'index']);

//############################### User Product   ###############################
Route::get('/product/show/{product}', [UserProductController::class,'show'])->name('user.product.show');
Route::get('/product', [UserProductController::class,'index']);
Route::get('/wishlist', [WishlistController::class,'index'])->name('wishlist.index');
Route::delete('/wishlist/{wishlist}', [WishlistController::class,'destroy'])->name('wishlist.destroy');
Route::post('/wishlist/{id}', [WishlistController::class,'store'])->name('wishlist.store');


Route::post('/cart/add/{id}', [CartController::class, 'store'])->name('cart.store');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index'); // Assuming you have an index method to display the cart