<?php

namespace App\Http\Controllers\User\Product;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserProductController extends Controller
{
    public function index(){
        
        $products=Product::paginate();
        return view('user.main.product.index',get_defined_vars());
    }
    public function show(){
        return view('user.main.product.single-product');
    }
}
