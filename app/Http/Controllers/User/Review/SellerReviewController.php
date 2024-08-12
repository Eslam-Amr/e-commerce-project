<?php

namespace App\Http\Controllers\User\Review;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSellerReviewRequest;
use App\Interface\User\Review\SellerReviewRepositoryInterface;
use App\Models\Product;
use App\Models\SellerReview;
use Illuminate\Http\Request;

class SellerReviewController extends Controller
{
    private $sellerReviewRepository;

    public function __construct(SellerReviewRepositoryInterface $sellerReviewRepository)
    {

        $this->sellerReviewRepository = $sellerReviewRepository;
    }
    public function __invoke(StoreSellerReviewRequest $request){
// dd(Product::findOrFail($request->all()['product_id'])->seller->id);
        // dd($request->all(), $request->validated());
// $review = $request->validated();
// $review['user_id']=auth('web')->user()->id;
// $review['seller_id']=Product::findOrFail($request->all()['product_id'])->seller->id;
// // dd($review);
// SellerReview::create($review);
$this->sellerReviewRepository->createUserSellerReview($request);
return redirect()->back()->with('success','review added successfully');
// "product_id" => "3"
// seller_id
// user_id
/*
rate
comment
seller_id
user_id
*/
/*
array:4 [▼ // app\Http\Controllers\User\Review\SellerReviewController.php:12
  "_token" => "aEyL3XbSJqx7gvxczCSIvZjv0itqOZXdZD50YNcU"
  "product_id" => "3"
  "comment" => "Aliquid aperiam ea a"
  "rate" => "3"
]
  array:2 [▼ // app\Http\Controllers\User\Review\SellerReviewController.php:12
  "rate" => "3"
  "comment" => "Aliquid aperiam ea a"
]
*/
    }
}
