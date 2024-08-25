<?php

// namespace App\Repository\User\Home;
// use App\Interface\User\UserProduct\HomeRepositoryInterface;

// use App\Interface\User\Home\HomeRepositoryInterface;

// use App\Interface\Section\HomeRepositoryInterface;

// class HomeRepository implements HomeRepositoryInterfa
// {
//     public function index()
//     {

//     }
// }


namespace App\Repository\User\Home;

use App\Models\Product;
use App\Interface\User\Home\HomeRepositoryInterface;

class HomeRepository implements HomeRepositoryInterface
{
    // public function index(){
    //             // 0 no 1 accept
    //     // $table->boolean('admin-acceptance')->default(0);
    //     // 0 show 1 hide
    //     // $table->boolean('hide')->default(0);
    //     $products = Product::inRandomOrder()->where('admin-acceptance', 1)->where('hide', 0)->take(10)->get();
    //     // $guard = Auth::getDefaultDriver();

    //     // Dump and die the guard
    //     // dd(Auth::guard('seller')->user());
    //     // dd($guard,auth()->guard('admin')->user());
    //     return view('user.main.home.index', get_defined_vars());
    // }
    public function getProductInRandomForHomePage(){
        return Product::inRandomOrder()->where('admin-acceptance', 1)->where('hide', 0)->take(10)->get();
    }
    // public function getProductPaginatedForHomePage(){
    //     return Product::inRandomOrder()->where('admin-acceptance',1)->where('hide',0)->take(10)->get();

    // }
}
