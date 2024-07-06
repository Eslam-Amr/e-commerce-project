<?php

namespace App\Http\Controllers\User\Product;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

class UserProductController extends Controller
{
    public function index(){
    //     $products=QueryBuilder::for(Product::class)
    //     ->allowedFilters('name')
    //     ->allowedSorts('name')
    //     ->paginate()
    //     ->appends(request()->query());

    //     $products = QueryBuilder::for(Product::class)
    // ->allowedFilters('name','category.name')
    // ->allowedSorts('name', 'effective_price')
    // ->when(request()->has('sort'), function ($query) {
    //     if (request()->query('sort') === 'effective_price') {
    //         $query->select('*')
    //             ->addSelect(DB::raw('(price - (price * discount / 100)) as effective_price'))
    //             ->orderBy('effective_price', 'asc');
    //     } elseif (request()->query('sort') === '-effective_price') {
    //         $query->select('*')
    //             ->addSelect(DB::raw('(price - (price * discount / 100)) as effective_price'))
    //             ->orderBy('effective_price', 'desc');
    //     }
    // })
    // ->paginate()
    // ->appends(request()->query());
    // $products = QueryBuilder::for(Product::class)
    // ->allowedFilters('name', 'category.name','price')
    // ->allowedSorts('name', 'effective_price')
    // ->when(request()->has('price_from'), function ($query) {
    //     $query->where($query->select('*')
    //     ->addSelect(DB::raw('(price - (price * discount / 100))')), '>=', request()->query('price_from'));
    // })
    // ->when(request()->has('price_to'), function ($query) {
    //     $query->where($query->select('*')
    //     ->addSelect(DB::raw('(price - (price * discount / 100))')), '<=', request()->query('price_to'));
    // })
    // ->when(request()->has('sort'), function ($query) {
    //     if (request()->query('sort') === 'effective_price') {
    //         $query->select('*')
    //             ->addSelect(DB::raw('(price - (price * discount / 100)) as effective_price'))
    //             ->orderBy('effective_price', 'asc');
    //     } elseif (request()->query('sort') === '-effective_price') {
    //         $query->select('*')
    //             ->addSelect(DB::raw('(price - (price * discount / 100)) as effective_price'))
    //             ->orderBy('effective_price', 'desc');
    //     }
    // })
    // ->paginate()
    // ->appends(request()->query());
    // $products = QueryBuilder::for(Product::class)
    // ->allowedFilters('name', 'category.name')
    // ->allowedSorts('name', 'effective_price')
    // ->select('*')
    // ->addSelect(DB::raw('(price - (price * discount / 100)) as effective_price'))
    // ->when(request()->has('filter.price_from'), function ($query) {
    //     $query->having('effective_price', '>=', request()->query('filter.price_from'));
    // })
    // ->when(request()->has('filter.price_to'), function ($query) {
    //     $query->having('effective_price', '<=', request()->query('filter.price_to'));
    // })
    // ->when(request()->has('sort'), function ($query) {
    //     if (request()->query('sort') === 'effective_price') {
    //         $query->orderBy('effective_price', 'asc');
    //     } elseif (request()->query('sort') === '-effective_price') {
    //         $query->orderBy('effective_price', 'desc');
    //     }
    // })
    // ->paginate()
    // ->appends(request()->query());


    // $products = QueryBuilder::for(Product::class)
    // ->allowedFilters('name', 'category.name') // Don't add 'price' here
    // ->allowedSorts('name', 'effective_price')
    // ->select('*')
    // ->addSelect(DB::raw('(price - (price * discount / 100)) as effective_price'))
    // ->when(request()->has('price_from'), function ($query) {
    //     $query->having('effective_price', '>=', request()->query('price_from'));
    // })
    // ->when(request()->has('price_to'), function ($query) {
    //     $query->having('effective_price', '<=', request()->query('price_to'));
    // })
    // ->when(request()->has('sort'), function ($query) {
    //     if (request()->query('sort') === 'effective_price') {
    //         $query->orderBy('effective_price', 'asc');
    //     } elseif (request()->query('sort') === '-effective_price') {
    //         $query->orderBy('effective_price', 'desc');
    //     }
    // })
    // ->paginate()
    // ->appends(request()->query());
    // $products = QueryBuilder::for(Product::class)
    // ->allowedFilters([
    //     'name',
    //     'category.name',
    //     AllowedFilter::callback('search', function ($query, $value) {
    //         $query->where(function($query) use ($value) {
    //             $query->where('name', 'LIKE', "%{$value}%")
    //                   ->orWhere('description', 'LIKE', "%{$value}%")
    //                   ->orWhereHas('category', function($query) use ($value) {
    //                       $query->where('name', 'LIKE', "%{$value}%");
    //                   });
    //         });
    //     }),
    // ])
    // ->allowedSorts('name', 'effective_price')
    // ->select('*')
    // ->addSelect(DB::raw('(price - (price * discount / 100)) as effective_price'))
    // ->when(request()->has('price_from'), function ($query) {
    //     $query->having('effective_price', '>=', request()->query('price_from'));
    // })
    // ->when(request()->has('price_to'), function ($query) {
    //     $query->having('effective_price', '<=', request()->query('price_to'));
    // })
    // ->when(request()->has('sort'), function ($query) {
    //     if (request()->query('sort') === 'effective_price') {
    //         $query->orderBy('effective_price', 'asc');
    //     } elseif (request()->query('sort') === '-effective_price') {
    //         $query->orderBy('effective_price', 'desc');
    //     }
    // })
    // ->paginate()
    // ->appends(request()->query());
    $categories=Category::all();

    $productsQuery = QueryBuilder::for(Product::class)
    ->allowedFilters([
        'name',
        'category.name',
        AllowedFilter::callback('search', function ($query, $value) {
            $query->where(function($query) use ($value) {
                $query->where('name', 'LIKE', "%{$value}%")
                      ->orWhere('description', 'LIKE', "%{$value}%")
                      ->orWhereHas('category', function($query) use ($value) {
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

    // $totalProductsCount = $productsQuery->count();
    $totalProductsCount = $productsQuery->toBase()->getCountForPagination();

        // $products=Product::paginate();
        return view('user.main.product.index',get_defined_vars());
    }
    public function show(){
        return view('user.main.product.single-product');
    }
}
