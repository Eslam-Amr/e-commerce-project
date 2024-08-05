<?php

namespace App\Http\Controllers\Admin\Seller\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowProductReviewController extends Controller
{
    public function __invoke(Product $product){
        // dd($product->reviews);
        return view('admin.product.show-review',['reviews'=>$product->reviews()->paginate()]);
    }
}
