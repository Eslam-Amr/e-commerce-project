<?php

// namespace App\View\Components;

// use App\Models\Checkout;
// use Closure;
// use Illuminate\Contracts\View\View;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\View\Component;

// class ProductReviewForm extends Component
// {
//     /**
//      * Create a new component instance.
//      */
//     public function __construct($product_id)
//     {
//         if(Auth::check()){
//             $orders=Checkout::where('user_id', auth()->user()->id)->get();
// // dd($order);
// foreach($orders as $order){
//     dd($order);
//     $products=$order->products();
//     // dd($products);
//     foreach($products as $product){
//         // if($product->id == $product_id)
//     }
// }
//         }
//     }

//     /**
//      * Get the view / contents that represent the component.
//      */
//     public function render(): View|Closure|string
//     {
//         return view('components.product-review-form');
//     }
// }





namespace App\View\Components;

use App\Models\Checkout;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class ProductReviewForm extends Component
{
    public $product_id;
    public $canReview;


    public function __construct(public $id)
    {
        $this->product_id = $id;
        $this->canReview = false;

        if (Auth::check()) {
            $orders = Checkout::where('user_id', auth()->user()->id)->where('status', 'Completed')
            ->get();
// dd($orders);
            foreach ($orders as $order) {
                $products = $order->products;
                foreach ($products as $product) {
                    if ($product->id == $this->product_id) {
                        $this->canReview = true;
                        break 2; }
                }
            }
        }
    }


    public function render(): View|Closure|string
    {
        return view('components.product-review-form', [
            'canReview' => $this->canReview,
            'product_id' => $this->product_id,
        ]);
    }
}




