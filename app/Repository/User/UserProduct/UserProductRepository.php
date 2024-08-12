<?php

namespace App\Repository\User\UserProduct;

use App\Models\Product;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use App\Interface\User\UserProduct\UserProductRepositoryInterface;
use App\Models\Review;

class UserProductRepository implements UserProductRepositoryInterface
{
    public function getFilterdSortedProductQuery(){
        return QueryBuilder::for(Product::class)
        ->allowedFilters([
            'name',
            'category.name',
            AllowedFilter::callback('search', function ($query, $value) {
                $query->where(function ($query) use ($value) {
                    $query->where('name', 'LIKE', "%{$value}%")
                        ->orWhere('description', 'LIKE', "%{$value}%")
                        ->orWhereHas('category', function ($query) use ($value) {
                            $query->where('name', 'LIKE', "%{$value}%");
                        });
                });
            }),
        ])
        ->allowedSorts('name', 'effective_price')
        ->select('*')
        ->addSelect(DB::raw('(price - (price * discount / 100)) as effective_price'))
        ->when(request()->has('price_from'), function ($query) {
            $query->having('effective_price', '>=', request()->query('price_from'));
        })
        ->when(request()->has('price_to'), function ($query) {
            $query->having('effective_price', '<=', request()->query('price_to'));
        })
        ->when(request()->has('sort'), function ($query) {
            if (request()->query('sort') === 'effective_price') {
                $query->orderBy('effective_price', 'asc');
            } elseif (request()->query('sort') === '-effective_price') {
                $query->orderBy('effective_price', 'desc');
            }
        });
    }
    public function getProducts($productsQuery){
        return  $productsQuery->where('stock','>',0)->where('admin-acceptance',1)->where('hide',0)->paginate()->appends(request()->query());
    }
    public function getProductsCount($productsQuery){
return $productsQuery->where('stock','>',0)->where('admin-acceptance',1)->where('hide',0)->toBase()->getCountForPagination();

    }
    public function index()
    {
        $categories = Category::all();

        $productsQuery = QueryBuilder::for(Product::class)
            ->allowedFilters([
                'name',
                'category.name',
                AllowedFilter::callback('search', function ($query, $value) {
                    $query->where(function ($query) use ($value) {
                        $query->where('name', 'LIKE', "%{$value}%")
                            ->orWhere('description', 'LIKE', "%{$value}%")
                            ->orWhereHas('category', function ($query) use ($value) {
                                $query->where('name', 'LIKE', "%{$value}%");
                            });
                    });
                }),
            ])
            ->allowedSorts('name', 'effective_price')
            ->select('*')
            ->addSelect(DB::raw('(price - (price * discount / 100)) as effective_price'))
            ->when(request()->has('price_from'), function ($query) {
                $query->having('effective_price', '>=', request()->query('price_from'));
            })
            ->when(request()->has('price_to'), function ($query) {
                $query->having('effective_price', '<=', request()->query('price_to'));
            })
            ->when(request()->has('sort'), function ($query) {
                if (request()->query('sort') === 'effective_price') {
                    $query->orderBy('effective_price', 'asc');
                } elseif (request()->query('sort') === '-effective_price') {
                    $query->orderBy('effective_price', 'desc');
                }
            });
                            // 0 no 1 accept
            // $table->boolean('admin-acceptance')->default(0);
            // 0 show 1 hide
            // $table->boolean('hide')->default(0);
        $products = $productsQuery->where('stock','>',0)->where('admin-acceptance',1)->where('hide',0)->paginate()->appends(request()->query());
        $totalProductsCount = $productsQuery->where('stock','>',0)->where('admin-acceptance',1)->where('hide',0)->toBase()->getCountForPagination();

        return view('user.main.product.index', get_defined_vars());
    }
    public function show($product){
        $wishlist=null;
        if(Auth::check())
        $wishlist = Wishlist::where('product_id', $product->id)
                           ->where('user_id', auth()->user()->id)
                           ->first();
        $reviews=Review::where('product_id', $product->id)->get();
        return view('user.main.product.single-product',get_defined_vars());
    }
}
