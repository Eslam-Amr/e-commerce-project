<?php

namespace App\Livewire\Cart;
use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AddToCart extends Component
{
    public $product;
    public $quantity = 1;
    protected $listeners = ['quantityUpdated' => 'updateQuantity'];


    public function decrement(){
        if($this->quantity>1)
        $this->quantity--;
    }
    public function increment(){
        if($this->product->stock>$this->quantity)
        $this->quantity++;
    }
    public function mount($productId)
    {
        $this->product = Product::findOrFail($productId);

        // $this->listeners = ['quantityUpdated' => 'updateQuantity'];
    }

    public function updateQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function addToCart()
    {
        $flag=true;
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
                $flag=false;
                 toastr()->flash('error', "The available item is {$this->product->stock}");
                // return redirect()->back()->with(['error' => "The available item is {$this->product->stock}"]);
            }
        } else {
            if ($this->product->stock >= $this->quantity) {
                $cart->products()->attach($this->product->id, ['quantity' => $this->quantity]);
            } else {
                $flag=false;
                 toastr()->flash('error', "The available item is {$this->product->stock}");
                // return redirect()->back()->with(['error' => "The available item is {$this->product->stock}"]);
            }
        }
if($flag)
        toastr()->flash('success', 'Product added to cart');
    }
    public function render()
    {
        return view('livewire.cart.add-to-cart');
    }
}
