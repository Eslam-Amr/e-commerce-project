<?php

namespace App\Http\Controllers\Admin\AdminControlOnSeller;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;

class AdminSellerController extends Controller
{
    public function index(){
        $sellers = Seller::paginate();
        // $seller = Seller::find(4);
        // dd($seller->profits->sum('profit'));
        return view('admin.seller.index',get_defined_vars());
    }
    public function destroy(Seller $seller) {
$seller->delete();
return redirect()->back()->with('success','seller deleted successfully');
    }

    public function block(Seller $seller) {
$seller->block =1;
$seller->save();
return redirect()->back()->with('success','seller blocked successfully');
    }
    public function unblock(Seller $seller) {
$seller->block =0;
$seller->save();
return redirect()->back()->with('success','seller unblocked successfully');
    }

}
