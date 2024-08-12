<?php

namespace App\Repository\User\Review;
use App\Models\Review;
use App\Interface\User\Review\ReviewRepositoryInterface;

class ReviewRepository implements ReviewRepositoryInterface
{
public function createUserReview($request){

    $review=$request->validated();
    $review['user_id']=auth()->user()->id;
  return   Review::create($review);
}
public function getProductReview($productId){
    return Review::where('product_id', $productId)->get();
}
}
