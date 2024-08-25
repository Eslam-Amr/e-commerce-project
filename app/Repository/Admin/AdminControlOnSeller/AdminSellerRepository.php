<?php

namespace App\Repository\Admin\AdminControlOnSeller;
use App\Interface\Admin\AdminControlOnSeller\AdminSellerInterface;
use App\Models\Seller;

class AdminSellerRepository implements AdminSellerInterface
{
    public function getSellerPaginate(){
return Seller::paginate();
    }
    public function sellerDestroy(Seller $seller){
        $seller->delete();
    }
    public function sellerBlock(Seller $seller){
        $seller->block =1;
        $seller->save();
    }
    public function sellerUnBlock(Seller $seller){
        $seller->block =0;
        $seller->save();
    }
}
