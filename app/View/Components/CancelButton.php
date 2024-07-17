<?php

namespace App\View\Components;

use App\Models\Checkout;
use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CancelButton extends Component
{
    public  $order;
    public  $appearFlag ;
    /**
     * Create a new component instance.
     */
    public function __construct( $order)
    {
        $this->order = $order;
        $finalDay = Carbon::parse($this->order['created_at'])->addDay();
        $currentDate = Carbon::now();
        // $this->appearFlag = ($currentDate < $finalDay) && ($this->order['status'] != 'canceled' && $this->order['status'] != 'completed');
        $this->appearFlag = ($currentDate < $finalDay) && ($this->order['status'] != 'Cancelled' && $this->order['status'] != 'Completed');

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cancel-button',get_defined_vars());
    }
}
