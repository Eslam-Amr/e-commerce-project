<?php

namespace App\Http\Controllers\User\Product;

use App\Models\Product;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Interface\Admin\Category\CategoryRepositoryInterface;
use App\Interface\User\Review\ReviewRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use App\Interface\User\UserProduct\UserProductRepositoryInterface;
use App\Interface\User\Wishlist\WishlistRepositoryInterface;
use App\Models\Review;

// use App\Interface\User\Home\UserProductRepositoryInterface;

class UserProductController extends Controller
{
    private $userProductRepository;
    private $categoryRepository;
    private $wishlistRepository;
    private $reviewRepository;

    public function __construct(UserProductRepositoryInterface $userProductRepository,ReviewRepositoryInterface $reviewRepository,CategoryRepositoryInterface $categoryRepository,WishlistRepositoryInterface $wishlistRepository)
    {
        $this->userProductRepository = $userProductRepository;
        $this->wishlistRepository = $wishlistRepository;
        $this->categoryRepository = $categoryRepository;
        $this->reviewRepository = $reviewRepository;
    }
//     public function index()
//     {
//     return $this->userProductRepository->index();
// }
public function index()
{
    // $categories = Category::all();
    $categories = $this->categoryRepository->getCategorySample();
    $productsQuery=$this->userProductRepository->getFilterdSortedProductQuery();

                        // 0 no 1 accept
        // $table->boolean('admin-acceptance')->default(0);
        // 0 show 1 hide
        // $table->boolean('hide')->default(0);
    // $products = $productsQuery->where('stock','>',0)->where('admin-acceptance',1)->where('hide',0)->paginate()->appends(request()->query());
    $products =$this->userProductRepository->getProducts($productsQuery);
    // $totalProductsCount = $productsQuery->where('stock','>',0)->where('admin-acceptance',1)->where('hide',0)->toBase()->getCountForPagination();
    $totalProductsCount = $this->userProductRepository->getProductsCount($productsQuery);
    return view('user.main.product.index', get_defined_vars());
}
public function show(Product $product)
{
       $wishlist=null;
    if(Auth::check())
    // $wishlist = Wishlist::where('product_id', $product->id)
    //                    ->where('user_id', auth()->user()->id)
    //                    ->first();
    $wishlist=$this->wishlistRepository->getIfProductInWishlist($product->id);
    // $reviews=Review::where('product_id', $product->id)->get();
    $reviews=$this->reviewRepository->getProductReview($product->id);
    return view('user.main.product.single-product',get_defined_vars());
}
// public function show(Product $product)
// {
//         return $this->userProductRepository->show($product);
//         // dd($product);
//         // $wishlist=null;
//         // if(Auth::check())
//         // $wishlist = Wishlist::where('product_id', $product->id)
//         //                    ->where('user_id', auth()->user()->id)
//         //                    ->first();

//         //                    //    dd($wishlist);
//         // return view('user.main.product.single-product',get_defined_vars());
//     }

}
