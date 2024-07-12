<?php

namespace App\Http\Controllers\User\Cart;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store(Request $request,$id)
    {
        flash()->success('Operation completed successfully.');
        sweetalert()->info('Your account has been reactivated and a confirmation email has been sent.');

        if (!Auth::check())
            return redirect()->route('login')->with(['error' => 'please login']);
        $quantity = $request->input('quantity', 1); // Default to 1 if quantity is not provided

        $cart = Cart::where('user_id', auth()->user()->id)->first();
        if ($cart == null)
            $cart = Cart::create(['user_id' => auth()->user()->id]);
            $cartProduct = $cart->products()->where('product_id', $id)->first();
            $product=Product::select('stock')->findOrFail($id);
            if ($cartProduct) {
                $quantity +=$cartProduct->pivot->quantity;
                if($product->stock >= $quantity)
                $cart->products()->updateExistingPivot($id, ['quantity' =>  $quantity]);
                // dd($product->stock , $quantity);

                else
                return redirect()->back()->with(['error' => "the available item is {{$product->stock}}"]);

                // If product is already in the cart, update the quantity
            } else {
                // If product is not in the cart, attach it with the given quantity
                if($product->stock >= $quantity)
                $cart->products()->attach($id, ['quantity' => $quantity]);
                else
                return redirect()->back()->with(['error' => "the available item is {{$product->stock}}"]);
            }
            return redirect()->back()->with(['success' => 'Product added to cart']);
            // return redirect()->route('cart.index')->with(['success' => 'Product added to cart']);
        }
        public function index(){
            return view('user.main.cart.index');
        }
}
