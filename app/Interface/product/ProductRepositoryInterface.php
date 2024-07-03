<?php

namespace App\Interface\Product;

interface ProductRepositoryInterface
{
    public function index();
    public function store($request);
    public function create();
    public function show($request);
    public function edit($request);
    public function destroy($request);
    public function update($request,$category);
    // public function destroy($request);
}
