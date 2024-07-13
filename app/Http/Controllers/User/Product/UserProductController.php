<?php

namespace App\Http\Controllers\User\Product;

use App\Models\Product;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use App\Interface\User\UserProduct\UserProductRepositoryInterface;

// use App\Interface\User\Home\UserProductRepositoryInterface;

class UserProductController extends Controller
{
    private $userProductRepository;

    public function __construct(UserProductRepositoryInterface $userProductRepository)
    {
        $this->userProductRepository = $userProductRepository;
    }
    public function index()
    {
    return $this->userProductRepository->index();
}
public function show(Product $product)
{
        return $this->userProductRepository->show($product);
        // dd($product);
        // $wishlist=null;
        // if(Auth::check())
        // $wishlist = Wishlist::where('product_id', $product->id)
        //                    ->where('user_id', auth()->user()->id)
        //                    ->first();

        //                    //    dd($wishlist);
        // return view('user.main.product.single-product',get_defined_vars());
    }

}
