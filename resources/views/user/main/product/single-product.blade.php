@extends('user.part.master')
@section('title', 'product')
@section('content')
    {{-- @dd($product) --}}
    <section id="selling-product" class="single-product padding-xlarge">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="product-preview mb-3">
                        <img width="500px" src="{{ asset('storage/products/' . $product->image) }}" alt="single-product"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="product-info">
                        <div class="element-header">
                            <h3 itemprop="name" class="display-7 text-uppercase">{{ $product->name }}</h3>
                            <div class="rating-container d-flex align-items-center">
                                <div class="rating" data-rating="1" onclick=rate(1)>
                                    <svg class="star star-fill">
                                        <use xlink:href="#star-fill"></use>
                                    </svg>
                                    <span class="rating-count ps-2">5.2</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-price pt-3 pb-3">
                            <strong class="text-primary display-6 fw-bold"> <x-price-after-discount
                                    price="{{ $product->price }}" discount="{{ $product->discount }}" />EGP</strong>
                        </div>
                        <p>{{ $product->description }}</p>
                        <div class="cart-wrap padding-small">
                            <div class="color-options product-select">
                                <div class="color-toggle" data-option-index="0">
                                    <div style="display: flex;">

                                        <h4 class="item-title text-uppercase text-dark text-decoration-underline">Color:
                                        </h4>
                                        <h4> &nbsp; &nbsp;{{ $product->color }}</h4>
                                    </div>

                                </div>
                            </div>
                            <div class="swatch product-select" data-option-index="1">
                                <div style="display: flex">

                                    <h4 class="item-title text-uppercase text-dark text-decoration-underline">Size: </h4>
                                    <h4> &nbsp; &nbsp;{{ $product->size }}</h4>
                                </div>

                            </div>
                            <div class="product-quantity">
                                <div class="stock-number text-dark">{{ $product->stock }} in stock</div>

                                <div class="qty-button d-flex flex-wrap pt-3">

                                    <form action="{{ route('cart.store', $product->id) }}" method="POST">
                                        @csrf
                                        <x-plus-minus-button stock="{{ $product->stock }}" />
                                        <button type="submit" name="add-to-cart" value="1269"
                                            class="btn btn-black btn-medium text-uppercase mt-3 me-5">Add to cart</button>
                                    </form>

                                    @auth('web')
                                        <h2>
                                            @if ($wishlist === null)
                                                <form id="create_form" method="post"
                                                    action="{{ route('wishlist.store', $product->id) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-link text-danger">
                                                        <i class="btn-medium text-uppercase me-3 mt-4 fa-regular fa-heart"></i>
                                                    </button>
                                                </form>
                                            @else
                                                <form id="delete_form" method="post"
                                                    action="{{ route('wishlist.destroy', $wishlist) }}">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-link text-danger">
                                                        <i class="btn-medium text-uppercase me-3 mt-4 fa-solid fa-heart"></i>
                                                    </button>
                                                </form>
                                            @endif

                                        </h2>
                                    @endauth


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="meta-product py-2">
                        <div class="meta-item d-flex align-items-baseline">
                            <div style="display:flex ; ">
                                <h4 class="item-title no-margin pe-2">Category: &nbsp;
                                    &nbsp;{{ $product->category->name }}</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="product-info-tabs">
        <div class="container">
            <div class="row">
                <div class="tabs-listing">
                    <nav>
                        <div class="nav nav-tabs d-flex flex-wrap justify-content-center" id="nav-tab" role="tablist">
                            <button class="nav-link active text-uppercase pe-5" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">Description</button>
                            <button class="nav-link text-uppercase pe-5" id="nav-information-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-information" type="button" role="tab"
                                aria-controls="nav-information" aria-selected="false">Additional information</button>
                            <button class="nav-link text-uppercase pe-5" id="nav-review-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review"
                                aria-selected="false">Reviews</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active border-top border-bottom padding-small" id="nav-home"
                            role="tabpanel" aria-labelledby="nav-home-tab">
                            <p>Product Description</p>
                            <p>{{ $product->description }}</p>

                        </div>
                        <div class="tab-pane fade border-top border-bottom padding-small" id="nav-information"
                            role="tabpanel" aria-labelledby="nav-information-tab">

                            <p>{{ $product->additonal_information }}</p>
                        </div>
                        <div class="tab-pane fade border-top border-bottom padding-small" id="nav-review" role="tabpanel"
                            aria-labelledby="nav-review-tab">
                            <div class="review-box d-flex flex-wrap">
                                <div class="col-lg-6 d-flex flex-wrap">
                                    <div class="col-md-2">
                                        <div class="image-holder">
                                            <img src="asset/images/review-item1.jpg" alt="review" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="review-content">
                                            <div class="rating-container d-flex align-items-center">
                                                <div class="rating" data-rating="1" onclick="rate(1)">
                                                    <i class="icon icon-star"></i>
                                                </div>
                                                <div class="rating" data-rating="2" onclick="rate(1)">
                                                    <i class="icon icon-star"></i>
                                                </div>
                                                <div class="rating" data-rating="3" onclick="rate(1)">
                                                    <i class="icon icon-star"></i>
                                                </div>
                                                <div class="rating" data-rating="4" onclick="rate(1)">
                                                    <i class="icon icon-star-half"></i>
                                                </div>
                                                <div class="rating" data-rating="5" onclick="rate(1)">
                                                    <i class="icon icon-star-empty"></i>
                                                </div>
                                                <span class="rating-count">(3.5)</span>
                                            </div>
                                            <div class="review-header">
                                                <span class="author-name">Tina Johnson</span>
                                                <span class="review-date">– 03/07/2023</span>
                                            </div>
                                            <p>Vitae tortor condimentum lacinia quis vel eros donec ac. Nam at lectus
                                                urna duis convallis convallis</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex flex-wrap">
                                    <div class="col-md-2">
                                        <div class="image-holder">
                                            <img src="asset/images/review-item2.jpg" alt="review" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="review-content">
                                            <div class="rating-container d-flex align-items-center">
                                                <div class="rating" data-rating="1" onclick="rate(1)">
                                                    <i class="icon icon-star"></i>
                                                </div>
                                                <div class="rating" data-rating="2" onclick="rate(1)">
                                                    <i class="icon icon-star"></i>
                                                </div>
                                                <div class="rating" data-rating="3" onclick="rate(1)">
                                                    <i class="icon icon-star"></i>
                                                </div>
                                                <div class="rating" data-rating="4" onclick="rate(1)">
                                                    <i class="icon icon-star-half"></i>
                                                </div>
                                                <div class="rating" data-rating="5" onclick="rate(1)">
                                                    <i class="icon icon-star-empty"></i>
                                                </div>
                                                <span class="rating-count">(3.5)</span>
                                            </div>
                                            <div class="review-header">
                                                <span class="author-name">Jenny Willis</span>
                                                <span class="review-date">– 03/06/2022</span>
                                            </div>
                                            <p>Vitae tortor condimentum lacinia quis vel eros donec ac. Nam at lectus
                                                urna duis convallis convallis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="related-products" class="product-store position-relative padding-large">
        <div class="container">
            <div class="row">
                <div class="display-header d-flex justify-content-between pb-3">
                    <h2 class="display-7 text-dark text-uppercase">Related Products</h2>
                    <div class="btn-right">
                        <a href="shop.html" class="btn btn-medium btn-normal text-uppercase">Go to Shop</a>
                    </div>
                </div>
                <div class="swiper product-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="asset/images/product-item1.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <div class="btn-left">
                                            <a href="#" class="btn btn-medium btn-black">Add to Cart</a>
                                            <svg class="cart-outline position-absolute">
                                                <use xlink:href="#cart-outline"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">Iphone 10</a>
                                    </h3>
                                    <span class="item-price text-primary">$980</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="asset/images/product-item2.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <div class="btn-left">
                                            <a href="#" class="btn btn-medium btn-black">Add to Cart</a>
                                            <svg class="cart-outline position-absolute">
                                                <use xlink:href="#cart-outline"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">Iphone 11</a>
                                    </h3>
                                    <span class="item-price text-primary">$1100</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="asset/images/product-item3.jpg" alt="product-item" class="img-fluid">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <div class="btn-left">
                                            <a href="#" class="btn btn-medium btn-black">Add to Cart</a>
                                            <svg class="cart-outline position-absolute">
                                                <use xlink:href="#cart-outline"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">Iphone 8</a>
                                    </h3>
                                    <span class="item-price text-primary">$780</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="asset/images/product-item4.jpg" alt="product-item" class="product-image">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <div class="btn-left">
                                            <a href="#" class="btn btn-medium btn-black">Add to Cart</a>
                                            <svg class="cart-outline position-absolute">
                                                <use xlink:href="#cart-outline"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">Iphone 13</a>
                                    </h3>
                                    <span class="item-price text-primary">$1500</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card position-relative">
                                <div class="image-holder">
                                    <img src="asset/images/product-item5.jpg" alt="product-item" class="product-image">
                                </div>
                                <div class="cart-concern position-absolute">
                                    <div class="cart-button d-flex">
                                        <div class="btn-left">
                                            <a href="#" class="btn btn-medium btn-black">Add to Cart</a>
                                            <svg class="cart-outline position-absolute">
                                                <use xlink:href="#cart-outline"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                                    <h3 class="card-title text-uppercase">
                                        <a href="#">Iphone 12</a>
                                    </h3>
                                    <span class="item-price text-primary">$1300</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination position-absolute text-center"></div>
    </section>

@endsection
