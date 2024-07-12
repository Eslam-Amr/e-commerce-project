<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class PriceAfterDiscount extends Component
{
    public $finalPrice;
    /**
     * Create a new component instance.
     */
    public function __construct(public $price, public $discount, public $quantity=1)
    {
        $this->finalPrice = ($price * (1 - ($discount / 100)) * $quantity);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.price-after-discount',['finalPrice'=>$this->finalPrice]);
    }
}
