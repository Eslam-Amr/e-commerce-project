<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CartManager extends Component
{
    public $product;
    public $quantity = 1;

    public function mount($productId)
    {
        $this->product = Product::findOrFail($productId);
    }

    public function addToCart()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with(['error' => 'Please login']);
        }

        $cart = Cart::where('user_id', auth()->user()->id)->first();
        if ($cart == null) {
            $cart = Cart::create(['user_id' => auth()->user()->id]);
        }

        $cartProduct = $cart->products()->where('product_id', $this->product->id)->first();

        if ($cartProduct) {
            $newQuantity = $this->quantity + $cartProduct->pivot->quantity;
            if ($this->product->stock >= $newQuantity) {
                $cart->products()->updateExistingPivot($this->product->id, ['quantity' => $newQuantity]);
            } else {
                // return redirect()->back()->with(['error' => "The available item is {$this->product->stock}"]);
                 toastr()->flash('error', "The available item is {$this->product->stock}");
            }
        } else {
            if ($this->product->stock >= $this->quantity) {
                $cart->products()->attach($this->product->id, ['quantity' => $this->quantity]);
            } else {
                // return redirect()->back()->with(['error' => "The available item is {$this->product->stock}"]);
                 toastr()->flash('error', "The available item is {$this->product->stock}");
            }
        }

        toastr()->flash('success', 'Product added to cart');
    }

    public function render()
    {
        return view('livewire.cart-manager', ['product' => $this->product]);
    }
}
