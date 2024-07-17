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
    public function cancel(Checkout $checkout){
        // dd($checkout->products);
        $products = $checkout->products;
 foreach ($products as $product) {
     $product->stock += $product->pivot->quantity;
     $product->save();
 }
        $checkout->status = "cancelled";
        $checkout->save();
        return redirect()->back()->with('success','order canceled');
    }
}
