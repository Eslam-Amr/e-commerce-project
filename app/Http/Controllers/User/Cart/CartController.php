<?php

namespace App\Http\Controllers\User\Cart;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Trait\CheckIfLoginTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Interface\User\Cart\CartRepositoryInterface;

class CartController extends Controller
{
    use CheckIfLoginTrait;
    private $CartRepository;

    public function __construct(CartRepositoryInterface $CartRepository)
    {
        $this->CartRepository = $CartRepository;
    }
   public function store(Request $request, $id)
   {
    $this->checkIfLogin();
    // if (!Auth::check())
    // return redirect()->route('login')->with(['error' => 'please login']);
$quantity = $request->input('quantity', 1);
// $cart = Cart::where('user_id', auth()->user()->id)->first();
$cart = $this->CartRepository->getUserCart();
//if cart doesn't exist create it
if ($cart == null)
    $cart =  $this->CartRepository->createUserCart();
    $cartProduct = $cart->products()->where('product_id', $id)->where('hide',0)->where('admin-acceptance',1)->first();
    $product=$this->CartRepository->getProductStock($id);
    // $product=Product::select('stock')->findOrFail($id);
    if ($cartProduct) {
        $quantity +=$cartProduct->pivot->quantity;
        if($product->stock >= $quantity)
        $cart->products()->updateExistingPivot($id, ['quantity' =>  $quantity]);
        else
        return redirect()->back()->with(['error' => "the available item is $product->stock"]);
    } else {
        if($product->stock >= $quantity)
        $cart->products()->attach($id, ['quantity' => $quantity]);
        else
        return redirect()->back()->with(['error' => "the available item is $product->stock"]);
    }
    return redirect()->back()->with(['success' => 'Product added to cart']);

   }
    // public function store(Request $request, $id)
    // {
    //     return $this->CartRepository->store($request, $id);
    //     // if (!Auth::check())
    //     //     return redirect()->route('login')->with(['error' => 'please login']);
    //     // $quantity = $request->input('quantity', 1);
    //     // $cart = Cart::where('user_id', auth()->user()->id)->first();
    //     // if ($cart == null)
    //     //     $cart = Cart::create(['user_id' => auth()->user()->id]);
    //     //     $cartProduct = $cart->products()->where('product_id', $id)->first();
    //     //     $product=Product::select('stock')->findOrFail($id);
    //     //     if ($cartProduct) {
    //     //         $quantity +=$cartProduct->pivot->quantity;
    //     //         if($product->stock >= $quantity)
    //     //         $cart->products()->updateExistingPivot($id, ['quantity' =>  $quantity]);
    //     //         else
    //     //         return redirect()->back()->with(['error' => "the available item is $product->stock"]);
    //     //     } else {
    //     //         if($product->stock >= $quantity)
    //     //         $cart->products()->attach($id, ['quantity' => $quantity]);
    //     //         else
    //     //         return redirect()->back()->with(['error' => "the available item is $product->stock"]);
    //     //     }
    //     //     return redirect()->back()->with(['success' => 'Product added to cart']);
    // }
    public function index()
    {
        return $this->CartRepository->index();
        // $cart=null;
        // if(Auth::check())
        // $cart = Cart::where('user_id',auth()->user()->id)->with('products')->first();

        //             return view('user.main.cart.index',get_defined_vars());
    }
    // public function increment($id){
    //     if (!Auth::check()) {
    //         return redirect()->back()->with(['error' => "User is not authenticated."]);
    //     }
    //     $cart=null;
    //     if(Auth::check())
    //     $cart = Cart::where('user_id',auth()->user()->id)->with('products')->first();
    //     $cartProduct = $cart->products()->where('product_id', $id)->first();
    //     $product=Product::select('stock')->findOrFail($id);
    //     if($product->stock >= $cartProduct->pivot->quantity+1)
    //     $cart->products()->updateExistingPivot($id, ['quantity' => ++$cartProduct->pivot->quantity  ]);

    //     else
    //     return redirect()->back()->with(['error' => "the available item is $product->stock"]);
    //     return redirect()->back()->with(['success' => "product in cart increment successfully"]);

    // }
    // public function destroy($id){

    //     $cart=null;
    //     if(Auth::check())
    //     $cart = Cart::where('user_id',auth()->user()->id)->with('products')->first();
    //     $cart->products()->detach($id);
    //     return redirect()->back()->with(['success' => "product deleted from cart successfully"]);

    // }
    // public function decrement($id){
    //     $cart=null;
    //     if(Auth::check())
    //     $cart = Cart::where('user_id',auth()->user()->id)->with('products')->first();
    //     $cartProduct = $cart->products()->where('product_id', $id)->first();
    //     if(1 < $cartProduct->pivot->quantity)
    //     $cart->products()->updateExistingPivot($id, ['quantity' => --$cartProduct->pivot->quantity  ]);
    //     else{
    //         $cart->products()->detach($id);
    //     }

    //     return redirect()->back()->with(['success' => "product in cart decrement successfully"]);

    // }
    public function increment($id)
    {
        return $this->CartRepository->increment($id);
    }
    public function destroy($id)
    {
        return $this->CartRepository->destroy($id);
    }
    public function decrement($id)
    {
        return $this->CartRepository->decrement($id);
    }
}
