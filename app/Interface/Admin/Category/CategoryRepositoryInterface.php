<?php

namespace App\Interface\Admin\Category;

interface CategoryRepositoryInterface
{
    public function getCategorySample();
    public function getCategorypaginate();
    public function createCategory($request);

    // public function index();
    // public function store($request);
    // public function create();
    // public function show($request);
    // public function edit($request);
    // public function destroy($request);
    public function destroyCategory($request);
    // public function update($request,$category);
    public function updateCategory($request,$category);
    // public function destroy($request);
}
