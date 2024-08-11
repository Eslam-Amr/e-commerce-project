<?php

namespace App\Http\Controllers\User\Review;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReviewRequest;
use App\Interface\User\Review\ReviewRepositoryInterface;

class ReviewController extends Controller
{
    private $reviewRepository;

    public function __construct(ReviewRepositoryInterface $reviewRepository)
    {
        $this->reviewRepository = $reviewRepository;
    }
    // public function store(Request $request){
<<<<<<< HEAD
    public function store(StoreReviewRequest $request){
// dd($request->all());
// $request->validate([
//     'product_id' => 'required|exists:products,id',
//     'review' => 'string',
//     'rating' => 'required|integer|min:1|max:5',
// ]);
// $review=$request->validated();
// $review['user_id']=auth()->user()->id;
// Review::create($review);
$this->reviewRepository->createUserReview($request);
=======
    public function __invoke(StoreReviewRequest $request){

$review=$request->validated();
$review['user_id']=auth()->user()->id;
Review::create($review);
>>>>>>> 7156878f3e6c48b70ddaaefdbfa64da21f62e25d
return redirect()->back()->with('success','Review created successfully');
    }
}
