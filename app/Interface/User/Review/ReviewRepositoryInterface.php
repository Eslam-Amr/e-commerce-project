<?php

namespace App\Interface\User\Review;

interface ReviewRepositoryInterface
{

public function createUserReview($request);
public function getProductReview($productId);
}
