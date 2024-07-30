<?php

namespace App\Http\Controllers\Admin\Seller\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductRequestController extends Controller
{
    public function index(){
        if(auth('admin')->check())
        $products =Product::where('hide',0)->where('admin-acceptance',0)->whereNot('status','accepted')->paginate();
        else
        $products =Product::where('seller_id',auth('seller')->user()->id)->where('hide',0)->where('admin-acceptance',0)->whereNot('status','accepted')->paginate();
        return view('admin.product-request.index',get_defined_vars());
    }
    public function accept(Product $product){
        $product['admin-acceptance'] =1;
        $product['status'] ='accepted';
        $product->save();
        return redirect()->back()->with('success','accepted');

    }
    public function reject(Product $product){
$product['status'] ='rejected';
$product->save();
return redirect()->back()->with('success','rejected');
    }
    public function hide(Product $product){
        $product['hide'] =1;
        $product->save();
        return redirect()->back()->with('success','hide');

    }
    public function unhide(Product $product){
        $product['hide'] =0;
        $product->save();
        return redirect()->back()->with('success','unhide');

    }
}
