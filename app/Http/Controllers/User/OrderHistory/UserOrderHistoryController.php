<?php

namespace App\Http\Controllers\User\OrderHistory;

use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserOrderHistoryController extends Controller
{
    public function index(){
        $allOrder=Checkout::where('user_id',auth()->user()->id)->get();
        return view('user.main.orders.index',get_defined_vars());
    }
    public function show(Checkout $checkout){
        if($checkout->user_id != auth()->user()->id)
        abort(403);
    return view('user.main.orders.show',get_defined_vars());
    }
}
