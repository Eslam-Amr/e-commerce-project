<?php

namespace App\Interface\Category;

interface CategoryRepositoryInterface
{
    public function index();
    public function store($request);
    public function create();
    // public function update($request);
    // public function destroy($request);
}
