<?php

namespace App\Http\Controllers\User\Cart;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store(Request $request,$id)
    {
        if (!Auth::check())
            return redirect()->route('login')->with(['error' => 'please login']);
        $quantity = $request->input('quantity', 1); // Default to 1 if quantity is not provided

        $cart = Cart::where('user_id', auth()->user()->id)->first();
        if ($cart == null)
            $cart = Cart::create(['user_id' => auth()->user()->id]);
            $cartProduct = $cart->products()->where('product_id', $id)->first();

            if ($cartProduct) {
                // If product is already in the cart, update the quantity
                $cart->products()->updateExistingPivot($id, ['quantity' => $cartProduct->pivot->quantity + $quantity]);
            } else {
                // If product is not in the cart, attach it with the given quantity
                $cart->products()->attach($id, ['quantity' => $quantity]);
            }
            return redirect()->back()->with(['success' => 'Product added to cart']);
            // return redirect()->route('cart.index')->with(['success' => 'Product added to cart']);
        }
}
