{{-- <div class="container mt-5">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <h2>Leave a Review</h2>
            <form action="{{ route('reviews.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="review">Your Review:</label>
                    <textarea name="review" id="review" class="form-control" rows="5" required></textarea>
                </div>

                <div class="form-group">
                    <label for="rating">Rating:</label>
                    <select name="rating" id="rating" class="form-control" required>
                        <option value="">Select Rating</option>
                        <option value="1">1 - Very Poor</option>
                        <option value="2">2 - Poor</option>
                        <option value="3">3 - Average</option>
                        <option value="4">4 - Good</option>
                        <option value="5">5 - Excellent</option>
                    </select>
                </div>

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary">Submit Review</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}
<!-- resources/views/components/product-review-form.blade.php -->
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 mt-4">
            @if($canReview)
                <h2>Leave a Review</h2>
                <form action="{{ route('review.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product_id }}">

                    <div class="form-group">
                        <label for="review">Your Review:</label>
                        <textarea name="comment" id="review" class="form-control" rows="5" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="rating">Rating:</label>
                        <select name="rate" id="rating" class="form-control" required>
                            <option selected disabled>Select Rating</option>
                            <option value="1">1 - Very Poor</option>
                            <option value="2">2 - Poor</option>
                            <option value="3">3 - Average</option>
                            <option value="4">4 - Good</option>
                            <option value="5">5 - Excellent</option>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Submit Review</button>
                    </div>
                </form>
            @else
            <center class="mt-5">

                <p>You can only review products that you have purchased and completed.</p>
            </center>
            @endif
        </div>
    </div>
</div>
