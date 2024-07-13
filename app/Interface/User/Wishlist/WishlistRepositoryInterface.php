<?php

namespace App\Interface\User\Wishlist;

interface WishlistRepositoryInterface
{
    public function index();
    public function destroy($wishlist);
    public function store($id);
    // public function store($request);
    // public function update($request);
    // public function destroy($request);
}
