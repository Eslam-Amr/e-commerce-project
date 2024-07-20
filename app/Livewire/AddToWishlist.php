<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Wishlist;

class AddToWishlist extends Component
{

    public $wishlist;
    public $productId;

    public function mount($wishlist, $productId)
    {
        $this->wishlist = $wishlist;
        $this->productId = $productId;
    }
    public function addWishlist()
    {
        if (auth()->check()) {
           $this->wishlist= Wishlist::create(['product_id' => $this->productId, 'user_id' => auth()->user()->id]);
           toastr()->flash('success', 'Added to wishlist successfully');

        //    return redirect()->back()->with(['success', 'Added to wishlist successfully','wishlist' => $this->wishlist]);
        } else {
            return redirect()->route('login');
        }
    }


    public function deleteWishlist()
    {
        if ($this->wishlist) {
            $this->wishlist->delete();
            $this->wishlist = null;  // Update the wishlist property
            toastr()->flash('success', 'Wishlist Deleted Successfully');
            // return redirect()->back()->with(['success', 'Wishlist Deleted Successfully','wishlist' => null]);
        }
    }
    public function render()
    {
        return view('livewire.add-to-wishlist');
    }
}
