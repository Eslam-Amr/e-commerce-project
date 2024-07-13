<?php

namespace App\Repository\User\Wishlist;

use App\Models\Wishlist;
use App\Interface\User\Wishlist\WishlistRepositoryInterface;

class WishlistRepository implements WishlistRepositoryInterface
{

public function index(){
    $wishlists=[];
    if(auth()->user() != null)
    $wishlists = Wishlist::where('user_id',auth()->user()->id)->get();
    return view('user.main.wishlist.wishlist',get_defined_vars());

}
public function destroy( $wishlist){

    $wishlist->delete();
            return redirect()->back()->with('success','Wishlist Deleted Successfully');

}
public function store($id){
    Wishlist::create(['product_id'=>$id,'user_id'=>auth()->user()->id]);
    return redirect()->back()->with(['success'=>'added to wishlist successfuly']);
}
}
