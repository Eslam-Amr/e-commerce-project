<?php

namespace App\View\Components;

use App\Models\Cart;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CheckoutButton extends Component
{
    public $apear=true;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
//         if(auth()->check()){

//             if (!Cart::where('user_id', auth()->user()->id)->first())
//             $this->apear=false;
//         if(!Cart::where('user_id', auth()->user()->id)->first()->products()->where('hide',0)->where('admin-acceptance',1)->count()>0)
//         $this->apear=false;
// }
// else
// $this->apear=false;
if (auth()->check()) {
    $cart = Cart::where('user_id', auth()->user()->id)->first();

    if (!$cart) {
        $this->apear = false;
    } else {
        $hasProducts = $cart->products()
            ->where('hide', 0)
            ->where('admin-acceptance', 1)
            ->count() > 0;

        if (!$hasProducts) {
            $this->apear = false;
        }
    }
} else {
    $this->apear = false;
}



    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.checkout-button' , ['apear'=>$this->apear]);
    }
}
