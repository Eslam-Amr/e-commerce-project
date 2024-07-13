<?php

namespace App\Http\Controllers\User\Wishlist;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interface\User\Wishlist\WishlistRepositoryInterface;

class WishlistController extends Controller
{
    private $wishlistRepository;

    public function __construct(WishlistRepositoryInterface $wishlistRepository)
    {
        $this->wishlistRepository = $wishlistRepository;
    }
    public function index(){
        return $this->wishlistRepository->index();
        // $wishlists=[];
        // if(auth()->user() != null)
        // $wishlists = Wishlist::where('user_id',auth()->user()->id)->get();
        // return view('user.main.wishlist.wishlist',get_defined_vars());
    }
    public function destroy(wishlist $wishlist){
        return $this->wishlistRepository->destroy($wishlist);

        // $wishlist->delete();
        //         return redirect()->back()->with('success','Wishlist Deleted Successfully');
    }
    public function store($id){
        return $this->wishlistRepository->store($id);
    //     Wishlist::create(['product_id'=>$id,'user_id'=>auth()->user()->id]);
    //     return redirect()->back()->with(['success'=>'added to wishlist successfuly']);
    
    }
}
