<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminHomePageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $allProfit=Product::select('sold','price','discount')->where('seller_id', auth()->user()->id)->get();
        return view('admin.index');
    }
}
