<?php

namespace App\Http\Controllers\Admin\Seller;

use Illuminate\Http\Request;
use App\Models\SellerRequest;
use App\Http\Controllers\Controller;

class AdminSellerRequestController extends Controller
{
    public function index(){
        // return ;
        // return seller-request view and handel it
        $request= SellerRequest::get();
        dd(($request));
        // return ;
    }
}
