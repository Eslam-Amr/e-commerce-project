<?php

namespace App\Repository\User\UserProduct;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use App\Interface\User\UserProduct\UserProductRepositoryInterface;

class UserProductRepository implements UserProductRepositoryInterface
{
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

        $products = $productsQuery->paginate()->appends(request()->query());
        $totalProductsCount = $productsQuery->toBase()->getCountForPagination();

        return view('user.main.product.index', get_defined_vars());
    }
}
