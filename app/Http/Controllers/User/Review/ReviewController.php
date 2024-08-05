<?php

namespace App\Http\Controllers\User\Review;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // public function store(Request $request){
    public function __invoke(StoreReviewRequest $request){

$review=$request->validated();
$review['user_id']=auth()->user()->id;
Review::create($review);
return redirect()->back()->with('success','Review created successfully');
    }
}
