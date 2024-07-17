<?php

namespace App\Http\Controllers\Admin\Seller\Order;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders=Checkout::paginate();
        return view('admin.order.index',get_defined_vars());

    }
    public function destroy(Checkout $checkout){
        // dd($checkout)
 $products = $checkout->products;
 foreach ($products as $product) {
     $product->stock += $product->pivot->quantity;
     $product->save();
 }
        $checkout->delete();
        return redirect()->back()->with(['success' =>"order deleted successfully"]);
    }
    public function show(Checkout $checkout){
        // dd($checkout->info);
        return view('admin.order.show',get_defined_vars());
    }
    public function update(Request $request,Checkout $checkout){
        $checkout->update($request->all());
        if($request->all()['status'] == 'Completed'){
            $products = $checkout->products;
            foreach ($products as $product) {
                $product->sold += $product->pivot->quantity;
                $product->save();
            }

        }
    return redirect()->back()->with(['success' =>"order status updated successfully"]);
    }
}
