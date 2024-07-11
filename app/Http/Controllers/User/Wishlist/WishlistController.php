<?php

namespace App\Http\Controllers\User\Wishlist;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WishlistController extends Controller
{
    public function index(){
        // dd(auth()->user()->wishlist);
        $wishlists=[];
        if(auth()->user() != null)
        $wishlists = Wishlist::where('user_id',auth()->user()->id)->get();
        return view('user.main.wishlist.wishlist',get_defined_vars());
    }
    public function destroy(wishlist $wishlist){
        
$wishlist->delete();
        return redirect()->back()->with('success','Wishlist Deleted Successfully');
    }
    public function store($id){
        Wishlist::create(['product_id'=>$id,'user_id'=>auth()->user()->id]);
        return redirect()->back()->with(['success'=>'added to wishlist successfuly']);
    }
}
