<?php

namespace App\Http\Controllers\Admin\Seller;

use App\Http\Controllers\Controller;
use App\Models\SellerRequest;
use Illuminate\Http\Request;

class AdminSellerRequestController extends Controller
{
    public function index(){
        // return ;
        // return seller-request view and handel it
        $request= SellerRequest::get();
        dd(($request[0])->user);
    }
}
