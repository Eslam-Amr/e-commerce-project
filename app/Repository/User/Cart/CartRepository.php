<?php

namespace App\Repository\User\Cart;


use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Interface\User\Cart\CartRepositoryInterface;

class CartRepository implements CartRepositoryInterface
{
    public function store($request,$id)
    {
        if (!Auth::check())
            return redirect()->route('login')->with(['error' => 'please login']);
        $quantity = $request->input('quantity', 1);
        $cart = Cart::where('user_id', auth()->user()->id)->first();
        if ($cart == null)
            $cart = Cart::create(['user_id' => auth()->user()->id]);
            $cartProduct = $cart->products()->where('product_id', $id)->where('hide',0)->where('admin-acceptance',1)->first();
            $product=Product::select('stock')->findOrFail($id);
            if ($cartProduct) {
                $quantity +=$cartProduct->pivot->quantity;
                if($product->stock >= $quantity)
                $cart->products()->updateExistingPivot($id, ['quantity' =>  $quantity]);
                else
                return redirect()->back()->with(['error' => "the available item is $product->stock"]);
            } else {
                if($product->stock >= $quantity)
                $cart->products()->attach($id, ['quantity' => $quantity]);
                else
                return redirect()->back()->with(['error' => "the available item is $product->stock"]);
            }
            return redirect()->back()->with(['success' => 'Product added to cart']);
        }
        public function index(){
            $cart=null;
            if(Auth::check())
            $cart = Cart::where('user_id',auth()->user()->id)->with('products')->first();

                        return view('user.main.cart.index',get_defined_vars());
        }
    public function getUserCart(){
        return Cart::where('user_id', auth()->user()->id)->first();
    }
    public function createUserCart(){
        return Cart::create(['user_id' => auth()->user()->id]);
    }
    public function getProductStock($id)
    {

        return Product::select('stock')->findOrFail($id);
    }
        public function increment($id){
            if (!Auth::check()) {
                return redirect()->back()->with(['error' => "User is not authenticated."]);
            }
            $cart=null;
            if(Auth::check())
            $cart = Cart::where('user_id',auth()->user()->id)->with('products')->first();
            $cartProduct = $cart->products()->where('product_id', $id)->first();
            $product=Product::select('stock')->findOrFail($id);
            if($product->stock >= $cartProduct->pivot->quantity+1)
            $cart->products()->updateExistingPivot($id, ['quantity' => ++$cartProduct->pivot->quantity  ]);

            else
            return redirect()->back()->with(['error' => "the available item is $product->stock"]);
            return redirect()->back()->with(['success' => "product in cart increment successfully"]);

        }
        public function destroy($id){

            $cart=null;
            if(Auth::check())
            $cart = Cart::where('user_id',auth()->user()->id)->with('products')->first();
            $cart->products()->detach($id);
            return redirect()->back()->with(['success' => "product deleted from cart successfully"]);

        }
    public function getUserCartWithProduct(){
        return Cart::where('user_id',auth()->user()->id)->with('products')->first();
    }
        public function decrement($id){
            $cart=null;
            if(Auth::check())
            $cart = Cart::where('user_id',auth()->user()->id)->with('products')->first();
            $cartProduct = $cart->products()->where('product_id', $id)->first();
            if(1 < $cartProduct->pivot->quantity)
            $cart->products()->updateExistingPivot($id, ['quantity' => --$cartProduct->pivot->quantity  ]);
            else{
                $cart->products()->detach($id);
            }

            return redirect()->back()->with(['success' => "product in cart decrement successfully"]);

        }
}
