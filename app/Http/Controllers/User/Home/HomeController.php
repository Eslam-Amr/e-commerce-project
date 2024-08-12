<?php

namespace App\Http\Controllers\User\Home;

use App\Entities\HomeRepo;
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
    /*
       protected $bookRepo;
    protected $entityContextManager;

    public function __construct(ShelfContext $entityContextManager, BookRepo $bookRepo)
    {
        $this->bookRepo = $bookRepo;
        $this->entityContextManager = $entityContextManager;
        }
        */
        protected $homeRepo;
        public function __construct(HomeRepo $homeRepo){
    $this->homeRepo = $homeRepo;

}
// 0 no 1 accept
// $table->boolean('admin-acceptance')->default(0);
// 0 show 1 hide
// $table->boolean('hide')->default(0);
// $products= Product::inRandomOrder()->where('admin-acceptance',1)->where('hide',0)->take(10)->get();
// $guard = Auth::getDefaultDriver();

// Dump and die the guard
// dd(Auth::guard('seller')->user());
// dd($guard,auth()->guard('admin')->user());
    public function __invoke(){
        $products= $this->homeRepo->getProductPaginatedForHomePage();
        return view('user.main.home.index', get_defined_vars());
    }
}
