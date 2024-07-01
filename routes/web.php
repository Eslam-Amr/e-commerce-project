<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\Home\HomeController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Category\CategoryController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::view('/test','user.main.auth.register');
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ ('auth:admin,seller'),'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...
        Route::view('/test','admin.doctors.index');
        // Route::resource('/category',  CategoryController::class )->middleware('auth:admin');
        Route::resource('/category',  CategoryController::class );
        // Route::resource('/category/delete',  CategoryController::class )->name('category.delete');
        Route::view('/admin','admin.index')->name('admin');
    });
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('/admin/login',[AuthController::class , 'login'])->name('admin.login');
Route::get('/', HomeController::class)->name('home');
require __DIR__ . '/auth.php';
Route::get('/{page}', [AdminController::class,'index']);
