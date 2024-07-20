<?php

namespace App\Http\Controllers\User\Home;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // public function index(){
    //     return view('user.main.home.index');
    // }
    public function __invoke(){
        $products= Product::inRandomOrder()->take(10)->get();
        // $guard = Auth::getDefaultDriver();

        // Dump and die the guard
        // dd(Auth::guard('seller')->user());
        // dd($guard,auth()->guard('admin')->user());
        return view('user.main.home.index',get_defined_vars());
    }
}
