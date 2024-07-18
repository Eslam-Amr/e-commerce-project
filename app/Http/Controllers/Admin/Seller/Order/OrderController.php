<?php

namespace App\Http\Controllers\Admin\Seller\Order;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use App\Models\Profit;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        if (auth('admin')->check()) {

        $orders=Checkout::paginate();}
        else if (auth('seller')->check()) {
            $orders=Checkout::where('seller_id',auth('seller')->user()->id)->paginate();}

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
            // dd($products);
            foreach ($products as $product) {
                $product->sold += $product->pivot->quantity;
                $product->save();
                Profit::create([
                    'seller_id' => auth('seller')->user()->id,
                    'product_id' => $product->id,
                    'profit' =>  $product->pivot->quantity * (1-($product->discount/100)) * $product->price ,
                    'date' => Carbon::now()->toDateString(),
                    'quantity' =>$product->pivot->quantity
                ]);
            }
        }
    return redirect()->back()->with(['success' =>"order status updated successfully"]);
    }
}




/*
use App\Models\Profit;

// Assuming you have the seller ID and profit data
$sellerId = 1; // Example seller ID
$profitAmount = 100.50; // Example profit amount
$date = now()->toDateString(); // Example date

Profit::create([
    'seller_id' => $sellerId,
    'profit' => $profitAmount,
    'date' => $date,
]);



use Carbon\Carbon;
use App\Models\Profit;

$sellerId = 1;
$month = 7;
$year = 2024;

$profits = Profit::where('seller_id', $sellerId)
    ->whereMonth('date', $month)
    ->whereYear('date', $year)
    ->sum('profit');




*/
/*
use App\Models\Profit;

// Assuming you have the seller ID, product ID, and profit data
$sellerId = 1; // Example seller ID
$productId = 1; // Example product ID
$profitAmount = 100.50; // Example profit amount
$date = now()->toDateString(); // Example date

Profit::create([
    'seller_id' => $sellerId,
    'product_id' => $productId,
    'profit' => $profitAmount,
    'date' => $date,
]);



use Carbon\Carbon;
use App\Models\Profit;

$sellerId = 1;
$productId = 1;
$month = 7;
$year = 2024;

$profits = Profit::where('seller_id', $sellerId)
    ->where('product_id', $productId)
    ->whereMonth('date', $month)
    ->whereYear('date', $year)
    ->sum('profit');




*/
