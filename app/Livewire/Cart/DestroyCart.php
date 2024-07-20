<?php

namespace App\Livewire\Cart;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class DestroyCart extends Component
{
    public $productId;
    public $product;
    public $cart=null;
    protected $listeners = ['cartUpdated' => 'refreshCart'];

    public function mount($productId)
    {
        $this->productId = $productId;
        $this->loadCart();
    }



    public function loadCart()
    {
        if (Auth::check()) {
            $this->cart = Cart::where('user_id', Auth::id())->with('products')->first();
        }
    }

    public function refreshCart()
    {
        $this->loadCart();
    }


    public function destroy()
    {
        if (Auth::check()) {
            $this->cart = Cart::where('user_id', Auth::id())->with('products')->first();

            if ($this->cart) {
                $this->cart->products()->detach($this->productId);
                $this->reset('cart');
                $this->cart = Cart::where('user_id', Auth::id())->with('products')->first();

                toastr()->flash('success', 'Product deleted from cart successfully');
                return redirect()->back()->with('cart',$this->cart);
            } else {
                toastr()->flash('error', 'Cart not found');
            }
        } else {
            toastr()->flash('error', 'Please login to perform this action');
        }
    }




    public function render()
    {
        return view('livewire.cart.destroy-cart' , [ 'cart' => $this->cart ]);
    }
}

/*
        public function destroy($id){

        $cart=null;
        if(Auth::check())
        $cart = Cart::where('user_id',auth()->user()->id)->with('products')->first();
            $cart->products()->detach($id);
            return redirect()->back()->with(['success' => "product deleted from cart successfully"]);

        }

*/
