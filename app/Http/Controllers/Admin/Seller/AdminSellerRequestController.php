<?php

namespace App\Http\Controllers\Admin\Seller;

use Exception;
use Illuminate\Http\Request;
use App\Models\SellerRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminSellerRequestController extends Controller
{
    public function index(){
        $requests= SellerRequest::paginate();
        return view('admin.seller-request.index',get_defined_vars());
    }
    public function destroy(SellerRequest $seller_request){
        //  ($seller_request );
        $seller_request->delete();
        return redirect()->back()->with('sucess','rejected ');
    }
    public function accept(SellerRequest $seller_request){
        //  ($seller_request );
        try {
            DB::beginTransaction();
            $seller_request->user->role = 'seller';
            $seller_request->user->save();
            $seller_request->delete();
            DB::commit();
            return redirect()->back()->with('sucess','accepted ');

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('erorr','something went wrong ');
        }
    }


}
