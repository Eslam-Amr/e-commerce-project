<?php

namespace App\Http\Controllers\Admin\AdminControlOnSeller;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;

class ShowSellerReviewController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Seller $seller)
    {
        return view('admin.seller.show-review',['reviews'=>$seller->reviews()->paginate()]);
    }
}
