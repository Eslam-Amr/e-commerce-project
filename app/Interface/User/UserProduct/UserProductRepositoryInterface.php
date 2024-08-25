<?php

namespace App\Interface\User\UserProduct;

interface UserProductRepositoryInterface
{
  //  public function index();
    public function getFilterdSortedProductQuery();
    public function getProducts($productsQuery);
    public function getProductsCount($productsQuery);
    //public function show($product);
    // public function store($request);
    // public function update($request);
    // public function destroy($request);
}
