<?php

namespace App\Repository\User\Review;
use App\Interface\User\Review\SellerReviewRepositoryInterface;
use App\Models\Review;
use App\Interface\User\Review\ReviewRepositoryInterface;
use App\Models\Product;
use App\Models\SellerReview;

class SellerReviewRepository implements SellerReviewRepositoryInterface
{
    public function createUserSellerReview($request){
        $review = $request->validated();
$review['user_id']=auth('web')->user()->id;
$review['seller_id']=Product::findOrFail($request->all()['product_id'])->seller->id;
// dd($review);
return SellerReview::create($review);
    }
}
