<?php

namespace App\Http\Controllers\User\Home;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Interface\User\Home\HomeRepositoryInterface;

class HomeController extends Controller
{
    // public function index(){
    //     return view('user.main.home.index');
    // }

    private $HomeRepository;

    public function __construct(HomeRepositoryInterface $HomeRepository)
    {
        $this->HomeRepository = $HomeRepository;
    }
    public function __invoke()
    {
        // 0 no 1 accept
        // $table->boolean('admin-acceptance')->default(0);
        // 0 show 1 hide
        // $table->boolean('hide')->default(0);
        // $products = Product::inRandomOrder()->where('admin-acceptance', 1)->where('hide', 0)->take(10)->get();
        $products = $this->HomeRepository->getProductInRandomForHomePage();
        // $guard = Auth::getDefaultDriver();

        // Dump and die the guard
        // dd(Auth::guard('seller')->user());
        // dd($guard,auth()->guard('admin')->user());
        return view('user.main.home.index', get_defined_vars());
    }
}
