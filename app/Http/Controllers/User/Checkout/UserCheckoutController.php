<?php

namespace App\Http\Controllers\User\Checkout;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCheckoutRequest;
use App\Http\Requests\UserCheckoutRequest;
use App\Interface\User\Cart\CartRepositoryInterface;
use App\Interface\User\Checkout\CheckoutRepositoryInterface;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\CheckoutInfo;
use App\Trait\CalculateTotal;
use App\Trait\CheckIfLoginTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class UserCheckoutController extends Controller
{
    use CalculateTotal,CheckIfLoginTrait;
    private $CartRepository;

    private $CheckoutRepository;

    public function __construct(CheckoutRepositoryInterface $CheckoutRepository,CartRepositoryInterface $CartRepository)
    {
        $this->CheckoutRepository = $CheckoutRepository;
        $this->CartRepository = $CartRepository;
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // if(!Auth::check())
        // return redirect()->route('login')->with(['error'=>'please login first']);
        // if(!Cart::where('user_id', auth()->user()->id)->first())
        // return redirect()->route('user.product.index')->with(['error'=>'no cart found']);
        // return view('user.main.checkout.index');
        // if(!Auth::check())
        // return redirect()->route('login')->with(['error'=>'please login first']);
        // if(!Cart::where('user_id', auth()->user()->id)->first())
       $this->checkIfLogin();
    if(!$this->CartRepository->getUserCart())
    return redirect()->route('user.product.index')->with(['error'=>'no cart found']);
    if(!$this->CartRepository->getUserCart()->products()->where('hide',0)->where('admin-acceptance',1)->count()>0)
        // if(!Cart::where('user_id', auth()->user()->id)->first()->products()->where('hide',0)->where('admin-acceptance',1)->count()>0)
        return redirect()->route('user.product.index')->with(['error'=>'no cart found']);
        return view('user.main.checkout.index');

// return $this->CheckoutRepository->create();
    }
/*
check for products quantity
delete from cart table
*/
    /**
     * Store a newly created resource in storage.
     */
    public function store(UserCheckoutRequest $request){
    // dd('Create a new');
    $this->checkIfLogin();
    // if(!Auth::check())
    // return redirect()->route('login')->with(['error'=>'please login first']);
    // if(!Cart::where('user_id', auth()->user()->id)->first() && Cart::where('user_id', auth()->user()->id)->first()->products->where('hide',0)->where('admin-acceptance',1)->count()>0)
    if(!$this->CartRepository->getUserCart() && $this->CartRepository->getUserCart()->products->where('hide',0)->where('admin-acceptance',1)->count()>0)
    return redirect()->route('user.product.index')->with(['error'=>'no cart found']);

try {
    DB::beginTransaction(); // Start transaction

$cart = $this->CartRepository->getUserCart();
// $cart = Cart::where('user_id', auth()->user()->id)->first();

foreach ($cart->products->where('hide',0)->where('admin-acceptance',1) as $product) {
if ($product->stock < $product->pivot->quantity) {
    return redirect()->back()->with(['error' => 'stock amount doesn\'t match the quantity']);
}
}

$totalPriceAfterDiscount = $this->calculateTotalFromProductArray($cart->products);

// $checkoutInfo = CheckoutInfo::create($request->all());
$checkoutInfo = $this->CheckoutRepository->createCheckOutInfo($request);
$sellerCheckouts = []; // Array to track totals per seller

foreach ($cart->products->where('hide',0)->where('admin-acceptance',1) as $product) {
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
// 1-(dis/100)
$productTotal = $product->pivot->quantity * ((1-($product->discount/100))*$product->price); // Assuming price is a property of the product

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
    // public function store(Request $request)
    // // public function store(StoreCheckoutRequest $request)
    // {
    //     return $this->CheckoutRepository->store($request);
    // //     // dd('Create a new');
    // //     if(!Auth::check())
    // //     return redirect()->route('login')->with(['error'=>'please login first']);
    // //     if(!Cart::where('user_id', auth()->user()->id)->first())
    // //     return redirect()->route('user.product.index')->with(['error'=>'no cart found']);
    // // // try {

    // // //     $cart=Cart::where('user_id',auth()->user()->id)->first();
    // // //     $totalPriceAfterDiscount=$this->calculateTotalFromProductArray($cart->products);
    // // //     $checkoutInfo = CheckoutInfo::create($request->all());
    // // //     $checkout=Checkout::create([
    // // //        'total'=>$totalPriceAfterDiscount,
    // // //        'user_id'=>auth()->user()->id,
    // // //        'cart_id'=>$cart->id,
    // // //        'checkout_info_id'=>$checkoutInfo->id,
    // // //     ]);
    // // //     foreach($cart->products as $product)
    // // //     $checkout->products()->attach($product->id, ['quantity' => $product->pivot->quantity]);
    // // // } catch (\Throwable $th) {
    // // //     //throw $th;
    // // // }
    // // try {
    // //     DB::beginTransaction(); // Start transaction

    // //     $cart = Cart::where('user_id', auth()->user()->id)->first();
    // //     foreach($cart->products as $product){
    // //         if($product->stock < $product->pivot->quantity )
    // //         return redirect()->back()->with(['error' => 'stock amount doesn\'t match the quantity']);
    // //     }
    // //     $totalPriceAfterDiscount = $this->calculateTotalFromProductArray($cart->products);

    // //     $checkoutInfo = CheckoutInfo::create($request->all());

    // //     $checkout = Checkout::create([
    // //         'total' => $totalPriceAfterDiscount,
    // //         'user_id' => auth()->user()->id,
    // //         // 'cart_id' => $cart->id,
    // //         'checkout_info_id' => $checkoutInfo->id,
    // //     ]);

    // //     foreach ($cart->products as $product) {
    // //         $checkout->products()->attach($product->id, ['quantity' => $product->pivot->quantity]);
    // //         $product->stock-=$product->pivot->quantity;
    // //         $product->save();

    // //     }
    // //     $cart->products()->detach();
    // //     $cart->delete();

    // //     DB::commit(); // Commit transaction if all operations succeed
    // //     return redirect()->route('home')->with(['success'=>'checkout created successfully']);
    // // } catch (\Throwable $th) {
    // //     DB::rollback(); // Rollback transaction if any operation fails

    // //     // Determine the error message based on the exception
    // //     $errorMessage = "An error occurred during checkout: " . $th->getMessage();

    // //     // Check if it's a validation exception to handle errors from validation
    // //     if ($th instanceof ValidationException) {
    // //         $errorMessage = "Validation failed: " . $th->validator->errors()->first();
    // //     }

    // //     // Redirect back with error message
    // //     return redirect()->back()->with('error', $errorMessage)->withInput();
    // // }
    // // dd('Create a new');
    //     // dd($totalPriceAfterDiscount);
    //     // dd($cart->products);
    // }

    /**
     * Display the specified resource.
     public function show(string $id)
     {
         //
     }
     */

    /**
     * Show the form for editing the specified resource.
     public function edit(string $id)
     {
         //
     }
     */

    /**
     * Update the specified resource in storage.
     public function update(Request $request, string $id)
     {
        //
    }
    */

    /**
     * Remove the specified resource from storage.
     public function destroy(string $id)
     {
        //
    }
    */
}
