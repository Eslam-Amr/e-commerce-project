<?php

namespace App\Http\Controllers\User\OrderHistory;

use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interface\User\Checkout\CheckoutRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class UserOrderHistoryController extends Controller
{
    protected $checkoutRepo;
    public function __construct(CheckoutRepositoryInterface $checkoutRepo){
$this->checkoutRepo = $checkoutRepo;

}
    public function index(){
        // $allOrder=Checkout::where('user_id',auth()->user()->id)->get();
if(Auth::check())
        $allOrder=$this->checkoutRepo->getUserCheckout();
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
