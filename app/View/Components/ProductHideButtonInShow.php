<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductHideButtonInShow extends Component
{
    public $hide=true;
    /**
     * Create a new component instance.
     */
    public function __construct(public $product)
    {
        if($product->hide==1)
     $this->hide=false;
    else
    $this->hide=true;
// dd($this->hide);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-hide-button-in-show',['hide'=>$this->hide]);
    }
}
