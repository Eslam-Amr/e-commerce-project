<?php

namespace App\Repository\User\Checkout;

use App\Trait\CalculateTotal;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

use App\Models\Checkout;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Interface\User\Checkout\CheckoutRepositoryInterface;
use App\Models\Cart;
use App\Models\CheckoutInfo;

class CheckoutRepository implements CheckoutRepositoryInterface
{
    use CalculateTotal;
    public function store($request)
    {
        // dd('Create a new');
        if(!Auth::check())
        return redirect()->route('login')->with(['error'=>'please login first']);
        if(!Cart::where('user_id', auth()->user()->id)->first())
        return redirect()->route('user.product.index')->with(['error'=>'no cart found']);

    try {
        DB::beginTransaction(); // Start transaction

$cart = Cart::where('user_id', auth()->user()->id)->first();

foreach ($cart->products as $product) {
    if ($product->stock < $product->pivot->quantity) {
        return redirect()->back()->with(['error' => 'stock amount doesn\'t match the quantity']);
    }
}

$totalPriceAfterDiscount = $this->calculateTotalFromProductArray($cart->products);

$checkoutInfo = CheckoutInfo::create($request->all());

$sellerCheckouts = []; // Array to track totals per seller

foreach ($cart->products as $product) {
    // Ensure there is a checkout for the seller
    $checkout = Checkout::firstOrCreate(
        [
            'user_id' => auth()->user()->id,
            'seller_id' => $product->seller_id,
            'checkout_info_id' => $checkoutInfo->id,
        ],
        [
            'total' => 0,
        ]
    );

    // Attach product to the checkout
    $checkout->products()->attach($product->id, ['quantity' => $product->pivot->quantity]);

    // Decrease product stock
    $product->stock -= $product->pivot->quantity;
    $product->save();

    // Calculate total for seller's checkout
    $productTotal = $product->pivot->quantity * $product->price; // Assuming price is a property of the product

    if (!isset($sellerCheckouts[$product->seller_id])) {
        $sellerCheckouts[$product->seller_id] = $checkout;
        $sellerCheckouts[$product->seller_id]->total = 0;
    }

    $sellerCheckouts[$product->seller_id]->total += $productTotal;
}

// Save the updated totals for each seller's checkout
foreach ($sellerCheckouts as $checkout) {
    $checkout->save();
}

$cart->products()->detach();
$cart->delete();

DB::commit(); // Commit transaction if all operations succeed

return redirect()->route('home')->with(['success' => 'Checkout created successfully']);

    } catch (\Throwable $th) {
        DB::rollback();
        $errorMessage = "An error occurred during checkout: " . $th->getMessage();

        if ($th instanceof ValidationException) {
            $errorMessage = "Validation failed: " . $th->validator->errors()->first();
        }

        return redirect()->back()->with('error', $errorMessage)->withInput();
    }
}
//     public function store($request)
//     {
//         // dd('Create a new');
//         if(!Auth::check())
//         return redirect()->route('login')->with(['error'=>'please login first']);
//         if(!Cart::where('user_id', auth()->user()->id)->first())
//         return redirect()->route('user.product.index')->with(['error'=>'no cart found']);

//     try {
//         DB::beginTransaction();
//         $cart = Cart::where('user_id', auth()->user()->id)->first();
//         foreach($cart->products as $product){
//             if($product->stock < $product->pivot->quantity )
//             return redirect()->back()->with(['error' => 'stock amount doesn\'t match the quantity']);
//         }
//         $totalPriceAfterDiscount = $this->calculateTotalFromProductArray($cart->products);

//         $checkoutInfo = CheckoutInfo::create($request->all());
//         foreach ($cart->products as $product) {
//             $checkout = Checkout::firstOrCreate(
//                 [
//                     'user_id' => auth()->user()->id,
//                     'seller_id' => $product->seller_id,
//                     'checkout_info_id' => $checkoutInfo->id,
//                 ],
//                 [
//                     'total' => 0,
//                 ]
//             );

//             $checkout->products()->attach($product->id, ['quantity' => $product->pivot->quantity]);
//             $product->stock -= $product->pivot->quantity;
//             $product->save();

//             $checkout->total += $product->pivot->quantity * $product->price; // Assuming price is a property of the product
//             $checkout->save();
//         }
//         $cart->products()->detach();
//         $cart->delete();

//         DB::commit();
//            return redirect()->route('home')->with(['success'=>'checkout created successfully']);
//     } catch (\Throwable $th) {
//         DB::rollback();
//         $errorMessage = "An error occurred during checkout: " . $th->getMessage();

//         if ($th instanceof ValidationException) {
//             $errorMessage = "Validation failed: " . $th->validator->errors()->first();
//         }

//         return redirect()->back()->with('error', $errorMessage)->withInput();
//     }
// }
//     public function store($request)
//     {
//         // dd('Create a new');
//         if(!Auth::check())
//         return redirect()->route('login')->with(['error'=>'please login first']);
//         if(!Cart::where('user_id', auth()->user()->id)->first())
//         return redirect()->route('user.product.index')->with(['error'=>'no cart found']);

//     try {
//         DB::beginTransaction(); // Start transaction

//         $cart = Cart::where('user_id', auth()->user()->id)->first();
//         foreach($cart->products as $product){
//             if($product->stock < $product->pivot->quantity )
//             return redirect()->back()->with(['error' => 'stock amount doesn\'t match the quantity']);
//         }
//         $totalPriceAfterDiscount = $this->calculateTotalFromProductArray($cart->products);

//         $checkoutInfo = CheckoutInfo::create($request->all());

//         $checkout = Checkout::create([
//             'total' => $totalPriceAfterDiscount,
//             'user_id' => auth()->user()->id,
//             // 'cart_id' => $cart->id,
//             'checkout_info_id' => $checkoutInfo->id,
//         ]);

//         foreach ($cart->products as $product) {
//             $checkout->products()->attach($product->id, ['quantity' => $product->pivot->quantity]);
//             $product->stock-=$product->pivot->quantity;
//             $product->save();

//         }
//         $cart->products()->detach();
//         $cart->delete();

//         DB::commit(); // Commit transaction if all operations succeed
//         return redirect()->route('home')->with(['success'=>'checkout created successfully']);
//     } catch (\Throwable $th) {
//         DB::rollback(); // Rollback transaction if any operation fails

//         // Determine the error message based on the exception
//         $errorMessage = "An error occurred during checkout: " . $th->getMessage();

//         // Check if it's a validation exception to handle errors from validation
//         if ($th instanceof ValidationException) {
//             $errorMessage = "Validation failed: " . $th->validator->errors()->first();
//         }

//         // Redirect back with error message
//         return redirect()->back()->with('error', $errorMessage)->withInput();
//     }
// }
public function create()
    {
        if(!Auth::check())
        return redirect()->route('login')->with(['error'=>'please login first']);
        if(!Cart::where('user_id', auth()->user()->id)->first())
        return redirect()->route('user.product.index')->with(['error'=>'no cart found']);
        return view('user.main.checkout.index');

    }
}
