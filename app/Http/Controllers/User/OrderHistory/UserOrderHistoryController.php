<?php

namespace App\Http\Controllers\User\OrderHistory;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;

class UserOrderHistoryController extends Controller
{
    public function index(){
        $allOrder=Checkout::where('user_id',auth()->user()->id)->get();
        return view('user.main.orders.index',get_defined_vars());
    }
}
