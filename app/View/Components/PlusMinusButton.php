<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class PlusMinusButton extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $stock )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.plus-minus-button',get_defined_vars());
    }
}
