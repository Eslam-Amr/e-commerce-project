<?php

namespace App\Http\Controllers\Admin\AdminControlOnSeller;

use App\Http\Controllers\Controller;
use App\Interface\Admin\AdminControlOnSeller\AdminSellerInterface;
use App\Models\Seller;
use Illuminate\Http\Request;

class AdminSellerController extends Controller
{
    private $adminSellerRepository;

    public function __construct(AdminSellerInterface $adminSellerRepository)
    {
        $this->adminSellerRepository = $adminSellerRepository;
    }

    public function index(){
        $sellers =$this->adminSellerRepository->getSellerPaginate();
        return view('admin.seller.index',get_defined_vars());
    }
    public function destroy(Seller $seller) {
$this->adminSellerRepository->sellerDestroy($seller);
return redirect()->back()->with('success','seller deleted successfully');
    }

    public function block(Seller $seller) {
$this->adminSellerRepository->sellerBlock($seller);
return redirect()->back()->with('success','seller blocked successfully');
    }
    public function unblock(Seller $seller) {
$this->adminSellerRepository->sellerUnBlock($seller);
return redirect()->back()->with('success','seller unblocked successfully');
    }

}
