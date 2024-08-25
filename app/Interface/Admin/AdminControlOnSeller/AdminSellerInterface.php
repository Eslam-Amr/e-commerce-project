<?php

namespace App\Interface\Admin\AdminControlOnSeller;

use App\Models\Seller;

interface AdminSellerInterface
{
    public function getSellerPaginate();
    public function sellerDestroy(Seller $seller);
    public function sellerBlock(Seller $seller);
    public function sellerUnBlock(Seller $seller);
}
