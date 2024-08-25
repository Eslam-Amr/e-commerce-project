<?php

namespace App\Interface\User\Cart;

interface CartRepositoryInterface
{
    public function getUserCart();
    public function getUserCartWithProduct();
    public function createUserCart();
    public function getProductStock($id);
    // public function destroy($wishlist);
    // public function store($id);
 /*   public function index();
    public function store($request, $id);
    public function increment($id);
    public function destroy($id);
    public function decrement($id);*/
    // public function update($request);
    // public function destroy($request);
}
