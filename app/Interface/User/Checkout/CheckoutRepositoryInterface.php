<?php

namespace App\Interface\User\Checkout;

interface CheckoutRepositoryInterface
{
    // public function index();
    // public function destroy($wishlist);
    /*
    public function store($request);
    public function create();*/
    public function createCheckOutInfo($request);
public function getUserCheckout();

    // public function store($request, $id);
    // public function increment($id);
    // public function destroy($id);
    // public function decrement($id);
    // public function update($request);
    // public function destroy($request);
}
