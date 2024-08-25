<?php

namespace App\Interface\User\Wishlist;

interface WishlistRepositoryInterface
{
    // public function index();
    public function destroyWishlist($wishlist);
    public function getUserWishlist();
    public function storeWishlist($id);
    public function getIfProductInWishlist($productId);
    // public function store($request);
    // public function update($request);
    // public function destroy($request);
}
