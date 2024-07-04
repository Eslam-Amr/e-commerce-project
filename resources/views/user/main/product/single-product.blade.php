{{-- <!DOCTYPE html>
<html>

<head>
    <title>Ministore</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&family=Lato:wght@300;400;700&display=swap"
        rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <path fill="currentColor"
                d="M19 3C13.488 3 9 7.488 9 13c0 2.395.84 4.59 2.25 6.313L3.281 27.28l1.439 1.44l7.968-7.969A9.922 9.922 0 0 0 19 23c5.512 0 10-4.488 10-10S24.512 3 19 3zm0 2c4.43 0 8 3.57 8 8s-3.57 8-8 8s-8-3.57-8-8s3.57-8 8-8z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 16 16">
            <path
                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="star-fill" viewBox="0 0 16 16">
            <path
                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="facebook" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M9.198 21.5h4v-8.01h3.604l.396-3.98h-4V7.5a1 1 0 0 1 1-1h3v-4h-3a5 5 0 0 0-5 5v2.01h-2l-.396 3.98h2.396v8.01Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="youtube" viewBox="0 0 32 32">
            <path fill="currentColor"
                d="M29.41 9.26a3.5 3.5 0 0 0-2.47-2.47C24.76 6.2 16 6.2 16 6.2s-8.76 0-10.94.59a3.5 3.5 0 0 0-2.47 2.47A36.13 36.13 0 0 0 2 16a36.13 36.13 0 0 0 .59 6.74a3.5 3.5 0 0 0 2.47 2.47c2.18.59 10.94.59 10.94.59s8.76 0 10.94-.59a3.5 3.5 0 0 0 2.47-2.47A36.13 36.13 0 0 0 30 16a36.13 36.13 0 0 0-.59-6.74ZM13.2 20.2v-8.4l7.27 4.2Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="twitter" viewBox="0 0 256 256">
            <path fill="currentColor"
                d="m245.66 77.66l-29.9 29.9C209.72 177.58 150.67 232 80 232c-14.52 0-26.49-2.3-35.58-6.84c-7.33-3.67-10.33-7.6-11.08-8.72a8 8 0 0 1 3.85-11.93c.26-.1 24.24-9.31 39.47-26.84a110.93 110.93 0 0 1-21.88-24.2c-12.4-18.41-26.28-50.39-22-98.18a8 8 0 0 1 13.65-4.92c.35.35 33.28 33.1 73.54 43.72V88a47.87 47.87 0 0 1 14.36-34.3A46.87 46.87 0 0 1 168.1 40a48.66 48.66 0 0 1 41.47 24H240a8 8 0 0 1 5.66 13.66Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" viewBox="0 0 256 256">
            <path fill="currentColor"
                d="M128 80a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Zm48-136H80a56.06 56.06 0 0 0-56 56v96a56.06 56.06 0 0 0 56 56h96a56.06 56.06 0 0 0 56-56V80a56.06 56.06 0 0 0-56-56Zm40 152a40 40 0 0 1-40 40H80a40 40 0 0 1-40-40V80a40 40 0 0 1 40-40h96a40 40 0 0 1 40 40ZM192 76a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="linkedin" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M6.94 5a2 2 0 1 1-4-.002a2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="nav-icon" viewBox="0 0 16 16">
            <path
                d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 16 16">
            <path
                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
            <path
                d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
        </symbol>
    </svg>

    <div class="search-popup">
        <div class="search-popup-container">

            <form role="search" method="get" class="search-form" action="">
                <input type="search" id="search-form" class="search-field" placeholder="Type and press enter"
                    value="" name="s" />
                <button type="submit" class="search-submit"><svg class="search">
                        <use xlink:href="#search"></use>
                    </svg></button>
            </form>

            <h5 class="cat-list-title">Browse Categories</h5>

            <ul class="cat-list">
                <li class="cat-list-item">
                    <a href="#" title="Mobile Phones">Mobile Phones</a>
                </li>
                <li class="cat-list-item">
                    <a href="#" title="Smart Watches">Smart Watches</a>
                </li>
                <li class="cat-list-item">
                    <a href="#" title="Headphones">Headphones</a>
                </li>
                <li class="cat-list-item">
                    <a href="#" title="Accessories">Accessories</a>
                </li>
                <li class="cat-list-item">
                    <a href="#" title="Monitors">Monitors</a>
                </li>
                <li class="cat-list-item">
                    <a href="#" title="Speakers">Speakers</a>
                </li>
                <li class="cat-list-item">
                    <a href="#" title="Memory Cards">Memory Cards</a>
                </li>
            </ul>

        </div>
    </div>

    <header id="header" class="site-header header-scrolled position-fixed text-black bg-light">
        <nav id="header-nav" class="navbar navbar-expand-lg px-3 mb-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="asset/images/main-logo.png" class="logo">
                </a>
                <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <svg class="navbar-icon">
                        <use xlink:href="#navbar-icon"></use>
                    </svg>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar"
                    aria-labelledby="bdNavbarOffcanvasLabel">
                    <div class="offcanvas-header px-4 pb-0">
                        <a class="navbar-brand" href="index.html">
                            <img src="asset/images/main-logo.png" class="logo">
                        </a>
                        <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas"
                            aria-label="Close" data-bs-target="#bdNavbar"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul id="navbar"
                            class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link me-4 active" href="#billboard">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-4" href="#company-services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-4" href="#mobile-products">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-4" href="#smart-watches">Watches</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-4" href="#yearly-sale">Sale</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-4" href="#latest-blog">Blog</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link me-4 dropdown-toggle link-dark" data-bs-toggle="dropdown"
                                    href="#" role="button" aria-expanded="false">Pages</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="about.html" class="dropdown-item">About</a>
                                    </li>
                                    <li>
                                        <a href="blog.html" class="dropdown-item">Blog</a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="dropdown-item">Shop</a>
                                    </li>
                                    <li>
                                        <a href="cart.html" class="dropdown-item">Cart</a>
                                    </li>
                                    <li>
                                        <a href="checkout.html" class="dropdown-item">Checkout</a>
                                    </li>
                                    <li>
                                        <a href="single-post.html" class="dropdown-item">Single Post</a>
                                    </li>
                                    <li>
                                        <a href="single-product.html" class="dropdown-item">Single Product</a>
                                    </li>
                                    <li>
                                        <a href="contact.html" class="dropdown-item">Contact</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <div class="user-items ps-5">
                                    <ul class="d-flex justify-content-end list-unstyled">
                                        <li class="search-item pe-3">
                                            <a href="#" class="search-button">
                                                <svg class="search">
                                                    <use xlink:href="#search"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="pe-3">
                                            <a href="#">
                                                <svg class="user">
                                                    <use xlink:href="#user"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <svg class="cart">
                                                    <use xlink:href="#cart"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section id="selling-product" class="single-product padding-xlarge">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="product-preview mb-3">
                        <img src="{{ asset('asset/images/product-item1.jpg') }}" alt="single-product"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-info">
                        <div class="element-header">
                            <h3 itemprop="name" class="display-7 text-uppercase">Pink Watch</h3>
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
                            <strong class="text-primary display-6 fw-bold">$870.00</strong>
                        </div>
                        <p>Justo, cum feugiat imperdiet nulla molestie ac vulputate scelerisque amet. Bibendum
                            adipiscing platea blandit sit sed quam semper rhoncus. Diam ultrices maecenas consequat eu
                            tortor orci, cras lectus mauris, cras egestas quam venenatis neque.</p>
                        <div class="cart-wrap padding-small">
                            <div class="color-options product-select">
                                <div class="color-toggle" data-option-index="0">
                                    <h4 class="item-title text-uppercase text-dark text-decoration-underline">Color:
                                    </h4>
                                    <ul class="select-list list-unstyled d-flex">
                                        <li class="select-item pe-3" data-val="Green" title="Green">
                                            <a href="#">Green</a>
                                        </li>
                                        <li class="select-item pe-3" data-val="Orange" title="Orange">
                                            <a href="#">Orange</a>
                                        </li>
                                        <li class="select-item pe-3" data-val="Red" title="Red">
                                            <a href="#">Red</a>
                                        </li>
                                        <li class="select-item" data-val="Black" title="Black">
                                            <a href="#">Black</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swatch product-select" data-option-index="1">
                                <h4 class="item-title text-uppercase text-dark text-decoration-underline">Size:</h4>
                                <ul class="select-list list-unstyled d-flex">
                                    <li data-value="S" class="select-item pe-3">
                                        <a href="#">XL</a>
                                    </li>
                                    <li data-value="M" class="select-item pe-3">
                                        <a href="#">L</a>
                                    </li>
                                    <li data-value="L" class="select-item pe-3">
                                        <a href="#">M</a>
                                    </li>
                                    <li data-value="L" class="select-item">
                                        <a href="#">S</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-quantity">
                                <div class="stock-number text-dark">2 in stock</div>
                                <div class="stock-button-wrap pt-3">

                                    <div class="input-group product-qty">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-number"
                                                data-type="minus" data-field="">
                                                -
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity"
                                            class="form-control input-number" value="1" min="1"
                                            max="100">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-right-plus btn btn-number"
                                                data-type="plus" data-field="">
                                                +
                                            </button>
                                        </span>
                                    </div>
                                    <div class="qty-button d-flex flex-wrap pt-3">
                                        <button type="submit"
                                            class="btn btn-primary btn-medium text-uppercase me-3 mt-3">Buy
                                            now</button>
                                        <button type="submit" name="add-to-cart" value="1269"
                                            class="btn btn-black btn-medium text-uppercase mt-3">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="meta-product py-2">
                            <div class="meta-item d-flex align-items-baseline">
                                <h4 class="item-title no-margin pe-2">SKU:</h4>
                                <ul class="select-list list-unstyled d-flex">
                                    <li data-value="S" class="select-item">1223</li>
                                </ul>
                            </div>
                            <div class="meta-item d-flex align-items-baseline">
                                <h4 class="item-title no-margin pe-2">Category:</h4>
                                <ul class="select-list list-unstyled d-flex">
                                    <li data-value="S" class="select-item">
                                        <a href="#">Watch</a>,
                                    </li>
                                    <li data-value="S" class="select-item">
                                        <a href="#"> Screen touch</a>,
                                    </li>
                                </ul>
                            </div>
                            <div class="meta-item d-flex align-items-baseline">
                                <h4 class="item-title no-margin pe-2">Tags:</h4>
                                <ul class="select-list list-unstyled d-flex">
                                    <li data-value="S" class="select-item">
                                        <a href="#">Classic</a>,
                                    </li>
                                    <li data-value="S" class="select-item">
                                        <a href="#"> Modern</a>
                                    </li>
                                </ul>
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
                        <div class="nav nav-tabs d-flex flex-wrap justify-content-center" id="nav-tab"
                            role="tablist">
                            <button class="nav-link active text-uppercase pe-5" id="nav-home-tab"
                                data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab"
                                aria-controls="nav-home" aria-selected="true">Description</button>
                            <button class="nav-link text-uppercase pe-5" id="nav-information-tab"
                                data-bs-toggle="tab" data-bs-target="#nav-information" type="button" role="tab"
                                aria-controls="nav-information" aria-selected="false">Additional information</button>
                            <button class="nav-link text-uppercase pe-5" id="nav-review-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-review" type="button" role="tab"
                                aria-controls="nav-review" aria-selected="false">Reviews</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active border-top border-bottom padding-small" id="nav-home"
                            role="tabpanel" aria-labelledby="nav-home-tab">
                            <p>Product Description</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat
                                mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper
                                suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam
                                porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices
                                nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique
                                cursus.</p>
                            <ul style="list-style-type:disc;" class="list-unstyled ps-4">
                                <li>Donec nec justo eget felis facilisis fermentum.</li>
                                <li>Suspendisse urna viverra non, semper suscipit pede.</li>
                                <li>Aliquam porttitor mauris sit amet orci.</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat
                                mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper
                                suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam
                                porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices
                                nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique
                                cursus. </p>
                        </div>
                        <div class="tab-pane fade border-top border-bottom padding-small" id="nav-information"
                            role="tabpanel" aria-labelledby="nav-information-tab">
                            <p>It is Comfortable and Best</p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="tab-pane fade border-top border-bottom padding-small" id="nav-review"
                            role="tabpanel" aria-labelledby="nav-review-tab">
                            <div class="review-box d-flex flex-wrap">
                                <div class="col-lg-6 d-flex flex-wrap">
                                    <div class="col-md-2">
                                        <div class="image-holder">
                                            <img src="asset/images/review-item1.jpg" alt="review"
                                                class="img-fluid">
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
                                            <img src="asset/images/review-item2.jpg" alt="review"
                                                class="img-fluid">
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
                                    <img src="asset/images/product-item4.jpg" alt="product-item"
                                        class="product-image">
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
                                    <img src="asset/images/product-item5.jpg" alt="product-item"
                                        class="product-image">
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
    <section id="subscribe" class="container-grid padding-large position-relative overflow-hidden">
        <div class="container">
            <div class="row">
                <div
                    class="subscribe-content bg-dark d-flex flex-wrap justify-content-center align-items-center padding-medium">
                    <div class="col-md-6 col-sm-12">
                        <div class="display-header pe-3">
                            <h2 class="display-7 text-uppercase text-light">Subscribe Us Now</h2>
                            <p>Get latest news, updates and deals directly mailed to your inbox.</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <form class="subscription-form validate">
                            <div class="input-group flex-wrap">
                                <input class="form-control btn-rounded-none" type="email" name="EMAIL"
                                    placeholder="Your email address here" required="">
                                <button class="btn btn-medium btn-primary text-uppercase btn-rounded-none"
                                    type="submit" name="subscribe">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="instagram" class="padding-large overflow-hidden no-padding-top">
        <div class="container">
            <div class="row">
                <div class="display-header text-uppercase text-dark text-center pb-3">
                    <h2 class="display-7">Shop Our Insta</h2>
                </div>
                <div class="d-flex flex-wrap">
                    <figure class="instagram-item pe-2">
                        <a href="https://templatesjungle.com/" class="image-link position-relative">
                            <img src="asset/images/insta-item1.jpg" alt="instagram" class="insta-image">
                            <div class="icon-overlay position-absolute d-flex justify-content-center">
                                <svg class="instagram">
                                    <use xlink:href="#instagram"></use>
                                </svg>
                            </div>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="https://templatesjungle.com/" class="image-link position-relative">
                            <img src="asset/images/insta-item2.jpg" alt="instagram" class="insta-image">
                            <div class="icon-overlay position-absolute d-flex justify-content-center">
                                <svg class="instagram">
                                    <use xlink:href="#instagram"></use>
                                </svg>
                            </div>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="https://templatesjungle.com/" class="image-link position-relative">
                            <img src="asset/images/insta-item3.jpg" alt="instagram" class="insta-image">
                            <div class="icon-overlay position-absolute d-flex justify-content-center">
                                <svg class="instagram">
                                    <use xlink:href="#instagram"></use>
                                </svg>
                            </div>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="https://templatesjungle.com/" class="image-link position-relative">
                            <img src="asset/images/insta-item4.jpg" alt="instagram" class="insta-image">
                            <div class="icon-overlay position-absolute d-flex justify-content-center">
                                <svg class="instagram">
                                    <use xlink:href="#instagram"></use>
                                </svg>
                            </div>
                        </a>
                    </figure>
                    <figure class="instagram-item pe-2">
                        <a href="https://templatesjungle.com/" class="image-link position-relative">
                            <img src="asset/images/insta-item5.jpg" alt="instagram" class="insta-image">
                            <div class="icon-overlay position-absolute d-flex justify-content-center">
                                <svg class="instagram">
                                    <use xlink:href="#instagram"></use>
                                </svg>
                            </div>
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="footer-top-area">
                    <div class="row d-flex flex-wrap justify-content-between">
                        <div class="col-lg-3 col-sm-6 pb-3">
                            <div class="footer-menu">
                                <img src="asset/images/main-logo.png" alt="logo">
                                <p>Nisi, purus vitae, ultrices nunc. Sit ac sit suscipit hendrerit. Gravida massa
                                    volutpat aenean odio erat nullam fringilla.</p>
                                <div class="social-links">
                                    <ul class="d-flex list-unstyled">
                                        <li>
                                            <a href="#">
                                                <svg class="facebook">
                                                    <use xlink:href="#facebook" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg class="instagram">
                                                    <use xlink:href="#instagram" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg class="twitter">
                                                    <use xlink:href="#twitter" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg class="linkedin">
                                                    <use xlink:href="#linkedin" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg class="youtube">
                                                    <use xlink:href="#youtube" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 pb-3">
                            <div class="footer-menu text-uppercase">
                                <h5 class="widget-title pb-2">Quick Links</h5>
                                <ul class="menu-list list-unstyled text-uppercase">
                                    <li class="menu-item pb-2">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="menu-item pb-2">
                                        <a href="#">About</a>
                                    </li>
                                    <li class="menu-item pb-2">
                                        <a href="#">Shop</a>
                                    </li>
                                    <li class="menu-item pb-2">
                                        <a href="#">Blogs</a>
                                    </li>
                                    <li class="menu-item pb-2">
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 pb-3">
                            <div class="footer-menu text-uppercase">
                                <h5 class="widget-title pb-2">Help & Info Help</h5>
                                <ul class="menu-list list-unstyled">
                                    <li class="menu-item pb-2">
                                        <a href="#">Track Your Order</a>
                                    </li>
                                    <li class="menu-item pb-2">
                                        <a href="#">Returns Policies</a>
                                    </li>
                                    <li class="menu-item pb-2">
                                        <a href="#">Shipping + Delivery</a>
                                    </li>
                                    <li class="menu-item pb-2">
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <li class="menu-item pb-2">
                                        <a href="#">Faqs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 pb-3">
                            <div class="footer-menu contact-item">
                                <h5 class="widget-title text-uppercase pb-2">Contact Us</h5>
                                <p>Do you have any queries or suggestions? <a href="mailto:">yourinfo@gmail.com</a>
                                </p>
                                <p>If you need support? Just give us a call. <a href="">+55 111 222 333 44</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </footer>
    <div id="footer-bottom">
        <div class="container">
            <div class="row d-flex flex-wrap justify-content-between">
                <div class="col-md-4 col-sm-6">
                    <div class="Shipping d-flex">
                        <p>We ship with:</p>
                        <div class="card-wrap ps-2">
                            <img src="asset/images/dhl.png" alt="visa">
                            <img src="asset/images/shippingcard.png" alt="mastercard">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="payment-method d-flex">
                        <p>Payment options:</p>
                        <div class="card-wrap ps-2">
                            <img src="asset/images/visa.jpg" alt="visa">
                            <img src="asset/images/mastercard.jpg" alt="mastercard">
                            <img src="asset/images/paypal.jpg" alt="paypal">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="copyright">
                        <p>© Copyright 2023 MiniStore. Design by <a
                                href="https://templatesjungle.com/">TemplatesJungle</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('asset/js/jquery-1.11.0.min.js') }}"></script>
    <script>
        /*! jQuery v1.11.0 | (c) 2005, 2014 jQuery Foundation, Inc. | jquery.org/license */ ! function(a, b) {
            "object" == typeof module && "object" == typeof module.exports ? module.exports = a.document ? b(a, !0) :
                function(a) {
                    if (!a.document) throw new Error("jQuery requires a window with a document");
                    return b(a)
                } : b(a)
        }("undefined" != typeof window ? window : this, function(a, b) {
            var c = [],
                d = c.slice,
                e = c.concat,
                f = c.push,
                g = c.indexOf,
                h = {},
                i = h.toString,
                j = h.hasOwnProperty,
                k = "".trim,
                l = {},
                m = "1.11.0",
                n = function(a, b) {
                    return new n.fn.init(a, b)
                },
                o = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
                p = /^-ms-/,
                q = /-([\da-z])/gi,
                r = function(a, b) {
                    return b.toUpperCase()
                };
            n.fn = n.prototype = {
                jquery: m,
                constructor: n,
                selector: "",
                length: 0,
                toArray: function() {
                    return d.call(this)
                },
                get: function(a) {
                    return null != a ? 0 > a ? this[a + this.length] : this[a] : d.call(this)
                },
                pushStack: function(a) {
                    var b = n.merge(this.constructor(), a);
                    return b.prevObject = this, b.context = this.context, b
                },
                each: function(a, b) {
                    return n.each(this, a, b)
                },
                map: function(a) {
                    return this.pushStack(n.map(this, function(b, c) {
                        return a.call(b, c, b)
                    }))
                },
                slice: function() {
                    return this.pushStack(d.apply(this, arguments))
                },
                first: function() {
                    return this.eq(0)
                },
                last: function() {
                    return this.eq(-1)
                },
                eq: function(a) {
                    var b = this.length,
                        c = +a + (0 > a ? b : 0);
                    return this.pushStack(c >= 0 && b > c ? [this[c]] : [])
                },
                end: function() {
                    return this.prevObject || this.constructor(null)
                },
                push: f,
                sort: c.sort,
                splice: c.splice
            }, n.extend = n.fn.extend = function() {
                var a, b, c, d, e, f, g = arguments[0] || {},
                    h = 1,
                    i = arguments.length,
                    j = !1;
                for ("boolean" == typeof g && (j = g, g = arguments[h] || {}, h++), "object" == typeof g || n
                    .isFunction(g) || (g = {}), h === i && (g = this, h--); i > h; h++)
                    if (null != (e = arguments[h]))
                        for (d in e) a = g[d], c = e[d], g !== c && (j && c && (n.isPlainObject(c) || (b = n
                            .isArray(c))) ? (b ? (b = !1, f = a && n.isArray(a) ? a : []) : f = a && n
                            .isPlainObject(a) ? a : {}, g[d] = n.extend(j, f, c)) : void 0 !== c && (g[d] =
                            c));
                return g
            }, n.extend({
                expando: "jQuery" + (m + Math.random()).replace(/\D/g, ""),
                isReady: !0,
                error: function(a) {
                    throw new Error(a)
                },
                noop: function() {},
                isFunction: function(a) {
                    return "function" === n.type(a)
                },
                isArray: Array.isArray || function(a) {
                    return "array" === n.type(a)
                },
                isWindow: function(a) {
                    return null != a && a == a.window
                },
                isNumeric: function(a) {
                    return a - parseFloat(a) >= 0
                },
                isEmptyObject: function(a) {
                    var b;
                    for (b in a) return !1;
                    return !0
                },
                isPlainObject: function(a) {
                    var b;
                    if (!a || "object" !== n.type(a) || a.nodeType || n.isWindow(a)) return !1;
                    try {
                        if (a.constructor && !j.call(a, "constructor") && !j.call(a.constructor.prototype,
                                "isPrototypeOf")) return !1
                    } catch (c) {
                        return !1
                    }
                    if (l.ownLast)
                        for (b in a) return j.call(a, b);
                    for (b in a);
                    return void 0 === b || j.call(a, b)
                },
                type: function(a) {
                    return null == a ? a + "" : "object" == typeof a || "function" == typeof a ? h[i.call(
                        a)] || "object" : typeof a
                },
                globalEval: function(b) {
                    b && n.trim(b) && (a.execScript || function(b) {
                        a.eval.call(a, b)
                    })(b)
                },
                camelCase: function(a) {
                    return a.replace(p, "ms-").replace(q, r)
                },
                nodeName: function(a, b) {
                    return a.nodeName && a.nodeName.toLowerCase() === b.toLowerCase()
                },
                each: function(a, b, c) {
                    var d, e = 0,
                        f = a.length,
                        g = s(a);
                    if (c) {
                        if (g) {
                            for (; f > e; e++)
                                if (d = b.apply(a[e], c), d === !1) break
                        } else
                            for (e in a)
                                if (d = b.apply(a[e], c), d === !1) break
                    } else if (g) {
                        for (; f > e; e++)
                            if (d = b.call(a[e], e, a[e]), d === !1) break
                    } else
                        for (e in a)
                            if (d = b.call(a[e], e, a[e]), d === !1) break;
                    return a
                },
                trim: k && !k.call("\ufeff\xa0") ? function(a) {
                    return null == a ? "" : k.call(a)
                } : function(a) {
                    return null == a ? "" : (a + "").replace(o, "")
                },
                makeArray: function(a, b) {
                    var c = b || [];
                    return null != a && (s(Object(a)) ? n.merge(c, "string" == typeof a ? [a] : a) : f.call(
                        c, a)), c
                },
                inArray: function(a, b, c) {
                    var d;
                    if (b) {
                        if (g) return g.call(b, a, c);
                        for (d = b.length, c = c ? 0 > c ? Math.max(0, d + c) : c : 0; d > c; c++)
                            if (c in b && b[c] === a) return c
                    }
                    return -1
                },
                merge: function(a, b) {
                    var c = +b.length,
                        d = 0,
                        e = a.length;
                    while (c > d) a[e++] = b[d++];
                    if (c !== c)
                        while (void 0 !== b[d]) a[e++] = b[d++];
                    return a.length = e, a
                },
                grep: function(a, b, c) {
                    for (var d, e = [], f = 0, g = a.length, h = !c; g > f; f++) d = !b(a[f], f), d !== h &&
                        e.push(a[f]);
                    return e
                },
                map: function(a, b, c) {
                    var d, f = 0,
                        g = a.length,
                        h = s(a),
                        i = [];
                    if (h)
                        for (; g > f; f++) d = b(a[f], f, c), null != d && i.push(d);
                    else
                        for (f in a) d = b(a[f], f, c), null != d && i.push(d);
                    return e.apply([], i)
                },
                guid: 1,
                proxy: function(a, b) {
                    var c, e, f;
                    return "string" == typeof b && (f = a[b], b = a, a = f), n.isFunction(a) ? (c = d.call(
                        arguments, 2), e = function() {
                        return a.apply(b || this, c.concat(d.call(arguments)))
                    }, e.guid = a.guid = a.guid || n.guid++, e) : void 0
                },
                now: function() {
                    return +new Date
                },
                support: l
            }), n.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function(a, b) {
                h["[object " + b + "]"] = b.toLowerCase()
            });

            function s(a) {
                var b = a.length,
                    c = n.type(a);
                return "function" === c || n.isWindow(a) ? !1 : 1 === a.nodeType && b ? !0 : "array" === c || 0 === b ||
                    "number" == typeof b && b > 0 && b - 1 in a
            }
            var t = function(a) {
                var b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s = "sizzle" + -new Date,
                    t = a.document,
                    u = 0,
                    v = 0,
                    w = eb(),
                    x = eb(),
                    y = eb(),
                    z = function(a, b) {
                        return a === b && (j = !0), 0
                    },
                    A = "undefined",
                    B = 1 << 31,
                    C = {}.hasOwnProperty,
                    D = [],
                    E = D.pop,
                    F = D.push,
                    G = D.push,
                    H = D.slice,
                    I = D.indexOf || function(a) {
                        for (var b = 0, c = this.length; c > b; b++)
                            if (this[b] === a) return b;
                        return -1
                    },
                    J =
                    "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
                    K = "[\\x20\\t\\r\\n\\f]",
                    L = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",
                    M = L.replace("w", "w#"),
                    N = "\\[" + K + "*(" + L + ")" + K + "*(?:([*^$|!~]?=)" + K +
                    "*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|(" + M + ")|)|)" + K + "*\\]",
                    O = ":(" + L + ")(?:\\(((['\"])((?:\\\\.|[^\\\\])*?)\\3|((?:\\\\.|[^\\\\()[\\]]|" + N.replace(3,
                        8) + ")*)|.*)\\)|)",
                    P = new RegExp("^" + K + "+|((?:^|[^\\\\])(?:\\\\.)*)" + K + "+$", "g"),
                    Q = new RegExp("^" + K + "*," + K + "*"),
                    R = new RegExp("^" + K + "*([>+~]|" + K + ")" + K + "*"),
                    S = new RegExp("=" + K + "*([^\\]'\"]*?)" + K + "*\\]", "g"),
                    T = new RegExp(O),
                    U = new RegExp("^" + M + "$"),
                    V = {
                        ID: new RegExp("^#(" + L + ")"),
                        CLASS: new RegExp("^\\.(" + L + ")"),
                        TAG: new RegExp("^(" + L.replace("w", "w*") + ")"),
                        ATTR: new RegExp("^" + N),
                        PSEUDO: new RegExp("^" + O),
                        CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + K +
                            "*(even|odd|(([+-]|)(\\d*)n|)" + K + "*(?:([+-]|)" + K + "*(\\d+)|))" + K +
                            "*\\)|)", "i"),
                        bool: new RegExp("^(?:" + J + ")$", "i"),
                        needsContext: new RegExp("^" + K + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + K +
                            "*((?:-\\d)?\\d*)" + K + "*\\)|)(?=[^-]|$)", "i")
                    },
                    W = /^(?:input|select|textarea|button)$/i,
                    X = /^h\d$/i,
                    Y = /^[^{]+\{\s*\[native \w/,
                    Z = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
                    $ = /[+~]/,
                    _ = /'|\\/g,
                    ab = new RegExp("\\\\([\\da-f]{1,6}" + K + "?|(" + K + ")|.)", "ig"),
                    bb = function(a, b, c) {
                        var d = "0x" + b - 65536;
                        return d !== d || c ? b : 0 > d ? String.fromCharCode(d + 65536) : String.fromCharCode(d >>
                            10 | 55296, 1023 & d | 56320)
                    };
                try {
                    G.apply(D = H.call(t.childNodes), t.childNodes), D[t.childNodes.length].nodeType
                } catch (cb) {
                    G = {
                        apply: D.length ? function(a, b) {
                            F.apply(a, H.call(b))
                        } : function(a, b) {
                            var c = a.length,
                                d = 0;
                            while (a[c++] = b[d++]);
                            a.length = c - 1
                        }
                    }
                }

                function db(a, b, d, e) {
                    var f, g, h, i, j, m, p, q, u, v;
                    if ((b ? b.ownerDocument || b : t) !== l && k(b), b = b || l, d = d || [], !a || "string" !=
                        typeof a) return d;
                    if (1 !== (i = b.nodeType) && 9 !== i) return [];
                    if (n && !e) {
                        if (f = Z.exec(a))
                            if (h = f[1]) {
                                if (9 === i) {
                                    if (g = b.getElementById(h), !g || !g.parentNode) return d;
                                    if (g.id === h) return d.push(g), d
                                } else if (b.ownerDocument && (g = b.ownerDocument.getElementById(h)) && r(b, g) &&
                                    g.id === h) return d.push(g), d
                            } else {
                                if (f[2]) return G.apply(d, b.getElementsByTagName(a)), d;
                                if ((h = f[3]) && c.getElementsByClassName && b.getElementsByClassName) return G
                                    .apply(d, b.getElementsByClassName(h)), d
                            } if (c.qsa && (!o || !o.test(a))) {
                            if (q = p = s, u = b, v = 9 === i && a, 1 === i && "object" !== b.nodeName
                            .toLowerCase()) {
                                m = ob(a), (p = b.getAttribute("id")) ? q = p.replace(_, "\\$&") : b.setAttribute(
                                    "id", q), q = "[id='" + q + "'] ", j = m.length;
                                while (j--) m[j] = q + pb(m[j]);
                                u = $.test(a) && mb(b.parentNode) || b, v = m.join(",")
                            }
                            if (v) try {
                                return G.apply(d, u.querySelectorAll(v)), d
                            } catch (w) {} finally {
                                p || b.removeAttribute("id")
                            }
                        }
                    }
                    return xb(a.replace(P, "$1"), b, d, e)
                }

                function eb() {
                    var a = [];

                    function b(c, e) {
                        return a.push(c + " ") > d.cacheLength && delete b[a.shift()], b[c + " "] = e
                    }
                    return b
                }

                function fb(a) {
                    return a[s] = !0, a
                }

                function gb(a) {
                    var b = l.createElement("div");
                    try {
                        return !!a(b)
                    } catch (c) {
                        return !1
                    } finally {
                        b.parentNode && b.parentNode.removeChild(b), b = null
                    }
                }

                function hb(a, b) {
                    var c = a.split("|"),
                        e = a.length;
                    while (e--) d.attrHandle[c[e]] = b
                }

                function ib(a, b) {
                    var c = b && a,
                        d = c && 1 === a.nodeType && 1 === b.nodeType && (~b.sourceIndex || B) - (~a.sourceIndex ||
                            B);
                    if (d) return d;
                    if (c)
                        while (c = c.nextSibling)
                            if (c === b) return -1;
                    return a ? 1 : -1
                }

                function jb(a) {
                    return function(b) {
                        var c = b.nodeName.toLowerCase();
                        return "input" === c && b.type === a
                    }
                }

                function kb(a) {
                    return function(b) {
                        var c = b.nodeName.toLowerCase();
                        return ("input" === c || "button" === c) && b.type === a
                    }
                }

                function lb(a) {
                    return fb(function(b) {
                        return b = +b, fb(function(c, d) {
                            var e, f = a([], c.length, b),
                                g = f.length;
                            while (g--) c[e = f[g]] && (c[e] = !(d[e] = c[e]))
                        })
                    })
                }

                function mb(a) {
                    return a && typeof a.getElementsByTagName !== A && a
                }
                c = db.support = {}, f = db.isXML = function(a) {
                    var b = a && (a.ownerDocument || a).documentElement;
                    return b ? "HTML" !== b.nodeName : !1
                }, k = db.setDocument = function(a) {
                    var b, e = a ? a.ownerDocument || a : t,
                        g = e.defaultView;
                    return e !== l && 9 === e.nodeType && e.documentElement ? (l = e, m = e.documentElement,
                        n = !f(e), g && g !== g.top && (g.addEventListener ? g.addEventListener("unload",
                            function() {
                                k()
                            }, !1) : g.attachEvent && g.attachEvent("onunload", function() {
                            k()
                        })), c.attributes = gb(function(a) {
                            return a.className = "i", !a.getAttribute("className")
                        }), c.getElementsByTagName = gb(function(a) {
                            return a.appendChild(e.createComment("")), !a.getElementsByTagName("*")
                                .length
                        }), c.getElementsByClassName = Y.test(e.getElementsByClassName) && gb(function(a) {
                            return a.innerHTML = "<div class='a'></div><div class='a i'></div>", a
                                .firstChild.className = "i", 2 === a.getElementsByClassName("i").length
                        }), c.getById = gb(function(a) {
                            return m.appendChild(a).id = s, !e.getElementsByName || !e
                                .getElementsByName(s).length
                        }), c.getById ? (d.find.ID = function(a, b) {
                            if (typeof b.getElementById !== A && n) {
                                var c = b.getElementById(a);
                                return c && c.parentNode ? [c] : []
                            }
                        }, d.filter.ID = function(a) {
                            var b = a.replace(ab, bb);
                            return function(a) {
                                return a.getAttribute("id") === b
                            }
                        }) : (delete d.find.ID, d.filter.ID = function(a) {
                            var b = a.replace(ab, bb);
                            return function(a) {
                                var c = typeof a.getAttributeNode !== A && a.getAttributeNode("id");
                                return c && c.value === b
                            }
                        }), d.find.TAG = c.getElementsByTagName ? function(a, b) {
                            return typeof b.getElementsByTagName !== A ? b.getElementsByTagName(a) : void 0
                        } : function(a, b) {
                            var c, d = [],
                                e = 0,
                                f = b.getElementsByTagName(a);
                            if ("*" === a) {
                                while (c = f[e++]) 1 === c.nodeType && d.push(c);
                                return d
                            }
                            return f
                        }, d.find.CLASS = c.getElementsByClassName && function(a, b) {
                            return typeof b.getElementsByClassName !== A && n ? b.getElementsByClassName(
                                a) : void 0
                        }, p = [], o = [], (c.qsa = Y.test(e.querySelectorAll)) && (gb(function(a) {
                            a.innerHTML = "<select t=''><option selected=''></option></select>", a
                                .querySelectorAll("[t^='']").length && o.push("[*^$]=" + K +
                                    "*(?:''|\"\")"), a.querySelectorAll("[selected]").length || o
                                .push("\\[" + K + "*(?:value|" + J + ")"), a.querySelectorAll(
                                    ":checked").length || o.push(":checked")
                        }), gb(function(a) {
                            var b = e.createElement("input");
                            b.setAttribute("type", "hidden"), a.appendChild(b).setAttribute("name",
                                    "D"), a.querySelectorAll("[name=d]").length && o.push("name" +
                                    K + "*[*^$|!~]?="), a.querySelectorAll(":enabled").length || o
                                .push(":enabled", ":disabled"), a.querySelectorAll("*,:x"), o.push(
                                    ",.*:")
                        })), (c.matchesSelector = Y.test(q = m.webkitMatchesSelector || m
                            .mozMatchesSelector || m.oMatchesSelector || m.msMatchesSelector)) && gb(
                            function(a) {
                                c.disconnectedMatch = q.call(a, "div"), q.call(a, "[s!='']:x"), p.push("!=",
                                    O)
                            }), o = o.length && new RegExp(o.join("|")), p = p.length && new RegExp(p.join(
                            "|")), b = Y.test(m.compareDocumentPosition), r = b || Y.test(m.contains) ?
                        function(a, b) {
                            var c = 9 === a.nodeType ? a.documentElement : a,
                                d = b && b.parentNode;
                            return a === d || !(!d || 1 !== d.nodeType || !(c.contains ? c.contains(d) : a
                                .compareDocumentPosition && 16 & a.compareDocumentPosition(d)))
                        } : function(a, b) {
                            if (b)
                                while (b = b.parentNode)
                                    if (b === a) return !0;
                            return !1
                        }, z = b ? function(a, b) {
                            if (a === b) return j = !0, 0;
                            var d = !a.compareDocumentPosition - !b.compareDocumentPosition;
                            return d ? d : (d = (a.ownerDocument || a) === (b.ownerDocument || b) ? a
                                .compareDocumentPosition(b) : 1, 1 & d || !c.sortDetached && b
                                .compareDocumentPosition(a) === d ? a === e || a.ownerDocument === t &&
                                r(t, a) ? -1 : b === e || b.ownerDocument === t && r(t, b) ? 1 : i ? I
                                .call(i, a) - I.call(i, b) : 0 : 4 & d ? -1 : 1)
                        } : function(a, b) {
                            if (a === b) return j = !0, 0;
                            var c, d = 0,
                                f = a.parentNode,
                                g = b.parentNode,
                                h = [a],
                                k = [b];
                            if (!f || !g) return a === e ? -1 : b === e ? 1 : f ? -1 : g ? 1 : i ? I.call(i,
                                a) - I.call(i, b) : 0;
                            if (f === g) return ib(a, b);
                            c = a;
                            while (c = c.parentNode) h.unshift(c);
                            c = b;
                            while (c = c.parentNode) k.unshift(c);
                            while (h[d] === k[d]) d++;
                            return d ? ib(h[d], k[d]) : h[d] === t ? -1 : k[d] === t ? 1 : 0
                        }, e) : l
                }, db.matches = function(a, b) {
                    return db(a, null, null, b)
                }, db.matchesSelector = function(a, b) {
                    if ((a.ownerDocument || a) !== l && k(a), b = b.replace(S, "='$1']"), !(!c
                            .matchesSelector || !n || p && p.test(b) || o && o.test(b))) try {
                        var d = q.call(a, b);
                        if (d || c.disconnectedMatch || a.document && 11 !== a.document.nodeType) return d
                    } catch (e) {}
                    return db(b, l, null, [a]).length > 0
                }, db.contains = function(a, b) {
                    return (a.ownerDocument || a) !== l && k(a), r(a, b)
                }, db.attr = function(a, b) {
                    (a.ownerDocument || a) !== l && k(a);
                    var e = d.attrHandle[b.toLowerCase()],
                        f = e && C.call(d.attrHandle, b.toLowerCase()) ? e(a, b, !n) : void 0;
                    return void 0 !== f ? f : c.attributes || !n ? a.getAttribute(b) : (f = a.getAttributeNode(
                        b)) && f.specified ? f.value : null
                }, db.error = function(a) {
                    throw new Error("Syntax error, unrecognized expression: " + a)
                }, db.uniqueSort = function(a) {
                    var b, d = [],
                        e = 0,
                        f = 0;
                    if (j = !c.detectDuplicates, i = !c.sortStable && a.slice(0), a.sort(z), j) {
                        while (b = a[f++]) b === a[f] && (e = d.push(f));
                        while (e--) a.splice(d[e], 1)
                    }
                    return i = null, a
                }, e = db.getText = function(a) {
                    var b, c = "",
                        d = 0,
                        f = a.nodeType;
                    if (f) {
                        if (1 === f || 9 === f || 11 === f) {
                            if ("string" == typeof a.textContent) return a.textContent;
                            for (a = a.firstChild; a; a = a.nextSibling) c += e(a)
                        } else if (3 === f || 4 === f) return a.nodeValue
                    } else
                        while (b = a[d++]) c += e(b);
                    return c
                }, d = db.selectors = {
                    cacheLength: 50,
                    createPseudo: fb,
                    match: V,
                    attrHandle: {},
                    find: {},
                    relative: {
                        ">": {
                            dir: "parentNode",
                            first: !0
                        },
                        " ": {
                            dir: "parentNode"
                        },
                        "+": {
                            dir: "previousSibling",
                            first: !0
                        },
                        "~": {
                            dir: "previousSibling"
                        }
                    },
                    preFilter: {
                        ATTR: function(a) {
                            return a[1] = a[1].replace(ab, bb), a[3] = (a[4] || a[5] || "").replace(ab, bb),
                                "~=" === a[2] && (a[3] = " " + a[3] + " "), a.slice(0, 4)
                        },
                        CHILD: function(a) {
                            return a[1] = a[1].toLowerCase(), "nth" === a[1].slice(0, 3) ? (a[3] || db
                                    .error(a[0]), a[4] = +(a[4] ? a[5] + (a[6] || 1) : 2 * ("even" === a[
                                        3] || "odd" === a[3])), a[5] = +(a[7] + a[8] || "odd" === a[3])) :
                                a[3] && db.error(a[0]), a
                        },
                        PSEUDO: function(a) {
                            var b, c = !a[5] && a[2];
                            return V.CHILD.test(a[0]) ? null : (a[3] && void 0 !== a[4] ? a[2] = a[4] : c &&
                                T.test(c) && (b = ob(c, !0)) && (b = c.indexOf(")", c.length - b) - c
                                    .length) && (a[0] = a[0].slice(0, b), a[2] = c.slice(0, b)), a
                                .slice(0, 3))
                        }
                    },
                    filter: {
                        TAG: function(a) {
                            var b = a.replace(ab, bb).toLowerCase();
                            return "*" === a ? function() {
                                return !0
                            } : function(a) {
                                return a.nodeName && a.nodeName.toLowerCase() === b
                            }
                        },
                        CLASS: function(a) {
                            var b = w[a + " "];
                            return b || (b = new RegExp("(^|" + K + ")" + a + "(" + K + "|$)")) && w(a,
                                function(a) {
                                    return b.test("string" == typeof a.className && a.className ||
                                        typeof a.getAttribute !== A && a.getAttribute("class") || ""
                                        )
                                })
                        },
                        ATTR: function(a, b, c) {
                            return function(d) {
                                var e = db.attr(d, a);
                                return null == e ? "!=" === b : b ? (e += "", "=" === b ? e === c :
                                    "!=" === b ? e !== c : "^=" === b ? c && 0 === e.indexOf(c) :
                                    "*=" === b ? c && e.indexOf(c) > -1 : "$=" === b ? c && e.slice(
                                        -c.length) === c : "~=" === b ? (" " + e + " ").indexOf(c) >
                                    -1 : "|=" === b ? e === c || e.slice(0, c.length + 1) === c +
                                    "-" : !1) : !0
                            }
                        },
                        CHILD: function(a, b, c, d, e) {
                            var f = "nth" !== a.slice(0, 3),
                                g = "last" !== a.slice(-4),
                                h = "of-type" === b;
                            return 1 === d && 0 === e ? function(a) {
                                return !!a.parentNode
                            } : function(b, c, i) {
                                var j, k, l, m, n, o, p = f !== g ? "nextSibling" : "previousSibling",
                                    q = b.parentNode,
                                    r = h && b.nodeName.toLowerCase(),
                                    t = !i && !h;
                                if (q) {
                                    if (f) {
                                        while (p) {
                                            l = b;
                                            while (l = l[p])
                                                if (h ? l.nodeName.toLowerCase() === r : 1 === l
                                                    .nodeType) return !1;
                                            o = p = "only" === a && !o && "nextSibling"
                                        }
                                        return !0
                                    }
                                    if (o = [g ? q.firstChild : q.lastChild], g && t) {
                                        k = q[s] || (q[s] = {}), j = k[a] || [], n = j[0] === u && j[1],
                                            m = j[0] === u && j[2], l = n && q.childNodes[n];
                                        while (l = ++n && l && l[p] || (m = n = 0) || o.pop())
                                            if (1 === l.nodeType && ++m && l === b) {
                                                k[a] = [u, n, m];
                                                break
                                            }
                                    } else if (t && (j = (b[s] || (b[s] = {}))[a]) && j[0] === u) m = j[
                                        1];
                                    else
                                        while (l = ++n && l && l[p] || (m = n = 0) || o.pop())
                                            if ((h ? l.nodeName.toLowerCase() === r : 1 === l
                                                .nodeType) && ++m && (t && ((l[s] || (l[s] = {}))[a] = [
                                                    u, m
                                                ]), l === b)) break;
                                    return m -= e, m === d || m % d === 0 && m / d >= 0
                                }
                            }
                        },
                        PSEUDO: function(a, b) {
                            var c, e = d.pseudos[a] || d.setFilters[a.toLowerCase()] || db.error(
                                "unsupported pseudo: " + a);
                            return e[s] ? e(b) : e.length > 1 ? (c = [a, a, "", b], d.setFilters
                                .hasOwnProperty(a.toLowerCase()) ? fb(function(a, c) {
                                    var d, f = e(a, b),
                                        g = f.length;
                                    while (g--) d = I.call(a, f[g]), a[d] = !(c[d] = f[g])
                                }) : function(a) {
                                    return e(a, 0, c)
                                }) : e
                        }
                    },
                    pseudos: {
                        not: fb(function(a) {
                            var b = [],
                                c = [],
                                d = g(a.replace(P, "$1"));
                            return d[s] ? fb(function(a, b, c, e) {
                                var f, g = d(a, null, e, []),
                                    h = a.length;
                                while (h--)(f = g[h]) && (a[h] = !(b[h] = f))
                            }) : function(a, e, f) {
                                return b[0] = a, d(b, null, f, c), !c.pop()
                            }
                        }),
                        has: fb(function(a) {
                            return function(b) {
                                return db(a, b).length > 0
                            }
                        }),
                        contains: fb(function(a) {
                            return function(b) {
                                return (b.textContent || b.innerText || e(b)).indexOf(a) > -1
                            }
                        }),
                        lang: fb(function(a) {
                            return U.test(a || "") || db.error("unsupported lang: " + a), a = a.replace(
                                    ab, bb).toLowerCase(),
                                function(b) {
                                    var c;
                                    do
                                        if (c = n ? b.lang : b.getAttribute("xml:lang") || b
                                            .getAttribute("lang")) return c = c.toLowerCase(), c ===
                                            a || 0 === c.indexOf(a + "-"); while ((b = b.parentNode) &&
                                        1 === b.nodeType);
                                    return !1
                                }
                        }),
                        target: function(b) {
                            var c = a.location && a.location.hash;
                            return c && c.slice(1) === b.id
                        },
                        root: function(a) {
                            return a === m
                        },
                        focus: function(a) {
                            return a === l.activeElement && (!l.hasFocus || l.hasFocus()) && !!(a.type || a
                                .href || ~a.tabIndex)
                        },
                        enabled: function(a) {
                            return a.disabled === !1
                        },
                        disabled: function(a) {
                            return a.disabled === !0
                        },
                        checked: function(a) {
                            var b = a.nodeName.toLowerCase();
                            return "input" === b && !!a.checked || "option" === b && !!a.selected
                        },
                        selected: function(a) {
                            return a.parentNode && a.parentNode.selectedIndex, a.selected === !0
                        },
                        empty: function(a) {
                            for (a = a.firstChild; a; a = a.nextSibling)
                                if (a.nodeType < 6) return !1;
                            return !0
                        },
                        parent: function(a) {
                            return !d.pseudos.empty(a)
                        },
                        header: function(a) {
                            return X.test(a.nodeName)
                        },
                        input: function(a) {
                            return W.test(a.nodeName)
                        },
                        button: function(a) {
                            var b = a.nodeName.toLowerCase();
                            return "input" === b && "button" === a.type || "button" === b
                        },
                        text: function(a) {
                            var b;
                            return "input" === a.nodeName.toLowerCase() && "text" === a.type && (null == (
                                b = a.getAttribute("type")) || "text" === b.toLowerCase())
                        },
                        first: lb(function() {
                            return [0]
                        }),
                        last: lb(function(a, b) {
                            return [b - 1]
                        }),
                        eq: lb(function(a, b, c) {
                            return [0 > c ? c + b : c]
                        }),
                        even: lb(function(a, b) {
                            for (var c = 0; b > c; c += 2) a.push(c);
                            return a
                        }),
                        odd: lb(function(a, b) {
                            for (var c = 1; b > c; c += 2) a.push(c);
                            return a
                        }),
                        lt: lb(function(a, b, c) {
                            for (var d = 0 > c ? c + b : c; --d >= 0;) a.push(d);
                            return a
                        }),
                        gt: lb(function(a, b, c) {
                            for (var d = 0 > c ? c + b : c; ++d < b;) a.push(d);
                            return a
                        })
                    }
                }, d.pseudos.nth = d.pseudos.eq;
                for (b in {
                        radio: !0,
                        checkbox: !0,
                        file: !0,
                        password: !0,
                        image: !0
                    }) d.pseudos[b] = jb(b);
                for (b in {
                        submit: !0,
                        reset: !0
                    }) d.pseudos[b] = kb(b);

                function nb() {}
                nb.prototype = d.filters = d.pseudos, d.setFilters = new nb;

                function ob(a, b) {
                    var c, e, f, g, h, i, j, k = x[a + " "];
                    if (k) return b ? 0 : k.slice(0);
                    h = a, i = [], j = d.preFilter;
                    while (h) {
                        (!c || (e = Q.exec(h))) && (e && (h = h.slice(e[0].length) || h), i.push(f = [])), c = !1, (
                            e = R.exec(h)) && (c = e.shift(), f.push({
                            value: c,
                            type: e[0].replace(P, " ")
                        }), h = h.slice(c.length));
                        for (g in d.filter) !(e = V[g].exec(h)) || j[g] && !(e = j[g](e)) || (c = e.shift(), f
                    .push({
                            value: c,
                            type: g,
                            matches: e
                        }), h = h.slice(c.length));
                        if (!c) break
                    }
                    return b ? h.length : h ? db.error(a) : x(a, i).slice(0)
                }

                function pb(a) {
                    for (var b = 0, c = a.length, d = ""; c > b; b++) d += a[b].value;
                    return d
                }

                function qb(a, b, c) {
                    var d = b.dir,
                        e = c && "parentNode" === d,
                        f = v++;
                    return b.first ? function(b, c, f) {
                        while (b = b[d])
                            if (1 === b.nodeType || e) return a(b, c, f)
                    } : function(b, c, g) {
                        var h, i, j = [u, f];
                        if (g) {
                            while (b = b[d])
                                if ((1 === b.nodeType || e) && a(b, c, g)) return !0
                        } else
                            while (b = b[d])
                                if (1 === b.nodeType || e) {
                                    if (i = b[s] || (b[s] = {}), (h = i[d]) && h[0] === u && h[1] === f)
                                    return j[2] = h[2];
                                    if (i[d] = j, j[2] = a(b, c, g)) return !0
                                }
                    }
                }

                function rb(a) {
                    return a.length > 1 ? function(b, c, d) {
                        var e = a.length;
                        while (e--)
                            if (!a[e](b, c, d)) return !1;
                        return !0
                    } : a[0]
                }

                function sb(a, b, c, d, e) {
                    for (var f, g = [], h = 0, i = a.length, j = null != b; i > h; h++)(f = a[h]) && (!c || c(f, d,
                        e)) && (g.push(f), j && b.push(h));
                    return g
                }

                function tb(a, b, c, d, e, f) {
                    return d && !d[s] && (d = tb(d)), e && !e[s] && (e = tb(e, f)), fb(function(f, g, h, i) {
                        var j, k, l, m = [],
                            n = [],
                            o = g.length,
                            p = f || wb(b || "*", h.nodeType ? [h] : h, []),
                            q = !a || !f && b ? p : sb(p, m, a, h, i),
                            r = c ? e || (f ? a : o || d) ? [] : g : q;
                        if (c && c(q, r, h, i), d) {
                            j = sb(r, n), d(j, [], h, i), k = j.length;
                            while (k--)(l = j[k]) && (r[n[k]] = !(q[n[k]] = l))
                        }
                        if (f) {
                            if (e || a) {
                                if (e) {
                                    j = [], k = r.length;
                                    while (k--)(l = r[k]) && j.push(q[k] = l);
                                    e(null, r = [], j, i)
                                }
                                k = r.length;
                                while (k--)(l = r[k]) && (j = e ? I.call(f, l) : m[k]) > -1 && (f[j] = !(g[
                                    j] = l))
                            }
                        } else r = sb(r === g ? r.splice(o, r.length) : r), e ? e(null, g, r, i) : G.apply(
                            g, r)
                    })
                }

                function ub(a) {
                    for (var b, c, e, f = a.length, g = d.relative[a[0].type], i = g || d.relative[" "], j = g ? 1 :
                            0, k = qb(function(a) {
                                return a === b
                            }, i, !0), l = qb(function(a) {
                                return I.call(b, a) > -1
                            }, i, !0), m = [function(a, c, d) {
                                return !g && (d || c !== h) || ((b = c).nodeType ? k(a, c, d) : l(a, c, d))
                            }]; f > j; j++)
                        if (c = d.relative[a[j].type]) m = [qb(rb(m), c)];
                        else {
                            if (c = d.filter[a[j].type].apply(null, a[j].matches), c[s]) {
                                for (e = ++j; f > e; e++)
                                    if (d.relative[a[e].type]) break;
                                return tb(j > 1 && rb(m), j > 1 && pb(a.slice(0, j - 1).concat({
                                    value: " " === a[j - 2].type ? "*" : ""
                                })).replace(P, "$1"), c, e > j && ub(a.slice(j, e)), f > e && ub(a = a
                                    .slice(e)), f > e && pb(a))
                            }
                            m.push(c)
                        } return rb(m)
                }

                function vb(a, b) {
                    var c = b.length > 0,
                        e = a.length > 0,
                        f = function(f, g, i, j, k) {
                            var m, n, o, p = 0,
                                q = "0",
                                r = f && [],
                                s = [],
                                t = h,
                                v = f || e && d.find.TAG("*", k),
                                w = u += null == t ? 1 : Math.random() || .1,
                                x = v.length;
                            for (k && (h = g !== l && g); q !== x && null != (m = v[q]); q++) {
                                if (e && m) {
                                    n = 0;
                                    while (o = a[n++])
                                        if (o(m, g, i)) {
                                            j.push(m);
                                            break
                                        } k && (u = w)
                                }
                                c && ((m = !o && m) && p--, f && r.push(m))
                            }
                            if (p += q, c && q !== p) {
                                n = 0;
                                while (o = b[n++]) o(r, s, g, i);
                                if (f) {
                                    if (p > 0)
                                        while (q--) r[q] || s[q] || (s[q] = E.call(j));
                                    s = sb(s)
                                }
                                G.apply(j, s), k && !f && s.length > 0 && p + b.length > 1 && db.uniqueSort(j)
                            }
                            return k && (u = w, h = t), r
                        };
                    return c ? fb(f) : f
                }
                g = db.compile = function(a, b) {
                    var c, d = [],
                        e = [],
                        f = y[a + " "];
                    if (!f) {
                        b || (b = ob(a)), c = b.length;
                        while (c--) f = ub(b[c]), f[s] ? d.push(f) : e.push(f);
                        f = y(a, vb(e, d))
                    }
                    return f
                };

                function wb(a, b, c) {
                    for (var d = 0, e = b.length; e > d; d++) db(a, b[d], c);
                    return c
                }

                function xb(a, b, e, f) {
                    var h, i, j, k, l, m = ob(a);
                    if (!f && 1 === m.length) {
                        if (i = m[0] = m[0].slice(0), i.length > 2 && "ID" === (j = i[0]).type && c.getById && 9 ===
                            b.nodeType && n && d.relative[i[1].type]) {
                            if (b = (d.find.ID(j.matches[0].replace(ab, bb), b) || [])[0], !b) return e;
                            a = a.slice(i.shift().value.length)
                        }
                        h = V.needsContext.test(a) ? 0 : i.length;
                        while (h--) {
                            if (j = i[h], d.relative[k = j.type]) break;
                            if ((l = d.find[k]) && (f = l(j.matches[0].replace(ab, bb), $.test(i[0].type) && mb(b
                                    .parentNode) || b))) {
                                if (i.splice(h, 1), a = f.length && pb(i), !a) return G.apply(e, f), e;
                                break
                            }
                        }
                    }
                    return g(a, m)(f, b, !n, e, $.test(a) && mb(b.parentNode) || b), e
                }
                return c.sortStable = s.split("").sort(z).join("") === s, c.detectDuplicates = !!j, k(), c
                    .sortDetached = gb(function(a) {
                        return 1 & a.compareDocumentPosition(l.createElement("div"))
                    }), gb(function(a) {
                        return a.innerHTML = "<a href='#'></a>", "#" === a.firstChild.getAttribute("href")
                    }) || hb("type|href|height|width", function(a, b, c) {
                        return c ? void 0 : a.getAttribute(b, "type" === b.toLowerCase() ? 1 : 2)
                    }), c.attributes && gb(function(a) {
                        return a.innerHTML = "<input/>", a.firstChild.setAttribute("value", ""), "" === a
                            .firstChild.getAttribute("value")
                    }) || hb("value", function(a, b, c) {
                        return c || "input" !== a.nodeName.toLowerCase() ? void 0 : a.defaultValue
                    }), gb(function(a) {
                        return null == a.getAttribute("disabled")
                    }) || hb(J, function(a, b, c) {
                        var d;
                        return c ? void 0 : a[b] === !0 ? b.toLowerCase() : (d = a.getAttributeNode(b)) && d
                            .specified ? d.value : null
                    }), db
            }(a);
            n.find = t, n.expr = t.selectors, n.expr[":"] = n.expr.pseudos, n.unique = t.uniqueSort, n.text = t.getText,
                n.isXMLDoc = t.isXML, n.contains = t.contains;
            var u = n.expr.match.needsContext,
                v = /^<(\w+)\s*\/?>(?:<\/\1>|)$/,
                w = /^.[^:#\[\.,]*$/;

            function x(a, b, c) {
                if (n.isFunction(b)) return n.grep(a, function(a, d) {
                    return !!b.call(a, d, a) !== c
                });
                if (b.nodeType) return n.grep(a, function(a) {
                    return a === b !== c
                });
                if ("string" == typeof b) {
                    if (w.test(b)) return n.filter(b, a, c);
                    b = n.filter(b, a)
                }
                return n.grep(a, function(a) {
                    return n.inArray(a, b) >= 0 !== c
                })
            }
            n.filter = function(a, b, c) {
                var d = b[0];
                return c && (a = ":not(" + a + ")"), 1 === b.length && 1 === d.nodeType ? n.find.matchesSelector(d,
                    a) ? [d] : [] : n.find.matches(a, n.grep(b, function(a) {
                    return 1 === a.nodeType
                }))
            }, n.fn.extend({
                find: function(a) {
                    var b, c = [],
                        d = this,
                        e = d.length;
                    if ("string" != typeof a) return this.pushStack(n(a).filter(function() {
                        for (b = 0; e > b; b++)
                            if (n.contains(d[b], this)) return !0
                    }));
                    for (b = 0; e > b; b++) n.find(a, d[b], c);
                    return c = this.pushStack(e > 1 ? n.unique(c) : c), c.selector = this.selector ? this
                        .selector + " " + a : a, c
                },
                filter: function(a) {
                    return this.pushStack(x(this, a || [], !1))
                },
                not: function(a) {
                    return this.pushStack(x(this, a || [], !0))
                },
                is: function(a) {
                    return !!x(this, "string" == typeof a && u.test(a) ? n(a) : a || [], !1).length
                }
            });
            var y, z = a.document,
                A = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,
                B = n.fn.init = function(a, b) {
                    var c, d;
                    if (!a) return this;
                    if ("string" == typeof a) {
                        if (c = "<" === a.charAt(0) && ">" === a.charAt(a.length - 1) && a.length >= 3 ? [null, a,
                            null] : A.exec(a), !c || !c[1] && b) return !b || b.jquery ? (b || y).find(a) : this
                            .constructor(b).find(a);
                        if (c[1]) {
                            if (b = b instanceof n ? b[0] : b, n.merge(this, n.parseHTML(c[1], b && b.nodeType ? b
                                    .ownerDocument || b : z, !0)), v.test(c[1]) && n.isPlainObject(b))
                                for (c in b) n.isFunction(this[c]) ? this[c](b[c]) : this.attr(c, b[c]);
                            return this
                        }
                        if (d = z.getElementById(c[2]), d && d.parentNode) {
                            if (d.id !== c[2]) return y.find(a);
                            this.length = 1, this[0] = d
                        }
                        return this.context = z, this.selector = a, this
                    }
                    return a.nodeType ? (this.context = this[0] = a, this.length = 1, this) : n.isFunction(a) ?
                        "undefined" != typeof y.ready ? y.ready(a) : a(n) : (void 0 !== a.selector && (this.selector = a
                            .selector, this.context = a.context), n.makeArray(a, this))
                };
            B.prototype = n.fn, y = n(z);
            var C = /^(?:parents|prev(?:Until|All))/,
                D = {
                    children: !0,
                    contents: !0,
                    next: !0,
                    prev: !0
                };
            n.extend({
                dir: function(a, b, c) {
                    var d = [],
                        e = a[b];
                    while (e && 9 !== e.nodeType && (void 0 === c || 1 !== e.nodeType || !n(e).is(c))) 1 ===
                        e.nodeType && d.push(e), e = e[b];
                    return d
                },
                sibling: function(a, b) {
                    for (var c = []; a; a = a.nextSibling) 1 === a.nodeType && a !== b && c.push(a);
                    return c
                }
            }), n.fn.extend({
                has: function(a) {
                    var b, c = n(a, this),
                        d = c.length;
                    return this.filter(function() {
                        for (b = 0; d > b; b++)
                            if (n.contains(this, c[b])) return !0
                    })
                },
                closest: function(a, b) {
                    for (var c, d = 0, e = this.length, f = [], g = u.test(a) || "string" != typeof a ? n(a,
                            b || this.context) : 0; e > d; d++)
                        for (c = this[d]; c && c !== b; c = c.parentNode)
                            if (c.nodeType < 11 && (g ? g.index(c) > -1 : 1 === c.nodeType && n.find
                                    .matchesSelector(c, a))) {
                                f.push(c);
                                break
                            } return this.pushStack(f.length > 1 ? n.unique(f) : f)
                },
                index: function(a) {
                    return a ? "string" == typeof a ? n.inArray(this[0], n(a)) : n.inArray(a.jquery ? a[0] :
                        a, this) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
                },
                add: function(a, b) {
                    return this.pushStack(n.unique(n.merge(this.get(), n(a, b))))
                },
                addBack: function(a) {
                    return this.add(null == a ? this.prevObject : this.prevObject.filter(a))
                }
            });

            function E(a, b) {
                do a = a[b]; while (a && 1 !== a.nodeType);
                return a
            }
            n.each({
                parent: function(a) {
                    var b = a.parentNode;
                    return b && 11 !== b.nodeType ? b : null
                },
                parents: function(a) {
                    return n.dir(a, "parentNode")
                },
                parentsUntil: function(a, b, c) {
                    return n.dir(a, "parentNode", c)
                },
                next: function(a) {
                    return E(a, "nextSibling")
                },
                prev: function(a) {
                    return E(a, "previousSibling")
                },
                nextAll: function(a) {
                    return n.dir(a, "nextSibling")
                },
                prevAll: function(a) {
                    return n.dir(a, "previousSibling")
                },
                nextUntil: function(a, b, c) {
                    return n.dir(a, "nextSibling", c)
                },
                prevUntil: function(a, b, c) {
                    return n.dir(a, "previousSibling", c)
                },
                siblings: function(a) {
                    return n.sibling((a.parentNode || {}).firstChild, a)
                },
                children: function(a) {
                    return n.sibling(a.firstChild)
                },
                contents: function(a) {
                    return n.nodeName(a, "iframe") ? a.contentDocument || a.contentWindow.document : n
                        .merge([], a.childNodes)
                }
            }, function(a, b) {
                n.fn[a] = function(c, d) {
                    var e = n.map(this, b, c);
                    return "Until" !== a.slice(-5) && (d = c), d && "string" == typeof d && (e = n.filter(d,
                        e)), this.length > 1 && (D[a] || (e = n.unique(e)), C.test(a) && (e = e
                    .reverse())), this.pushStack(e)
                }
            });
            var F = /\S+/g,
                G = {};

            function H(a) {
                var b = G[a] = {};
                return n.each(a.match(F) || [], function(a, c) {
                    b[c] = !0
                }), b
            }
            n.Callbacks = function(a) {
                a = "string" == typeof a ? G[a] || H(a) : n.extend({}, a);
                var b, c, d, e, f, g, h = [],
                    i = !a.once && [],
                    j = function(l) {
                        for (c = a.memory && l, d = !0, f = g || 0, g = 0, e = h.length, b = !0; h && e > f; f++)
                            if (h[f].apply(l[0], l[1]) === !1 && a.stopOnFalse) {
                                c = !1;
                                break
                            } b = !1, h && (i ? i.length && j(i.shift()) : c ? h = [] : k.disable())
                    },
                    k = {
                        add: function() {
                            if (h) {
                                var d = h.length;
                                ! function f(b) {
                                    n.each(b, function(b, c) {
                                        var d = n.type(c);
                                        "function" === d ? a.unique && k.has(c) || h.push(c) : c && c
                                            .length && "string" !== d && f(c)
                                    })
                                }(arguments), b ? e = h.length : c && (g = d, j(c))
                            }
                            return this
                        },
                        remove: function() {
                            return h && n.each(arguments, function(a, c) {
                                var d;
                                while ((d = n.inArray(c, h, d)) > -1) h.splice(d, 1), b && (e >= d &&
                                    e--, f >= d && f--)
                            }), this
                        },
                        has: function(a) {
                            return a ? n.inArray(a, h) > -1 : !(!h || !h.length)
                        },
                        empty: function() {
                            return h = [], e = 0, this
                        },
                        disable: function() {
                            return h = i = c = void 0, this
                        },
                        disabled: function() {
                            return !h
                        },
                        lock: function() {
                            return i = void 0, c || k.disable(), this
                        },
                        locked: function() {
                            return !i
                        },
                        fireWith: function(a, c) {
                            return !h || d && !i || (c = c || [], c = [a, c.slice ? c.slice() : c], b ? i.push(
                                c) : j(c)), this
                        },
                        fire: function() {
                            return k.fireWith(this, arguments), this
                        },
                        fired: function() {
                            return !!d
                        }
                    };
                return k
            }, n.extend({
                Deferred: function(a) {
                    var b = [
                            ["resolve", "done", n.Callbacks("once memory"), "resolved"],
                            ["reject", "fail", n.Callbacks("once memory"), "rejected"],
                            ["notify", "progress", n.Callbacks("memory")]
                        ],
                        c = "pending",
                        d = {
                            state: function() {
                                return c
                            },
                            always: function() {
                                return e.done(arguments).fail(arguments), this
                            },
                            then: function() {
                                var a = arguments;
                                return n.Deferred(function(c) {
                                    n.each(b, function(b, f) {
                                        var g = n.isFunction(a[b]) && a[b];
                                        e[f[1]](function() {
                                            var a = g && g.apply(this,
                                                arguments);
                                            a && n.isFunction(a.promise) ? a
                                                .promise().done(c.resolve).fail(
                                                    c.reject).progress(c
                                                .notify) : c[f[0] + "With"](
                                                    this === d ? c.promise() :
                                                    this, g ? [a] : arguments)
                                        })
                                    }), a = null
                                }).promise()
                            },
                            promise: function(a) {
                                return null != a ? n.extend(a, d) : d
                            }
                        },
                        e = {};
                    return d.pipe = d.then, n.each(b, function(a, f) {
                        var g = f[2],
                            h = f[3];
                        d[f[1]] = g.add, h && g.add(function() {
                            c = h
                        }, b[1 ^ a][2].disable, b[2][2].lock), e[f[0]] = function() {
                            return e[f[0] + "With"](this === e ? d : this, arguments), this
                        }, e[f[0] + "With"] = g.fireWith
                    }), d.promise(e), a && a.call(e, e), e
                },
                when: function(a) {
                    var b = 0,
                        c = d.call(arguments),
                        e = c.length,
                        f = 1 !== e || a && n.isFunction(a.promise) ? e : 0,
                        g = 1 === f ? a : n.Deferred(),
                        h = function(a, b, c) {
                            return function(e) {
                                b[a] = this, c[a] = arguments.length > 1 ? d.call(arguments) : e, c ===
                                    i ? g.notifyWith(b, c) : --f || g.resolveWith(b, c)
                            }
                        },
                        i, j, k;
                    if (e > 1)
                        for (i = new Array(e), j = new Array(e), k = new Array(e); e > b; b++) c[b] && n
                            .isFunction(c[b].promise) ? c[b].promise().done(h(b, k, c)).fail(g.reject)
                            .progress(h(b, j, i)) : --f;
                    return f || g.resolveWith(k, c), g.promise()
                }
            });
            var I;
            n.fn.ready = function(a) {
                return n.ready.promise().done(a), this
            }, n.extend({
                isReady: !1,
                readyWait: 1,
                holdReady: function(a) {
                    a ? n.readyWait++ : n.ready(!0)
                },
                ready: function(a) {
                    if (a === !0 ? !--n.readyWait : !n.isReady) {
                        if (!z.body) return setTimeout(n.ready);
                        n.isReady = !0, a !== !0 && --n.readyWait > 0 || (I.resolveWith(z, [n]), n.fn
                            .trigger && n(z).trigger("ready").off("ready"))
                    }
                }
            });

            function J() {
                z.addEventListener ? (z.removeEventListener("DOMContentLoaded", K, !1), a.removeEventListener("load", K,
                    !1)) : (z.detachEvent("onreadystatechange", K), a.detachEvent("onload", K))
            }

            function K() {
                (z.addEventListener || "load" === event.type || "complete" === z.readyState) && (J(), n.ready())
            }
            n.ready.promise = function(b) {
                if (!I)
                    if (I = n.Deferred(), "complete" === z.readyState) setTimeout(n.ready);
                    else if (z.addEventListener) z.addEventListener("DOMContentLoaded", K, !1), a.addEventListener(
                    "load", K, !1);
                else {
                    z.attachEvent("onreadystatechange", K), a.attachEvent("onload", K);
                    var c = !1;
                    try {
                        c = null == a.frameElement && z.documentElement
                    } catch (d) {}
                    c && c.doScroll && ! function e() {
                        if (!n.isReady) {
                            try {
                                c.doScroll("left")
                            } catch (a) {
                                return setTimeout(e, 50)
                            }
                            J(), n.ready()
                        }
                    }()
                }
                return I.promise(b)
            };
            var L = "undefined",
                M;
            for (M in n(l)) break;
            l.ownLast = "0" !== M, l.inlineBlockNeedsLayout = !1, n(function() {
                    var a, b, c = z.getElementsByTagName("body")[0];
                    c && (a = z.createElement("div"), a.style.cssText =
                        "border:0;width:0;height:0;position:absolute;top:0;left:-9999px;margin-top:1px", b = z
                        .createElement("div"), c.appendChild(a).appendChild(b), typeof b.style.zoom !== L && (b
                            .style.cssText = "border:0;margin:0;width:1px;padding:1px;display:inline;zoom:1", (l
                                .inlineBlockNeedsLayout = 3 === b.offsetWidth) && (c.style.zoom = 1)), c
                        .removeChild(a), a = b = null)
                }),
                function() {
                    var a = z.createElement("div");
                    if (null == l.deleteExpando) {
                        l.deleteExpando = !0;
                        try {
                            delete a.test
                        } catch (b) {
                            l.deleteExpando = !1
                        }
                    }
                    a = null
                }(), n.acceptData = function(a) {
                    var b = n.noData[(a.nodeName + " ").toLowerCase()],
                        c = +a.nodeType || 1;
                    return 1 !== c && 9 !== c ? !1 : !b || b !== !0 && a.getAttribute("classid") === b
                };
            var N = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
                O = /([A-Z])/g;

            function P(a, b, c) {
                if (void 0 === c && 1 === a.nodeType) {
                    var d = "data-" + b.replace(O, "-$1").toLowerCase();
                    if (c = a.getAttribute(d), "string" == typeof c) {
                        try {
                            c = "true" === c ? !0 : "false" === c ? !1 : "null" === c ? null : +c + "" === c ? +c : N
                                .test(c) ? n.parseJSON(c) : c
                        } catch (e) {}
                        n.data(a, b, c)
                    } else c = void 0
                }
                return c
            }

            function Q(a) {
                var b;
                for (b in a)
                    if (("data" !== b || !n.isEmptyObject(a[b])) && "toJSON" !== b) return !1;
                return !0
            }

            function R(a, b, d, e) {
                if (n.acceptData(a)) {
                    var f, g, h = n.expando,
                        i = a.nodeType,
                        j = i ? n.cache : a,
                        k = i ? a[h] : a[h] && h;
                    if (k && j[k] && (e || j[k].data) || void 0 !== d || "string" != typeof b) return k || (k = i ? a[
                            h] = c.pop() || n.guid++ : h), j[k] || (j[k] = i ? {} : {
                            toJSON: n.noop
                        }), ("object" == typeof b || "function" == typeof b) && (e ? j[k] = n.extend(j[k], b) : j[k]
                            .data = n.extend(j[k].data, b)), g = j[k], e || (g.data || (g.data = {}), g = g.data),
                        void 0 !== d && (g[n.camelCase(b)] = d), "string" == typeof b ? (f = g[b], null == f && (f =
                            g[n.camelCase(b)])) : f = g, f
                }
            }

            function S(a, b, c) {
                if (n.acceptData(a)) {
                    var d, e, f = a.nodeType,
                        g = f ? n.cache : a,
                        h = f ? a[n.expando] : n.expando;
                    if (g[h]) {
                        if (b && (d = c ? g[h] : g[h].data)) {
                            n.isArray(b) ? b = b.concat(n.map(b, n.camelCase)) : b in d ? b = [b] : (b = n.camelCase(b),
                                b = b in d ? [b] : b.split(" ")), e = b.length;
                            while (e--) delete d[b[e]];
                            if (c ? !Q(d) : !n.isEmptyObject(d)) return
                        }(c || (delete g[h].data, Q(g[h]))) && (f ? n.cleanData([a], !0) : l.deleteExpando || g != g
                            .window ? delete g[h] : g[h] = null)
                    }
                }
            }
            n.extend({
                cache: {},
                noData: {
                    "applet ": !0,
                    "embed ": !0,
                    "object ": "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                },
                hasData: function(a) {
                    return a = a.nodeType ? n.cache[a[n.expando]] : a[n.expando], !!a && !Q(a)
                },
                data: function(a, b, c) {
                    return R(a, b, c)
                },
                removeData: function(a, b) {
                    return S(a, b)
                },
                _data: function(a, b, c) {
                    return R(a, b, c, !0)
                },
                _removeData: function(a, b) {
                    return S(a, b, !0)
                }
            }), n.fn.extend({
                data: function(a, b) {
                    var c, d, e, f = this[0],
                        g = f && f.attributes;
                    if (void 0 === a) {
                        if (this.length && (e = n.data(f), 1 === f.nodeType && !n._data(f,
                            "parsedAttrs"))) {
                            c = g.length;
                            while (c--) d = g[c].name, 0 === d.indexOf("data-") && (d = n.camelCase(d.slice(
                                5)), P(f, d, e[d]));
                            n._data(f, "parsedAttrs", !0)
                        }
                        return e
                    }
                    return "object" == typeof a ? this.each(function() {
                        n.data(this, a)
                    }) : arguments.length > 1 ? this.each(function() {
                        n.data(this, a, b)
                    }) : f ? P(f, a, n.data(f, a)) : void 0
                },
                removeData: function(a) {
                    return this.each(function() {
                        n.removeData(this, a)
                    })
                }
            }), n.extend({
                queue: function(a, b, c) {
                    var d;
                    return a ? (b = (b || "fx") + "queue", d = n._data(a, b), c && (!d || n.isArray(c) ? d =
                        n._data(a, b, n.makeArray(c)) : d.push(c)), d || []) : void 0
                },
                dequeue: function(a, b) {
                    b = b || "fx";
                    var c = n.queue(a, b),
                        d = c.length,
                        e = c.shift(),
                        f = n._queueHooks(a, b),
                        g = function() {
                            n.dequeue(a, b)
                        };
                    "inprogress" === e && (e = c.shift(), d--), e && ("fx" === b && c.unshift("inprogress"),
                        delete f.stop, e.call(a, g, f)), !d && f && f.empty.fire()
                },
                _queueHooks: function(a, b) {
                    var c = b + "queueHooks";
                    return n._data(a, c) || n._data(a, c, {
                        empty: n.Callbacks("once memory").add(function() {
                            n._removeData(a, b + "queue"), n._removeData(a, c)
                        })
                    })
                }
            }), n.fn.extend({
                queue: function(a, b) {
                    var c = 2;
                    return "string" != typeof a && (b = a, a = "fx", c--), arguments.length < c ? n.queue(
                        this[0], a) : void 0 === b ? this : this.each(function() {
                        var c = n.queue(this, a, b);
                        n._queueHooks(this, a), "fx" === a && "inprogress" !== c[0] && n.dequeue(
                            this, a)
                    })
                },
                dequeue: function(a) {
                    return this.each(function() {
                        n.dequeue(this, a)
                    })
                },
                clearQueue: function(a) {
                    return this.queue(a || "fx", [])
                },
                promise: function(a, b) {
                    var c, d = 1,
                        e = n.Deferred(),
                        f = this,
                        g = this.length,
                        h = function() {
                            --d || e.resolveWith(f, [f])
                        };
                    "string" != typeof a && (b = a, a = void 0), a = a || "fx";
                    while (g--) c = n._data(f[g], a + "queueHooks"), c && c.empty && (d++, c.empty.add(h));
                    return h(), e.promise(b)
                }
            });
            var T = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
                U = ["Top", "Right", "Bottom", "Left"],
                V = function(a, b) {
                    return a = b || a, "none" === n.css(a, "display") || !n.contains(a.ownerDocument, a)
                },
                W = n.access = function(a, b, c, d, e, f, g) {
                    var h = 0,
                        i = a.length,
                        j = null == c;
                    if ("object" === n.type(c)) {
                        e = !0;
                        for (h in c) n.access(a, b, h, c[h], !0, f, g)
                    } else if (void 0 !== d && (e = !0, n.isFunction(d) || (g = !0), j && (g ? (b.call(a, d), b =
                            null) : (j = b, b = function(a, b, c) {
                                return j.call(n(a), c)
                            })), b))
                        for (; i > h; h++) b(a[h], c, g ? d : d.call(a[h], h, b(a[h], c)));
                    return e ? a : j ? b.call(a) : i ? b(a[0], c) : f
                },
                X = /^(?:checkbox|radio)$/i;
            ! function() {
                var a = z.createDocumentFragment(),
                    b = z.createElement("div"),
                    c = z.createElement("input");
                if (b.setAttribute("className", "t"), b.innerHTML = "  <link/><table></table><a href='/a'>a</a>", l
                    .leadingWhitespace = 3 === b.firstChild.nodeType, l.tbody = !b.getElementsByTagName("tbody").length,
                    l.htmlSerialize = !!b.getElementsByTagName("link").length, l.html5Clone = "<:nav></:nav>" !== z
                    .createElement("nav").cloneNode(!0).outerHTML, c.type = "checkbox", c.checked = !0, a.appendChild(
                    c), l.appendChecked = c.checked, b.innerHTML = "<textarea>x</textarea>", l.noCloneChecked = !!b
                    .cloneNode(!0).lastChild.defaultValue, a.appendChild(b), b.innerHTML =
                    "<input type='radio' checked='checked' name='t'/>", l.checkClone = b.cloneNode(!0).cloneNode(!0)
                    .lastChild.checked, l.noCloneEvent = !0, b.attachEvent && (b.attachEvent("onclick", function() {
                        l.noCloneEvent = !1
                    }), b.cloneNode(!0).click()), null == l.deleteExpando) {
                    l.deleteExpando = !0;
                    try {
                        delete b.test
                    } catch (d) {
                        l.deleteExpando = !1
                    }
                }
                a = b = c = null
            }(),
            function() {
                var b, c, d = z.createElement("div");
                for (b in {
                        submit: !0,
                        change: !0,
                        focusin: !0
                    }) c = "on" + b, (l[b + "Bubbles"] = c in a) || (d.setAttribute(c, "t"), l[b + "Bubbles"] = d
                    .attributes[c].expando === !1);
                d = null
            }();
            var Y = /^(?:input|select|textarea)$/i,
                Z = /^key/,
                $ = /^(?:mouse|contextmenu)|click/,
                _ = /^(?:focusinfocus|focusoutblur)$/,
                ab = /^([^.]*)(?:\.(.+)|)$/;

            function bb() {
                return !0
            }

            function cb() {
                return !1
            }

            function db() {
                try {
                    return z.activeElement
                } catch (a) {}
            }
            n.event = {
                global: {},
                add: function(a, b, c, d, e) {
                    var f, g, h, i, j, k, l, m, o, p, q, r = n._data(a);
                    if (r) {
                        c.handler && (i = c, c = i.handler, e = i.selector), c.guid || (c.guid = n.guid++), (g =
                            r.events) || (g = r.events = {}), (k = r.handle) || (k = r.handle = function(
                        a) {
                            return typeof n === L || a && n.event.triggered === a.type ? void 0 : n
                                .event.dispatch.apply(k.elem, arguments)
                        }, k.elem = a), b = (b || "").match(F) || [""], h = b.length;
                        while (h--) f = ab.exec(b[h]) || [], o = q = f[1], p = (f[2] || "").split(".").sort(),
                            o && (j = n.event.special[o] || {}, o = (e ? j.delegateType : j.bindType) || o, j =
                                n.event.special[o] || {}, l = n.extend({
                                    type: o,
                                    origType: q,
                                    data: d,
                                    handler: c,
                                    guid: c.guid,
                                    selector: e,
                                    needsContext: e && n.expr.match.needsContext.test(e),
                                    namespace: p.join(".")
                                }, i), (m = g[o]) || (m = g[o] = [], m.delegateCount = 0, j.setup && j.setup
                                    .call(a, d, p, k) !== !1 || (a.addEventListener ? a.addEventListener(o, k, !
                                        1) : a.attachEvent && a.attachEvent("on" + o, k))), j.add && (j.add
                                    .call(a, l), l.handler.guid || (l.handler.guid = c.guid)), e ? m.splice(m
                                    .delegateCount++, 0, l) : m.push(l), n.event.global[o] = !0);
                        a = null
                    }
                },
                remove: function(a, b, c, d, e) {
                    var f, g, h, i, j, k, l, m, o, p, q, r = n.hasData(a) && n._data(a);
                    if (r && (k = r.events)) {
                        b = (b || "").match(F) || [""], j = b.length;
                        while (j--)
                            if (h = ab.exec(b[j]) || [], o = q = h[1], p = (h[2] || "").split(".").sort(), o) {
                                l = n.event.special[o] || {}, o = (d ? l.delegateType : l.bindType) || o, m = k[
                                    o] || [], h = h[2] && new RegExp("(^|\\.)" + p.join("\\.(?:.*\\.|)") +
                                    "(\\.|$)"), i = f = m.length;
                                while (f--) g = m[f], !e && q !== g.origType || c && c.guid !== g.guid || h && !
                                    h.test(g.namespace) || d && d !== g.selector && ("**" !== d || !g
                                    .selector) || (m.splice(f, 1), g.selector && m.delegateCount--, l.remove &&
                                        l.remove.call(a, g));
                                i && !m.length && (l.teardown && l.teardown.call(a, p, r.handle) !== !1 || n
                                    .removeEvent(a, o, r.handle), delete k[o])
                            } else
                                for (o in k) n.event.remove(a, o + b[j], c, d, !0);
                        n.isEmptyObject(k) && (delete r.handle, n._removeData(a, "events"))
                    }
                },
                trigger: function(b, c, d, e) {
                    var f, g, h, i, k, l, m, o = [d || z],
                        p = j.call(b, "type") ? b.type : b,
                        q = j.call(b, "namespace") ? b.namespace.split(".") : [];
                    if (h = l = d = d || z, 3 !== d.nodeType && 8 !== d.nodeType && !_.test(p + n.event
                            .triggered) && (p.indexOf(".") >= 0 && (q = p.split("."), p = q.shift(), q.sort()),
                            g = p.indexOf(":") < 0 && "on" + p, b = b[n.expando] ? b : new n.Event(p,
                                "object" == typeof b && b), b.isTrigger = e ? 2 : 3, b.namespace = q.join("."),
                            b.namespace_re = b.namespace ? new RegExp("(^|\\.)" + q.join("\\.(?:.*\\.|)") +
                                "(\\.|$)") : null, b.result = void 0, b.target || (b.target = d), c = null ==
                            c ? [b] : n.makeArray(c, [b]), k = n.event.special[p] || {}, e || !k.trigger || k
                            .trigger.apply(d, c) !== !1)) {
                        if (!e && !k.noBubble && !n.isWindow(d)) {
                            for (i = k.delegateType || p, _.test(i + p) || (h = h.parentNode); h; h = h
                                .parentNode) o.push(h), l = h;
                            l === (d.ownerDocument || z) && o.push(l.defaultView || l.parentWindow || a)
                        }
                        m = 0;
                        while ((h = o[m++]) && !b.isPropagationStopped()) b.type = m > 1 ? i : k.bindType || p,
                            f = (n._data(h, "events") || {})[b.type] && n._data(h, "handle"), f && f.apply(h,
                            c), f = g && h[g], f && f.apply && n.acceptData(h) && (b.result = f.apply(h, c), b
                                .result === !1 && b.preventDefault());
                        if (b.type = p, !e && !b.isDefaultPrevented() && (!k._default || k._default.apply(o
                            .pop(), c) === !1) && n.acceptData(d) && g && d[p] && !n.isWindow(d)) {
                            l = d[g], l && (d[g] = null), n.event.triggered = p;
                            try {
                                d[p]()
                            } catch (r) {}
                            n.event.triggered = void 0, l && (d[g] = l)
                        }
                        return b.result
                    }
                },
                dispatch: function(a) {
                    a = n.event.fix(a);
                    var b, c, e, f, g, h = [],
                        i = d.call(arguments),
                        j = (n._data(this, "events") || {})[a.type] || [],
                        k = n.event.special[a.type] || {};
                    if (i[0] = a, a.delegateTarget = this, !k.preDispatch || k.preDispatch.call(this, a) !== !
                        1) {
                        h = n.event.handlers.call(this, a, j), b = 0;
                        while ((f = h[b++]) && !a.isPropagationStopped()) {
                            a.currentTarget = f.elem, g = 0;
                            while ((e = f.handlers[g++]) && !a.isImmediatePropagationStopped())(!a
                                .namespace_re || a.namespace_re.test(e.namespace)) && (a.handleObj = e, a
                                .data = e.data, c = ((n.event.special[e.origType] || {}).handle || e
                                    .handler).apply(f.elem, i), void 0 !== c && (a.result = c) === !1 && (a
                                    .preventDefault(), a.stopPropagation()))
                        }
                        return k.postDispatch && k.postDispatch.call(this, a), a.result
                    }
                },
                handlers: function(a, b) {
                    var c, d, e, f, g = [],
                        h = b.delegateCount,
                        i = a.target;
                    if (h && i.nodeType && (!a.button || "click" !== a.type))
                        for (; i != this; i = i.parentNode || this)
                            if (1 === i.nodeType && (i.disabled !== !0 || "click" !== a.type)) {
                                for (e = [], f = 0; h > f; f++) d = b[f], c = d.selector + " ", void 0 === e[
                                    c] && (e[c] = d.needsContext ? n(c, this).index(i) >= 0 : n.find(c, this,
                                        null, [i]).length), e[c] && e.push(d);
                                e.length && g.push({
                                    elem: i,
                                    handlers: e
                                })
                            } return h < b.length && g.push({
                        elem: this,
                        handlers: b.slice(h)
                    }), g
                },
                fix: function(a) {
                    if (a[n.expando]) return a;
                    var b, c, d, e = a.type,
                        f = a,
                        g = this.fixHooks[e];
                    g || (this.fixHooks[e] = g = $.test(e) ? this.mouseHooks : Z.test(e) ? this.keyHooks : {}),
                        d = g.props ? this.props.concat(g.props) : this.props, a = new n.Event(f), b = d.length;
                    while (b--) c = d[b], a[c] = f[c];
                    return a.target || (a.target = f.srcElement || z), 3 === a.target.nodeType && (a.target = a
                        .target.parentNode), a.metaKey = !!a.metaKey, g.filter ? g.filter(a, f) : a
                },
                props: "altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which"
                    .split(" "),
                fixHooks: {},
                keyHooks: {
                    props: "char charCode key keyCode".split(" "),
                    filter: function(a, b) {
                        return null == a.which && (a.which = null != b.charCode ? b.charCode : b.keyCode), a
                    }
                },
                mouseHooks: {
                    props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement"
                        .split(" "),
                    filter: function(a, b) {
                        var c, d, e, f = b.button,
                            g = b.fromElement;
                        return null == a.pageX && null != b.clientX && (d = a.target.ownerDocument || z, e = d
                            .documentElement, c = d.body, a.pageX = b.clientX + (e && e.scrollLeft || c && c
                                .scrollLeft || 0) - (e && e.clientLeft || c && c.clientLeft || 0), a.pageY =
                            b.clientY + (e && e.scrollTop || c && c.scrollTop || 0) - (e && e.clientTop ||
                                c && c.clientTop || 0)), !a.relatedTarget && g && (a.relatedTarget = g === a
                            .target ? b.toElement : g), a.which || void 0 === f || (a.which = 1 & f ? 1 :
                            2 & f ? 3 : 4 & f ? 2 : 0), a
                    }
                },
                special: {
                    load: {
                        noBubble: !0
                    },
                    focus: {
                        trigger: function() {
                            if (this !== db() && this.focus) try {
                                return this.focus(), !1
                            } catch (a) {}
                        },
                        delegateType: "focusin"
                    },
                    blur: {
                        trigger: function() {
                            return this === db() && this.blur ? (this.blur(), !1) : void 0
                        },
                        delegateType: "focusout"
                    },
                    click: {
                        trigger: function() {
                            return n.nodeName(this, "input") && "checkbox" === this.type && this.click ? (this
                                .click(), !1) : void 0
                        },
                        _default: function(a) {
                            return n.nodeName(a.target, "a")
                        }
                    },
                    beforeunload: {
                        postDispatch: function(a) {
                            void 0 !== a.result && (a.originalEvent.returnValue = a.result)
                        }
                    }
                },
                simulate: function(a, b, c, d) {
                    var e = n.extend(new n.Event, c, {
                        type: a,
                        isSimulated: !0,
                        originalEvent: {}
                    });
                    d ? n.event.trigger(e, null, b) : n.event.dispatch.call(b, e), e.isDefaultPrevented() && c
                        .preventDefault()
                }
            }, n.removeEvent = z.removeEventListener ? function(a, b, c) {
                a.removeEventListener && a.removeEventListener(b, c, !1)
            } : function(a, b, c) {
                var d = "on" + b;
                a.detachEvent && (typeof a[d] === L && (a[d] = null), a.detachEvent(d, c))
            }, n.Event = function(a, b) {
                return this instanceof n.Event ? (a && a.type ? (this.originalEvent = a, this.type = a.type, this
                        .isDefaultPrevented = a.defaultPrevented || void 0 === a.defaultPrevented && (a
                            .returnValue === !1 || a.getPreventDefault && a.getPreventDefault()) ? bb : cb) :
                    this.type = a, b && n.extend(this, b), this.timeStamp = a && a.timeStamp || n.now(), void(
                        this[n.expando] = !0)) : new n.Event(a, b)
            }, n.Event.prototype = {
                isDefaultPrevented: cb,
                isPropagationStopped: cb,
                isImmediatePropagationStopped: cb,
                preventDefault: function() {
                    var a = this.originalEvent;
                    this.isDefaultPrevented = bb, a && (a.preventDefault ? a.preventDefault() : a
                        .returnValue = !1)
                },
                stopPropagation: function() {
                    var a = this.originalEvent;
                    this.isPropagationStopped = bb, a && (a.stopPropagation && a.stopPropagation(), a
                        .cancelBubble = !0)
                },
                stopImmediatePropagation: function() {
                    this.isImmediatePropagationStopped = bb, this.stopPropagation()
                }
            }, n.each({
                mouseenter: "mouseover",
                mouseleave: "mouseout"
            }, function(a, b) {
                n.event.special[a] = {
                    delegateType: b,
                    bindType: b,
                    handle: function(a) {
                        var c, d = this,
                            e = a.relatedTarget,
                            f = a.handleObj;
                        return (!e || e !== d && !n.contains(d, e)) && (a.type = f.origType, c = f
                            .handler.apply(this, arguments), a.type = b), c
                    }
                }
            }), l.submitBubbles || (n.event.special.submit = {
                setup: function() {
                    return n.nodeName(this, "form") ? !1 : void n.event.add(this,
                        "click._submit keypress._submit",
                        function(a) {
                            var b = a.target,
                                c = n.nodeName(b, "input") || n.nodeName(b, "button") ? b.form : void 0;
                            c && !n._data(c, "submitBubbles") && (n.event.add(c, "submit._submit",
                                function(a) {
                                    a._submit_bubble = !0
                                }), n._data(c, "submitBubbles", !0))
                        })
                },
                postDispatch: function(a) {
                    a._submit_bubble && (delete a._submit_bubble, this.parentNode && !a.isTrigger && n.event
                        .simulate("submit", this.parentNode, a, !0))
                },
                teardown: function() {
                    return n.nodeName(this, "form") ? !1 : void n.event.remove(this, "._submit")
                }
            }), l.changeBubbles || (n.event.special.change = {
                setup: function() {
                    return Y.test(this.nodeName) ? (("checkbox" === this.type || "radio" === this.type) && (
                        n.event.add(this, "propertychange._change", function(a) {
                            "checked" === a.originalEvent.propertyName && (this
                                ._just_changed = !0)
                        }), n.event.add(this, "click._change", function(a) {
                            this._just_changed && !a.isTrigger && (this._just_changed = !1), n
                                .event.simulate("change", this, a, !0)
                        })), !1) : void n.event.add(this, "beforeactivate._change", function(a) {
                        var b = a.target;
                        Y.test(b.nodeName) && !n._data(b, "changeBubbles") && (n.event.add(b,
                            "change._change",
                            function(a) {
                                !this.parentNode || a.isSimulated || a.isTrigger || n.event
                                    .simulate("change", this.parentNode, a, !0)
                            }), n._data(b, "changeBubbles", !0))
                    })
                },
                handle: function(a) {
                    var b = a.target;
                    return this !== b || a.isSimulated || a.isTrigger || "radio" !== b.type &&
                        "checkbox" !== b.type ? a.handleObj.handler.apply(this, arguments) : void 0
                },
                teardown: function() {
                    return n.event.remove(this, "._change"), !Y.test(this.nodeName)
                }
            }), l.focusinBubbles || n.each({
                focus: "focusin",
                blur: "focusout"
            }, function(a, b) {
                var c = function(a) {
                    n.event.simulate(b, a.target, n.event.fix(a), !0)
                };
                n.event.special[b] = {
                    setup: function() {
                        var d = this.ownerDocument || this,
                            e = n._data(d, b);
                        e || d.addEventListener(a, c, !0), n._data(d, b, (e || 0) + 1)
                    },
                    teardown: function() {
                        var d = this.ownerDocument || this,
                            e = n._data(d, b) - 1;
                        e ? n._data(d, b, e) : (d.removeEventListener(a, c, !0), n._removeData(d, b))
                    }
                }
            }), n.fn.extend({
                on: function(a, b, c, d, e) {
                    var f, g;
                    if ("object" == typeof a) {
                        "string" != typeof b && (c = c || b, b = void 0);
                        for (f in a) this.on(f, b, c, a[f], e);
                        return this
                    }
                    if (null == c && null == d ? (d = b, c = b = void 0) : null == d && ("string" ==
                            typeof b ? (d = c, c = void 0) : (d = c, c = b, b = void 0)), d === !1) d = cb;
                    else if (!d) return this;
                    return 1 === e && (g = d, d = function(a) {
                        return n().off(a), g.apply(this, arguments)
                    }, d.guid = g.guid || (g.guid = n.guid++)), this.each(function() {
                        n.event.add(this, a, d, c, b)
                    })
                },
                one: function(a, b, c, d) {
                    return this.on(a, b, c, d, 1)
                },
                off: function(a, b, c) {
                    var d, e;
                    if (a && a.preventDefault && a.handleObj) return d = a.handleObj, n(a.delegateTarget)
                        .off(d.namespace ? d.origType + "." + d.namespace : d.origType, d.selector, d
                            .handler), this;
                    if ("object" == typeof a) {
                        for (e in a) this.off(e, b, a[e]);
                        return this
                    }
                    return (b === !1 || "function" == typeof b) && (c = b, b = void 0), c === !1 && (c =
                        cb), this.each(function() {
                            n.event.remove(this, a, c, b)
                        })
                },
                trigger: function(a, b) {
                    return this.each(function() {
                        n.event.trigger(a, b, this)
                    })
                },
                triggerHandler: function(a, b) {
                    var c = this[0];
                    return c ? n.event.trigger(a, b, c, !0) : void 0
                }
            });

            function eb(a) {
                var b = fb.split("|"),
                    c = a.createDocumentFragment();
                if (c.createElement)
                    while (b.length) c.createElement(b.pop());
                return c
            }
            var fb =
                "abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",
                gb = / jQuery\d+="(?:null|\d+)"/g,
                hb = new RegExp("<(?:" + fb + ")[\\s/>]", "i"),
                ib = /^\s+/,
                jb = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,
                kb = /<([\w:]+)/,
                lb = /<tbody/i,
                mb = /<|&#?\w+;/,
                nb = /<(?:script|style|link)/i,
                ob = /checked\s*(?:[^=]|=\s*.checked.)/i,
                pb = /^$|\/(?:java|ecma)script/i,
                qb = /^true\/(.*)/,
                rb = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,
                sb = {
                    option: [1, "<select multiple='multiple'>", "</select>"],
                    legend: [1, "<fieldset>", "</fieldset>"],
                    area: [1, "<map>", "</map>"],
                    param: [1, "<object>", "</object>"],
                    thead: [1, "<table>", "</table>"],
                    tr: [2, "<table><tbody>", "</tbody></table>"],
                    col: [2, "<table><tbody></tbody><colgroup>", "</colgroup></table>"],
                    td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
                    _default: l.htmlSerialize ? [0, "", ""] : [1, "X<div>", "</div>"]
                },
                tb = eb(z),
                ub = tb.appendChild(z.createElement("div"));
            sb.optgroup = sb.option, sb.tbody = sb.tfoot = sb.colgroup = sb.caption = sb.thead, sb.th = sb.td;

            function vb(a, b) {
                var c, d, e = 0,
                    f = typeof a.getElementsByTagName !== L ? a.getElementsByTagName(b || "*") : typeof a
                    .querySelectorAll !== L ? a.querySelectorAll(b || "*") : void 0;
                if (!f)
                    for (f = [], c = a.childNodes || a; null != (d = c[e]); e++) !b || n.nodeName(d, b) ? f.push(d) : n
                        .merge(f, vb(d, b));
                return void 0 === b || b && n.nodeName(a, b) ? n.merge([a], f) : f
            }

            function wb(a) {
                X.test(a.type) && (a.defaultChecked = a.checked)
            }

            function xb(a, b) {
                return n.nodeName(a, "table") && n.nodeName(11 !== b.nodeType ? b : b.firstChild, "tr") ? a
                    .getElementsByTagName("tbody")[0] || a.appendChild(a.ownerDocument.createElement("tbody")) : a
            }

            function yb(a) {
                return a.type = (null !== n.find.attr(a, "type")) + "/" + a.type, a
            }

            function zb(a) {
                var b = qb.exec(a.type);
                return b ? a.type = b[1] : a.removeAttribute("type"), a
            }

            function Ab(a, b) {
                for (var c, d = 0; null != (c = a[d]); d++) n._data(c, "globalEval", !b || n._data(b[d], "globalEval"))
            }

            function Bb(a, b) {
                if (1 === b.nodeType && n.hasData(a)) {
                    var c, d, e, f = n._data(a),
                        g = n._data(b, f),
                        h = f.events;
                    if (h) {
                        delete g.handle, g.events = {};
                        for (c in h)
                            for (d = 0, e = h[c].length; e > d; d++) n.event.add(b, c, h[c][d])
                    }
                    g.data && (g.data = n.extend({}, g.data))
                }
            }

            function Cb(a, b) {
                var c, d, e;
                if (1 === b.nodeType) {
                    if (c = b.nodeName.toLowerCase(), !l.noCloneEvent && b[n.expando]) {
                        e = n._data(b);
                        for (d in e.events) n.removeEvent(b, d, e.handle);
                        b.removeAttribute(n.expando)
                    }
                    "script" === c && b.text !== a.text ? (yb(b).text = a.text, zb(b)) : "object" === c ? (b
                            .parentNode && (b.outerHTML = a.outerHTML), l.html5Clone && a.innerHTML && !n.trim(b
                                .innerHTML) && (b.innerHTML = a.innerHTML)) : "input" === c && X.test(a.type) ? (b
                            .defaultChecked = b.checked = a.checked, b.value !== a.value && (b.value = a.value)) :
                        "option" === c ? b.defaultSelected = b.selected = a.defaultSelected : ("input" === c ||
                            "textarea" === c) && (b.defaultValue = a.defaultValue)
                }
            }
            n.extend({
                clone: function(a, b, c) {
                    var d, e, f, g, h, i = n.contains(a.ownerDocument, a);
                    if (l.html5Clone || n.isXMLDoc(a) || !hb.test("<" + a.nodeName + ">") ? f = a.cloneNode(
                            !0) : (ub.innerHTML = a.outerHTML, ub.removeChild(f = ub.firstChild)), !(l
                            .noCloneEvent && l.noCloneChecked || 1 !== a.nodeType && 11 !== a.nodeType || n
                            .isXMLDoc(a)))
                        for (d = vb(f), h = vb(a), g = 0; null != (e = h[g]); ++g) d[g] && Cb(e, d[g]);
                    if (b)
                        if (c)
                            for (h = h || vb(a), d = d || vb(f), g = 0; null != (e = h[g]); g++) Bb(e, d[
                            g]);
                        else Bb(a, f);
                    return d = vb(f, "script"), d.length > 0 && Ab(d, !i && vb(a, "script")), d = h = e =
                        null, f
                },
                buildFragment: function(a, b, c, d) {
                    for (var e, f, g, h, i, j, k, m = a.length, o = eb(b), p = [], q = 0; m > q; q++)
                        if (f = a[q], f || 0 === f)
                            if ("object" === n.type(f)) n.merge(p, f.nodeType ? [f] : f);
                            else if (mb.test(f)) {
                        h = h || o.appendChild(b.createElement("div")), i = (kb.exec(f) || ["", ""])[1]
                            .toLowerCase(), k = sb[i] || sb._default, h.innerHTML = k[1] + f.replace(jb,
                                "<$1></$2>") + k[2], e = k[0];
                        while (e--) h = h.lastChild;
                        if (!l.leadingWhitespace && ib.test(f) && p.push(b.createTextNode(ib.exec(f)[0])), !
                            l.tbody) {
                            f = "table" !== i || lb.test(f) ? "<table>" !== k[1] || lb.test(f) ? 0 : h : h
                                .firstChild, e = f && f.childNodes.length;
                            while (e--) n.nodeName(j = f.childNodes[e], "tbody") && !j.childNodes.length &&
                                f.removeChild(j)
                        }
                        n.merge(p, h.childNodes), h.textContent = "";
                        while (h.firstChild) h.removeChild(h.firstChild);
                        h = o.lastChild
                    } else p.push(b.createTextNode(f));
                    h && o.removeChild(h), l.appendChecked || n.grep(vb(p, "input"), wb), q = 0;
                    while (f = p[q++])
                        if ((!d || -1 === n.inArray(f, d)) && (g = n.contains(f.ownerDocument, f), h = vb(o
                                .appendChild(f), "script"), g && Ab(h), c)) {
                            e = 0;
                            while (f = h[e++]) pb.test(f.type || "") && c.push(f)
                        } return h = null, o
                },
                cleanData: function(a, b) {
                    for (var d, e, f, g, h = 0, i = n.expando, j = n.cache, k = l.deleteExpando, m = n.event
                            .special; null != (d = a[h]); h++)
                        if ((b || n.acceptData(d)) && (f = d[i], g = f && j[f])) {
                            if (g.events)
                                for (e in g.events) m[e] ? n.event.remove(d, e) : n.removeEvent(d, e, g
                                    .handle);
                            j[f] && (delete j[f], k ? delete d[i] : typeof d.removeAttribute !== L ? d
                                .removeAttribute(i) : d[i] = null, c.push(f))
                        }
                }
            }), n.fn.extend({
                text: function(a) {
                    return W(this, function(a) {
                        return void 0 === a ? n.text(this) : this.empty().append((this[0] && this[0]
                            .ownerDocument || z).createTextNode(a))
                    }, null, a, arguments.length)
                },
                append: function() {
                    return this.domManip(arguments, function(a) {
                        if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                            var b = xb(this, a);
                            b.appendChild(a)
                        }
                    })
                },
                prepend: function() {
                    return this.domManip(arguments, function(a) {
                        if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                            var b = xb(this, a);
                            b.insertBefore(a, b.firstChild)
                        }
                    })
                },
                before: function() {
                    return this.domManip(arguments, function(a) {
                        this.parentNode && this.parentNode.insertBefore(a, this)
                    })
                },
                after: function() {
                    return this.domManip(arguments, function(a) {
                        this.parentNode && this.parentNode.insertBefore(a, this.nextSibling)
                    })
                },
                remove: function(a, b) {
                    for (var c, d = a ? n.filter(a, this) : this, e = 0; null != (c = d[e]); e++) b || 1 !==
                        c.nodeType || n.cleanData(vb(c)), c.parentNode && (b && n.contains(c.ownerDocument,
                            c) && Ab(vb(c, "script")), c.parentNode.removeChild(c));
                    return this
                },
                empty: function() {
                    for (var a, b = 0; null != (a = this[b]); b++) {
                        1 === a.nodeType && n.cleanData(vb(a, !1));
                        while (a.firstChild) a.removeChild(a.firstChild);
                        a.options && n.nodeName(a, "select") && (a.options.length = 0)
                    }
                    return this
                },
                clone: function(a, b) {
                    return a = null == a ? !1 : a, b = null == b ? a : b, this.map(function() {
                        return n.clone(this, a, b)
                    })
                },
                html: function(a) {
                    return W(this, function(a) {
                        var b = this[0] || {},
                            c = 0,
                            d = this.length;
                        if (void 0 === a) return 1 === b.nodeType ? b.innerHTML.replace(gb, "") :
                            void 0;
                        if (!("string" != typeof a || nb.test(a) || !l.htmlSerialize && hb.test(
                                a) || !l.leadingWhitespace && ib.test(a) || sb[(kb.exec(a) || ["",
                                    ""
                                ])[1].toLowerCase()])) {
                            a = a.replace(jb, "<$1></$2>");
                            try {
                                for (; d > c; c++) b = this[c] || {}, 1 === b.nodeType && (n
                                    .cleanData(vb(b, !1)), b.innerHTML = a);
                                b = 0
                            } catch (e) {}
                        }
                        b && this.empty().append(a)
                    }, null, a, arguments.length)
                },
                replaceWith: function() {
                    var a = arguments[0];
                    return this.domManip(arguments, function(b) {
                        a = this.parentNode, n.cleanData(vb(this)), a && a.replaceChild(b, this)
                    }), a && (a.length || a.nodeType) ? this : this.remove()
                },
                detach: function(a) {
                    return this.remove(a, !0)
                },
                domManip: function(a, b) {
                    a = e.apply([], a);
                    var c, d, f, g, h, i, j = 0,
                        k = this.length,
                        m = this,
                        o = k - 1,
                        p = a[0],
                        q = n.isFunction(p);
                    if (q || k > 1 && "string" == typeof p && !l.checkClone && ob.test(p)) return this.each(
                        function(c) {
                            var d = m.eq(c);
                            q && (a[0] = p.call(this, c, d.html())), d.domManip(a, b)
                        });
                    if (k && (i = n.buildFragment(a, this[0].ownerDocument, !1, this), c = i.firstChild,
                            1 === i.childNodes.length && (i = c), c)) {
                        for (g = n.map(vb(i, "script"), yb), f = g.length; k > j; j++) d = i, j !== o && (
                            d = n.clone(d, !0, !0), f && n.merge(g, vb(d, "script"))), b.call(this[j],
                            d, j);
                        if (f)
                            for (h = g[g.length - 1].ownerDocument, n.map(g, zb), j = 0; f > j; j++) d = g[
                                j], pb.test(d.type || "") && !n._data(d, "globalEval") && n.contains(h,
                                d) && (d.src ? n._evalUrl && n._evalUrl(d.src) : n.globalEval((d.text ||
                                d.textContent || d.innerHTML || "").replace(rb, "")));
                        i = c = null
                    }
                    return this
                }
            }), n.each({
                appendTo: "append",
                prependTo: "prepend",
                insertBefore: "before",
                insertAfter: "after",
                replaceAll: "replaceWith"
            }, function(a, b) {
                n.fn[a] = function(a) {
                    for (var c, d = 0, e = [], g = n(a), h = g.length - 1; h >= d; d++) c = d === h ? this :
                        this.clone(!0), n(g[d])[b](c), f.apply(e, c.get());
                    return this.pushStack(e)
                }
            });
            var Db, Eb = {};

            function Fb(b, c) {
                var d = n(c.createElement(b)).appendTo(c.body),
                    e = a.getDefaultComputedStyle ? a.getDefaultComputedStyle(d[0]).display : n.css(d[0], "display");
                return d.detach(), e
            }

            function Gb(a) {
                var b = z,
                    c = Eb[a];
                return c || (c = Fb(a, b), "none" !== c && c || (Db = (Db || n(
                        "<iframe frameborder='0' width='0' height='0'/>")).appendTo(b.documentElement), b = (Db[
                        0].contentWindow || Db[0].contentDocument).document, b.write(), b.close(), c = Fb(a, b),
                    Db.detach()), Eb[a] = c), c
            }! function() {
                var a, b, c = z.createElement("div"),
                    d =
                    "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;padding:0;margin:0;border:0";
                c.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>", a = c
                    .getElementsByTagName("a")[0], a.style.cssText = "float:left;opacity:.5", l.opacity = /^0.5/.test(a
                        .style.opacity), l.cssFloat = !!a.style.cssFloat, c.style.backgroundClip = "content-box", c
                    .cloneNode(!0).style.backgroundClip = "", l.clearCloneStyle = "content-box" === c.style
                    .backgroundClip, a = c = null, l.shrinkWrapBlocks = function() {
                        var a, c, e, f;
                        if (null == b) {
                            if (a = z.getElementsByTagName("body")[0], !a) return;
                            f = "border:0;width:0;height:0;position:absolute;top:0;left:-9999px", c = z.createElement(
                                    "div"), e = z.createElement("div"), a.appendChild(c).appendChild(e), b = !1,
                                typeof e.style.zoom !== L && (e.style.cssText = d + ";width:1px;padding:1px;zoom:1", e
                                    .innerHTML = "<div></div>", e.firstChild.style.width = "5px", b = 3 !== e
                                    .offsetWidth), a.removeChild(c), a = c = e = null
                        }
                        return b
                    }
            }();
            var Hb = /^margin/,
                Ib = new RegExp("^(" + T + ")(?!px)[a-z%]+$", "i"),
                Jb, Kb, Lb = /^(top|right|bottom|left)$/;
            a.getComputedStyle ? (Jb = function(a) {
                return a.ownerDocument.defaultView.getComputedStyle(a, null)
            }, Kb = function(a, b, c) {
                var d, e, f, g, h = a.style;
                return c = c || Jb(a), g = c ? c.getPropertyValue(b) || c[b] : void 0, c && ("" !== g || n
                    .contains(a.ownerDocument, a) || (g = n.style(a, b)), Ib.test(g) && Hb.test(b) && (d = h
                        .width, e = h.minWidth, f = h.maxWidth, h.minWidth = h.maxWidth = h.width = g, g = c
                        .width, h.width = d, h.minWidth = e, h.maxWidth = f)), void 0 === g ? g : g + ""
            }) : z.documentElement.currentStyle && (Jb = function(a) {
                return a.currentStyle
            }, Kb = function(a, b, c) {
                var d, e, f, g, h = a.style;
                return c = c || Jb(a), g = c ? c[b] : void 0, null == g && h && h[b] && (g = h[b]), Ib.test(
                    g) && !Lb.test(b) && (d = h.left, e = a.runtimeStyle, f = e && e.left, f && (e.left = a
                            .currentStyle.left), h.left = "fontSize" === b ? "1em" : g, g = h.pixelLeft + "px",
                        h.left = d, f && (e.left = f)), void 0 === g ? g : g + "" || "auto"
            });

            function Mb(a, b) {
                return {
                    get: function() {
                        var c = a();
                        if (null != c) return c ? void delete this.get : (this.get = b).apply(this, arguments)
                    }
                }
            }! function() {
                var b, c, d, e, f, g, h = z.createElement("div"),
                    i = "border:0;width:0;height:0;position:absolute;top:0;left:-9999px",
                    j =
                    "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;padding:0;margin:0;border:0";
                h.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>", b = h
                    .getElementsByTagName("a")[0], b.style.cssText = "float:left;opacity:.5", l.opacity = /^0.5/.test(b
                        .style.opacity), l.cssFloat = !!b.style.cssFloat, h.style.backgroundClip = "content-box", h
                    .cloneNode(!0).style.backgroundClip = "", l.clearCloneStyle = "content-box" === h.style
                    .backgroundClip, b = h = null, n.extend(l, {
                        reliableHiddenOffsets: function() {
                            if (null != c) return c;
                            var a, b, d, e = z.createElement("div"),
                                f = z.getElementsByTagName("body")[0];
                            if (f) return e.setAttribute("className", "t"), e.innerHTML =
                                "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>", a = z
                                .createElement("div"), a.style.cssText = i, f.appendChild(a).appendChild(e),
                                e.innerHTML = "<table><tr><td></td><td>t</td></tr></table>", b = e
                                .getElementsByTagName("td"), b[0].style.cssText =
                                "padding:0;margin:0;border:0;display:none", d = 0 === b[0].offsetHeight, b[
                                    0].style.display = "", b[1].style.display = "none", c = d && 0 === b[0]
                                .offsetHeight, f.removeChild(a), e = f = null, c
                        },
                        boxSizing: function() {
                            return null == d && k(), d
                        },
                        boxSizingReliable: function() {
                            return null == e && k(), e
                        },
                        pixelPosition: function() {
                            return null == f && k(), f
                        },
                        reliableMarginRight: function() {
                            var b, c, d, e;
                            if (null == g && a.getComputedStyle) {
                                if (b = z.getElementsByTagName("body")[0], !b) return;
                                c = z.createElement("div"), d = z.createElement("div"), c.style.cssText = i, b
                                    .appendChild(c).appendChild(d), e = d.appendChild(z.createElement("div")), e
                                    .style.cssText = d.style.cssText = j, e.style.marginRight = e.style.width =
                                    "0", d.style.width = "1px", g = !parseFloat((a.getComputedStyle(e, null) ||
                                    {}).marginRight), b.removeChild(c)
                            }
                            return g
                        }
                    });

                function k() {
                    var b, c, h = z.getElementsByTagName("body")[0];
                    h && (b = z.createElement("div"), c = z.createElement("div"), b.style.cssText = i, h.appendChild(b)
                        .appendChild(c), c.style.cssText =
                        "-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;position:absolute;display:block;padding:1px;border:1px;width:4px;margin-top:1%;top:1%",
                        n.swap(h, null != h.style.zoom ? {
                            zoom: 1
                        } : {}, function() {
                            d = 4 === c.offsetWidth
                        }), e = !0, f = !1, g = !0, a.getComputedStyle && (f = "1%" !== (a.getComputedStyle(c,
                            null) || {}).top, e = "4px" === (a.getComputedStyle(c, null) || {
                            width: "4px"
                        }).width), h.removeChild(b), c = h = null)
                }
            }(), n.swap = function(a, b, c, d) {
                var e, f, g = {};
                for (f in b) g[f] = a.style[f], a.style[f] = b[f];
                e = c.apply(a, d || []);
                for (f in b) a.style[f] = g[f];
                return e
            };
            var Nb = /alpha\([^)]*\)/i,
                Ob = /opacity\s*=\s*([^)]*)/,
                Pb = /^(none|table(?!-c[ea]).+)/,
                Qb = new RegExp("^(" + T + ")(.*)$", "i"),
                Rb = new RegExp("^([+-])=(" + T + ")", "i"),
                Sb = {
                    position: "absolute",
                    visibility: "hidden",
                    display: "block"
                },
                Tb = {
                    letterSpacing: 0,
                    fontWeight: 400
                },
                Ub = ["Webkit", "O", "Moz", "ms"];

            function Vb(a, b) {
                if (b in a) return b;
                var c = b.charAt(0).toUpperCase() + b.slice(1),
                    d = b,
                    e = Ub.length;
                while (e--)
                    if (b = Ub[e] + c, b in a) return b;
                return d
            }

            function Wb(a, b) {
                for (var c, d, e, f = [], g = 0, h = a.length; h > g; g++) d = a[g], d.style && (f[g] = n._data(d,
                        "olddisplay"), c = d.style.display, b ? (f[g] || "none" !== c || (d.style.display = ""),
                        "" === d.style.display && V(d) && (f[g] = n._data(d, "olddisplay", Gb(d.nodeName)))) : f[
                    g] || (e = V(d), (c && "none" !== c || !e) && n._data(d, "olddisplay", e ? c : n.css(d,
                        "display"))));
                for (g = 0; h > g; g++) d = a[g], d.style && (b && "none" !== d.style.display && "" !== d.style
                    .display || (d.style.display = b ? f[g] || "" : "none"));
                return a
            }

            function Xb(a, b, c) {
                var d = Qb.exec(b);
                return d ? Math.max(0, d[1] - (c || 0)) + (d[2] || "px") : b
            }

            function Yb(a, b, c, d, e) {
                for (var f = c === (d ? "border" : "content") ? 4 : "width" === b ? 1 : 0, g = 0; 4 > f; f += 2)
                    "margin" === c && (g += n.css(a, c + U[f], !0, e)), d ? ("content" === c && (g -= n.css(a,
                        "padding" + U[f], !0, e)), "margin" !== c && (g -= n.css(a, "border" + U[f] + "Width", !0,
                        e))) : (g += n.css(a, "padding" + U[f], !0, e), "padding" !== c && (g += n.css(a, "border" + U[
                        f] + "Width", !0, e)));
                return g
            }

            function Zb(a, b, c) {
                var d = !0,
                    e = "width" === b ? a.offsetWidth : a.offsetHeight,
                    f = Jb(a),
                    g = l.boxSizing() && "border-box" === n.css(a, "boxSizing", !1, f);
                if (0 >= e || null == e) {
                    if (e = Kb(a, b, f), (0 > e || null == e) && (e = a.style[b]), Ib.test(e)) return e;
                    d = g && (l.boxSizingReliable() || e === a.style[b]), e = parseFloat(e) || 0
                }
                return e + Yb(a, b, c || (g ? "border" : "content"), d, f) + "px"
            }
            n.extend({
                cssHooks: {
                    opacity: {
                        get: function(a, b) {
                            if (b) {
                                var c = Kb(a, "opacity");
                                return "" === c ? "1" : c
                            }
                        }
                    }
                },
                cssNumber: {
                    columnCount: !0,
                    fillOpacity: !0,
                    fontWeight: !0,
                    lineHeight: !0,
                    opacity: !0,
                    order: !0,
                    orphans: !0,
                    widows: !0,
                    zIndex: !0,
                    zoom: !0
                },
                cssProps: {
                    "float": l.cssFloat ? "cssFloat" : "styleFloat"
                },
                style: function(a, b, c, d) {
                    if (a && 3 !== a.nodeType && 8 !== a.nodeType && a.style) {
                        var e, f, g, h = n.camelCase(b),
                            i = a.style;
                        if (b = n.cssProps[h] || (n.cssProps[h] = Vb(i, h)), g = n.cssHooks[b] || n
                            .cssHooks[h], void 0 === c) return g && "get" in g && void 0 !== (e = g.get(a, !
                            1, d)) ? e : i[b];
                        if (f = typeof c, "string" === f && (e = Rb.exec(c)) && (c = (e[1] + 1) * e[2] +
                                parseFloat(n.css(a, b)), f = "number"), null != c && c === c && (
                                "number" !== f || n.cssNumber[h] || (c += "px"), l.clearCloneStyle || "" !==
                                c || 0 !== b.indexOf("background") || (i[b] = "inherit"), !(g && "set" in
                                    g && void 0 === (c = g.set(a, c, d))))) try {
                            i[b] = "", i[b] = c
                        } catch (j) {}
                    }
                },
                css: function(a, b, c, d) {
                    var e, f, g, h = n.camelCase(b);
                    return b = n.cssProps[h] || (n.cssProps[h] = Vb(a.style, h)), g = n.cssHooks[b] || n
                        .cssHooks[h], g && "get" in g && (f = g.get(a, !0, c)), void 0 === f && (f = Kb(a,
                            b, d)), "normal" === f && b in Tb && (f = Tb[b]), "" === c || c ? (e =
                            parseFloat(f), c === !0 || n.isNumeric(e) ? e || 0 : f) : f
                }
            }), n.each(["height", "width"], function(a, b) {
                n.cssHooks[b] = {
                    get: function(a, c, d) {
                        return c ? 0 === a.offsetWidth && Pb.test(n.css(a, "display")) ? n.swap(a, Sb,
                            function() {
                                return Zb(a, b, d)
                            }) : Zb(a, b, d) : void 0
                    },
                    set: function(a, c, d) {
                        var e = d && Jb(a);
                        return Xb(a, c, d ? Yb(a, b, d, l.boxSizing() && "border-box" === n.css(a,
                            "boxSizing", !1, e), e) : 0)
                    }
                }
            }), l.opacity || (n.cssHooks.opacity = {
                get: function(a, b) {
                    return Ob.test((b && a.currentStyle ? a.currentStyle.filter : a.style.filter) || "") ?
                        .01 * parseFloat(RegExp.$1) + "" : b ? "1" : ""
                },
                set: function(a, b) {
                    var c = a.style,
                        d = a.currentStyle,
                        e = n.isNumeric(b) ? "alpha(opacity=" + 100 * b + ")" : "",
                        f = d && d.filter || c.filter || "";
                    c.zoom = 1, (b >= 1 || "" === b) && "" === n.trim(f.replace(Nb, "")) && c
                        .removeAttribute && (c.removeAttribute("filter"), "" === b || d && !d.filter) || (c
                            .filter = Nb.test(f) ? f.replace(Nb, e) : f + " " + e)
                }
            }), n.cssHooks.marginRight = Mb(l.reliableMarginRight, function(a, b) {
                return b ? n.swap(a, {
                    display: "inline-block"
                }, Kb, [a, "marginRight"]) : void 0
            }), n.each({
                margin: "",
                padding: "",
                border: "Width"
            }, function(a, b) {
                n.cssHooks[a + b] = {
                    expand: function(c) {
                        for (var d = 0, e = {}, f = "string" == typeof c ? c.split(" ") : [c]; 4 >
                            d; d++) e[a + U[d] + b] = f[d] || f[d - 2] || f[0];
                        return e
                    }
                }, Hb.test(a) || (n.cssHooks[a + b].set = Xb)
            }), n.fn.extend({
                css: function(a, b) {
                    return W(this, function(a, b, c) {
                        var d, e, f = {},
                            g = 0;
                        if (n.isArray(b)) {
                            for (d = Jb(a), e = b.length; e > g; g++) f[b[g]] = n.css(a, b[g], !1,
                                d);
                            return f
                        }
                        return void 0 !== c ? n.style(a, b, c) : n.css(a, b)
                    }, a, b, arguments.length > 1)
                },
                show: function() {
                    return Wb(this, !0)
                },
                hide: function() {
                    return Wb(this)
                },
                toggle: function(a) {
                    return "boolean" == typeof a ? a ? this.show() : this.hide() : this.each(function() {
                        V(this) ? n(this).show() : n(this).hide()
                    })
                }
            });

            function $b(a, b, c, d, e) {
                return new $b.prototype.init(a, b, c, d, e)
            }
            n.Tween = $b, $b.prototype = {
                constructor: $b,
                init: function(a, b, c, d, e, f) {
                    this.elem = a, this.prop = c, this.easing = e || "swing", this.options = b, this.start =
                        this.now = this.cur(), this.end = d, this.unit = f || (n.cssNumber[c] ? "" : "px")
                },
                cur: function() {
                    var a = $b.propHooks[this.prop];
                    return a && a.get ? a.get(this) : $b.propHooks._default.get(this)
                },
                run: function(a) {
                    var b, c = $b.propHooks[this.prop];
                    return this.pos = b = this.options.duration ? n.easing[this.easing](a, this.options
                            .duration * a, 0, 1, this.options.duration) : a, this.now = (this.end - this
                        .start) * b + this.start, this.options.step && this.options.step.call(this.elem, this
                            .now, this), c && c.set ? c.set(this) : $b.propHooks._default.set(this), this
                }
            }, $b.prototype.init.prototype = $b.prototype, $b.propHooks = {
                _default: {
                    get: function(a) {
                        var b;
                        return null == a.elem[a.prop] || a.elem.style && null != a.elem.style[a.prop] ? (b = n
                            .css(a.elem, a.prop, ""), b && "auto" !== b ? b : 0) : a.elem[a.prop]
                    },
                    set: function(a) {
                        n.fx.step[a.prop] ? n.fx.step[a.prop](a) : a.elem.style && (null != a.elem.style[n
                            .cssProps[a.prop]] || n.cssHooks[a.prop]) ? n.style(a.elem, a.prop, a.now + a
                            .unit) : a.elem[a.prop] = a.now
                    }
                }
            }, $b.propHooks.scrollTop = $b.propHooks.scrollLeft = {
                set: function(a) {
                    a.elem.nodeType && a.elem.parentNode && (a.elem[a.prop] = a.now)
                }
            }, n.easing = {
                linear: function(a) {
                    return a
                },
                swing: function(a) {
                    return .5 - Math.cos(a * Math.PI) / 2
                }
            }, n.fx = $b.prototype.init, n.fx.step = {};
            var _b, ac, bc = /^(?:toggle|show|hide)$/,
                cc = new RegExp("^(?:([+-])=|)(" + T + ")([a-z%]*)$", "i"),
                dc = /queueHooks$/,
                ec = [jc],
                fc = {
                    "*": [function(a, b) {
                        var c = this.createTween(a, b),
                            d = c.cur(),
                            e = cc.exec(b),
                            f = e && e[3] || (n.cssNumber[a] ? "" : "px"),
                            g = (n.cssNumber[a] || "px" !== f && +d) && cc.exec(n.css(c.elem, a)),
                            h = 1,
                            i = 20;
                        if (g && g[3] !== f) {
                            f = f || g[3], e = e || [], g = +d || 1;
                            do h = h || ".5", g /= h, n.style(c.elem, a, g + f); while (h !== (h = c.cur() /
                                d) && 1 !== h && --i)
                        }
                        return e && (g = c.start = +g || +d || 0, c.unit = f, c.end = e[1] ? g + (e[1] + 1) * e[
                            2] : +e[2]), c
                    }]
                };

            function gc() {
                return setTimeout(function() {
                    _b = void 0
                }), _b = n.now()
            }

            function hc(a, b) {
                var c, d = {
                        height: a
                    },
                    e = 0;
                for (b = b ? 1 : 0; 4 > e; e += 2 - b) c = U[e], d["margin" + c] = d["padding" + c] = a;
                return b && (d.opacity = d.width = a), d
            }

            function ic(a, b, c) {
                for (var d, e = (fc[b] || []).concat(fc["*"]), f = 0, g = e.length; g > f; f++)
                    if (d = e[f].call(c, b, a)) return d
            }

            function jc(a, b, c) {
                var d, e, f, g, h, i, j, k, m = this,
                    o = {},
                    p = a.style,
                    q = a.nodeType && V(a),
                    r = n._data(a, "fxshow");
                c.queue || (h = n._queueHooks(a, "fx"), null == h.unqueued && (h.unqueued = 0, i = h.empty.fire, h.empty
                    .fire = function() {
                        h.unqueued || i()
                    }), h.unqueued++, m.always(function() {
                    m.always(function() {
                        h.unqueued--, n.queue(a, "fx").length || h.empty.fire()
                    })
                })), 1 === a.nodeType && ("height" in b || "width" in b) && (c.overflow = [p.overflow, p.overflowX,
                        p.overflowY
                    ], j = n.css(a, "display"), k = Gb(a.nodeName), "none" === j && (j = k), "inline" === j &&
                    "none" === n.css(a, "float") && (l.inlineBlockNeedsLayout && "inline" !== k ? p.zoom = 1 : p
                        .display = "inline-block")), c.overflow && (p.overflow = "hidden", l.shrinkWrapBlocks() || m
                    .always(function() {
                        p.overflow = c.overflow[0], p.overflowX = c.overflow[1], p.overflowY = c.overflow[2]
                    }));
                for (d in b)
                    if (e = b[d], bc.exec(e)) {
                        if (delete b[d], f = f || "toggle" === e, e === (q ? "hide" : "show")) {
                            if ("show" !== e || !r || void 0 === r[d]) continue;
                            q = !0
                        }
                        o[d] = r && r[d] || n.style(a, d)
                    } if (!n.isEmptyObject(o)) {
                    r ? "hidden" in r && (q = r.hidden) : r = n._data(a, "fxshow", {}), f && (r.hidden = !q), q ? n(a)
                        .show() : m.done(function() {
                            n(a).hide()
                        }), m.done(function() {
                            var b;
                            n._removeData(a, "fxshow");
                            for (b in o) n.style(a, b, o[b])
                        });
                    for (d in o) g = ic(q ? r[d] : 0, d, m), d in r || (r[d] = g.start, q && (g.end = g.start, g.start =
                        "width" === d || "height" === d ? 1 : 0))
                }
            }

            function kc(a, b) {
                var c, d, e, f, g;
                for (c in a)
                    if (d = n.camelCase(c), e = b[d], f = a[c], n.isArray(f) && (e = f[1], f = a[c] = f[0]), c !== d &&
                        (a[d] = f, delete a[c]), g = n.cssHooks[d], g && "expand" in g) {
                        f = g.expand(f), delete a[d];
                        for (c in f) c in a || (a[c] = f[c], b[c] = e)
                    } else b[d] = e
            }

            function lc(a, b, c) {
                var d, e, f = 0,
                    g = ec.length,
                    h = n.Deferred().always(function() {
                        delete i.elem
                    }),
                    i = function() {
                        if (e) return !1;
                        for (var b = _b || gc(), c = Math.max(0, j.startTime + j.duration - b), d = c / j.duration || 0,
                                f = 1 - d, g = 0, i = j.tweens.length; i > g; g++) j.tweens[g].run(f);
                        return h.notifyWith(a, [j, f, c]), 1 > f && i ? c : (h.resolveWith(a, [j]), !1)
                    },
                    j = h.promise({
                        elem: a,
                        props: n.extend({}, b),
                        opts: n.extend(!0, {
                            specialEasing: {}
                        }, c),
                        originalProperties: b,
                        originalOptions: c,
                        startTime: _b || gc(),
                        duration: c.duration,
                        tweens: [],
                        createTween: function(b, c) {
                            var d = n.Tween(a, j.opts, b, c, j.opts.specialEasing[b] || j.opts.easing);
                            return j.tweens.push(d), d
                        },
                        stop: function(b) {
                            var c = 0,
                                d = b ? j.tweens.length : 0;
                            if (e) return this;
                            for (e = !0; d > c; c++) j.tweens[c].run(1);
                            return b ? h.resolveWith(a, [j, b]) : h.rejectWith(a, [j, b]), this
                        }
                    }),
                    k = j.props;
                for (kc(k, j.opts.specialEasing); g > f; f++)
                    if (d = ec[f].call(j, a, k, j.opts)) return d;
                return n.map(k, ic, j), n.isFunction(j.opts.start) && j.opts.start.call(a, j), n.fx.timer(n.extend(i, {
                    elem: a,
                    anim: j,
                    queue: j.opts.queue
                })), j.progress(j.opts.progress).done(j.opts.done, j.opts.complete).fail(j.opts.fail).always(j.opts
                    .always)
            }
            n.Animation = n.extend(lc, {
                    tweener: function(a, b) {
                        n.isFunction(a) ? (b = a, a = ["*"]) : a = a.split(" ");
                        for (var c, d = 0, e = a.length; e > d; d++) c = a[d], fc[c] = fc[c] || [], fc[c]
                            .unshift(b)
                    },
                    prefilter: function(a, b) {
                        b ? ec.unshift(a) : ec.push(a)
                    }
                }), n.speed = function(a, b, c) {
                    var d = a && "object" == typeof a ? n.extend({}, a) : {
                        complete: c || !c && b || n.isFunction(a) && a,
                        duration: a,
                        easing: c && b || b && !n.isFunction(b) && b
                    };
                    return d.duration = n.fx.off ? 0 : "number" == typeof d.duration ? d.duration : d.duration in n.fx
                        .speeds ? n.fx.speeds[d.duration] : n.fx.speeds._default, (null == d.queue || d.queue === !0) &&
                        (d.queue = "fx"), d.old = d.complete, d.complete = function() {
                            n.isFunction(d.old) && d.old.call(this), d.queue && n.dequeue(this, d.queue)
                        }, d
                }, n.fn.extend({
                    fadeTo: function(a, b, c, d) {
                        return this.filter(V).css("opacity", 0).show().end().animate({
                            opacity: b
                        }, a, c, d)
                    },
                    animate: function(a, b, c, d) {
                        var e = n.isEmptyObject(a),
                            f = n.speed(b, c, d),
                            g = function() {
                                var b = lc(this, n.extend({}, a), f);
                                (e || n._data(this, "finish")) && b.stop(!0)
                            };
                        return g.finish = g, e || f.queue === !1 ? this.each(g) : this.queue(f.queue, g)
                    },
                    stop: function(a, b, c) {
                        var d = function(a) {
                            var b = a.stop;
                            delete a.stop, b(c)
                        };
                        return "string" != typeof a && (c = b, b = a, a = void 0), b && a !== !1 && this.queue(
                            a || "fx", []), this.each(function() {
                            var b = !0,
                                e = null != a && a + "queueHooks",
                                f = n.timers,
                                g = n._data(this);
                            if (e) g[e] && g[e].stop && d(g[e]);
                            else
                                for (e in g) g[e] && g[e].stop && dc.test(e) && d(g[e]);
                            for (e = f.length; e--;) f[e].elem !== this || null != a && f[e].queue !==
                                a || (f[e].anim.stop(c), b = !1, f.splice(e, 1));
                            (b || !c) && n.dequeue(this, a)
                        })
                    },
                    finish: function(a) {
                        return a !== !1 && (a = a || "fx"), this.each(function() {
                            var b, c = n._data(this),
                                d = c[a + "queue"],
                                e = c[a + "queueHooks"],
                                f = n.timers,
                                g = d ? d.length : 0;
                            for (c.finish = !0, n.queue(this, a, []), e && e.stop && e.stop.call(this, !
                                    0), b = f.length; b--;) f[b].elem === this && f[b].queue === a && (
                                f[b].anim.stop(!0), f.splice(b, 1));
                            for (b = 0; g > b; b++) d[b] && d[b].finish && d[b].finish.call(this);
                            delete c.finish
                        })
                    }
                }), n.each(["toggle", "show", "hide"], function(a, b) {
                    var c = n.fn[b];
                    n.fn[b] = function(a, d, e) {
                        return null == a || "boolean" == typeof a ? c.apply(this, arguments) : this.animate(hc(
                            b, !0), a, d, e)
                    }
                }), n.each({
                    slideDown: hc("show"),
                    slideUp: hc("hide"),
                    slideToggle: hc("toggle"),
                    fadeIn: {
                        opacity: "show"
                    },
                    fadeOut: {
                        opacity: "hide"
                    },
                    fadeToggle: {
                        opacity: "toggle"
                    }
                }, function(a, b) {
                    n.fn[a] = function(a, c, d) {
                        return this.animate(b, a, c, d)
                    }
                }), n.timers = [], n.fx.tick = function() {
                    var a, b = n.timers,
                        c = 0;
                    for (_b = n.now(); c < b.length; c++) a = b[c], a() || b[c] !== a || b.splice(c--, 1);
                    b.length || n.fx.stop(), _b = void 0
                }, n.fx.timer = function(a) {
                    n.timers.push(a), a() ? n.fx.start() : n.timers.pop()
                }, n.fx.interval = 13, n.fx.start = function() {
                    ac || (ac = setInterval(n.fx.tick, n.fx.interval))
                }, n.fx.stop = function() {
                    clearInterval(ac), ac = null
                }, n.fx.speeds = {
                    slow: 600,
                    fast: 200,
                    _default: 400
                }, n.fn.delay = function(a, b) {
                    return a = n.fx ? n.fx.speeds[a] || a : a, b = b || "fx", this.queue(b, function(b, c) {
                        var d = setTimeout(b, a);
                        c.stop = function() {
                            clearTimeout(d)
                        }
                    })
                },
                function() {
                    var a, b, c, d, e = z.createElement("div");
                    e.setAttribute("className", "t"), e.innerHTML =
                        "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>", a = e
                        .getElementsByTagName("a")[0], c = z.createElement("select"), d = c.appendChild(z.createElement(
                            "option")), b = e.getElementsByTagName("input")[0], a.style.cssText = "top:1px", l
                        .getSetAttribute = "t" !== e.className, l.style = /top/.test(a.getAttribute("style")), l
                        .hrefNormalized = "/a" === a.getAttribute("href"), l.checkOn = !!b.value, l.optSelected = d
                        .selected, l.enctype = !!z.createElement("form").enctype, c.disabled = !0, l.optDisabled = !d
                        .disabled, b = z.createElement("input"), b.setAttribute("value", ""), l.input = "" === b
                        .getAttribute("value"), b.value = "t", b.setAttribute("type", "radio"), l.radioValue = "t" === b
                        .value, a = b = c = d = e = null
                }();
            var mc = /\r/g;
            n.fn.extend({
                val: function(a) {
                    var b, c, d, e = this[0];
                    {
                        if (arguments.length) return d = n.isFunction(a), this.each(function(c) {
                            var e;
                            1 === this.nodeType && (e = d ? a.call(this, c, n(this).val()) : a,
                                null == e ? e = "" : "number" == typeof e ? e += "" : n
                                .isArray(e) && (e = n.map(e, function(a) {
                                    return null == a ? "" : a + ""
                                })), b = n.valHooks[this.type] || n.valHooks[this.nodeName
                                    .toLowerCase()], b && "set" in b && void 0 !== b.set(
                                    this, e, "value") || (this.value = e))
                        });
                        if (e) return b = n.valHooks[e.type] || n.valHooks[e.nodeName.toLowerCase()], b &&
                            "get" in b && void 0 !== (c = b.get(e, "value")) ? c : (c = e.value,
                                "string" == typeof c ? c.replace(mc, "") : null == c ? "" : c)
                    }
                }
            }), n.extend({
                valHooks: {
                    option: {
                        get: function(a) {
                            var b = n.find.attr(a, "value");
                            return null != b ? b : n.text(a)
                        }
                    },
                    select: {
                        get: function(a) {
                            for (var b, c, d = a.options, e = a.selectedIndex, f = "select-one" === a
                                    .type || 0 > e, g = f ? null : [], h = f ? e + 1 : d.length, i = 0 > e ?
                                    h : f ? e : 0; h > i; i++)
                                if (c = d[i], !(!c.selected && i !== e || (l.optDisabled ? c.disabled :
                                            null !== c.getAttribute("disabled")) || c.parentNode.disabled &&
                                        n.nodeName(c.parentNode, "optgroup"))) {
                                    if (b = n(c).val(), f) return b;
                                    g.push(b)
                                } return g
                        },
                        set: function(a, b) {
                            var c, d, e = a.options,
                                f = n.makeArray(b),
                                g = e.length;
                            while (g--)
                                if (d = e[g], n.inArray(n.valHooks.option.get(d), f) >= 0) try {
                                    d.selected = c = !0
                                } catch (h) {
                                    d.scrollHeight
                                } else d.selected = !1;
                            return c || (a.selectedIndex = -1), e
                        }
                    }
                }
            }), n.each(["radio", "checkbox"], function() {
                n.valHooks[this] = {
                    set: function(a, b) {
                        return n.isArray(b) ? a.checked = n.inArray(n(a).val(), b) >= 0 : void 0
                    }
                }, l.checkOn || (n.valHooks[this].get = function(a) {
                    return null === a.getAttribute("value") ? "on" : a.value
                })
            });
            var nc, oc, pc = n.expr.attrHandle,
                qc = /^(?:checked|selected)$/i,
                rc = l.getSetAttribute,
                sc = l.input;
            n.fn.extend({
                attr: function(a, b) {
                    return W(this, n.attr, a, b, arguments.length > 1)
                },
                removeAttr: function(a) {
                    return this.each(function() {
                        n.removeAttr(this, a)
                    })
                }
            }), n.extend({
                attr: function(a, b, c) {
                    var d, e, f = a.nodeType;
                    if (a && 3 !== f && 8 !== f && 2 !== f) return typeof a.getAttribute === L ? n.prop(a,
                        b, c) : (1 === f && n.isXMLDoc(a) || (b = b.toLowerCase(), d = n.attrHooks[
                            b] || (n.expr.match.bool.test(b) ? oc : nc)), void 0 === c ? d &&
                        "get" in d && null !== (e = d.get(a, b)) ? e : (e = n.find.attr(a, b),
                            null == e ? void 0 : e) : null !== c ? d && "set" in d && void 0 !== (
                            e = d.set(a, c, b)) ? e : (a.setAttribute(b, c + ""), c) : void n
                        .removeAttr(a, b))
                },
                removeAttr: function(a, b) {
                    var c, d, e = 0,
                        f = b && b.match(F);
                    if (f && 1 === a.nodeType)
                        while (c = f[e++]) d = n.propFix[c] || c, n.expr.match.bool.test(c) ? sc && rc || !
                            qc.test(c) ? a[d] = !1 : a[n.camelCase("default-" + c)] = a[d] = !1 : n.attr(a,
                                c, ""), a.removeAttribute(rc ? c : d)
                },
                attrHooks: {
                    type: {
                        set: function(a, b) {
                            if (!l.radioValue && "radio" === b && n.nodeName(a, "input")) {
                                var c = a.value;
                                return a.setAttribute("type", b), c && (a.value = c), b
                            }
                        }
                    }
                }
            }), oc = {
                set: function(a, b, c) {
                    return b === !1 ? n.removeAttr(a, c) : sc && rc || !qc.test(c) ? a.setAttribute(!rc && n
                        .propFix[c] || c, c) : a[n.camelCase("default-" + c)] = a[c] = !0, c
                }
            }, n.each(n.expr.match.bool.source.match(/\w+/g), function(a, b) {
                var c = pc[b] || n.find.attr;
                pc[b] = sc && rc || !qc.test(b) ? function(a, b, d) {
                    var e, f;
                    return d || (f = pc[b], pc[b] = e, e = null != c(a, b, d) ? b.toLowerCase() : null, pc[
                        b] = f), e
                } : function(a, b, c) {
                    return c ? void 0 : a[n.camelCase("default-" + b)] ? b.toLowerCase() : null
                }
            }), sc && rc || (n.attrHooks.value = {
                set: function(a, b, c) {
                    return n.nodeName(a, "input") ? void(a.defaultValue = b) : nc && nc.set(a, b, c)
                }
            }), rc || (nc = {
                set: function(a, b, c) {
                    var d = a.getAttributeNode(c);
                    return d || a.setAttributeNode(d = a.ownerDocument.createAttribute(c)), d.value = b +=
                        "", "value" === c || b === a.getAttribute(c) ? b : void 0
                }
            }, pc.id = pc.name = pc.coords = function(a, b, c) {
                var d;
                return c ? void 0 : (d = a.getAttributeNode(b)) && "" !== d.value ? d.value : null
            }, n.valHooks.button = {
                get: function(a, b) {
                    var c = a.getAttributeNode(b);
                    return c && c.specified ? c.value : void 0
                },
                set: nc.set
            }, n.attrHooks.contenteditable = {
                set: function(a, b, c) {
                    nc.set(a, "" === b ? !1 : b, c)
                }
            }, n.each(["width", "height"], function(a, b) {
                n.attrHooks[b] = {
                    set: function(a, c) {
                        return "" === c ? (a.setAttribute(b, "auto"), c) : void 0
                    }
                }
            })), l.style || (n.attrHooks.style = {
                get: function(a) {
                    return a.style.cssText || void 0
                },
                set: function(a, b) {
                    return a.style.cssText = b + ""
                }
            });
            var tc = /^(?:input|select|textarea|button|object)$/i,
                uc = /^(?:a|area)$/i;
            n.fn.extend({
                prop: function(a, b) {
                    return W(this, n.prop, a, b, arguments.length > 1)
                },
                removeProp: function(a) {
                    return a = n.propFix[a] || a, this.each(function() {
                        try {
                            this[a] = void 0, delete this[a]
                        } catch (b) {}
                    })
                }
            }), n.extend({
                propFix: {
                    "for": "htmlFor",
                    "class": "className"
                },
                prop: function(a, b, c) {
                    var d, e, f, g = a.nodeType;
                    if (a && 3 !== g && 8 !== g && 2 !== g) return f = 1 !== g || !n.isXMLDoc(a), f && (b =
                            n.propFix[b] || b, e = n.propHooks[b]), void 0 !== c ? e && "set" in e &&
                        void 0 !== (d = e.set(a, c, b)) ? d : a[b] = c : e && "get" in e && null !== (
                            d = e.get(a, b)) ? d : a[b]
                },
                propHooks: {
                    tabIndex: {
                        get: function(a) {
                            var b = n.find.attr(a, "tabindex");
                            return b ? parseInt(b, 10) : tc.test(a.nodeName) || uc.test(a.nodeName) && a
                                .href ? 0 : -1
                        }
                    }
                }
            }), l.hrefNormalized || n.each(["href", "src"], function(a, b) {
                n.propHooks[b] = {
                    get: function(a) {
                        return a.getAttribute(b, 4)
                    }
                }
            }), l.optSelected || (n.propHooks.selected = {
                get: function(a) {
                    var b = a.parentNode;
                    return b && (b.selectedIndex, b.parentNode && b.parentNode.selectedIndex), null
                }
            }), n.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan",
                "useMap", "frameBorder", "contentEditable"
            ], function() {
                n.propFix[this.toLowerCase()] = this
            }), l.enctype || (n.propFix.enctype = "encoding");
            var vc = /[\t\r\n\f]/g;
            n.fn.extend({
                addClass: function(a) {
                    var b, c, d, e, f, g, h = 0,
                        i = this.length,
                        j = "string" == typeof a && a;
                    if (n.isFunction(a)) return this.each(function(b) {
                        n(this).addClass(a.call(this, b, this.className))
                    });
                    if (j)
                        for (b = (a || "").match(F) || []; i > h; h++)
                            if (c = this[h], d = 1 === c.nodeType && (c.className ? (" " + c.className +
                                    " ").replace(vc, " ") : " ")) {
                                f = 0;
                                while (e = b[f++]) d.indexOf(" " + e + " ") < 0 && (d += e + " ");
                                g = n.trim(d), c.className !== g && (c.className = g)
                            } return this
                },
                removeClass: function(a) {
                    var b, c, d, e, f, g, h = 0,
                        i = this.length,
                        j = 0 === arguments.length || "string" == typeof a && a;
                    if (n.isFunction(a)) return this.each(function(b) {
                        n(this).removeClass(a.call(this, b, this.className))
                    });
                    if (j)
                        for (b = (a || "").match(F) || []; i > h; h++)
                            if (c = this[h], d = 1 === c.nodeType && (c.className ? (" " + c.className +
                                    " ").replace(vc, " ") : "")) {
                                f = 0;
                                while (e = b[f++])
                                    while (d.indexOf(" " + e + " ") >= 0) d = d.replace(" " + e + " ", " ");
                                g = a ? n.trim(d) : "", c.className !== g && (c.className = g)
                            } return this
                },
                toggleClass: function(a, b) {
                    var c = typeof a;
                    return "boolean" == typeof b && "string" === c ? b ? this.addClass(a) : this
                        .removeClass(a) : this.each(n.isFunction(a) ? function(c) {
                            n(this).toggleClass(a.call(this, c, this.className, b), b)
                        } : function() {
                            if ("string" === c) {
                                var b, d = 0,
                                    e = n(this),
                                    f = a.match(F) || [];
                                while (b = f[d++]) e.hasClass(b) ? e.removeClass(b) : e.addClass(b)
                            } else(c === L || "boolean" === c) && (this.className && n._data(this,
                                    "__className__", this.className), this.className = this
                                .className || a === !1 ? "" : n._data(this, "__className__") || "")
                        })
                },
                hasClass: function(a) {
                    for (var b = " " + a + " ", c = 0, d = this.length; d > c; c++)
                        if (1 === this[c].nodeType && (" " + this[c].className + " ").replace(vc, " ")
                            .indexOf(b) >= 0) return !0;
                    return !1
                }
            }), n.each(
                "blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu"
                .split(" "),
                function(a, b) {
                    n.fn[b] = function(a, c) {
                        return arguments.length > 0 ? this.on(b, null, a, c) : this.trigger(b)
                    }
                }), n.fn.extend({
                hover: function(a, b) {
                    return this.mouseenter(a).mouseleave(b || a)
                },
                bind: function(a, b, c) {
                    return this.on(a, null, b, c)
                },
                unbind: function(a, b) {
                    return this.off(a, null, b)
                },
                delegate: function(a, b, c, d) {
                    return this.on(b, a, c, d)
                },
                undelegate: function(a, b, c) {
                    return 1 === arguments.length ? this.off(a, "**") : this.off(b, a || "**", c)
                }
            });
            var wc = n.now(),
                xc = /\?/,
                yc =
                /(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;
            n.parseJSON = function(b) {
                if (a.JSON && a.JSON.parse) return a.JSON.parse(b + "");
                var c, d = null,
                    e = n.trim(b + "");
                return e && !n.trim(e.replace(yc, function(a, b, e, f) {
                    return c && b && (d = 0), 0 === d ? a : (c = e || b, d += !f - !e, "")
                })) ? Function("return " + e)() : n.error("Invalid JSON: " + b)
            }, n.parseXML = function(b) {
                var c, d;
                if (!b || "string" != typeof b) return null;
                try {
                    a.DOMParser ? (d = new DOMParser, c = d.parseFromString(b, "text/xml")) : (c =
                        new ActiveXObject("Microsoft.XMLDOM"), c.async = "false", c.loadXML(b))
                } catch (e) {
                    c = void 0
                }
                return c && c.documentElement && !c.getElementsByTagName("parsererror").length || n.error(
                    "Invalid XML: " + b), c
            };
            var zc, Ac, Bc = /#.*$/,
                Cc = /([?&])_=[^&]*/,
                Dc = /^(.*?):[ \t]*([^\r\n]*)\r?$/gm,
                Ec = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
                Fc = /^(?:GET|HEAD)$/,
                Gc = /^\/\//,
                Hc = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,
                Ic = {},
                Jc = {},
                Kc = "*/".concat("*");
            try {
                Ac = location.href
            } catch (Lc) {
                Ac = z.createElement("a"), Ac.href = "", Ac = Ac.href
            }
            zc = Hc.exec(Ac.toLowerCase()) || [];

            function Mc(a) {
                return function(b, c) {
                    "string" != typeof b && (c = b, b = "*");
                    var d, e = 0,
                        f = b.toLowerCase().match(F) || [];
                    if (n.isFunction(c))
                        while (d = f[e++]) "+" === d.charAt(0) ? (d = d.slice(1) || "*", (a[d] = a[d] || [])
                            .unshift(c)) : (a[d] = a[d] || []).push(c)
                }
            }

            function Nc(a, b, c, d) {
                var e = {},
                    f = a === Jc;

                function g(h) {
                    var i;
                    return e[h] = !0, n.each(a[h] || [], function(a, h) {
                        var j = h(b, c, d);
                        return "string" != typeof j || f || e[j] ? f ? !(i = j) : void 0 : (b.dataTypes.unshift(
                            j), g(j), !1)
                    }), i
                }
                return g(b.dataTypes[0]) || !e["*"] && g("*")
            }

            function Oc(a, b) {
                var c, d, e = n.ajaxSettings.flatOptions || {};
                for (d in b) void 0 !== b[d] && ((e[d] ? a : c || (c = {}))[d] = b[d]);
                return c && n.extend(!0, a, c), a
            }

            function Pc(a, b, c) {
                var d, e, f, g, h = a.contents,
                    i = a.dataTypes;
                while ("*" === i[0]) i.shift(), void 0 === e && (e = a.mimeType || b.getResponseHeader("Content-Type"));
                if (e)
                    for (g in h)
                        if (h[g] && h[g].test(e)) {
                            i.unshift(g);
                            break
                        } if (i[0] in c) f = i[0];
                else {
                    for (g in c) {
                        if (!i[0] || a.converters[g + " " + i[0]]) {
                            f = g;
                            break
                        }
                        d || (d = g)
                    }
                    f = f || d
                }
                return f ? (f !== i[0] && i.unshift(f), c[f]) : void 0
            }

            function Qc(a, b, c, d) {
                var e, f, g, h, i, j = {},
                    k = a.dataTypes.slice();
                if (k[1])
                    for (g in a.converters) j[g.toLowerCase()] = a.converters[g];
                f = k.shift();
                while (f)
                    if (a.responseFields[f] && (c[a.responseFields[f]] = b), !i && d && a.dataFilter && (b = a
                            .dataFilter(b, a.dataType)), i = f, f = k.shift())
                        if ("*" === f) f = i;
                        else if ("*" !== i && i !== f) {
                    if (g = j[i + " " + f] || j["* " + f], !g)
                        for (e in j)
                            if (h = e.split(" "), h[1] === f && (g = j[i + " " + h[0]] || j["* " + h[0]])) {
                                g === !0 ? g = j[e] : j[e] !== !0 && (f = h[0], k.unshift(h[1]));
                                break
                            } if (g !== !0)
                        if (g && a["throws"]) b = g(b);
                        else try {
                            b = g(b)
                        } catch (l) {
                            return {
                                state: "parsererror",
                                error: g ? l : "No conversion from " + i + " to " + f
                            }
                        }
                }
                return {
                    state: "success",
                    data: b
                }
            }
            n.extend({
                active: 0,
                lastModified: {},
                etag: {},
                ajaxSettings: {
                    url: Ac,
                    type: "GET",
                    isLocal: Ec.test(zc[1]),
                    global: !0,
                    processData: !0,
                    async: !0,
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    accepts: {
                        "*": Kc,
                        text: "text/plain",
                        html: "text/html",
                        xml: "application/xml, text/xml",
                        json: "application/json, text/javascript"
                    },
                    contents: {
                        xml: /xml/,
                        html: /html/,
                        json: /json/
                    },
                    responseFields: {
                        xml: "responseXML",
                        text: "responseText",
                        json: "responseJSON"
                    },
                    converters: {
                        "* text": String,
                        "text html": !0,
                        "text json": n.parseJSON,
                        "text xml": n.parseXML
                    },
                    flatOptions: {
                        url: !0,
                        context: !0
                    }
                },
                ajaxSetup: function(a, b) {
                    return b ? Oc(Oc(a, n.ajaxSettings), b) : Oc(n.ajaxSettings, a)
                },
                ajaxPrefilter: Mc(Ic),
                ajaxTransport: Mc(Jc),
                ajax: function(a, b) {
                    "object" == typeof a && (b = a, a = void 0), b = b || {};
                    var c, d, e, f, g, h, i, j, k = n.ajaxSetup({}, b),
                        l = k.context || k,
                        m = k.context && (l.nodeType || l.jquery) ? n(l) : n.event,
                        o = n.Deferred(),
                        p = n.Callbacks("once memory"),
                        q = k.statusCode || {},
                        r = {},
                        s = {},
                        t = 0,
                        u = "canceled",
                        v = {
                            readyState: 0,
                            getResponseHeader: function(a) {
                                var b;
                                if (2 === t) {
                                    if (!j) {
                                        j = {};
                                        while (b = Dc.exec(f)) j[b[1].toLowerCase()] = b[2]
                                    }
                                    b = j[a.toLowerCase()]
                                }
                                return null == b ? null : b
                            },
                            getAllResponseHeaders: function() {
                                return 2 === t ? f : null
                            },
                            setRequestHeader: function(a, b) {
                                var c = a.toLowerCase();
                                return t || (a = s[c] = s[c] || a, r[a] = b), this
                            },
                            overrideMimeType: function(a) {
                                return t || (k.mimeType = a), this
                            },
                            statusCode: function(a) {
                                var b;
                                if (a)
                                    if (2 > t)
                                        for (b in a) q[b] = [q[b], a[b]];
                                    else v.always(a[v.status]);
                                return this
                            },
                            abort: function(a) {
                                var b = a || u;
                                return i && i.abort(b), x(0, b), this
                            }
                        };
                    if (o.promise(v).complete = p.add, v.success = v.done, v.error = v.fail, k.url = ((a ||
                            k.url || Ac) + "").replace(Bc, "").replace(Gc, zc[1] + "//"), k.type = b
                        .method || b.type || k.method || k.type, k.dataTypes = n.trim(k.dataType || "*")
                        .toLowerCase().match(F) || [""], null == k.crossDomain && (c = Hc.exec(k.url
                            .toLowerCase()), k.crossDomain = !(!c || c[1] === zc[1] && c[2] === zc[2] &&
                            (c[3] || ("http:" === c[1] ? "80" : "443")) === (zc[3] || ("http:" === zc[
                                1] ? "80" : "443")))), k.data && k.processData && "string" != typeof k
                        .data && (k.data = n.param(k.data, k.traditional)), Nc(Ic, k, b, v), 2 === t)
                    return v;
                    h = k.global, h && 0 === n.active++ && n.event.trigger("ajaxStart"), k.type = k.type
                        .toUpperCase(), k.hasContent = !Fc.test(k.type), e = k.url, k.hasContent || (k
                            .data && (e = k.url += (xc.test(e) ? "&" : "?") + k.data, delete k.data), k
                            .cache === !1 && (k.url = Cc.test(e) ? e.replace(Cc, "$1_=" + wc++) : e + (xc
                                .test(e) ? "&" : "?") + "_=" + wc++)), k.ifModified && (n.lastModified[e] &&
                            v.setRequestHeader("If-Modified-Since", n.lastModified[e]), n.etag[e] && v
                            .setRequestHeader("If-None-Match", n.etag[e])), (k.data && k.hasContent && k
                            .contentType !== !1 || b.contentType) && v.setRequestHeader("Content-Type", k
                            .contentType), v.setRequestHeader("Accept", k.dataTypes[0] && k.accepts[k
                            .dataTypes[0]] ? k.accepts[k.dataTypes[0]] + ("*" !== k.dataTypes[0] ?
                            ", " + Kc + "; q=0.01" : "") : k.accepts["*"]);
                    for (d in k.headers) v.setRequestHeader(d, k.headers[d]);
                    if (k.beforeSend && (k.beforeSend.call(l, v, k) === !1 || 2 === t)) return v.abort();
                    u = "abort";
                    for (d in {
                            success: 1,
                            error: 1,
                            complete: 1
                        }) v[d](k[d]);
                    if (i = Nc(Jc, k, b, v)) {
                        v.readyState = 1, h && m.trigger("ajaxSend", [v, k]), k.async && k.timeout > 0 && (
                            g = setTimeout(function() {
                                v.abort("timeout")
                            }, k.timeout));
                        try {
                            t = 1, i.send(r, x)
                        } catch (w) {
                            if (!(2 > t)) throw w;
                            x(-1, w)
                        }
                    } else x(-1, "No Transport");

                    function x(a, b, c, d) {
                        var j, r, s, u, w, x = b;
                        2 !== t && (t = 2, g && clearTimeout(g), i = void 0, f = d || "", v.readyState = a >
                            0 ? 4 : 0, j = a >= 200 && 300 > a || 304 === a, c && (u = Pc(k, v, c)), u =
                            Qc(k, u, v, j), j ? (k.ifModified && (w = v.getResponseHeader(
                                        "Last-Modified"), w && (n.lastModified[e] = w), w = v
                                    .getResponseHeader("etag"), w && (n.etag[e] = w)), 204 === a ||
                                "HEAD" === k.type ? x = "nocontent" : 304 === a ? x = "notmodified" : (
                                    x = u.state, r = u.data, s = u.error, j = !s)) : (s = x, (a || !
                                x) && (x = "error", 0 > a && (a = 0))), v.status = a, v.statusText = (
                                b || x) + "", j ? o.resolveWith(l, [r, x, v]) : o.rejectWith(l, [v, x,
                                s]), v.statusCode(q), q = void 0, h && m.trigger(j ? "ajaxSuccess" :
                                "ajaxError", [v, k, j ? r : s]), p.fireWith(l, [v, x]), h && (m.trigger(
                                "ajaxComplete", [v, k]), --n.active || n.event.trigger("ajaxStop")))
                    }
                    return v
                },
                getJSON: function(a, b, c) {
                    return n.get(a, b, c, "json")
                },
                getScript: function(a, b) {
                    return n.get(a, void 0, b, "script")
                }
            }), n.each(["get", "post"], function(a, b) {
                n[b] = function(a, c, d, e) {
                    return n.isFunction(c) && (e = e || d, d = c, c = void 0), n.ajax({
                        url: a,
                        type: b,
                        dataType: e,
                        data: c,
                        success: d
                    })
                }
            }), n.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(
                a, b) {
                n.fn[b] = function(a) {
                    return this.on(b, a)
                }
            }), n._evalUrl = function(a) {
                return n.ajax({
                    url: a,
                    type: "GET",
                    dataType: "script",
                    async: !1,
                    global: !1,
                    "throws": !0
                })
            }, n.fn.extend({
                wrapAll: function(a) {
                    if (n.isFunction(a)) return this.each(function(b) {
                        n(this).wrapAll(a.call(this, b))
                    });
                    if (this[0]) {
                        var b = n(a, this[0].ownerDocument).eq(0).clone(!0);
                        this[0].parentNode && b.insertBefore(this[0]), b.map(function() {
                            var a = this;
                            while (a.firstChild && 1 === a.firstChild.nodeType) a = a.firstChild;
                            return a
                        }).append(this)
                    }
                    return this
                },
                wrapInner: function(a) {
                    return this.each(n.isFunction(a) ? function(b) {
                        n(this).wrapInner(a.call(this, b))
                    } : function() {
                        var b = n(this),
                            c = b.contents();
                        c.length ? c.wrapAll(a) : b.append(a)
                    })
                },
                wrap: function(a) {
                    var b = n.isFunction(a);
                    return this.each(function(c) {
                        n(this).wrapAll(b ? a.call(this, c) : a)
                    })
                },
                unwrap: function() {
                    return this.parent().each(function() {
                        n.nodeName(this, "body") || n(this).replaceWith(this.childNodes)
                    }).end()
                }
            }), n.expr.filters.hidden = function(a) {
                return a.offsetWidth <= 0 && a.offsetHeight <= 0 || !l.reliableHiddenOffsets() && "none" === (a
                    .style && a.style.display || n.css(a, "display"))
            }, n.expr.filters.visible = function(a) {
                return !n.expr.filters.hidden(a)
            };
            var Rc = /%20/g,
                Sc = /\[\]$/,
                Tc = /\r?\n/g,
                Uc = /^(?:submit|button|image|reset|file)$/i,
                Vc = /^(?:input|select|textarea|keygen)/i;

            function Wc(a, b, c, d) {
                var e;
                if (n.isArray(b)) n.each(b, function(b, e) {
                    c || Sc.test(a) ? d(a, e) : Wc(a + "[" + ("object" == typeof e ? b : "") + "]", e, c, d)
                });
                else if (c || "object" !== n.type(b)) d(a, b);
                else
                    for (e in b) Wc(a + "[" + e + "]", b[e], c, d)
            }
            n.param = function(a, b) {
                var c, d = [],
                    e = function(a, b) {
                        b = n.isFunction(b) ? b() : null == b ? "" : b, d[d.length] = encodeURIComponent(a) + "=" +
                            encodeURIComponent(b)
                    };
                if (void 0 === b && (b = n.ajaxSettings && n.ajaxSettings.traditional), n.isArray(a) || a.jquery &&
                    !n.isPlainObject(a)) n.each(a, function() {
                    e(this.name, this.value)
                });
                else
                    for (c in a) Wc(c, a[c], b, e);
                return d.join("&").replace(Rc, "+")
            }, n.fn.extend({
                serialize: function() {
                    return n.param(this.serializeArray())
                },
                serializeArray: function() {
                    return this.map(function() {
                        var a = n.prop(this, "elements");
                        return a ? n.makeArray(a) : this
                    }).filter(function() {
                        var a = this.type;
                        return this.name && !n(this).is(":disabled") && Vc.test(this.nodeName) && !
                            Uc.test(a) && (this.checked || !X.test(a))
                    }).map(function(a, b) {
                        var c = n(this).val();
                        return null == c ? null : n.isArray(c) ? n.map(c, function(a) {
                            return {
                                name: b.name,
                                value: a.replace(Tc, "\r\n")
                            }
                        }) : {
                            name: b.name,
                            value: c.replace(Tc, "\r\n")
                        }
                    }).get()
                }
            }), n.ajaxSettings.xhr = void 0 !== a.ActiveXObject ? function() {
                return !this.isLocal && /^(get|post|head|put|delete|options)$/i.test(this.type) && $c() || _c()
            } : $c;
            var Xc = 0,
                Yc = {},
                Zc = n.ajaxSettings.xhr();
            a.ActiveXObject && n(a).on("unload", function() {
                for (var a in Yc) Yc[a](void 0, !0)
            }), l.cors = !!Zc && "withCredentials" in Zc, Zc = l.ajax = !!Zc, Zc && n.ajaxTransport(function(a) {
                if (!a.crossDomain || l.cors) {
                    var b;
                    return {
                        send: function(c, d) {
                            var e, f = a.xhr(),
                                g = ++Xc;
                            if (f.open(a.type, a.url, a.async, a.username, a.password), a.xhrFields)
                                for (e in a.xhrFields) f[e] = a.xhrFields[e];
                            a.mimeType && f.overrideMimeType && f.overrideMimeType(a.mimeType), a
                                .crossDomain || c["X-Requested-With"] || (c["X-Requested-With"] =
                                    "XMLHttpRequest");
                            for (e in c) void 0 !== c[e] && f.setRequestHeader(e, c[e] + "");
                            f.send(a.hasContent && a.data || null), b = function(c, e) {
                                var h, i, j;
                                if (b && (e || 4 === f.readyState))
                                    if (delete Yc[g], b = void 0, f.onreadystatechange = n.noop, e)
                                        4 !== f.readyState && f.abort();
                                    else {
                                        j = {}, h = f.status, "string" == typeof f.responseText && (j
                                            .text = f.responseText);
                                        try {
                                            i = f.statusText
                                        } catch (k) {
                                            i = ""
                                        }
                                        h || !a.isLocal || a.crossDomain ? 1223 === h && (h = 204) : h =
                                            j.text ? 200 : 404
                                    } j && d(h, i, j, f.getAllResponseHeaders())
                            }, a.async ? 4 === f.readyState ? setTimeout(b) : f.onreadystatechange = Yc[
                                g] = b : b()
                        },
                        abort: function() {
                            b && b(void 0, !0)
                        }
                    }
                }
            });

            function $c() {
                try {
                    return new a.XMLHttpRequest
                } catch (b) {}
            }

            function _c() {
                try {
                    return new a.ActiveXObject("Microsoft.XMLHTTP")
                } catch (b) {}
            }
            n.ajaxSetup({
                accepts: {
                    script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
                },
                contents: {
                    script: /(?:java|ecma)script/
                },
                converters: {
                    "text script": function(a) {
                        return n.globalEval(a), a
                    }
                }
            }), n.ajaxPrefilter("script", function(a) {
                void 0 === a.cache && (a.cache = !1), a.crossDomain && (a.type = "GET", a.global = !1)
            }), n.ajaxTransport("script", function(a) {
                if (a.crossDomain) {
                    var b, c = z.head || n("head")[0] || z.documentElement;
                    return {
                        send: function(d, e) {
                            b = z.createElement("script"), b.async = !0, a.scriptCharset && (b.charset = a
                                    .scriptCharset), b.src = a.url, b.onload = b.onreadystatechange =
                                function(a, c) {
                                    (c || !b.readyState || /loaded|complete/.test(b.readyState)) && (b
                                        .onload = b.onreadystatechange = null, b.parentNode && b.parentNode
                                        .removeChild(b), b = null, c || e(200, "success"))
                                }, c.insertBefore(b, c.firstChild)
                        },
                        abort: function() {
                            b && b.onload(void 0, !0)
                        }
                    }
                }
            });
            var ad = [],
                bd = /(=)\?(?=&|$)|\?\?/;
            n.ajaxSetup({
                jsonp: "callback",
                jsonpCallback: function() {
                    var a = ad.pop() || n.expando + "_" + wc++;
                    return this[a] = !0, a
                }
            }), n.ajaxPrefilter("json jsonp", function(b, c, d) {
                var e, f, g, h = b.jsonp !== !1 && (bd.test(b.url) ? "url" : "string" == typeof b.data && !(b
                        .contentType || "").indexOf("application/x-www-form-urlencoded") && bd.test(b
                    .data) && "data");
                return h || "jsonp" === b.dataTypes[0] ? (e = b.jsonpCallback = n.isFunction(b.jsonpCallback) ?
                    b.jsonpCallback() : b.jsonpCallback, h ? b[h] = b[h].replace(bd, "$1" + e) : b.jsonp !==
                    !1 && (b.url += (xc.test(b.url) ? "&" : "?") + b.jsonp + "=" + e), b.converters[
                        "script json"] = function() {
                        return g || n.error(e + " was not called"), g[0]
                    }, b.dataTypes[0] = "json", f = a[e], a[e] = function() {
                        g = arguments
                    }, d.always(function() {
                        a[e] = f, b[e] && (b.jsonpCallback = c.jsonpCallback, ad.push(e)), g && n
                            .isFunction(f) && f(g[0]), g = f = void 0
                    }), "script") : void 0
            }), n.parseHTML = function(a, b, c) {
                if (!a || "string" != typeof a) return null;
                "boolean" == typeof b && (c = b, b = !1), b = b || z;
                var d = v.exec(a),
                    e = !c && [];
                return d ? [b.createElement(d[1])] : (d = n.buildFragment([a], b, e), e && e.length && n(e)
                .remove(), n.merge([], d.childNodes))
            };
            var cd = n.fn.load;
            n.fn.load = function(a, b, c) {
                if ("string" != typeof a && cd) return cd.apply(this, arguments);
                var d, e, f, g = this,
                    h = a.indexOf(" ");
                return h >= 0 && (d = a.slice(h, a.length), a = a.slice(0, h)), n.isFunction(b) ? (c = b, b =
                    void 0) : b && "object" == typeof b && (f = "POST"), g.length > 0 && n.ajax({
                    url: a,
                    type: f,
                    dataType: "html",
                    data: b
                }).done(function(a) {
                    e = arguments, g.html(d ? n("<div>").append(n.parseHTML(a)).find(d) : a)
                }).complete(c && function(a, b) {
                    g.each(c, e || [a.responseText, b, a])
                }), this
            }, n.expr.filters.animated = function(a) {
                return n.grep(n.timers, function(b) {
                    return a === b.elem
                }).length
            };
            var dd = a.document.documentElement;

            function ed(a) {
                return n.isWindow(a) ? a : 9 === a.nodeType ? a.defaultView || a.parentWindow : !1
            }
            n.offset = {
                setOffset: function(a, b, c) {
                    var d, e, f, g, h, i, j, k = n.css(a, "position"),
                        l = n(a),
                        m = {};
                    "static" === k && (a.style.position = "relative"), h = l.offset(), f = n.css(a, "top"), i =
                        n.css(a, "left"), j = ("absolute" === k || "fixed" === k) && n.inArray("auto", [f, i]) >
                        -1, j ? (d = l.position(), g = d.top, e = d.left) : (g = parseFloat(f) || 0, e =
                            parseFloat(i) || 0), n.isFunction(b) && (b = b.call(a, c, h)), null != b.top && (m
                            .top = b.top - h.top + g), null != b.left && (m.left = b.left - h.left + e),
                        "using" in b ? b.using.call(a, m) : l.css(m)
                }
            }, n.fn.extend({
                offset: function(a) {
                    if (arguments.length) return void 0 === a ? this : this.each(function(b) {
                        n.offset.setOffset(this, a, b)
                    });
                    var b, c, d = {
                            top: 0,
                            left: 0
                        },
                        e = this[0],
                        f = e && e.ownerDocument;
                    if (f) return b = f.documentElement, n.contains(b, e) ? (typeof e
                        .getBoundingClientRect !== L && (d = e.getBoundingClientRect()), c = ed(
                        f), {
                            top: d.top + (c.pageYOffset || b.scrollTop) - (b.clientTop || 0),
                            left: d.left + (c.pageXOffset || b.scrollLeft) - (b.clientLeft || 0)
                        }) : d
                },
                position: function() {
                    if (this[0]) {
                        var a, b, c = {
                                top: 0,
                                left: 0
                            },
                            d = this[0];
                        return "fixed" === n.css(d, "position") ? b = d.getBoundingClientRect() : (a = this
                            .offsetParent(), b = this.offset(), n.nodeName(a[0], "html") || (c = a
                                .offset()), c.top += n.css(a[0], "borderTopWidth", !0), c.left += n.css(
                                a[0], "borderLeftWidth", !0)), {
                            top: b.top - c.top - n.css(d, "marginTop", !0),
                            left: b.left - c.left - n.css(d, "marginLeft", !0)
                        }
                    }
                },
                offsetParent: function() {
                    return this.map(function() {
                        var a = this.offsetParent || dd;
                        while (a && !n.nodeName(a, "html") && "static" === n.css(a, "position")) a =
                            a.offsetParent;
                        return a || dd
                    })
                }
            }), n.each({
                scrollLeft: "pageXOffset",
                scrollTop: "pageYOffset"
            }, function(a, b) {
                var c = /Y/.test(b);
                n.fn[a] = function(d) {
                    return W(this, function(a, d, e) {
                        var f = ed(a);
                        return void 0 === e ? f ? b in f ? f[b] : f.document.documentElement[d] : a[
                            d] : void(f ? f.scrollTo(c ? n(f).scrollLeft() : e, c ? e : n(f)
                            .scrollTop()) : a[d] = e)
                    }, a, d, arguments.length, null)
                }
            }), n.each(["top", "left"], function(a, b) {
                n.cssHooks[b] = Mb(l.pixelPosition, function(a, c) {
                    return c ? (c = Kb(a, b), Ib.test(c) ? n(a).position()[b] + "px" : c) : void 0
                })
            }), n.each({
                Height: "height",
                Width: "width"
            }, function(a, b) {
                n.each({
                    padding: "inner" + a,
                    content: b,
                    "": "outer" + a
                }, function(c, d) {
                    n.fn[d] = function(d, e) {
                        var f = arguments.length && (c || "boolean" != typeof d),
                            g = c || (d === !0 || e === !0 ? "margin" : "border");
                        return W(this, function(b, c, d) {
                            var e;
                            return n.isWindow(b) ? b.document.documentElement["client" +
                                a] : 9 === b.nodeType ? (e = b.documentElement, Math.max(b
                                        .body["scroll" + a], e["scroll" + a], b.body[
                                            "offset" + a], e["offset" + a], e["client" + a]
                                        )) : void 0 === d ? n.css(b, c, g) : n.style(b, c,
                                    d, g)
                        }, b, f ? d : void 0, f, null)
                    }
                })
            }), n.fn.size = function() {
                return this.length
            }, n.fn.andSelf = n.fn.addBack, "function" == typeof define && define.amd && define("jquery", [],
                function() {
                    return n
                });
            var fd = a.jQuery,
                gd = a.$;
            return n.noConflict = function(b) {
                return a.$ === n && (a.$ = gd), b && a.jQuery === n && (a.jQuery = fd), n
            }, typeof b === L && (a.jQuery = a.$ = n), n
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script type="text/javascript" src="{{ asset('asset/js/bootstrap.bundle.min.js') }}">
    </script>
    <script>
        /*!
         * Bootstrap v5.1.3 (https://getbootstrap.com/)
         * Copyright 2011-2021 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
         * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
         */
        ! function(t, e) {
            "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" ==
                typeof define && define.amd ? define(e) : (t = "undefined" != typeof globalThis ? globalThis : t || self)
                .bootstrap = e()
        }(this, (function() {
            "use strict";
            const t = "transitionend",
                e = t => {
                    let e = t.getAttribute("data-bs-target");
                    if (!e || "#" === e) {
                        let i = t.getAttribute("href");
                        if (!i || !i.includes("#") && !i.startsWith(".")) return null;
                        i.includes("#") && !i.startsWith("#") && (i = `#${i.split("#")[1]}`), e = i && "#" !== i ? i
                            .trim() : null
                    }
                    return e
                },
                i = t => {
                    const i = e(t);
                    return i && document.querySelector(i) ? i : null
                },
                n = t => {
                    const i = e(t);
                    return i ? document.querySelector(i) : null
                },
                s = e => {
                    e.dispatchEvent(new Event(t))
                },
                o = t => !(!t || "object" != typeof t) && (void 0 !== t.jquery && (t = t[0]), void 0 !== t
                .nodeType),
                r = t => o(t) ? t.jquery ? t[0] : t : "string" == typeof t && t.length > 0 ? document.querySelector(
                    t) : null,
                a = (t, e, i) => {
                    Object.keys(i).forEach((n => {
                        const s = i[n],
                            r = e[n],
                            a = r && o(r) ? "element" : null == (l = r) ? `${l}` : {}.toString.call(l)
                            .match(/\s([a-z]+)/i)[1].toLowerCase();
                        var l;
                        if (!new RegExp(s).test(a)) throw new TypeError(
                            `${t.toUpperCase()}: Option "${n}" provided type "${a}" but expected type "${s}".`
                            )
                    }))
                },
                l = t => !(!o(t) || 0 === t.getClientRects().length) && "visible" === getComputedStyle(t)
                .getPropertyValue("visibility"),
                c = t => !t || t.nodeType !== Node.ELEMENT_NODE || !!t.classList.contains("disabled") || (void 0 !==
                    t.disabled ? t.disabled : t.hasAttribute("disabled") && "false" !== t.getAttribute("disabled")),
                h = t => {
                    if (!document.documentElement.attachShadow) return null;
                    if ("function" == typeof t.getRootNode) {
                        const e = t.getRootNode();
                        return e instanceof ShadowRoot ? e : null
                    }
                    return t instanceof ShadowRoot ? t : t.parentNode ? h(t.parentNode) : null
                },
                d = () => {},
                u = t => {
                    t.offsetHeight
                },
                f = () => {
                    const {
                        jQuery: t
                    } = window;
                    return t && !document.body.hasAttribute("data-bs-no-jquery") ? t : null
                },
                p = [],
                m = () => "rtl" === document.documentElement.dir,
                g = t => {
                    var e;
                    e = () => {
                        const e = f();
                        if (e) {
                            const i = t.NAME,
                                n = e.fn[i];
                            e.fn[i] = t.jQueryInterface, e.fn[i].Constructor = t, e.fn[i].noConflict = () => (e
                                .fn[i] = n, t.jQueryInterface)
                        }
                    }, "loading" === document.readyState ? (p.length || document.addEventListener(
                        "DOMContentLoaded", (() => {
                            p.forEach((t => t()))
                        })), p.push(e)) : e()
                },
                _ = t => {
                    "function" == typeof t && t()
                },
                b = (e, i, n = !0) => {
                    if (!n) return void _(e);
                    const o = (t => {
                        if (!t) return 0;
                        let {
                            transitionDuration: e,
                            transitionDelay: i
                        } = window.getComputedStyle(t);
                        const n = Number.parseFloat(e),
                            s = Number.parseFloat(i);
                        return n || s ? (e = e.split(",")[0], i = i.split(",")[0], 1e3 * (Number.parseFloat(
                            e) + Number.parseFloat(i))) : 0
                    })(i) + 5;
                    let r = !1;
                    const a = ({
                        target: n
                    }) => {
                        n === i && (r = !0, i.removeEventListener(t, a), _(e))
                    };
                    i.addEventListener(t, a), setTimeout((() => {
                        r || s(i)
                    }), o)
                },
                v = (t, e, i, n) => {
                    let s = t.indexOf(e);
                    if (-1 === s) return t[!i && n ? t.length - 1 : 0];
                    const o = t.length;
                    return s += i ? 1 : -1, n && (s = (s + o) % o), t[Math.max(0, Math.min(s, o - 1))]
                },
                y = /[^.]*(?=\..*)\.|.*/,
                w = /\..*/,
                E = /::\d+$/,
                A = {};
            let T = 1;
            const O = {
                    mouseenter: "mouseover",
                    mouseleave: "mouseout"
                },
                C = /^(mouseenter|mouseleave)/i,
                k = new Set(["click", "dblclick", "mouseup", "mousedown", "contextmenu", "mousewheel",
                    "DOMMouseScroll", "mouseover", "mouseout", "mousemove", "selectstart", "selectend",
                    "keydown", "keypress", "keyup", "orientationchange", "touchstart", "touchmove", "touchend",
                    "touchcancel", "pointerdown", "pointermove", "pointerup", "pointerleave", "pointercancel",
                    "gesturestart", "gesturechange", "gestureend", "focus", "blur", "change", "reset", "select",
                    "submit", "focusin", "focusout", "load", "unload", "beforeunload", "resize", "move",
                    "DOMContentLoaded", "readystatechange", "error", "abort", "scroll"
                ]);

            function L(t, e) {
                return e && `${e}::${T++}` || t.uidEvent || T++
            }

            function x(t) {
                const e = L(t);
                return t.uidEvent = e, A[e] = A[e] || {}, A[e]
            }

            function D(t, e, i = null) {
                const n = Object.keys(t);
                for (let s = 0, o = n.length; s < o; s++) {
                    const o = t[n[s]];
                    if (o.originalHandler === e && o.delegationSelector === i) return o
                }
                return null
            }

            function S(t, e, i) {
                const n = "string" == typeof e,
                    s = n ? i : e;
                let o = P(t);
                return k.has(o) || (o = t), [n, s, o]
            }

            function N(t, e, i, n, s) {
                if ("string" != typeof e || !t) return;
                if (i || (i = n, n = null), C.test(e)) {
                    const t = t => function(e) {
                        if (!e.relatedTarget || e.relatedTarget !== e.delegateTarget && !e.delegateTarget
                            .contains(e.relatedTarget)) return t.call(this, e)
                    };
                    n ? n = t(n) : i = t(i)
                }
                const [o, r, a] = S(e, i, n), l = x(t), c = l[a] || (l[a] = {}), h = D(c, r, o ? i : null);
                if (h) return void(h.oneOff = h.oneOff && s);
                const d = L(r, e.replace(y, "")),
                    u = o ? function(t, e, i) {
                        return function n(s) {
                            const o = t.querySelectorAll(e);
                            for (let {
                                    target: r
                                } = s; r && r !== this; r = r.parentNode)
                                for (let a = o.length; a--;)
                                    if (o[a] === r) return s.delegateTarget = r, n.oneOff && j.off(t, s.type, e,
                                        i), i.apply(r, [s]);
                            return null
                        }
                    }(t, i, n) : function(t, e) {
                        return function i(n) {
                            return n.delegateTarget = t, i.oneOff && j.off(t, n.type, e), e.apply(t, [n])
                        }
                    }(t, i);
                u.delegationSelector = o ? i : null, u.originalHandler = r, u.oneOff = s, u.uidEvent = d, c[d] = u,
                    t.addEventListener(a, u, o)
            }

            function I(t, e, i, n, s) {
                const o = D(e[i], n, s);
                o && (t.removeEventListener(i, o, Boolean(s)), delete e[i][o.uidEvent])
            }

            function P(t) {
                return t = t.replace(w, ""), O[t] || t
            }
            const j = {
                    on(t, e, i, n) {
                        N(t, e, i, n, !1)
                    },
                    one(t, e, i, n) {
                        N(t, e, i, n, !0)
                    },
                    off(t, e, i, n) {
                        if ("string" != typeof e || !t) return;
                        const [s, o, r] = S(e, i, n), a = r !== e, l = x(t), c = e.startsWith(".");
                        if (void 0 !== o) {
                            if (!l || !l[r]) return;
                            return void I(t, l, r, o, s ? i : null)
                        }
                        c && Object.keys(l).forEach((i => {
                            ! function(t, e, i, n) {
                                const s = e[i] || {};
                                Object.keys(s).forEach((o => {
                                    if (o.includes(n)) {
                                        const n = s[o];
                                        I(t, e, i, n.originalHandler, n.delegationSelector)
                                    }
                                }))
                            }(t, l, i, e.slice(1))
                        }));
                        const h = l[r] || {};
                        Object.keys(h).forEach((i => {
                            const n = i.replace(E, "");
                            if (!a || e.includes(n)) {
                                const e = h[i];
                                I(t, l, r, e.originalHandler, e.delegationSelector)
                            }
                        }))
                    },
                    trigger(t, e, i) {
                        if ("string" != typeof e || !t) return null;
                        const n = f(),
                            s = P(e),
                            o = e !== s,
                            r = k.has(s);
                        let a, l = !0,
                            c = !0,
                            h = !1,
                            d = null;
                        return o && n && (a = n.Event(e, i), n(t).trigger(a), l = !a.isPropagationStopped(), c = !a
                                .isImmediatePropagationStopped(), h = a.isDefaultPrevented()), r ? (d = document
                                .createEvent("HTMLEvents"), d.initEvent(s, l, !0)) : d = new CustomEvent(e, {
                                bubbles: l,
                                cancelable: !0
                            }), void 0 !== i && Object.keys(i).forEach((t => {
                                Object.defineProperty(d, t, {
                                    get: () => i[t]
                                })
                            })), h && d.preventDefault(), c && t.dispatchEvent(d), d.defaultPrevented && void 0 !==
                            a && a.preventDefault(), d
                    }
                },
                M = new Map,
                H = {
                    set(t, e, i) {
                        M.has(t) || M.set(t, new Map);
                        const n = M.get(t);
                        n.has(e) || 0 === n.size ? n.set(e, i) : console.error(
                            `Bootstrap doesn't allow more than one instance per element. Bound instance: ${Array.from(n.keys())[0]}.`
                            )
                    },
                    get: (t, e) => M.has(t) && M.get(t).get(e) || null,
                    remove(t, e) {
                        if (!M.has(t)) return;
                        const i = M.get(t);
                        i.delete(e), 0 === i.size && M.delete(t)
                    }
                };
            class B {
                constructor(t) {
                    (t = r(t)) && (this._element = t, H.set(this._element, this.constructor.DATA_KEY, this))
                }
                dispose() {
                    H.remove(this._element, this.constructor.DATA_KEY), j.off(this._element, this.constructor
                        .EVENT_KEY), Object.getOwnPropertyNames(this).forEach((t => {
                        this[t] = null
                    }))
                }
                _queueCallback(t, e, i = !0) {
                    b(t, e, i)
                }
                static getInstance(t) {
                    return H.get(r(t), this.DATA_KEY)
                }
                static getOrCreateInstance(t, e = {}) {
                    return this.getInstance(t) || new this(t, "object" == typeof e ? e : null)
                }
                static get VERSION() {
                    return "5.1.3"
                }
                static get NAME() {
                    throw new Error('You have to implement the static method "NAME", for each component!')
                }
                static get DATA_KEY() {
                    return `bs.${this.NAME}`
                }
                static get EVENT_KEY() {
                    return `.${this.DATA_KEY}`
                }
            }
            const R = (t, e = "hide") => {
                const i = `click.dismiss${t.EVENT_KEY}`,
                    s = t.NAME;
                j.on(document, i, `[data-bs-dismiss="${s}"]`, (function(i) {
                    if (["A", "AREA"].includes(this.tagName) && i.preventDefault(), c(this)) return;
                    const o = n(this) || this.closest(`.${s}`);
                    t.getOrCreateInstance(o)[e]()
                }))
            };
            class W extends B {
                static get NAME() {
                    return "alert"
                }
                close() {
                    if (j.trigger(this._element, "close.bs.alert").defaultPrevented) return;
                    this._element.classList.remove("show");
                    const t = this._element.classList.contains("fade");
                    this._queueCallback((() => this._destroyElement()), this._element, t)
                }
                _destroyElement() {
                    this._element.remove(), j.trigger(this._element, "closed.bs.alert"), this.dispose()
                }
                static jQueryInterface(t) {
                    return this.each((function() {
                        const e = W.getOrCreateInstance(this);
                        if ("string" == typeof t) {
                            if (void 0 === e[t] || t.startsWith("_") || "constructor" === t)
                            throw new TypeError(`No method named "${t}"`);
                            e[t](this)
                        }
                    }))
                }
            }
            R(W, "close"), g(W);
            const $ = '[data-bs-toggle="button"]';
            class z extends B {
                static get NAME() {
                    return "button"
                }
                toggle() {
                    this._element.setAttribute("aria-pressed", this._element.classList.toggle("active"))
                }
                static jQueryInterface(t) {
                    return this.each((function() {
                        const e = z.getOrCreateInstance(this);
                        "toggle" === t && e[t]()
                    }))
                }
            }

            function q(t) {
                return "true" === t || "false" !== t && (t === Number(t).toString() ? Number(t) : "" === t ||
                    "null" === t ? null : t)
            }

            function F(t) {
                return t.replace(/[A-Z]/g, (t => `-${t.toLowerCase()}`))
            }
            j.on(document, "click.bs.button.data-api", $, (t => {
                t.preventDefault();
                const e = t.target.closest($);
                z.getOrCreateInstance(e).toggle()
            })), g(z);
            const U = {
                    setDataAttribute(t, e, i) {
                        t.setAttribute(`data-bs-${F(e)}`, i)
                    },
                    removeDataAttribute(t, e) {
                        t.removeAttribute(`data-bs-${F(e)}`)
                    },
                    getDataAttributes(t) {
                        if (!t) return {};
                        const e = {};
                        return Object.keys(t.dataset).filter((t => t.startsWith("bs"))).forEach((i => {
                            let n = i.replace(/^bs/, "");
                            n = n.charAt(0).toLowerCase() + n.slice(1, n.length), e[n] = q(t.dataset[i])
                        })), e
                    },
                    getDataAttribute: (t, e) => q(t.getAttribute(`data-bs-${F(e)}`)),
                    offset(t) {
                        const e = t.getBoundingClientRect();
                        return {
                            top: e.top + window.pageYOffset,
                            left: e.left + window.pageXOffset
                        }
                    },
                    position: t => ({
                        top: t.offsetTop,
                        left: t.offsetLeft
                    })
                },
                V = {
                    find: (t, e = document.documentElement) => [].concat(...Element.prototype.querySelectorAll.call(
                        e, t)),
                    findOne: (t, e = document.documentElement) => Element.prototype.querySelector.call(e, t),
                    children: (t, e) => [].concat(...t.children).filter((t => t.matches(e))),
                    parents(t, e) {
                        const i = [];
                        let n = t.parentNode;
                        for (; n && n.nodeType === Node.ELEMENT_NODE && 3 !== n.nodeType;) n.matches(e) && i.push(
                            n), n = n.parentNode;
                        return i
                    },
                    prev(t, e) {
                        let i = t.previousElementSibling;
                        for (; i;) {
                            if (i.matches(e)) return [i];
                            i = i.previousElementSibling
                        }
                        return []
                    },
                    next(t, e) {
                        let i = t.nextElementSibling;
                        for (; i;) {
                            if (i.matches(e)) return [i];
                            i = i.nextElementSibling
                        }
                        return []
                    },
                    focusableChildren(t) {
                        const e = ["a", "button", "input", "textarea", "select", "details", "[tabindex]",
                            '[contenteditable="true"]'
                        ].map((t => `${t}:not([tabindex^="-"])`)).join(", ");
                        return this.find(e, t).filter((t => !c(t) && l(t)))
                    }
                },
                K = "carousel",
                X = {
                    interval: 5e3,
                    keyboard: !0,
                    slide: !1,
                    pause: "hover",
                    wrap: !0,
                    touch: !0
                },
                Y = {
                    interval: "(number|boolean)",
                    keyboard: "boolean",
                    slide: "(boolean|string)",
                    pause: "(string|boolean)",
                    wrap: "boolean",
                    touch: "boolean"
                },
                Q = "next",
                G = "prev",
                Z = "left",
                J = "right",
                tt = {
                    ArrowLeft: J,
                    ArrowRight: Z
                },
                et = "slid.bs.carousel",
                it = "active",
                nt = ".active.carousel-item";
            class st extends B {
                constructor(t, e) {
                    super(t), this._items = null, this._interval = null, this._activeElement = null, this
                        ._isPaused = !1, this._isSliding = !1, this.touchTimeout = null, this.touchStartX = 0,
                        this.touchDeltaX = 0, this._config = this._getConfig(e), this._indicatorsElement = V
                        .findOne(".carousel-indicators", this._element), this._touchSupported =
                        "ontouchstart" in document.documentElement || navigator.maxTouchPoints > 0, this
                        ._pointerEvent = Boolean(window.PointerEvent), this._addEventListeners()
                }
                static get Default() {
                    return X
                }
                static get NAME() {
                    return K
                }
                next() {
                    this._slide(Q)
                }
                nextWhenVisible() {
                    !document.hidden && l(this._element) && this.next()
                }
                prev() {
                    this._slide(G)
                }
                pause(t) {
                    t || (this._isPaused = !0), V.findOne(".carousel-item-next, .carousel-item-prev", this
                            ._element) && (s(this._element), this.cycle(!0)), clearInterval(this._interval),
                        this._interval = null
                }
                cycle(t) {
                    t || (this._isPaused = !1), this._interval && (clearInterval(this._interval), this
                        ._interval = null), this._config && this._config.interval && !this._isPaused && (
                        this._updateInterval(), this._interval = setInterval((document.visibilityState ?
                            this.nextWhenVisible : this.next).bind(this), this._config.interval))
                }
                to(t) {
                    this._activeElement = V.findOne(nt, this._element);
                    const e = this._getItemIndex(this._activeElement);
                    if (t > this._items.length - 1 || t < 0) return;
                    if (this._isSliding) return void j.one(this._element, et, (() => this.to(t)));
                    if (e === t) return this.pause(), void this.cycle();
                    const i = t > e ? Q : G;
                    this._slide(i, this._items[t])
                }
                _getConfig(t) {
                    return t = {
                        ...X,
                        ...U.getDataAttributes(this._element),
                        ..."object" == typeof t ? t : {}
                    }, a(K, t, Y), t
                }
                _handleSwipe() {
                    const t = Math.abs(this.touchDeltaX);
                    if (t <= 40) return;
                    const e = t / this.touchDeltaX;
                    this.touchDeltaX = 0, e && this._slide(e > 0 ? J : Z)
                }
                _addEventListeners() {
                    this._config.keyboard && j.on(this._element, "keydown.bs.carousel", (t => this._keydown(
                        t))), "hover" === this._config.pause && (j.on(this._element, "mouseenter.bs.carousel", (
                            t => this.pause(t))), j.on(this._element, "mouseleave.bs.carousel", (t => this
                            .cycle(t)))), this._config.touch && this._touchSupported && this
                        ._addTouchEventListeners()
                }
                _addTouchEventListeners() {
                    const t = t => this._pointerEvent && ("pen" === t.pointerType || "touch" === t.pointerType),
                        e = e => {
                            t(e) ? this.touchStartX = e.clientX : this._pointerEvent || (this.touchStartX = e
                                .touches[0].clientX)
                        },
                        i = t => {
                            this.touchDeltaX = t.touches && t.touches.length > 1 ? 0 : t.touches[0].clientX -
                                this.touchStartX
                        },
                        n = e => {
                            t(e) && (this.touchDeltaX = e.clientX - this.touchStartX), this._handleSwipe(),
                                "hover" === this._config.pause && (this.pause(), this.touchTimeout &&
                                    clearTimeout(this.touchTimeout), this.touchTimeout = setTimeout((t => this
                                        .cycle(t)), 500 + this._config.interval))
                        };
                    V.find(".carousel-item img", this._element).forEach((t => {
                        j.on(t, "dragstart.bs.carousel", (t => t.preventDefault()))
                    })), this._pointerEvent ? (j.on(this._element, "pointerdown.bs.carousel", (t => e(t))),
                        j.on(this._element, "pointerup.bs.carousel", (t => n(t))), this._element.classList
                        .add("pointer-event")) : (j.on(this._element, "touchstart.bs.carousel", (t => e(
                        t))), j.on(this._element, "touchmove.bs.carousel", (t => i(t))), j.on(this._element,
                            "touchend.bs.carousel", (t => n(t))))
                }
                _keydown(t) {
                    if (/input|textarea/i.test(t.target.tagName)) return;
                    const e = tt[t.key];
                    e && (t.preventDefault(), this._slide(e))
                }
                _getItemIndex(t) {
                    return this._items = t && t.parentNode ? V.find(".carousel-item", t.parentNode) : [], this
                        ._items.indexOf(t)
                }
                _getItemByOrder(t, e) {
                    const i = t === Q;
                    return v(this._items, e, i, this._config.wrap)
                }
                _triggerSlideEvent(t, e) {
                    const i = this._getItemIndex(t),
                        n = this._getItemIndex(V.findOne(nt, this._element));
                    return j.trigger(this._element, "slide.bs.carousel", {
                        relatedTarget: t,
                        direction: e,
                        from: n,
                        to: i
                    })
                }
                _setActiveIndicatorElement(t) {
                    if (this._indicatorsElement) {
                        const e = V.findOne(".active", this._indicatorsElement);
                        e.classList.remove(it), e.removeAttribute("aria-current");
                        const i = V.find("[data-bs-target]", this._indicatorsElement);
                        for (let e = 0; e < i.length; e++)
                            if (Number.parseInt(i[e].getAttribute("data-bs-slide-to"), 10) === this
                                ._getItemIndex(t)) {
                                i[e].classList.add(it), i[e].setAttribute("aria-current", "true");
                                break
                            }
                    }
                }
                _updateInterval() {
                    const t = this._activeElement || V.findOne(nt, this._element);
                    if (!t) return;
                    const e = Number.parseInt(t.getAttribute("data-bs-interval"), 10);
                    e ? (this._config.defaultInterval = this._config.defaultInterval || this._config.interval,
                            this._config.interval = e) : this._config.interval = this._config.defaultInterval ||
                        this._config.interval
                }
                _slide(t, e) {
                    const i = this._directionToOrder(t),
                        n = V.findOne(nt, this._element),
                        s = this._getItemIndex(n),
                        o = e || this._getItemByOrder(i, n),
                        r = this._getItemIndex(o),
                        a = Boolean(this._interval),
                        l = i === Q,
                        c = l ? "carousel-item-start" : "carousel-item-end",
                        h = l ? "carousel-item-next" : "carousel-item-prev",
                        d = this._orderToDirection(i);
                    if (o && o.classList.contains(it)) return void(this._isSliding = !1);
                    if (this._isSliding) return;
                    if (this._triggerSlideEvent(o, d).defaultPrevented) return;
                    if (!n || !o) return;
                    this._isSliding = !0, a && this.pause(), this._setActiveIndicatorElement(o), this
                        ._activeElement = o;
                    const f = () => {
                        j.trigger(this._element, et, {
                            relatedTarget: o,
                            direction: d,
                            from: s,
                            to: r
                        })
                    };
                    if (this._element.classList.contains("slide")) {
                        o.classList.add(h), u(o), n.classList.add(c), o.classList.add(c);
                        const t = () => {
                            o.classList.remove(c, h), o.classList.add(it), n.classList.remove(it, h, c),
                                this._isSliding = !1, setTimeout(f, 0)
                        };
                        this._queueCallback(t, n, !0)
                    } else n.classList.remove(it), o.classList.add(it), this._isSliding = !1, f();
                    a && this.cycle()
                }
                _directionToOrder(t) {
                    return [J, Z].includes(t) ? m() ? t === Z ? G : Q : t === Z ? Q : G : t
                }
                _orderToDirection(t) {
                    return [Q, G].includes(t) ? m() ? t === G ? Z : J : t === G ? J : Z : t
                }
                static carouselInterface(t, e) {
                    const i = st.getOrCreateInstance(t, e);
                    let {
                        _config: n
                    } = i;
                    "object" == typeof e && (n = {
                        ...n,
                        ...e
                    });
                    const s = "string" == typeof e ? e : n.slide;
                    if ("number" == typeof e) i.to(e);
                    else if ("string" == typeof s) {
                        if (void 0 === i[s]) throw new TypeError(`No method named "${s}"`);
                        i[s]()
                    } else n.interval && n.ride && (i.pause(), i.cycle())
                }
                static jQueryInterface(t) {
                    return this.each((function() {
                        st.carouselInterface(this, t)
                    }))
                }
                static dataApiClickHandler(t) {
                    const e = n(this);
                    if (!e || !e.classList.contains("carousel")) return;
                    const i = {
                            ...U.getDataAttributes(e),
                            ...U.getDataAttributes(this)
                        },
                        s = this.getAttribute("data-bs-slide-to");
                    s && (i.interval = !1), st.carouselInterface(e, i), s && st.getInstance(e).to(s), t
                        .preventDefault()
                }
            }
            j.on(document, "click.bs.carousel.data-api", "[data-bs-slide], [data-bs-slide-to]", st
                .dataApiClickHandler), j.on(window, "load.bs.carousel.data-api", (() => {
                const t = V.find('[data-bs-ride="carousel"]');
                for (let e = 0, i = t.length; e < i; e++) st.carouselInterface(t[e], st.getInstance(t[
                    e]))
            })), g(st);
            const ot = "collapse",
                rt = {
                    toggle: !0,
                    parent: null
                },
                at = {
                    toggle: "boolean",
                    parent: "(null|element)"
                },
                lt = "show",
                ct = "collapse",
                ht = "collapsing",
                dt = "collapsed",
                ut = ":scope .collapse .collapse",
                ft = '[data-bs-toggle="collapse"]';
            class pt extends B {
                constructor(t, e) {
                    super(t), this._isTransitioning = !1, this._config = this._getConfig(e), this
                        ._triggerArray = [];
                    const n = V.find(ft);
                    for (let t = 0, e = n.length; t < e; t++) {
                        const e = n[t],
                            s = i(e),
                            o = V.find(s).filter((t => t === this._element));
                        null !== s && o.length && (this._selector = s, this._triggerArray.push(e))
                    }
                    this._initializeChildren(), this._config.parent || this._addAriaAndCollapsedClass(this
                        ._triggerArray, this._isShown()), this._config.toggle && this.toggle()
                }
                static get Default() {
                    return rt
                }
                static get NAME() {
                    return ot
                }
                toggle() {
                    this._isShown() ? this.hide() : this.show()
                }
                show() {
                    if (this._isTransitioning || this._isShown()) return;
                    let t, e = [];
                    if (this._config.parent) {
                        const t = V.find(ut, this._config.parent);
                        e = V.find(".collapse.show, .collapse.collapsing", this._config.parent).filter((e => !t
                            .includes(e)))
                    }
                    const i = V.findOne(this._selector);
                    if (e.length) {
                        const n = e.find((t => i !== t));
                        if (t = n ? pt.getInstance(n) : null, t && t._isTransitioning) return
                    }
                    if (j.trigger(this._element, "show.bs.collapse").defaultPrevented) return;
                    e.forEach((e => {
                        i !== e && pt.getOrCreateInstance(e, {
                            toggle: !1
                        }).hide(), t || H.set(e, "bs.collapse", null)
                    }));
                    const n = this._getDimension();
                    this._element.classList.remove(ct), this._element.classList.add(ht), this._element.style[
                        n] = 0, this._addAriaAndCollapsedClass(this._triggerArray, !0), this
                        ._isTransitioning = !0;
                    const s = `scroll${n[0].toUpperCase()+n.slice(1)}`;
                    this._queueCallback((() => {
                        this._isTransitioning = !1, this._element.classList.remove(ht), this
                            ._element.classList.add(ct, lt), this._element.style[n] = "", j.trigger(
                                this._element, "shown.bs.collapse")
                    }), this._element, !0), this._element.style[n] = `${this._element[s]}px`
                }
                hide() {
                    if (this._isTransitioning || !this._isShown()) return;
                    if (j.trigger(this._element, "hide.bs.collapse").defaultPrevented) return;
                    const t = this._getDimension();
                    this._element.style[t] = `${this._element.getBoundingClientRect()[t]}px`, u(this._element),
                        this._element.classList.add(ht), this._element.classList.remove(ct, lt);
                    const e = this._triggerArray.length;
                    for (let t = 0; t < e; t++) {
                        const e = this._triggerArray[t],
                            i = n(e);
                        i && !this._isShown(i) && this._addAriaAndCollapsedClass([e], !1)
                    }
                    this._isTransitioning = !0, this._element.style[t] = "", this._queueCallback((() => {
                        this._isTransitioning = !1, this._element.classList.remove(ht), this
                            ._element.classList.add(ct), j.trigger(this._element,
                                "hidden.bs.collapse")
                    }), this._element, !0)
                }
                _isShown(t = this._element) {
                    return t.classList.contains(lt)
                }
                _getConfig(t) {
                    return (t = {
                        ...rt,
                        ...U.getDataAttributes(this._element),
                        ...t
                    }).toggle = Boolean(t.toggle), t.parent = r(t.parent), a(ot, t, at), t
                }
                _getDimension() {
                    return this._element.classList.contains("collapse-horizontal") ? "width" : "height"
                }
                _initializeChildren() {
                    if (!this._config.parent) return;
                    const t = V.find(ut, this._config.parent);
                    V.find(ft, this._config.parent).filter((e => !t.includes(e))).forEach((t => {
                        const e = n(t);
                        e && this._addAriaAndCollapsedClass([t], this._isShown(e))
                    }))
                }
                _addAriaAndCollapsedClass(t, e) {
                    t.length && t.forEach((t => {
                        e ? t.classList.remove(dt) : t.classList.add(dt), t.setAttribute(
                            "aria-expanded", e)
                    }))
                }
                static jQueryInterface(t) {
                    return this.each((function() {
                        const e = {};
                        "string" == typeof t && /show|hide/.test(t) && (e.toggle = !1);
                        const i = pt.getOrCreateInstance(this, e);
                        if ("string" == typeof t) {
                            if (void 0 === i[t]) throw new TypeError(`No method named "${t}"`);
                            i[t]()
                        }
                    }))
                }
            }
            j.on(document, "click.bs.collapse.data-api", ft, (function(t) {
                ("A" === t.target.tagName || t.delegateTarget && "A" === t.delegateTarget.tagName) && t
                    .preventDefault();
                const e = i(this);
                V.find(e).forEach((t => {
                    pt.getOrCreateInstance(t, {
                        toggle: !1
                    }).toggle()
                }))
            })), g(pt);
            var mt = "top",
                gt = "bottom",
                _t = "right",
                bt = "left",
                vt = "auto",
                yt = [mt, gt, _t, bt],
                wt = "start",
                Et = "end",
                At = "clippingParents",
                Tt = "viewport",
                Ot = "popper",
                Ct = "reference",
                kt = yt.reduce((function(t, e) {
                    return t.concat([e + "-" + wt, e + "-" + Et])
                }), []),
                Lt = [].concat(yt, [vt]).reduce((function(t, e) {
                    return t.concat([e, e + "-" + wt, e + "-" + Et])
                }), []),
                xt = "beforeRead",
                Dt = "read",
                St = "afterRead",
                Nt = "beforeMain",
                It = "main",
                Pt = "afterMain",
                jt = "beforeWrite",
                Mt = "write",
                Ht = "afterWrite",
                Bt = [xt, Dt, St, Nt, It, Pt, jt, Mt, Ht];

            function Rt(t) {
                return t ? (t.nodeName || "").toLowerCase() : null
            }

            function Wt(t) {
                if (null == t) return window;
                if ("[object Window]" !== t.toString()) {
                    var e = t.ownerDocument;
                    return e && e.defaultView || window
                }
                return t
            }

            function $t(t) {
                return t instanceof Wt(t).Element || t instanceof Element
            }

            function zt(t) {
                return t instanceof Wt(t).HTMLElement || t instanceof HTMLElement
            }

            function qt(t) {
                return "undefined" != typeof ShadowRoot && (t instanceof Wt(t).ShadowRoot ||
                    t instanceof ShadowRoot)
            }
            const Ft = {
                name: "applyStyles",
                enabled: !0,
                phase: "write",
                fn: function(t) {
                    var e = t.state;
                    Object.keys(e.elements).forEach((function(t) {
                        var i = e.styles[t] || {},
                            n = e.attributes[t] || {},
                            s = e.elements[t];
                        zt(s) && Rt(s) && (Object.assign(s.style, i), Object.keys(n).forEach((
                            function(t) {
                                var e = n[t];
                                !1 === e ? s.removeAttribute(t) : s.setAttribute(t,
                                    !0 === e ? "" : e)
                            })))
                    }))
                },
                effect: function(t) {
                    var e = t.state,
                        i = {
                            popper: {
                                position: e.options.strategy,
                                left: "0",
                                top: "0",
                                margin: "0"
                            },
                            arrow: {
                                position: "absolute"
                            },
                            reference: {}
                        };
                    return Object.assign(e.elements.popper.style, i.popper), e.styles = i, e.elements
                        .arrow && Object.assign(e.elements.arrow.style, i.arrow),
                        function() {
                            Object.keys(e.elements).forEach((function(t) {
                                var n = e.elements[t],
                                    s = e.attributes[t] || {},
                                    o = Object.keys(e.styles.hasOwnProperty(t) ? e.styles[t] :
                                        i[t]).reduce((function(t, e) {
                                        return t[e] = "", t
                                    }), {});
                                zt(n) && Rt(n) && (Object.assign(n.style, o), Object.keys(s)
                                    .forEach((function(t) {
                                        n.removeAttribute(t)
                                    })))
                            }))
                        }
                },
                requires: ["computeStyles"]
            };

            function Ut(t) {
                return t.split("-")[0]
            }

            function Vt(t, e) {
                var i = t.getBoundingClientRect();
                return {
                    width: i.width / 1,
                    height: i.height / 1,
                    top: i.top / 1,
                    right: i.right / 1,
                    bottom: i.bottom / 1,
                    left: i.left / 1,
                    x: i.left / 1,
                    y: i.top / 1
                }
            }

            function Kt(t) {
                var e = Vt(t),
                    i = t.offsetWidth,
                    n = t.offsetHeight;
                return Math.abs(e.width - i) <= 1 && (i = e.width), Math.abs(e.height - n) <= 1 && (n = e.height), {
                    x: t.offsetLeft,
                    y: t.offsetTop,
                    width: i,
                    height: n
                }
            }

            function Xt(t, e) {
                var i = e.getRootNode && e.getRootNode();
                if (t.contains(e)) return !0;
                if (i && qt(i)) {
                    var n = e;
                    do {
                        if (n && t.isSameNode(n)) return !0;
                        n = n.parentNode || n.host
                    } while (n)
                }
                return !1
            }

            function Yt(t) {
                return Wt(t).getComputedStyle(t)
            }

            function Qt(t) {
                return ["table", "td", "th"].indexOf(Rt(t)) >= 0
            }

            function Gt(t) {
                return (($t(t) ? t.ownerDocument : t.document) || window.document).documentElement
            }

            function Zt(t) {
                return "html" === Rt(t) ? t : t.assignedSlot || t.parentNode || (qt(t) ? t.host : null) || Gt(t)
            }

            function Jt(t) {
                return zt(t) && "fixed" !== Yt(t).position ? t.offsetParent : null
            }

            function te(t) {
                for (var e = Wt(t), i = Jt(t); i && Qt(i) && "static" === Yt(i).position;) i = Jt(i);
                return i && ("html" === Rt(i) || "body" === Rt(i) && "static" === Yt(i).position) ? e : i ||
                    function(t) {
                        var e = -1 !== navigator.userAgent.toLowerCase().indexOf("firefox");
                        if (-1 !== navigator.userAgent.indexOf("Trident") && zt(t) && "fixed" === Yt(t).position)
                            return null;
                        for (var i = Zt(t); zt(i) && ["html", "body"].indexOf(Rt(i)) < 0;) {
                            var n = Yt(i);
                            if ("none" !== n.transform || "none" !== n.perspective || "paint" === n.contain || -
                                1 !== ["transform", "perspective"].indexOf(n.willChange) || e && "filter" === n
                                .willChange || e && n.filter && "none" !== n.filter) return i;
                            i = i.parentNode
                        }
                        return null
                    }(t) || e
            }

            function ee(t) {
                return ["top", "bottom"].indexOf(t) >= 0 ? "x" : "y"
            }
            var ie = Math.max,
                ne = Math.min,
                se = Math.round;

            function oe(t, e, i) {
                return ie(t, ne(e, i))
            }

            function re(t) {
                return Object.assign({}, {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                }, t)
            }

            function ae(t, e) {
                return e.reduce((function(e, i) {
                    return e[i] = t, e
                }), {})
            }
            const le = {
                name: "arrow",
                enabled: !0,
                phase: "main",
                fn: function(t) {
                    var e, i = t.state,
                        n = t.name,
                        s = t.options,
                        o = i.elements.arrow,
                        r = i.modifiersData.popperOffsets,
                        a = Ut(i.placement),
                        l = ee(a),
                        c = [bt, _t].indexOf(a) >= 0 ? "height" : "width";
                    if (o && r) {
                        var h = function(t, e) {
                                return re("number" != typeof(t = "function" == typeof t ? t(Object
                                .assign({}, e.rects, {
                                        placement: e.placement
                                    })) : t) ? t : ae(t, yt))
                            }(s.padding, i),
                            d = Kt(o),
                            u = "y" === l ? mt : bt,
                            f = "y" === l ? gt : _t,
                            p = i.rects.reference[c] + i.rects.reference[l] - r[l] - i.rects.popper[c],
                            m = r[l] - i.rects.reference[l],
                            g = te(o),
                            _ = g ? "y" === l ? g.clientHeight || 0 : g.clientWidth || 0 : 0,
                            b = p / 2 - m / 2,
                            v = h[u],
                            y = _ - d[c] - h[f],
                            w = _ / 2 - d[c] / 2 + b,
                            E = oe(v, w, y),
                            A = l;
                        i.modifiersData[n] = ((e = {})[A] = E, e.centerOffset = E - w, e)
                    }
                },
                effect: function(t) {
                    var e = t.state,
                        i = t.options.element,
                        n = void 0 === i ? "[data-popper-arrow]" : i;
                    null != n && ("string" != typeof n || (n = e.elements.popper.querySelector(n))) && Xt(e
                        .elements.popper, n) && (e.elements.arrow = n)
                },
                requires: ["popperOffsets"],
                requiresIfExists: ["preventOverflow"]
            };

            function ce(t) {
                return t.split("-")[1]
            }
            var he = {
                top: "auto",
                right: "auto",
                bottom: "auto",
                left: "auto"
            };

            function de(t) {
                var e, i = t.popper,
                    n = t.popperRect,
                    s = t.placement,
                    o = t.variation,
                    r = t.offsets,
                    a = t.position,
                    l = t.gpuAcceleration,
                    c = t.adaptive,
                    h = t.roundOffsets,
                    d = !0 === h ? function(t) {
                        var e = t.x,
                            i = t.y,
                            n = window.devicePixelRatio || 1;
                        return {
                            x: se(se(e * n) / n) || 0,
                            y: se(se(i * n) / n) || 0
                        }
                    }(r) : "function" == typeof h ? h(r) : r,
                    u = d.x,
                    f = void 0 === u ? 0 : u,
                    p = d.y,
                    m = void 0 === p ? 0 : p,
                    g = r.hasOwnProperty("x"),
                    _ = r.hasOwnProperty("y"),
                    b = bt,
                    v = mt,
                    y = window;
                if (c) {
                    var w = te(i),
                        E = "clientHeight",
                        A = "clientWidth";
                    w === Wt(i) && "static" !== Yt(w = Gt(i)).position && "absolute" === a && (E = "scrollHeight",
                            A = "scrollWidth"), w = w, s !== mt && (s !== bt && s !== _t || o !== Et) || (v = gt,
                            m -= w[E] - n.height, m *= l ? 1 : -1), s !== bt && (s !== mt && s !== gt || o !==
                        Et) || (b = _t, f -= w[A] - n.width, f *= l ? 1 : -1)
                }
                var T, O = Object.assign({
                    position: a
                }, c && he);
                return l ? Object.assign({}, O, ((T = {})[v] = _ ? "0" : "", T[b] = g ? "0" : "", T.transform = (y
                        .devicePixelRatio || 1) <= 1 ? "translate(" + f + "px, " + m + "px)" :
                    "translate3d(" + f + "px, " + m + "px, 0)", T)) : Object.assign({}, O, ((e = {})[v] = _ ?
                    m + "px" : "", e[b] = g ? f + "px" : "", e.transform = "", e))
            }
            const ue = {
                name: "computeStyles",
                enabled: !0,
                phase: "beforeWrite",
                fn: function(t) {
                    var e = t.state,
                        i = t.options,
                        n = i.gpuAcceleration,
                        s = void 0 === n || n,
                        o = i.adaptive,
                        r = void 0 === o || o,
                        a = i.roundOffsets,
                        l = void 0 === a || a,
                        c = {
                            placement: Ut(e.placement),
                            variation: ce(e.placement),
                            popper: e.elements.popper,
                            popperRect: e.rects.popper,
                            gpuAcceleration: s
                        };
                    null != e.modifiersData.popperOffsets && (e.styles.popper = Object.assign({}, e.styles
                        .popper, de(Object.assign({}, c, {
                            offsets: e.modifiersData.popperOffsets,
                            position: e.options.strategy,
                            adaptive: r,
                            roundOffsets: l
                        })))), null != e.modifiersData.arrow && (e.styles.arrow = Object.assign({}, e
                        .styles.arrow, de(Object.assign({}, c, {
                            offsets: e.modifiersData.arrow,
                            position: "absolute",
                            adaptive: !1,
                            roundOffsets: l
                        })))), e.attributes.popper = Object.assign({}, e.attributes.popper, {
                        "data-popper-placement": e.placement
                    })
                },
                data: {}
            };
            var fe = {
                passive: !0
            };
            const pe = {
                name: "eventListeners",
                enabled: !0,
                phase: "write",
                fn: function() {},
                effect: function(t) {
                    var e = t.state,
                        i = t.instance,
                        n = t.options,
                        s = n.scroll,
                        o = void 0 === s || s,
                        r = n.resize,
                        a = void 0 === r || r,
                        l = Wt(e.elements.popper),
                        c = [].concat(e.scrollParents.reference, e.scrollParents.popper);
                    return o && c.forEach((function(t) {
                            t.addEventListener("scroll", i.update, fe)
                        })), a && l.addEventListener("resize", i.update, fe),
                        function() {
                            o && c.forEach((function(t) {
                                t.removeEventListener("scroll", i.update, fe)
                            })), a && l.removeEventListener("resize", i.update, fe)
                        }
                },
                data: {}
            };
            var me = {
                left: "right",
                right: "left",
                bottom: "top",
                top: "bottom"
            };

            function ge(t) {
                return t.replace(/left|right|bottom|top/g, (function(t) {
                    return me[t]
                }))
            }
            var _e = {
                start: "end",
                end: "start"
            };

            function be(t) {
                return t.replace(/start|end/g, (function(t) {
                    return _e[t]
                }))
            }

            function ve(t) {
                var e = Wt(t);
                return {
                    scrollLeft: e.pageXOffset,
                    scrollTop: e.pageYOffset
                }
            }

            function ye(t) {
                return Vt(Gt(t)).left + ve(t).scrollLeft
            }

            function we(t) {
                var e = Yt(t),
                    i = e.overflow,
                    n = e.overflowX,
                    s = e.overflowY;
                return /auto|scroll|overlay|hidden/.test(i + s + n)
            }

            function Ee(t) {
                return ["html", "body", "#document"].indexOf(Rt(t)) >= 0 ? t.ownerDocument.body : zt(t) && we(t) ?
                    t : Ee(Zt(t))
            }

            function Ae(t, e) {
                var i;
                void 0 === e && (e = []);
                var n = Ee(t),
                    s = n === (null == (i = t.ownerDocument) ? void 0 : i.body),
                    o = Wt(n),
                    r = s ? [o].concat(o.visualViewport || [], we(n) ? n : []) : n,
                    a = e.concat(r);
                return s ? a : a.concat(Ae(Zt(r)))
            }

            function Te(t) {
                return Object.assign({}, t, {
                    left: t.x,
                    top: t.y,
                    right: t.x + t.width,
                    bottom: t.y + t.height
                })
            }

            function Oe(t, e) {
                return e === Tt ? Te(function(t) {
                    var e = Wt(t),
                        i = Gt(t),
                        n = e.visualViewport,
                        s = i.clientWidth,
                        o = i.clientHeight,
                        r = 0,
                        a = 0;
                    return n && (s = n.width, o = n.height, /^((?!chrome|android).)*safari/i.test(navigator
                        .userAgent) || (r = n.offsetLeft, a = n.offsetTop)), {
                        width: s,
                        height: o,
                        x: r + ye(t),
                        y: a
                    }
                }(t)) : zt(e) ? function(t) {
                    var e = Vt(t);
                    return e.top = e.top + t.clientTop, e.left = e.left + t.clientLeft, e.bottom = e.top + t
                        .clientHeight, e.right = e.left + t.clientWidth, e.width = t.clientWidth, e.height = t
                        .clientHeight, e.x = e.left, e.y = e.top, e
                }(e) : Te(function(t) {
                    var e, i = Gt(t),
                        n = ve(t),
                        s = null == (e = t.ownerDocument) ? void 0 : e.body,
                        o = ie(i.scrollWidth, i.clientWidth, s ? s.scrollWidth : 0, s ? s.clientWidth : 0),
                        r = ie(i.scrollHeight, i.clientHeight, s ? s.scrollHeight : 0, s ? s.clientHeight :
                            0),
                        a = -n.scrollLeft + ye(t),
                        l = -n.scrollTop;
                    return "rtl" === Yt(s || i).direction && (a += ie(i.clientWidth, s ? s.clientWidth :
                        0) - o), {
                        width: o,
                        height: r,
                        x: a,
                        y: l
                    }
                }(Gt(t)))
            }

            function Ce(t) {
                var e, i = t.reference,
                    n = t.element,
                    s = t.placement,
                    o = s ? Ut(s) : null,
                    r = s ? ce(s) : null,
                    a = i.x + i.width / 2 - n.width / 2,
                    l = i.y + i.height / 2 - n.height / 2;
                switch (o) {
                    case mt:
                        e = {
                            x: a,
                            y: i.y - n.height
                        };
                        break;
                    case gt:
                        e = {
                            x: a,
                            y: i.y + i.height
                        };
                        break;
                    case _t:
                        e = {
                            x: i.x + i.width,
                            y: l
                        };
                        break;
                    case bt:
                        e = {
                            x: i.x - n.width,
                            y: l
                        };
                        break;
                    default:
                        e = {
                            x: i.x,
                            y: i.y
                        }
                }
                var c = o ? ee(o) : null;
                if (null != c) {
                    var h = "y" === c ? "height" : "width";
                    switch (r) {
                        case wt:
                            e[c] = e[c] - (i[h] / 2 - n[h] / 2);
                            break;
                        case Et:
                            e[c] = e[c] + (i[h] / 2 - n[h] / 2)
                    }
                }
                return e
            }

            function ke(t, e) {
                void 0 === e && (e = {});
                var i = e,
                    n = i.placement,
                    s = void 0 === n ? t.placement : n,
                    o = i.boundary,
                    r = void 0 === o ? At : o,
                    a = i.rootBoundary,
                    l = void 0 === a ? Tt : a,
                    c = i.elementContext,
                    h = void 0 === c ? Ot : c,
                    d = i.altBoundary,
                    u = void 0 !== d && d,
                    f = i.padding,
                    p = void 0 === f ? 0 : f,
                    m = re("number" != typeof p ? p : ae(p, yt)),
                    g = h === Ot ? Ct : Ot,
                    _ = t.rects.popper,
                    b = t.elements[u ? g : h],
                    v = function(t, e, i) {
                        var n = "clippingParents" === e ? function(t) {
                                var e = Ae(Zt(t)),
                                    i = ["absolute", "fixed"].indexOf(Yt(t).position) >= 0 && zt(t) ? te(t) : t;
                                return $t(i) ? e.filter((function(t) {
                                    return $t(t) && Xt(t, i) && "body" !== Rt(t)
                                })) : []
                            }(t) : [].concat(e),
                            s = [].concat(n, [i]),
                            o = s[0],
                            r = s.reduce((function(e, i) {
                                var n = Oe(t, i);
                                return e.top = ie(n.top, e.top), e.right = ne(n.right, e.right), e.bottom =
                                    ne(n.bottom, e.bottom), e.left = ie(n.left, e.left), e
                            }), Oe(t, o));
                        return r.width = r.right - r.left, r.height = r.bottom - r.top, r.x = r.left, r.y = r.top, r
                    }($t(b) ? b : b.contextElement || Gt(t.elements.popper), r, l),
                    y = Vt(t.elements.reference),
                    w = Ce({
                        reference: y,
                        element: _,
                        strategy: "absolute",
                        placement: s
                    }),
                    E = Te(Object.assign({}, _, w)),
                    A = h === Ot ? E : y,
                    T = {
                        top: v.top - A.top + m.top,
                        bottom: A.bottom - v.bottom + m.bottom,
                        left: v.left - A.left + m.left,
                        right: A.right - v.right + m.right
                    },
                    O = t.modifiersData.offset;
                if (h === Ot && O) {
                    var C = O[s];
                    Object.keys(T).forEach((function(t) {
                        var e = [_t, gt].indexOf(t) >= 0 ? 1 : -1,
                            i = [mt, gt].indexOf(t) >= 0 ? "y" : "x";
                        T[t] += C[i] * e
                    }))
                }
                return T
            }

            function Le(t, e) {
                void 0 === e && (e = {});
                var i = e,
                    n = i.placement,
                    s = i.boundary,
                    o = i.rootBoundary,
                    r = i.padding,
                    a = i.flipVariations,
                    l = i.allowedAutoPlacements,
                    c = void 0 === l ? Lt : l,
                    h = ce(n),
                    d = h ? a ? kt : kt.filter((function(t) {
                        return ce(t) === h
                    })) : yt,
                    u = d.filter((function(t) {
                        return c.indexOf(t) >= 0
                    }));
                0 === u.length && (u = d);
                var f = u.reduce((function(e, i) {
                    return e[i] = ke(t, {
                        placement: i,
                        boundary: s,
                        rootBoundary: o,
                        padding: r
                    })[Ut(i)], e
                }), {});
                return Object.keys(f).sort((function(t, e) {
                    return f[t] - f[e]
                }))
            }
            const xe = {
                name: "flip",
                enabled: !0,
                phase: "main",
                fn: function(t) {
                    var e = t.state,
                        i = t.options,
                        n = t.name;
                    if (!e.modifiersData[n]._skip) {
                        for (var s = i.mainAxis, o = void 0 === s || s, r = i.altAxis, a = void 0 === r ||
                                r, l = i.fallbackPlacements, c = i.padding, h = i.boundary, d = i
                                .rootBoundary, u = i.altBoundary, f = i.flipVariations, p = void 0 === f ||
                                f, m = i.allowedAutoPlacements, g = e.options.placement, _ = Ut(g), b = l ||
                                (_ !== g && p ? function(t) {
                                    if (Ut(t) === vt) return [];
                                    var e = ge(t);
                                    return [be(t), e, be(e)]
                                }(g) : [ge(g)]), v = [g].concat(b).reduce((function(t, i) {
                                    return t.concat(Ut(i) === vt ? Le(e, {
                                        placement: i,
                                        boundary: h,
                                        rootBoundary: d,
                                        padding: c,
                                        flipVariations: p,
                                        allowedAutoPlacements: m
                                    }) : i)
                                }), []), y = e.rects.reference, w = e.rects.popper, E = new Map, A = !0, T =
                                v[0], O = 0; O < v.length; O++) {
                            var C = v[O],
                                k = Ut(C),
                                L = ce(C) === wt,
                                x = [mt, gt].indexOf(k) >= 0,
                                D = x ? "width" : "height",
                                S = ke(e, {
                                    placement: C,
                                    boundary: h,
                                    rootBoundary: d,
                                    altBoundary: u,
                                    padding: c
                                }),
                                N = x ? L ? _t : bt : L ? gt : mt;
                            y[D] > w[D] && (N = ge(N));
                            var I = ge(N),
                                P = [];
                            if (o && P.push(S[k] <= 0), a && P.push(S[N] <= 0, S[I] <= 0), P.every((
                                    function(t) {
                                        return t
                                    }))) {
                                T = C, A = !1;
                                break
                            }
                            E.set(C, P)
                        }
                        if (A)
                            for (var j = function(t) {
                                    var e = v.find((function(e) {
                                        var i = E.get(e);
                                        if (i) return i.slice(0, t).every((function(t) {
                                            return t
                                        }))
                                    }));
                                    if (e) return T = e, "break"
                                }, M = p ? 3 : 1; M > 0 && "break" !== j(M); M--);
                        e.placement !== T && (e.modifiersData[n]._skip = !0, e.placement = T, e.reset = !0)
                    }
                },
                requiresIfExists: ["offset"],
                data: {
                    _skip: !1
                }
            };

            function De(t, e, i) {
                return void 0 === i && (i = {
                    x: 0,
                    y: 0
                }), {
                    top: t.top - e.height - i.y,
                    right: t.right - e.width + i.x,
                    bottom: t.bottom - e.height + i.y,
                    left: t.left - e.width - i.x
                }
            }

            function Se(t) {
                return [mt, _t, gt, bt].some((function(e) {
                    return t[e] >= 0
                }))
            }
            const Ne = {
                    name: "hide",
                    enabled: !0,
                    phase: "main",
                    requiresIfExists: ["preventOverflow"],
                    fn: function(t) {
                        var e = t.state,
                            i = t.name,
                            n = e.rects.reference,
                            s = e.rects.popper,
                            o = e.modifiersData.preventOverflow,
                            r = ke(e, {
                                elementContext: "reference"
                            }),
                            a = ke(e, {
                                altBoundary: !0
                            }),
                            l = De(r, n),
                            c = De(a, s, o),
                            h = Se(l),
                            d = Se(c);
                        e.modifiersData[i] = {
                            referenceClippingOffsets: l,
                            popperEscapeOffsets: c,
                            isReferenceHidden: h,
                            hasPopperEscaped: d
                        }, e.attributes.popper = Object.assign({}, e.attributes.popper, {
                            "data-popper-reference-hidden": h,
                            "data-popper-escaped": d
                        })
                    }
                },
                Ie = {
                    name: "offset",
                    enabled: !0,
                    phase: "main",
                    requires: ["popperOffsets"],
                    fn: function(t) {
                        var e = t.state,
                            i = t.options,
                            n = t.name,
                            s = i.offset,
                            o = void 0 === s ? [0, 0] : s,
                            r = Lt.reduce((function(t, i) {
                                return t[i] = function(t, e, i) {
                                    var n = Ut(t),
                                        s = [bt, mt].indexOf(n) >= 0 ? -1 : 1,
                                        o = "function" == typeof i ? i(Object.assign({}, e, {
                                            placement: t
                                        })) : i,
                                        r = o[0],
                                        a = o[1];
                                    return r = r || 0, a = (a || 0) * s, [bt, _t].indexOf(n) >= 0 ?
                                    {
                                        x: a,
                                        y: r
                                    } : {
                                        x: r,
                                        y: a
                                    }
                                }(i, e.rects, o), t
                            }), {}),
                            a = r[e.placement],
                            l = a.x,
                            c = a.y;
                        null != e.modifiersData.popperOffsets && (e.modifiersData.popperOffsets.x += l, e
                            .modifiersData.popperOffsets.y += c), e.modifiersData[n] = r
                    }
                },
                Pe = {
                    name: "popperOffsets",
                    enabled: !0,
                    phase: "read",
                    fn: function(t) {
                        var e = t.state,
                            i = t.name;
                        e.modifiersData[i] = Ce({
                            reference: e.rects.reference,
                            element: e.rects.popper,
                            strategy: "absolute",
                            placement: e.placement
                        })
                    },
                    data: {}
                },
                je = {
                    name: "preventOverflow",
                    enabled: !0,
                    phase: "main",
                    fn: function(t) {
                        var e = t.state,
                            i = t.options,
                            n = t.name,
                            s = i.mainAxis,
                            o = void 0 === s || s,
                            r = i.altAxis,
                            a = void 0 !== r && r,
                            l = i.boundary,
                            c = i.rootBoundary,
                            h = i.altBoundary,
                            d = i.padding,
                            u = i.tether,
                            f = void 0 === u || u,
                            p = i.tetherOffset,
                            m = void 0 === p ? 0 : p,
                            g = ke(e, {
                                boundary: l,
                                rootBoundary: c,
                                padding: d,
                                altBoundary: h
                            }),
                            _ = Ut(e.placement),
                            b = ce(e.placement),
                            v = !b,
                            y = ee(_),
                            w = "x" === y ? "y" : "x",
                            E = e.modifiersData.popperOffsets,
                            A = e.rects.reference,
                            T = e.rects.popper,
                            O = "function" == typeof m ? m(Object.assign({}, e.rects, {
                                placement: e.placement
                            })) : m,
                            C = {
                                x: 0,
                                y: 0
                            };
                        if (E) {
                            if (o || a) {
                                var k = "y" === y ? mt : bt,
                                    L = "y" === y ? gt : _t,
                                    x = "y" === y ? "height" : "width",
                                    D = E[y],
                                    S = E[y] + g[k],
                                    N = E[y] - g[L],
                                    I = f ? -T[x] / 2 : 0,
                                    P = b === wt ? A[x] : T[x],
                                    j = b === wt ? -T[x] : -A[x],
                                    M = e.elements.arrow,
                                    H = f && M ? Kt(M) : {
                                        width: 0,
                                        height: 0
                                    },
                                    B = e.modifiersData["arrow#persistent"] ? e.modifiersData[
                                        "arrow#persistent"].padding : {
                                        top: 0,
                                        right: 0,
                                        bottom: 0,
                                        left: 0
                                    },
                                    R = B[k],
                                    W = B[L],
                                    $ = oe(0, A[x], H[x]),
                                    z = v ? A[x] / 2 - I - $ - R - O : P - $ - R - O,
                                    q = v ? -A[x] / 2 + I + $ + W + O : j + $ + W + O,
                                    F = e.elements.arrow && te(e.elements.arrow),
                                    U = F ? "y" === y ? F.clientTop || 0 : F.clientLeft || 0 : 0,
                                    V = e.modifiersData.offset ? e.modifiersData.offset[e.placement][y] : 0,
                                    K = E[y] + z - V - U,
                                    X = E[y] + q - V;
                                if (o) {
                                    var Y = oe(f ? ne(S, K) : S, D, f ? ie(N, X) : N);
                                    E[y] = Y, C[y] = Y - D
                                }
                                if (a) {
                                    var Q = "x" === y ? mt : bt,
                                        G = "x" === y ? gt : _t,
                                        Z = E[w],
                                        J = Z + g[Q],
                                        tt = Z - g[G],
                                        et = oe(f ? ne(J, K) : J, Z, f ? ie(tt, X) : tt);
                                    E[w] = et, C[w] = et - Z
                                }
                            }
                            e.modifiersData[n] = C
                        }
                    },
                    requiresIfExists: ["offset"]
                };

            function Me(t, e, i) {
                void 0 === i && (i = !1);
                var n = zt(e);
                zt(e) && function(t) {
                    var e = t.getBoundingClientRect();
                    e.width, t.offsetWidth, e.height, t.offsetHeight
                }(e);
                var s, o, r = Gt(e),
                    a = Vt(t),
                    l = {
                        scrollLeft: 0,
                        scrollTop: 0
                    },
                    c = {
                        x: 0,
                        y: 0
                    };
                return (n || !n && !i) && (("body" !== Rt(e) || we(r)) && (l = (s = e) !== Wt(s) && zt(s) ? {
                        scrollLeft: (o = s).scrollLeft,
                        scrollTop: o.scrollTop
                    } : ve(s)), zt(e) ? ((c = Vt(e)).x += e.clientLeft, c.y += e.clientTop) : r && (c.x = ye(
                    r))), {
                    x: a.left + l.scrollLeft - c.x,
                    y: a.top + l.scrollTop - c.y,
                    width: a.width,
                    height: a.height
                }
            }

            function He(t) {
                var e = new Map,
                    i = new Set,
                    n = [];

                function s(t) {
                    i.add(t.name), [].concat(t.requires || [], t.requiresIfExists || []).forEach((function(t) {
                        if (!i.has(t)) {
                            var n = e.get(t);
                            n && s(n)
                        }
                    })), n.push(t)
                }
                return t.forEach((function(t) {
                    e.set(t.name, t)
                })), t.forEach((function(t) {
                    i.has(t.name) || s(t)
                })), n
            }
            var Be = {
                placement: "bottom",
                modifiers: [],
                strategy: "absolute"
            };

            function Re() {
                for (var t = arguments.length, e = new Array(t), i = 0; i < t; i++) e[i] = arguments[i];
                return !e.some((function(t) {
                    return !(t && "function" == typeof t.getBoundingClientRect)
                }))
            }

            function We(t) {
                void 0 === t && (t = {});
                var e = t,
                    i = e.defaultModifiers,
                    n = void 0 === i ? [] : i,
                    s = e.defaultOptions,
                    o = void 0 === s ? Be : s;
                return function(t, e, i) {
                    void 0 === i && (i = o);
                    var s, r, a = {
                            placement: "bottom",
                            orderedModifiers: [],
                            options: Object.assign({}, Be, o),
                            modifiersData: {},
                            elements: {
                                reference: t,
                                popper: e
                            },
                            attributes: {},
                            styles: {}
                        },
                        l = [],
                        c = !1,
                        h = {
                            state: a,
                            setOptions: function(i) {
                                var s = "function" == typeof i ? i(a.options) : i;
                                d(), a.options = Object.assign({}, o, a.options, s), a.scrollParents = {
                                    reference: $t(t) ? Ae(t) : t.contextElement ? Ae(t.contextElement) :
                                        [],
                                    popper: Ae(e)
                                };
                                var r, c, u = function(t) {
                                    var e = He(t);
                                    return Bt.reduce((function(t, i) {
                                        return t.concat(e.filter((function(t) {
                                            return t.phase === i
                                        })))
                                    }), [])
                                }((r = [].concat(n, a.options.modifiers), c = r.reduce((function(t, e) {
                                    var i = t[e.name];
                                    return t[e.name] = i ? Object.assign({}, i, e, {
                                        options: Object.assign({}, i.options, e
                                            .options),
                                        data: Object.assign({}, i.data, e.data)
                                    }) : e, t
                                }), {}), Object.keys(c).map((function(t) {
                                    return c[t]
                                }))));
                                return a.orderedModifiers = u.filter((function(t) {
                                    return t.enabled
                                })), a.orderedModifiers.forEach((function(t) {
                                    var e = t.name,
                                        i = t.options,
                                        n = void 0 === i ? {} : i,
                                        s = t.effect;
                                    if ("function" == typeof s) {
                                        var o = s({
                                            state: a,
                                            name: e,
                                            instance: h,
                                            options: n
                                        });
                                        l.push(o || function() {})
                                    }
                                })), h.update()
                            },
                            forceUpdate: function() {
                                if (!c) {
                                    var t = a.elements,
                                        e = t.reference,
                                        i = t.popper;
                                    if (Re(e, i)) {
                                        a.rects = {
                                                reference: Me(e, te(i), "fixed" === a.options.strategy),
                                                popper: Kt(i)
                                            }, a.reset = !1, a.placement = a.options.placement, a
                                            .orderedModifiers.forEach((function(t) {
                                                return a.modifiersData[t.name] = Object.assign({}, t
                                                    .data)
                                            }));
                                        for (var n = 0; n < a.orderedModifiers.length; n++)
                                            if (!0 !== a.reset) {
                                                var s = a.orderedModifiers[n],
                                                    o = s.fn,
                                                    r = s.options,
                                                    l = void 0 === r ? {} : r,
                                                    d = s.name;
                                                "function" == typeof o && (a = o({
                                                    state: a,
                                                    options: l,
                                                    name: d,
                                                    instance: h
                                                }) || a)
                                            } else a.reset = !1, n = -1
                                    }
                                }
                            },
                            update: (s = function() {
                                return new Promise((function(t) {
                                    h.forceUpdate(), t(a)
                                }))
                            }, function() {
                                return r || (r = new Promise((function(t) {
                                    Promise.resolve().then((function() {
                                        r = void 0, t(s())
                                    }))
                                }))), r
                            }),
                            destroy: function() {
                                d(), c = !0
                            }
                        };
                    if (!Re(t, e)) return h;

                    function d() {
                        l.forEach((function(t) {
                            return t()
                        })), l = []
                    }
                    return h.setOptions(i).then((function(t) {
                        !c && i.onFirstUpdate && i.onFirstUpdate(t)
                    })), h
                }
            }
            var $e = We(),
                ze = We({
                    defaultModifiers: [pe, Pe, ue, Ft]
                }),
                qe = We({
                    defaultModifiers: [pe, Pe, ue, Ft, Ie, xe, je, le, Ne]
                });
            const Fe = Object.freeze({
                    __proto__: null,
                    popperGenerator: We,
                    detectOverflow: ke,
                    createPopperBase: $e,
                    createPopper: qe,
                    createPopperLite: ze,
                    top: mt,
                    bottom: gt,
                    right: _t,
                    left: bt,
                    auto: vt,
                    basePlacements: yt,
                    start: wt,
                    end: Et,
                    clippingParents: At,
                    viewport: Tt,
                    popper: Ot,
                    reference: Ct,
                    variationPlacements: kt,
                    placements: Lt,
                    beforeRead: xt,
                    read: Dt,
                    afterRead: St,
                    beforeMain: Nt,
                    main: It,
                    afterMain: Pt,
                    beforeWrite: jt,
                    write: Mt,
                    afterWrite: Ht,
                    modifierPhases: Bt,
                    applyStyles: Ft,
                    arrow: le,
                    computeStyles: ue,
                    eventListeners: pe,
                    flip: xe,
                    hide: Ne,
                    offset: Ie,
                    popperOffsets: Pe,
                    preventOverflow: je
                }),
                Ue = "dropdown",
                Ve = "Escape",
                Ke = "Space",
                Xe = "ArrowUp",
                Ye = "ArrowDown",
                Qe = new RegExp("ArrowUp|ArrowDown|Escape"),
                Ge = "click.bs.dropdown.data-api",
                Ze = "keydown.bs.dropdown.data-api",
                Je = "show",
                ti = '[data-bs-toggle="dropdown"]',
                ei = ".dropdown-menu",
                ii = m() ? "top-end" : "top-start",
                ni = m() ? "top-start" : "top-end",
                si = m() ? "bottom-end" : "bottom-start",
                oi = m() ? "bottom-start" : "bottom-end",
                ri = m() ? "left-start" : "right-start",
                ai = m() ? "right-start" : "left-start",
                li = {
                    offset: [0, 2],
                    boundary: "clippingParents",
                    reference: "toggle",
                    display: "dynamic",
                    popperConfig: null,
                    autoClose: !0
                },
                ci = {
                    offset: "(array|string|function)",
                    boundary: "(string|element)",
                    reference: "(string|element|object)",
                    display: "string",
                    popperConfig: "(null|object|function)",
                    autoClose: "(boolean|string)"
                };
            class hi extends B {
                constructor(t, e) {
                    super(t), this._popper = null, this._config = this._getConfig(e), this._menu = this
                        ._getMenuElement(), this._inNavbar = this._detectNavbar()
                }
                static get Default() {
                    return li
                }
                static get DefaultType() {
                    return ci
                }
                static get NAME() {
                    return Ue
                }
                toggle() {
                    return this._isShown() ? this.hide() : this.show()
                }
                show() {
                    if (c(this._element) || this._isShown(this._menu)) return;
                    const t = {
                        relatedTarget: this._element
                    };
                    if (j.trigger(this._element, "show.bs.dropdown", t).defaultPrevented) return;
                    const e = hi.getParentFromElement(this._element);
                    this._inNavbar ? U.setDataAttribute(this._menu, "popper", "none") : this._createPopper(e),
                        "ontouchstart" in document.documentElement && !e.closest(".navbar-nav") && [].concat(...
                            document.body.children).forEach((t => j.on(t, "mouseover", d))), this._element
                        .focus(), this._element.setAttribute("aria-expanded", !0), this._menu.classList.add(Je),
                        this._element.classList.add(Je), j.trigger(this._element, "shown.bs.dropdown", t)
                }
                hide() {
                    if (c(this._element) || !this._isShown(this._menu)) return;
                    const t = {
                        relatedTarget: this._element
                    };
                    this._completeHide(t)
                }
                dispose() {
                    this._popper && this._popper.destroy(), super.dispose()
                }
                update() {
                    this._inNavbar = this._detectNavbar(), this._popper && this._popper.update()
                }
                _completeHide(t) {
                    j.trigger(this._element, "hide.bs.dropdown", t).defaultPrevented || ("ontouchstart" in
                        document.documentElement && [].concat(...document.body.children).forEach((t => j
                            .off(t, "mouseover", d))), this._popper && this._popper.destroy(), this._menu
                        .classList.remove(Je), this._element.classList.remove(Je), this._element
                        .setAttribute("aria-expanded", "false"), U.removeDataAttribute(this._menu,
                        "popper"), j.trigger(this._element, "hidden.bs.dropdown", t))
                }
                _getConfig(t) {
                    if (t = {
                            ...this.constructor.Default,
                            ...U.getDataAttributes(this._element),
                            ...t
                        }, a(Ue, t, this.constructor.DefaultType), "object" == typeof t.reference && !o(t
                            .reference) && "function" != typeof t.reference.getBoundingClientRect)
                    throw new TypeError(
                            `${Ue.toUpperCase()}: Option "reference" provided type "object" without a required "getBoundingClientRect" method.`
                            );
                    return t
                }
                _createPopper(t) {
                    if (void 0 === Fe) throw new TypeError(
                        "Bootstrap's dropdowns require Popper (https://popper.js.org)");
                    let e = this._element;
                    "parent" === this._config.reference ? e = t : o(this._config.reference) ? e = r(this._config
                        .reference) : "object" == typeof this._config.reference && (e = this._config
                        .reference);
                    const i = this._getPopperConfig(),
                        n = i.modifiers.find((t => "applyStyles" === t.name && !1 === t.enabled));
                    this._popper = qe(e, this._menu, i), n && U.setDataAttribute(this._menu, "popper", "static")
                }
                _isShown(t = this._element) {
                    return t.classList.contains(Je)
                }
                _getMenuElement() {
                    return V.next(this._element, ei)[0]
                }
                _getPlacement() {
                    const t = this._element.parentNode;
                    if (t.classList.contains("dropend")) return ri;
                    if (t.classList.contains("dropstart")) return ai;
                    const e = "end" === getComputedStyle(this._menu).getPropertyValue("--bs-position").trim();
                    return t.classList.contains("dropup") ? e ? ni : ii : e ? oi : si
                }
                _detectNavbar() {
                    return null !== this._element.closest(".navbar")
                }
                _getOffset() {
                    const {
                        offset: t
                    } = this._config;
                    return "string" == typeof t ? t.split(",").map((t => Number.parseInt(t, 10))) :
                        "function" == typeof t ? e => t(e, this._element) : t
                }
                _getPopperConfig() {
                    const t = {
                        placement: this._getPlacement(),
                        modifiers: [{
                            name: "preventOverflow",
                            options: {
                                boundary: this._config.boundary
                            }
                        }, {
                            name: "offset",
                            options: {
                                offset: this._getOffset()
                            }
                        }]
                    };
                    return "static" === this._config.display && (t.modifiers = [{
                        name: "applyStyles",
                        enabled: !1
                    }]), {
                        ...t,
                        ..."function" == typeof this._config.popperConfig ? this._config.popperConfig(t) :
                        this._config.popperConfig
                    }
                }
                _selectMenuItem({
                    key: t,
                    target: e
                }) {
                    const i = V.find(".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)", this._menu)
                        .filter(l);
                    i.length && v(i, e, t === Ye, !i.includes(e)).focus()
                }
                static jQueryInterface(t) {
                    return this.each((function() {
                        const e = hi.getOrCreateInstance(this, t);
                        if ("string" == typeof t) {
                            if (void 0 === e[t]) throw new TypeError(`No method named "${t}"`);
                            e[t]()
                        }
                    }))
                }
                static clearMenus(t) {
                    if (t && (2 === t.button || "keyup" === t.type && "Tab" !== t.key)) return;
                    const e = V.find(ti);
                    for (let i = 0, n = e.length; i < n; i++) {
                        const n = hi.getInstance(e[i]);
                        if (!n || !1 === n._config.autoClose) continue;
                        if (!n._isShown()) continue;
                        const s = {
                            relatedTarget: n._element
                        };
                        if (t) {
                            const e = t.composedPath(),
                                i = e.includes(n._menu);
                            if (e.includes(n._element) || "inside" === n._config.autoClose && !i ||
                                "outside" === n._config.autoClose && i) continue;
                            if (n._menu.contains(t.target) && ("keyup" === t.type && "Tab" === t.key ||
                                    /input|select|option|textarea|form/i.test(t.target.tagName))) continue;
                            "click" === t.type && (s.clickEvent = t)
                        }
                        n._completeHide(s)
                    }
                }
                static getParentFromElement(t) {
                    return n(t) || t.parentNode
                }
                static dataApiKeydownHandler(t) {
                    if (/input|textarea/i.test(t.target.tagName) ? t.key === Ke || t.key !== Ve && (t.key !==
                            Ye && t.key !== Xe || t.target.closest(ei)) : !Qe.test(t.key)) return;
                    const e = this.classList.contains(Je);
                    if (!e && t.key === Ve) return;
                    if (t.preventDefault(), t.stopPropagation(), c(this)) return;
                    const i = this.matches(ti) ? this : V.prev(this, ti)[0],
                        n = hi.getOrCreateInstance(i);
                    if (t.key !== Ve) return t.key === Xe || t.key === Ye ? (e || n.show(), void n
                        ._selectMenuItem(t)) : void(e && t.key !== Ke || hi.clearMenus());
                    n.hide()
                }
            }
            j.on(document, Ze, ti, hi.dataApiKeydownHandler), j.on(document, Ze, ei, hi.dataApiKeydownHandler), j
                .on(document, Ge, hi.clearMenus), j.on(document, "keyup.bs.dropdown.data-api", hi.clearMenus), j.on(
                    document, Ge, ti, (function(t) {
                        t.preventDefault(), hi.getOrCreateInstance(this).toggle()
                    })), g(hi);
            const di = ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",
                ui = ".sticky-top";
            class fi {
                constructor() {
                    this._element = document.body
                }
                getWidth() {
                    const t = document.documentElement.clientWidth;
                    return Math.abs(window.innerWidth - t)
                }
                hide() {
                    const t = this.getWidth();
                    this._disableOverFlow(), this._setElementAttributes(this._element, "paddingRight", (e => e +
                            t)), this._setElementAttributes(di, "paddingRight", (e => e + t)), this
                        ._setElementAttributes(ui, "marginRight", (e => e - t))
                }
                _disableOverFlow() {
                    this._saveInitialAttribute(this._element, "overflow"), this._element.style.overflow =
                        "hidden"
                }
                _setElementAttributes(t, e, i) {
                    const n = this.getWidth();
                    this._applyManipulationCallback(t, (t => {
                        if (t !== this._element && window.innerWidth > t.clientWidth + n) return;
                        this._saveInitialAttribute(t, e);
                        const s = window.getComputedStyle(t)[e];
                        t.style[e] = `${i(Number.parseFloat(s))}px`
                    }))
                }
                reset() {
                    this._resetElementAttributes(this._element, "overflow"), this._resetElementAttributes(this
                            ._element, "paddingRight"), this._resetElementAttributes(di, "paddingRight"), this
                        ._resetElementAttributes(ui, "marginRight")
                }
                _saveInitialAttribute(t, e) {
                    const i = t.style[e];
                    i && U.setDataAttribute(t, e, i)
                }
                _resetElementAttributes(t, e) {
                    this._applyManipulationCallback(t, (t => {
                        const i = U.getDataAttribute(t, e);
                        void 0 === i ? t.style.removeProperty(e) : (U.removeDataAttribute(t, e), t
                            .style[e] = i)
                    }))
                }
                _applyManipulationCallback(t, e) {
                    o(t) ? e(t) : V.find(t, this._element).forEach(e)
                }
                isOverflowing() {
                    return this.getWidth() > 0
                }
            }
            const pi = {
                    className: "modal-backdrop",
                    isVisible: !0,
                    isAnimated: !1,
                    rootElement: "body",
                    clickCallback: null
                },
                mi = {
                    className: "string",
                    isVisible: "boolean",
                    isAnimated: "boolean",
                    rootElement: "(element|string)",
                    clickCallback: "(function|null)"
                },
                gi = "show",
                _i = "mousedown.bs.backdrop";
            class bi {
                constructor(t) {
                    this._config = this._getConfig(t), this._isAppended = !1, this._element = null
                }
                show(t) {
                    this._config.isVisible ? (this._append(), this._config.isAnimated && u(this._getElement()),
                        this._getElement().classList.add(gi), this._emulateAnimation((() => {
                            _(t)
                        }))) : _(t)
                }
                hide(t) {
                    this._config.isVisible ? (this._getElement().classList.remove(gi), this._emulateAnimation((
                    () => {
                        this.dispose(), _(t)
                    }))) : _(t)
                }
                _getElement() {
                    if (!this._element) {
                        const t = document.createElement("div");
                        t.className = this._config.className, this._config.isAnimated && t.classList.add(
                            "fade"), this._element = t
                    }
                    return this._element
                }
                _getConfig(t) {
                    return (t = {
                        ...pi,
                        ..."object" == typeof t ? t : {}
                    }).rootElement = r(t.rootElement), a("backdrop", t, mi), t
                }
                _append() {
                    this._isAppended || (this._config.rootElement.append(this._getElement()), j.on(this
                        ._getElement(), _i, (() => {
                            _(this._config.clickCallback)
                        })), this._isAppended = !0)
                }
                dispose() {
                    this._isAppended && (j.off(this._element, _i), this._element.remove(), this._isAppended = !
                        1)
                }
                _emulateAnimation(t) {
                    b(t, this._getElement(), this._config.isAnimated)
                }
            }
            const vi = {
                    trapElement: null,
                    autofocus: !0
                },
                yi = {
                    trapElement: "element",
                    autofocus: "boolean"
                },
                wi = ".bs.focustrap",
                Ei = "backward";
            class Ai {
                constructor(t) {
                    this._config = this._getConfig(t), this._isActive = !1, this._lastTabNavDirection = null
                }
                activate() {
                    const {
                        trapElement: t,
                        autofocus: e
                    } = this._config;
                    this._isActive || (e && t.focus(), j.off(document, wi), j.on(document,
                        "focusin.bs.focustrap", (t => this._handleFocusin(t))), j.on(document,
                        "keydown.tab.bs.focustrap", (t => this._handleKeydown(t))), this._isActive = !0)
                }
                deactivate() {
                    this._isActive && (this._isActive = !1, j.off(document, wi))
                }
                _handleFocusin(t) {
                    const {
                        target: e
                    } = t, {
                        trapElement: i
                    } = this._config;
                    if (e === document || e === i || i.contains(e)) return;
                    const n = V.focusableChildren(i);
                    0 === n.length ? i.focus() : this._lastTabNavDirection === Ei ? n[n.length - 1].focus() : n[
                        0].focus()
                }
                _handleKeydown(t) {
                    "Tab" === t.key && (this._lastTabNavDirection = t.shiftKey ? Ei : "forward")
                }
                _getConfig(t) {
                    return t = {
                        ...vi,
                        ..."object" == typeof t ? t : {}
                    }, a("focustrap", t, yi), t
                }
            }
            const Ti = "modal",
                Oi = "Escape",
                Ci = {
                    backdrop: !0,
                    keyboard: !0,
                    focus: !0
                },
                ki = {
                    backdrop: "(boolean|string)",
                    keyboard: "boolean",
                    focus: "boolean"
                },
                Li = "hidden.bs.modal",
                xi = "show.bs.modal",
                Di = "resize.bs.modal",
                Si = "click.dismiss.bs.modal",
                Ni = "keydown.dismiss.bs.modal",
                Ii = "mousedown.dismiss.bs.modal",
                Pi = "modal-open",
                ji = "show",
                Mi = "modal-static";
            class Hi extends B {
                constructor(t, e) {
                    super(t), this._config = this._getConfig(e), this._dialog = V.findOne(".modal-dialog", this
                            ._element), this._backdrop = this._initializeBackDrop(), this._focustrap = this
                        ._initializeFocusTrap(), this._isShown = !1, this._ignoreBackdropClick = !1, this
                        ._isTransitioning = !1, this._scrollBar = new fi
                }
                static get Default() {
                    return Ci
                }
                static get NAME() {
                    return Ti
                }
                toggle(t) {
                    return this._isShown ? this.hide() : this.show(t)
                }
                show(t) {
                    this._isShown || this._isTransitioning || j.trigger(this._element, xi, {
                        relatedTarget: t
                    }).defaultPrevented || (this._isShown = !0, this._isAnimated() && (this
                            ._isTransitioning = !0), this._scrollBar.hide(), document.body.classList.add(
                        Pi), this._adjustDialog(), this._setEscapeEvent(), this._setResizeEvent(), j.on(this
                            ._dialog, Ii, (() => {
                                j.one(this._element, "mouseup.dismiss.bs.modal", (t => {
                                    t.target === this._element && (this
                                        ._ignoreBackdropClick = !0)
                                }))
                            })), this._showBackdrop((() => this._showElement(t))))
                }
                hide() {
                    if (!this._isShown || this._isTransitioning) return;
                    if (j.trigger(this._element, "hide.bs.modal").defaultPrevented) return;
                    this._isShown = !1;
                    const t = this._isAnimated();
                    t && (this._isTransitioning = !0), this._setEscapeEvent(), this._setResizeEvent(), this
                        ._focustrap.deactivate(), this._element.classList.remove(ji), j.off(this._element, Si),
                        j.off(this._dialog, Ii), this._queueCallback((() => this._hideModal()), this._element,
                            t)
                }
                dispose() {
                    [window, this._dialog].forEach((t => j.off(t, ".bs.modal"))), this._backdrop.dispose(), this
                        ._focustrap.deactivate(), super.dispose()
                }
                handleUpdate() {
                    this._adjustDialog()
                }
                _initializeBackDrop() {
                    return new bi({
                        isVisible: Boolean(this._config.backdrop),
                        isAnimated: this._isAnimated()
                    })
                }
                _initializeFocusTrap() {
                    return new Ai({
                        trapElement: this._element
                    })
                }
                _getConfig(t) {
                    return t = {
                        ...Ci,
                        ...U.getDataAttributes(this._element),
                        ..."object" == typeof t ? t : {}
                    }, a(Ti, t, ki), t
                }
                _showElement(t) {
                    const e = this._isAnimated(),
                        i = V.findOne(".modal-body", this._dialog);
                    this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE ||
                        document.body.append(this._element), this._element.style.display = "block", this
                        ._element.removeAttribute("aria-hidden"), this._element.setAttribute("aria-modal", !0),
                        this._element.setAttribute("role", "dialog"), this._element.scrollTop = 0, i && (i
                            .scrollTop = 0), e && u(this._element), this._element.classList.add(ji), this
                        ._queueCallback((() => {
                            this._config.focus && this._focustrap.activate(), this._isTransitioning = !
                                1, j.trigger(this._element, "shown.bs.modal", {
                                    relatedTarget: t
                                })
                        }), this._dialog, e)
                }
                _setEscapeEvent() {
                    this._isShown ? j.on(this._element, Ni, (t => {
                        this._config.keyboard && t.key === Oi ? (t.preventDefault(), this.hide()) :
                            this._config.keyboard || t.key !== Oi || this
                            ._triggerBackdropTransition()
                    })) : j.off(this._element, Ni)
                }
                _setResizeEvent() {
                    this._isShown ? j.on(window, Di, (() => this._adjustDialog())) : j.off(window, Di)
                }
                _hideModal() {
                    this._element.style.display = "none", this._element.setAttribute("aria-hidden", !0), this
                        ._element.removeAttribute("aria-modal"), this._element.removeAttribute("role"), this
                        ._isTransitioning = !1, this._backdrop.hide((() => {
                            document.body.classList.remove(Pi), this._resetAdjustments(), this
                                ._scrollBar.reset(), j.trigger(this._element, Li)
                        }))
                }
                _showBackdrop(t) {
                    j.on(this._element, Si, (t => {
                        this._ignoreBackdropClick ? this._ignoreBackdropClick = !1 : t.target === t
                            .currentTarget && (!0 === this._config.backdrop ? this.hide() :
                                "static" === this._config.backdrop && this
                                ._triggerBackdropTransition())
                    })), this._backdrop.show(t)
                }
                _isAnimated() {
                    return this._element.classList.contains("fade")
                }
                _triggerBackdropTransition() {
                    if (j.trigger(this._element, "hidePrevented.bs.modal").defaultPrevented) return;
                    const {
                        classList: t,
                        scrollHeight: e,
                        style: i
                    } = this._element, n = e > document.documentElement.clientHeight;
                    !n && "hidden" === i.overflowY || t.contains(Mi) || (n || (i.overflowY = "hidden"), t.add(
                        Mi), this._queueCallback((() => {
                        t.remove(Mi), n || this._queueCallback((() => {
                            i.overflowY = ""
                        }), this._dialog)
                    }), this._dialog), this._element.focus())
                }
                _adjustDialog() {
                    const t = this._element.scrollHeight > document.documentElement.clientHeight,
                        e = this._scrollBar.getWidth(),
                        i = e > 0;
                    (!i && t && !m() || i && !t && m()) && (this._element.style.paddingLeft = `${e}px`), (i && !
                        t && !m() || !i && t && m()) && (this._element.style.paddingRight = `${e}px`)
                }
                _resetAdjustments() {
                    this._element.style.paddingLeft = "", this._element.style.paddingRight = ""
                }
                static jQueryInterface(t, e) {
                    return this.each((function() {
                        const i = Hi.getOrCreateInstance(this, t);
                        if ("string" == typeof t) {
                            if (void 0 === i[t]) throw new TypeError(`No method named "${t}"`);
                            i[t](e)
                        }
                    }))
                }
            }
            j.on(document, "click.bs.modal.data-api", '[data-bs-toggle="modal"]', (function(t) {
                const e = n(this);
                ["A", "AREA"].includes(this.tagName) && t.preventDefault(), j.one(e, xi, (t => {
                    t.defaultPrevented || j.one(e, Li, (() => {
                        l(this) && this.focus()
                    }))
                }));
                const i = V.findOne(".modal.show");
                i && Hi.getInstance(i).hide(), Hi.getOrCreateInstance(e).toggle(this)
            })), R(Hi), g(Hi);
            const Bi = "offcanvas",
                Ri = {
                    backdrop: !0,
                    keyboard: !0,
                    scroll: !1
                },
                Wi = {
                    backdrop: "boolean",
                    keyboard: "boolean",
                    scroll: "boolean"
                },
                $i = "show",
                zi = ".offcanvas.show",
                qi = "hidden.bs.offcanvas";
            class Fi extends B {
                constructor(t, e) {
                    super(t), this._config = this._getConfig(e), this._isShown = !1, this._backdrop = this
                        ._initializeBackDrop(), this._focustrap = this._initializeFocusTrap(), this
                        ._addEventListeners()
                }
                static get NAME() {
                    return Bi
                }
                static get Default() {
                    return Ri
                }
                toggle(t) {
                    return this._isShown ? this.hide() : this.show(t)
                }
                show(t) {
                    this._isShown || j.trigger(this._element, "show.bs.offcanvas", {
                        relatedTarget: t
                    }).defaultPrevented || (this._isShown = !0, this._element.style.visibility = "visible",
                        this._backdrop.show(), this._config.scroll || (new fi).hide(), this._element
                        .removeAttribute("aria-hidden"), this._element.setAttribute("aria-modal", !0), this
                        ._element.setAttribute("role", "dialog"), this._element.classList.add($i), this
                        ._queueCallback((() => {
                            this._config.scroll || this._focustrap.activate(), j.trigger(this
                                ._element, "shown.bs.offcanvas", {
                                    relatedTarget: t
                                })
                        }), this._element, !0))
                }
                hide() {
                    this._isShown && (j.trigger(this._element, "hide.bs.offcanvas").defaultPrevented || (this
                        ._focustrap.deactivate(), this._element.blur(), this._isShown = !1, this
                        ._element.classList.remove($i), this._backdrop.hide(), this._queueCallback((
                        () => {
                                this._element.setAttribute("aria-hidden", !0), this._element
                                    .removeAttribute("aria-modal"), this._element.removeAttribute(
                                        "role"), this._element.style.visibility = "hidden", this
                                    ._config.scroll || (new fi).reset(), j.trigger(this._element,
                                        qi)
                            }), this._element, !0)))
                }
                dispose() {
                    this._backdrop.dispose(), this._focustrap.deactivate(), super.dispose()
                }
                _getConfig(t) {
                    return t = {
                        ...Ri,
                        ...U.getDataAttributes(this._element),
                        ..."object" == typeof t ? t : {}
                    }, a(Bi, t, Wi), t
                }
                _initializeBackDrop() {
                    return new bi({
                        className: "offcanvas-backdrop",
                        isVisible: this._config.backdrop,
                        isAnimated: !0,
                        rootElement: this._element.parentNode,
                        clickCallback: () => this.hide()
                    })
                }
                _initializeFocusTrap() {
                    return new Ai({
                        trapElement: this._element
                    })
                }
                _addEventListeners() {
                    j.on(this._element, "keydown.dismiss.bs.offcanvas", (t => {
                        this._config.keyboard && "Escape" === t.key && this.hide()
                    }))
                }
                static jQueryInterface(t) {
                    return this.each((function() {
                        const e = Fi.getOrCreateInstance(this, t);
                        if ("string" == typeof t) {
                            if (void 0 === e[t] || t.startsWith("_") || "constructor" === t)
                            throw new TypeError(`No method named "${t}"`);
                            e[t](this)
                        }
                    }))
                }
            }
            j.on(document, "click.bs.offcanvas.data-api", '[data-bs-toggle="offcanvas"]', (function(t) {
                const e = n(this);
                if (["A", "AREA"].includes(this.tagName) && t.preventDefault(), c(this)) return;
                j.one(e, qi, (() => {
                    l(this) && this.focus()
                }));
                const i = V.findOne(zi);
                i && i !== e && Fi.getInstance(i).hide(), Fi.getOrCreateInstance(e).toggle(this)
            })), j.on(window, "load.bs.offcanvas.data-api", (() => V.find(zi).forEach((t => Fi
                .getOrCreateInstance(t).show())))), R(Fi), g(Fi);
            const Ui = new Set(["background", "cite", "href", "itemtype", "longdesc", "poster", "src",
                    "xlink:href"]),
                Vi = /^(?:(?:https?|mailto|ftp|tel|file|sms):|[^#&/:?]*(?:[#/?]|$))/i,
                Ki =
                /^data:(?:image\/(?:bmp|gif|jpeg|jpg|png|tiff|webp)|video\/(?:mpeg|mp4|ogg|webm)|audio\/(?:mp3|oga|ogg|opus));base64,[\d+/a-z]+=*$/i,
                Xi = (t, e) => {
                    const i = t.nodeName.toLowerCase();
                    if (e.includes(i)) return !Ui.has(i) || Boolean(Vi.test(t.nodeValue) || Ki.test(t.nodeValue));
                    const n = e.filter((t => t instanceof RegExp));
                    for (let t = 0, e = n.length; t < e; t++)
                        if (n[t].test(i)) return !0;
                    return !1
                };

            function Yi(t, e, i) {
                if (!t.length) return t;
                if (i && "function" == typeof i) return i(t);
                const n = (new window.DOMParser).parseFromString(t, "text/html"),
                    s = [].concat(...n.body.querySelectorAll("*"));
                for (let t = 0, i = s.length; t < i; t++) {
                    const i = s[t],
                        n = i.nodeName.toLowerCase();
                    if (!Object.keys(e).includes(n)) {
                        i.remove();
                        continue
                    }
                    const o = [].concat(...i.attributes),
                        r = [].concat(e["*"] || [], e[n] || []);
                    o.forEach((t => {
                        Xi(t, r) || i.removeAttribute(t.nodeName)
                    }))
                }
                return n.body.innerHTML
            }
            const Qi = "tooltip",
                Gi = new Set(["sanitize", "allowList", "sanitizeFn"]),
                Zi = {
                    animation: "boolean",
                    template: "string",
                    title: "(string|element|function)",
                    trigger: "string",
                    delay: "(number|object)",
                    html: "boolean",
                    selector: "(string|boolean)",
                    placement: "(string|function)",
                    offset: "(array|string|function)",
                    container: "(string|element|boolean)",
                    fallbackPlacements: "array",
                    boundary: "(string|element)",
                    customClass: "(string|function)",
                    sanitize: "boolean",
                    sanitizeFn: "(null|function)",
                    allowList: "object",
                    popperConfig: "(null|object|function)"
                },
                Ji = {
                    AUTO: "auto",
                    TOP: "top",
                    RIGHT: m() ? "left" : "right",
                    BOTTOM: "bottom",
                    LEFT: m() ? "right" : "left"
                },
                tn = {
                    animation: !0,
                    template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
                    trigger: "hover focus",
                    title: "",
                    delay: 0,
                    html: !1,
                    selector: !1,
                    placement: "top",
                    offset: [0, 0],
                    container: !1,
                    fallbackPlacements: ["top", "right", "bottom", "left"],
                    boundary: "clippingParents",
                    customClass: "",
                    sanitize: !0,
                    sanitizeFn: null,
                    allowList: {
                        "*": ["class", "dir", "id", "lang", "role", /^aria-[\w-]*$/i],
                        a: ["target", "href", "title", "rel"],
                        area: [],
                        b: [],
                        br: [],
                        col: [],
                        code: [],
                        div: [],
                        em: [],
                        hr: [],
                        h1: [],
                        h2: [],
                        h3: [],
                        h4: [],
                        h5: [],
                        h6: [],
                        i: [],
                        img: ["src", "srcset", "alt", "title", "width", "height"],
                        li: [],
                        ol: [],
                        p: [],
                        pre: [],
                        s: [],
                        small: [],
                        span: [],
                        sub: [],
                        sup: [],
                        strong: [],
                        u: [],
                        ul: []
                    },
                    popperConfig: null
                },
                en = {
                    HIDE: "hide.bs.tooltip",
                    HIDDEN: "hidden.bs.tooltip",
                    SHOW: "show.bs.tooltip",
                    SHOWN: "shown.bs.tooltip",
                    INSERTED: "inserted.bs.tooltip",
                    CLICK: "click.bs.tooltip",
                    FOCUSIN: "focusin.bs.tooltip",
                    FOCUSOUT: "focusout.bs.tooltip",
                    MOUSEENTER: "mouseenter.bs.tooltip",
                    MOUSELEAVE: "mouseleave.bs.tooltip"
                },
                nn = "fade",
                sn = "show",
                on = "show",
                rn = "out",
                an = ".tooltip-inner",
                ln = ".modal",
                cn = "hide.bs.modal",
                hn = "hover",
                dn = "focus";
            class un extends B {
                constructor(t, e) {
                    if (void 0 === Fe) throw new TypeError(
                        "Bootstrap's tooltips require Popper (https://popper.js.org)");
                    super(t), this._isEnabled = !0, this._timeout = 0, this._hoverState = "", this
                        ._activeTrigger = {}, this._popper = null, this._config = this._getConfig(e), this.tip =
                        null, this._setListeners()
                }
                static get Default() {
                    return tn
                }
                static get NAME() {
                    return Qi
                }
                static get Event() {
                    return en
                }
                static get DefaultType() {
                    return Zi
                }
                enable() {
                    this._isEnabled = !0
                }
                disable() {
                    this._isEnabled = !1
                }
                toggleEnabled() {
                    this._isEnabled = !this._isEnabled
                }
                toggle(t) {
                    if (this._isEnabled)
                        if (t) {
                            const e = this._initializeOnDelegatedTarget(t);
                            e._activeTrigger.click = !e._activeTrigger.click, e._isWithActiveTrigger() ? e
                                ._enter(null, e) : e._leave(null, e)
                        } else {
                            if (this.getTipElement().classList.contains(sn)) return void this._leave(null,
                            this);
                            this._enter(null, this)
                        }
                }
                dispose() {
                    clearTimeout(this._timeout), j.off(this._element.closest(ln), cn, this._hideModalHandler),
                        this.tip && this.tip.remove(), this._disposePopper(), super.dispose()
                }
                show() {
                    if ("none" === this._element.style.display) throw new Error(
                        "Please use show on visible elements");
                    if (!this.isWithContent() || !this._isEnabled) return;
                    const t = j.trigger(this._element, this.constructor.Event.SHOW),
                        e = h(this._element),
                        i = null === e ? this._element.ownerDocument.documentElement.contains(this._element) : e
                        .contains(this._element);
                    if (t.defaultPrevented || !i) return;
                    "tooltip" === this.constructor.NAME && this.tip && this.getTitle() !== this.tip
                        .querySelector(an).innerHTML && (this._disposePopper(), this.tip.remove(), this.tip =
                            null);
                    const n = this.getTipElement(),
                        s = (t => {
                            do {
                                t += Math.floor(1e6 * Math.random())
                            } while (document.getElementById(t));
                            return t
                        })(this.constructor.NAME);
                    n.setAttribute("id", s), this._element.setAttribute("aria-describedby", s), this._config
                        .animation && n.classList.add(nn);
                    const o = "function" == typeof this._config.placement ? this._config.placement.call(this, n,
                            this._element) : this._config.placement,
                        r = this._getAttachment(o);
                    this._addAttachmentClass(r);
                    const {
                        container: a
                    } = this._config;
                    H.set(n, this.constructor.DATA_KEY, this), this._element.ownerDocument.documentElement
                        .contains(this.tip) || (a.append(n), j.trigger(this._element, this.constructor.Event
                            .INSERTED)), this._popper ? this._popper.update() : this._popper = qe(this._element,
                            n, this._getPopperConfig(r)), n.classList.add(sn);
                    const l = this._resolvePossibleFunction(this._config.customClass);
                    l && n.classList.add(...l.split(" ")), "ontouchstart" in document.documentElement && []
                        .concat(...document.body.children).forEach((t => {
                            j.on(t, "mouseover", d)
                        }));
                    const c = this.tip.classList.contains(nn);
                    this._queueCallback((() => {
                        const t = this._hoverState;
                        this._hoverState = null, j.trigger(this._element, this.constructor.Event
                            .SHOWN), t === rn && this._leave(null, this)
                    }), this.tip, c)
                }
                hide() {
                    if (!this._popper) return;
                    const t = this.getTipElement();
                    if (j.trigger(this._element, this.constructor.Event.HIDE).defaultPrevented) return;
                    t.classList.remove(sn), "ontouchstart" in document.documentElement && [].concat(...document
                            .body.children).forEach((t => j.off(t, "mouseover", d))), this._activeTrigger
                        .click = !1, this._activeTrigger.focus = !1, this._activeTrigger.hover = !1;
                    const e = this.tip.classList.contains(nn);
                    this._queueCallback((() => {
                        this._isWithActiveTrigger() || (this._hoverState !== on && t.remove(), this
                            ._cleanTipClass(), this._element.removeAttribute(
                            "aria-describedby"), j.trigger(this._element, this.constructor.Event
                                .HIDDEN), this._disposePopper())
                    }), this.tip, e), this._hoverState = ""
                }
                update() {
                    null !== this._popper && this._popper.update()
                }
                isWithContent() {
                    return Boolean(this.getTitle())
                }
                getTipElement() {
                    if (this.tip) return this.tip;
                    const t = document.createElement("div");
                    t.innerHTML = this._config.template;
                    const e = t.children[0];
                    return this.setContent(e), e.classList.remove(nn, sn), this.tip = e, this.tip
                }
                setContent(t) {
                    this._sanitizeAndSetContent(t, this.getTitle(), an)
                }
                _sanitizeAndSetContent(t, e, i) {
                    const n = V.findOne(i, t);
                    e || !n ? this.setElementContent(n, e) : n.remove()
                }
                setElementContent(t, e) {
                    if (null !== t) return o(e) ? (e = r(e), void(this._config.html ? e.parentNode !== t && (t
                        .innerHTML = "", t.append(e)) : t.textContent = e.textContent)) : void(this
                        ._config.html ? (this._config.sanitize && (e = Yi(e, this._config.allowList,
                            this._config.sanitizeFn)), t.innerHTML = e) : t.textContent = e)
                }
                getTitle() {
                    const t = this._element.getAttribute("data-bs-original-title") || this._config.title;
                    return this._resolvePossibleFunction(t)
                }
                updateAttachment(t) {
                    return "right" === t ? "end" : "left" === t ? "start" : t
                }
                _initializeOnDelegatedTarget(t, e) {
                    return e || this.constructor.getOrCreateInstance(t.delegateTarget, this
                    ._getDelegateConfig())
                }
                _getOffset() {
                    const {
                        offset: t
                    } = this._config;
                    return "string" == typeof t ? t.split(",").map((t => Number.parseInt(t, 10))) :
                        "function" == typeof t ? e => t(e, this._element) : t
                }
                _resolvePossibleFunction(t) {
                    return "function" == typeof t ? t.call(this._element) : t
                }
                _getPopperConfig(t) {
                    const e = {
                        placement: t,
                        modifiers: [{
                            name: "flip",
                            options: {
                                fallbackPlacements: this._config.fallbackPlacements
                            }
                        }, {
                            name: "offset",
                            options: {
                                offset: this._getOffset()
                            }
                        }, {
                            name: "preventOverflow",
                            options: {
                                boundary: this._config.boundary
                            }
                        }, {
                            name: "arrow",
                            options: {
                                element: `.${this.constructor.NAME}-arrow`
                            }
                        }, {
                            name: "onChange",
                            enabled: !0,
                            phase: "afterWrite",
                            fn: t => this._handlePopperPlacementChange(t)
                        }],
                        onFirstUpdate: t => {
                            t.options.placement !== t.placement && this._handlePopperPlacementChange(t)
                        }
                    };
                    return {
                        ...e,
                        ..."function" == typeof this._config.popperConfig ? this._config.popperConfig(e) : this
                            ._config.popperConfig
                    }
                }
                _addAttachmentClass(t) {
                    this.getTipElement().classList.add(
                        `${this._getBasicClassPrefix()}-${this.updateAttachment(t)}`)
                }
                _getAttachment(t) {
                    return Ji[t.toUpperCase()]
                }
                _setListeners() {
                    this._config.trigger.split(" ").forEach((t => {
                            if ("click" === t) j.on(this._element, this.constructor.Event.CLICK, this
                                ._config.selector, (t => this.toggle(t)));
                            else if ("manual" !== t) {
                                const e = t === hn ? this.constructor.Event.MOUSEENTER : this
                                    .constructor.Event.FOCUSIN,
                                    i = t === hn ? this.constructor.Event.MOUSELEAVE : this.constructor
                                    .Event.FOCUSOUT;
                                j.on(this._element, e, this._config.selector, (t => this._enter(t))), j
                                    .on(this._element, i, this._config.selector, (t => this._leave(t)))
                            }
                        })), this._hideModalHandler = () => {
                            this._element && this.hide()
                        }, j.on(this._element.closest(ln), cn, this._hideModalHandler), this._config.selector ?
                        this._config = {
                            ...this._config,
                            trigger: "manual",
                            selector: ""
                        } : this._fixTitle()
                }
                _fixTitle() {
                    const t = this._element.getAttribute("title"),
                        e = typeof this._element.getAttribute("data-bs-original-title");
                    (t || "string" !== e) && (this._element.setAttribute("data-bs-original-title", t || ""), !
                        t || this._element.getAttribute("aria-label") || this._element.textContent || this
                        ._element.setAttribute("aria-label", t), this._element.setAttribute("title", ""))
                }
                _enter(t, e) {
                    e = this._initializeOnDelegatedTarget(t, e), t && (e._activeTrigger["focusin" === t.type ?
                            dn : hn] = !0), e.getTipElement().classList.contains(sn) || e._hoverState === on ? e
                        ._hoverState = on : (clearTimeout(e._timeout), e._hoverState = on, e._config.delay && e
                            ._config.delay.show ? e._timeout = setTimeout((() => {
                                e._hoverState === on && e.show()
                            }), e._config.delay.show) : e.show())
                }
                _leave(t, e) {
                    e = this._initializeOnDelegatedTarget(t, e), t && (e._activeTrigger["focusout" === t.type ?
                        dn : hn] = e._element.contains(t.relatedTarget)), e._isWithActiveTrigger() || (
                        clearTimeout(e._timeout), e._hoverState = rn, e._config.delay && e._config.delay
                        .hide ? e._timeout = setTimeout((() => {
                            e._hoverState === rn && e.hide()
                        }), e._config.delay.hide) : e.hide())
                }
                _isWithActiveTrigger() {
                    for (const t in this._activeTrigger)
                        if (this._activeTrigger[t]) return !0;
                    return !1
                }
                _getConfig(t) {
                    const e = U.getDataAttributes(this._element);
                    return Object.keys(e).forEach((t => {
                            Gi.has(t) && delete e[t]
                        })), (t = {
                            ...this.constructor.Default,
                            ...e,
                            ..."object" == typeof t && t ? t : {}
                        }).container = !1 === t.container ? document.body : r(t.container), "number" == typeof t
                        .delay && (t.delay = {
                            show: t.delay,
                            hide: t.delay
                        }), "number" == typeof t.title && (t.title = t.title.toString()), "number" == typeof t
                        .content && (t.content = t.content.toString()), a(Qi, t, this.constructor.DefaultType),
                        t.sanitize && (t.template = Yi(t.template, t.allowList, t.sanitizeFn)), t
                }
                _getDelegateConfig() {
                    const t = {};
                    for (const e in this._config) this.constructor.Default[e] !== this._config[e] && (t[e] =
                        this._config[e]);
                    return t
                }
                _cleanTipClass() {
                    const t = this.getTipElement(),
                        e = new RegExp(`(^|\\s)${this._getBasicClassPrefix()}\\S+`, "g"),
                        i = t.getAttribute("class").match(e);
                    null !== i && i.length > 0 && i.map((t => t.trim())).forEach((e => t.classList.remove(e)))
                }
                _getBasicClassPrefix() {
                    return "bs-tooltip"
                }
                _handlePopperPlacementChange(t) {
                    const {
                        state: e
                    } = t;
                    e && (this.tip = e.elements.popper, this._cleanTipClass(), this._addAttachmentClass(this
                        ._getAttachment(e.placement)))
                }
                _disposePopper() {
                    this._popper && (this._popper.destroy(), this._popper = null)
                }
                static jQueryInterface(t) {
                    return this.each((function() {
                        const e = un.getOrCreateInstance(this, t);
                        if ("string" == typeof t) {
                            if (void 0 === e[t]) throw new TypeError(`No method named "${t}"`);
                            e[t]()
                        }
                    }))
                }
            }
            g(un);
            const fn = {
                    ...un.Default,
                    placement: "right",
                    offset: [0, 8],
                    trigger: "click",
                    content: "",
                    template: '<div class="popover" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
                },
                pn = {
                    ...un.DefaultType,
                    content: "(string|element|function)"
                },
                mn = {
                    HIDE: "hide.bs.popover",
                    HIDDEN: "hidden.bs.popover",
                    SHOW: "show.bs.popover",
                    SHOWN: "shown.bs.popover",
                    INSERTED: "inserted.bs.popover",
                    CLICK: "click.bs.popover",
                    FOCUSIN: "focusin.bs.popover",
                    FOCUSOUT: "focusout.bs.popover",
                    MOUSEENTER: "mouseenter.bs.popover",
                    MOUSELEAVE: "mouseleave.bs.popover"
                };
            class gn extends un {
                static get Default() {
                    return fn
                }
                static get NAME() {
                    return "popover"
                }
                static get Event() {
                    return mn
                }
                static get DefaultType() {
                    return pn
                }
                isWithContent() {
                    return this.getTitle() || this._getContent()
                }
                setContent(t) {
                    this._sanitizeAndSetContent(t, this.getTitle(), ".popover-header"), this
                        ._sanitizeAndSetContent(t, this._getContent(), ".popover-body")
                }
                _getContent() {
                    return this._resolvePossibleFunction(this._config.content)
                }
                _getBasicClassPrefix() {
                    return "bs-popover"
                }
                static jQueryInterface(t) {
                    return this.each((function() {
                        const e = gn.getOrCreateInstance(this, t);
                        if ("string" == typeof t) {
                            if (void 0 === e[t]) throw new TypeError(`No method named "${t}"`);
                            e[t]()
                        }
                    }))
                }
            }
            g(gn);
            const _n = "scrollspy",
                bn = {
                    offset: 10,
                    method: "auto",
                    target: ""
                },
                vn = {
                    offset: "number",
                    method: "string",
                    target: "(string|element)"
                },
                yn = "active",
                wn = ".nav-link, .list-group-item, .dropdown-item",
                En = "position";
            class An extends B {
                constructor(t, e) {
                    super(t), this._scrollElement = "BODY" === this._element.tagName ? window : this._element,
                        this._config = this._getConfig(e), this._offsets = [], this._targets = [], this
                        ._activeTarget = null, this._scrollHeight = 0, j.on(this._scrollElement,
                            "scroll.bs.scrollspy", (() => this._process())), this.refresh(), this._process()
                }
                static get Default() {
                    return bn
                }
                static get NAME() {
                    return _n
                }
                refresh() {
                    const t = this._scrollElement === this._scrollElement.window ? "offset" : En,
                        e = "auto" === this._config.method ? t : this._config.method,
                        n = e === En ? this._getScrollTop() : 0;
                    this._offsets = [], this._targets = [], this._scrollHeight = this._getScrollHeight(), V
                        .find(wn, this._config.target).map((t => {
                            const s = i(t),
                                o = s ? V.findOne(s) : null;
                            if (o) {
                                const t = o.getBoundingClientRect();
                                if (t.width || t.height) return [U[e](o).top + n, s]
                            }
                            return null
                        })).filter((t => t)).sort(((t, e) => t[0] - e[0])).forEach((t => {
                            this._offsets.push(t[0]), this._targets.push(t[1])
                        }))
                }
                dispose() {
                    j.off(this._scrollElement, ".bs.scrollspy"), super.dispose()
                }
                _getConfig(t) {
                    return (t = {
                        ...bn,
                        ...U.getDataAttributes(this._element),
                        ..."object" == typeof t && t ? t : {}
                    }).target = r(t.target) || document.documentElement, a(_n, t, vn), t
                }
                _getScrollTop() {
                    return this._scrollElement === window ? this._scrollElement.pageYOffset : this
                        ._scrollElement.scrollTop
                }
                _getScrollHeight() {
                    return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document
                        .documentElement.scrollHeight)
                }
                _getOffsetHeight() {
                    return this._scrollElement === window ? window.innerHeight : this._scrollElement
                        .getBoundingClientRect().height
                }
                _process() {
                    const t = this._getScrollTop() + this._config.offset,
                        e = this._getScrollHeight(),
                        i = this._config.offset + e - this._getOffsetHeight();
                    if (this._scrollHeight !== e && this.refresh(), t >= i) {
                        const t = this._targets[this._targets.length - 1];
                        this._activeTarget !== t && this._activate(t)
                    } else {
                        if (this._activeTarget && t < this._offsets[0] && this._offsets[0] > 0) return this
                            ._activeTarget = null, void this._clear();
                        for (let e = this._offsets.length; e--;) this._activeTarget !== this._targets[e] && t >=
                            this._offsets[e] && (void 0 === this._offsets[e + 1] || t < this._offsets[e + 1]) &&
                            this._activate(this._targets[e])
                    }
                }
                _activate(t) {
                    this._activeTarget = t, this._clear();
                    const e = wn.split(",").map((e => `${e}[data-bs-target="${t}"],${e}[href="${t}"]`)),
                        i = V.findOne(e.join(","), this._config.target);
                    i.classList.add(yn), i.classList.contains("dropdown-item") ? V.findOne(".dropdown-toggle", i
                            .closest(".dropdown")).classList.add(yn) : V.parents(i, ".nav, .list-group")
                        .forEach((t => {
                            V.prev(t, ".nav-link, .list-group-item").forEach((t => t.classList.add(
                                yn))), V.prev(t, ".nav-item").forEach((t => {
                                    V.children(t, ".nav-link").forEach((t => t.classList.add(
                                        yn)))
                                }))
                        })), j.trigger(this._scrollElement, "activate.bs.scrollspy", {
                            relatedTarget: t
                        })
                }
                _clear() {
                    V.find(wn, this._config.target).filter((t => t.classList.contains(yn))).forEach((t => t
                        .classList.remove(yn)))
                }
                static jQueryInterface(t) {
                    return this.each((function() {
                        const e = An.getOrCreateInstance(this, t);
                        if ("string" == typeof t) {
                            if (void 0 === e[t]) throw new TypeError(`No method named "${t}"`);
                            e[t]()
                        }
                    }))
                }
            }
            j.on(window, "load.bs.scrollspy.data-api", (() => {
                V.find('[data-bs-spy="scroll"]').forEach((t => new An(t)))
            })), g(An);
            const Tn = "active",
                On = "fade",
                Cn = "show",
                kn = ".active",
                Ln = ":scope > li > .active";
            class xn extends B {
                static get NAME() {
                    return "tab"
                }
                show() {
                    if (this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE &&
                        this._element.classList.contains(Tn)) return;
                    let t;
                    const e = n(this._element),
                        i = this._element.closest(".nav, .list-group");
                    if (i) {
                        const e = "UL" === i.nodeName || "OL" === i.nodeName ? Ln : kn;
                        t = V.find(e, i), t = t[t.length - 1]
                    }
                    const s = t ? j.trigger(t, "hide.bs.tab", {
                        relatedTarget: this._element
                    }) : null;
                    if (j.trigger(this._element, "show.bs.tab", {
                            relatedTarget: t
                        }).defaultPrevented || null !== s && s.defaultPrevented) return;
                    this._activate(this._element, i);
                    const o = () => {
                        j.trigger(t, "hidden.bs.tab", {
                            relatedTarget: this._element
                        }), j.trigger(this._element, "shown.bs.tab", {
                            relatedTarget: t
                        })
                    };
                    e ? this._activate(e, e.parentNode, o) : o()
                }
                _activate(t, e, i) {
                    const n = (!e || "UL" !== e.nodeName && "OL" !== e.nodeName ? V.children(e, kn) : V.find(Ln,
                            e))[0],
                        s = i && n && n.classList.contains(On),
                        o = () => this._transitionComplete(t, n, i);
                    n && s ? (n.classList.remove(Cn), this._queueCallback(o, t, !0)) : o()
                }
                _transitionComplete(t, e, i) {
                    if (e) {
                        e.classList.remove(Tn);
                        const t = V.findOne(":scope > .dropdown-menu .active", e.parentNode);
                        t && t.classList.remove(Tn), "tab" === e.getAttribute("role") && e.setAttribute(
                            "aria-selected", !1)
                    }
                    t.classList.add(Tn), "tab" === t.getAttribute("role") && t.setAttribute("aria-selected", !
                        0), u(t), t.classList.contains(On) && t.classList.add(Cn);
                    let n = t.parentNode;
                    if (n && "LI" === n.nodeName && (n = n.parentNode), n && n.classList.contains(
                            "dropdown-menu")) {
                        const e = t.closest(".dropdown");
                        e && V.find(".dropdown-toggle", e).forEach((t => t.classList.add(Tn))), t.setAttribute(
                            "aria-expanded", !0)
                    }
                    i && i()
                }
                static jQueryInterface(t) {
                    return this.each((function() {
                        const e = xn.getOrCreateInstance(this);
                        if ("string" == typeof t) {
                            if (void 0 === e[t]) throw new TypeError(`No method named "${t}"`);
                            e[t]()
                        }
                    }))
                }
            }
            j.on(document, "click.bs.tab.data-api",
                '[data-bs-toggle="tab"], [data-bs-toggle="pill"], [data-bs-toggle="list"]', (function(t) {
                    ["A", "AREA"].includes(this.tagName) && t.preventDefault(), c(this) || xn
                        .getOrCreateInstance(this).show()
                })), g(xn);
            const Dn = "toast",
                Sn = "hide",
                Nn = "show",
                In = "showing",
                Pn = {
                    animation: "boolean",
                    autohide: "boolean",
                    delay: "number"
                },
                jn = {
                    animation: !0,
                    autohide: !0,
                    delay: 5e3
                };
            class Mn extends B {
                constructor(t, e) {
                    super(t), this._config = this._getConfig(e), this._timeout = null, this
                        ._hasMouseInteraction = !1, this._hasKeyboardInteraction = !1, this._setListeners()
                }
                static get DefaultType() {
                    return Pn
                }
                static get Default() {
                    return jn
                }
                static get NAME() {
                    return Dn
                }
                show() {
                    j.trigger(this._element, "show.bs.toast").defaultPrevented || (this._clearTimeout(), this
                        ._config.animation && this._element.classList.add("fade"), this._element.classList
                        .remove(Sn), u(this._element), this._element.classList.add(Nn), this._element
                        .classList.add(In), this._queueCallback((() => {
                            this._element.classList.remove(In), j.trigger(this._element,
                                "shown.bs.toast"), this._maybeScheduleHide()
                        }), this._element, this._config.animation))
                }
                hide() {
                    this._element.classList.contains(Nn) && (j.trigger(this._element, "hide.bs.toast")
                        .defaultPrevented || (this._element.classList.add(In), this._queueCallback((() => {
                            this._element.classList.add(Sn), this._element.classList.remove(In),
                                this._element.classList.remove(Nn), j.trigger(this._element,
                                    "hidden.bs.toast")
                        }), this._element, this._config.animation)))
                }
                dispose() {
                    this._clearTimeout(), this._element.classList.contains(Nn) && this._element.classList
                        .remove(Nn), super.dispose()
                }
                _getConfig(t) {
                    return t = {
                        ...jn,
                        ...U.getDataAttributes(this._element),
                        ..."object" == typeof t && t ? t : {}
                    }, a(Dn, t, this.constructor.DefaultType), t
                }
                _maybeScheduleHide() {
                    this._config.autohide && (this._hasMouseInteraction || this._hasKeyboardInteraction || (this
                        ._timeout = setTimeout((() => {
                            this.hide()
                        }), this._config.delay)))
                }
                _onInteraction(t, e) {
                    switch (t.type) {
                        case "mouseover":
                        case "mouseout":
                            this._hasMouseInteraction = e;
                            break;
                        case "focusin":
                        case "focusout":
                            this._hasKeyboardInteraction = e
                    }
                    if (e) return void this._clearTimeout();
                    const i = t.relatedTarget;
                    this._element === i || this._element.contains(i) || this._maybeScheduleHide()
                }
                _setListeners() {
                    j.on(this._element, "mouseover.bs.toast", (t => this._onInteraction(t, !0))), j.on(this
                        ._element, "mouseout.bs.toast", (t => this._onInteraction(t, !1))), j.on(this
                        ._element, "focusin.bs.toast", (t => this._onInteraction(t, !0))), j.on(this
                        ._element, "focusout.bs.toast", (t => this._onInteraction(t, !1)))
                }
                _clearTimeout() {
                    clearTimeout(this._timeout), this._timeout = null
                }
                static jQueryInterface(t) {
                    return this.each((function() {
                        const e = Mn.getOrCreateInstance(this, t);
                        if ("string" == typeof t) {
                            if (void 0 === e[t]) throw new TypeError(`No method named "${t}"`);
                            e[t](this)
                        }
                    }))
                }
            }
            return R(Mn), g(Mn), {
                Alert: W,
                Button: z,
                Carousel: st,
                Collapse: pt,
                Dropdown: hi,
                Modal: Hi,
                Offcanvas: Fi,
                Popover: gn,
                ScrollSpy: An,
                Tab: xn,
                Toast: Mn,
                Tooltip: un
            }
        }));
        //# sourceMappingURL=bootstrap.bundle.min.js.map
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/plugins.js') }}"></script>
    <script>
        /*------------------------------------*\
           Plugins - Table of contents
       \*------------------------------------*/
        /*
     - anime.js
     - Jarallax
     - jQuery Easing
    */

        /*
         anime.js
         2017 Julian Garnier
         Released under the MIT license
        */
        var $jscomp$this = this;
        (function(v, p) {
            "function" === typeof define && define.amd ? define([], p) : "object" === typeof module && module.exports ?
                module.exports = p() : v.anime = p()
        })(this, function() {
            function v(a) {
                if (!g.col(a)) try {
                    return document.querySelectorAll(a)
                } catch (b) {}
            }

            function p(a) {
                return a.reduce(function(a, d) {
                    return a.concat(g.arr(d) ? p(d) : d)
                }, [])
            }

            function w(a) {
                if (g.arr(a)) return a;
                g.str(a) && (a = v(a) || a);
                return a instanceof NodeList || a instanceof HTMLCollection ? [].slice.call(a) : [a]
            }

            function F(a, b) {
                return a.some(function(a) {
                    return a === b
                })
            }

            function A(a) {
                var b = {},
                    d;
                for (d in a) b[d] = a[d];
                return b
            }

            function G(a, b) {
                var d = A(a),
                    c;
                for (c in a) d[c] = b.hasOwnProperty(c) ? b[c] : a[c];
                return d
            }

            function B(a, b) {
                var d = A(a),
                    c;
                for (c in b) d[c] = g.und(a[c]) ? b[c] : a[c];
                return d
            }

            function S(a) {
                a = a.replace(/^#?([a-f\d])([a-f\d])([a-f\d])$/i, function(a, b, d, h) {
                    return b + b + d + d + h + h
                });
                var b = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(a);
                a = parseInt(b[1], 16);
                var d = parseInt(b[2], 16),
                    b = parseInt(b[3], 16);
                return "rgb(" + a + "," + d + "," + b + ")"
            }

            function T(a) {
                function b(a, b, c) {
                    0 >
                        c && (c += 1);
                    1 < c && --c;
                    return c < 1 / 6 ? a + 6 * (b - a) * c : .5 > c ? b : c < 2 / 3 ? a + (b - a) * (2 / 3 - c) * 6 : a
                }
                var d = /hsl\((\d+),\s*([\d.]+)%,\s*([\d.]+)%\)/g.exec(a);
                a = parseInt(d[1]) / 360;
                var c = parseInt(d[2]) / 100,
                    d = parseInt(d[3]) / 100;
                if (0 == c) c = d = a = d;
                else {
                    var e = .5 > d ? d * (1 + c) : d + c - d * c,
                        l = 2 * d - e,
                        c = b(l, e, a + 1 / 3),
                        d = b(l, e, a);
                    a = b(l, e, a - 1 / 3)
                }
                return "rgb(" + 255 * c + "," + 255 * d + "," + 255 * a + ")"
            }

            function x(a) {
                if (a = /([\+\-]?[0-9#\.]+)(%|px|pt|em|rem|in|cm|mm|ex|pc|vw|vh|deg|rad|turn)?/.exec(a)) return a[2]
            }

            function U(a) {
                if (-1 < a.indexOf("translate")) return "px";
                if (-1 < a.indexOf("rotate") || -1 < a.indexOf("skew")) return "deg"
            }

            function H(a, b) {
                return g.fnc(a) ? a(b.target, b.id, b.total) : a
            }

            function C(a, b) {
                if (b in a.style) return getComputedStyle(a).getPropertyValue(b.replace(/([a-z])([A-Z])/g, "$1-$2")
                    .toLowerCase()) || "0"
            }

            function I(a, b) {
                if (g.dom(a) && F(V, b)) return "transform";
                if (g.dom(a) && (a.getAttribute(b) || g.svg(a) && a[b])) return "attribute";
                if (g.dom(a) && "transform" !== b && C(a, b)) return "css";
                if (null != a[b]) return "object"
            }

            function W(a, b) {
                var d = U(b),
                    d = -1 < b.indexOf("scale") ?
                    1 : 0 + d;
                a = a.style.transform;
                if (!a) return d;
                for (var c = [], e = [], l = [], h = /(\w+)\((.+?)\)/g; c = h.exec(a);) e.push(c[1]), l.push(c[2]);
                a = l.filter(function(a, c) {
                    return e[c] === b
                });
                return a.length ? a[0] : d
            }

            function J(a, b) {
                switch (I(a, b)) {
                    case "transform":
                        return W(a, b);
                    case "css":
                        return C(a, b);
                    case "attribute":
                        return a.getAttribute(b)
                }
                return a[b] || 0
            }

            function K(a, b) {
                var d = /^(\*=|\+=|-=)/.exec(a);
                if (!d) return a;
                b = parseFloat(b);
                a = parseFloat(a.replace(d[0], ""));
                switch (d[0][0]) {
                    case "+":
                        return b + a;
                    case "-":
                        return b - a;
                    case "*":
                        return b *
                            a
                }
            }

            function D(a) {
                return g.obj(a) && a.hasOwnProperty("totalLength")
            }

            function X(a, b) {
                function d(c) {
                    c = void 0 === c ? 0 : c;
                    return a.el.getPointAtLength(1 <= b + c ? b + c : 0)
                }
                var c = d(),
                    e = d(-1),
                    l = d(1);
                switch (a.property) {
                    case "x":
                        return c.x;
                    case "y":
                        return c.y;
                    case "angle":
                        return 180 * Math.atan2(l.y - e.y, l.x - e.x) / Math.PI
                }
            }

            function L(a, b) {
                var d = /-?\d*\.?\d+/g;
                a = D(a) ? a.totalLength : a;
                if (g.col(a)) b = g.rgb(a) ? a : g.hex(a) ? S(a) : g.hsl(a) ? T(a) : void 0;
                else {
                    var c = x(a);
                    a = c ? a.substr(0, a.length - c.length) : a;
                    b = b ? a + b : a
                }
                b += "";
                return {
                    original: b,
                    numbers: b.match(d) ? b.match(d).map(Number) : [0],
                    strings: b.split(d)
                }
            }

            function Y(a, b) {
                return b.reduce(function(b, c, e) {
                    return b + a[e - 1] + c
                })
            }

            function M(a) {
                return (a ? p(g.arr(a) ? a.map(w) : w(a)) : []).filter(function(a, d, c) {
                    return c.indexOf(a) === d
                })
            }

            function Z(a) {
                var b = M(a);
                return b.map(function(a, c) {
                    return {
                        target: a,
                        id: c,
                        total: b.length
                    }
                })
            }

            function aa(a, b) {
                var d = A(b);
                if (g.arr(a)) {
                    var c = a.length;
                    2 !== c || g.obj(a[0]) ? g.fnc(b.duration) || (d.duration = b.duration / c) : a = {
                        value: a
                    }
                }
                return w(a).map(function(a, c) {
                    c = c ? 0 : b.delay;
                    a = g.obj(a) && !D(a) ? a : {
                        value: a
                    };
                    g.und(a.delay) && (a.delay = c);
                    return a
                }).map(function(a) {
                    return B(a, d)
                })
            }

            function ba(a, b) {
                var d = {},
                    c;
                for (c in a) {
                    var e = H(a[c], b);
                    g.arr(e) && (e = e.map(function(a) {
                        return H(a, b)
                    }), 1 === e.length && (e = e[0]));
                    d[c] = e
                }
                d.duration = parseFloat(d.duration);
                d.delay = parseFloat(d.delay);
                return d
            }

            function ca(a) {
                return g.arr(a) ? y.apply(this, a) : N[a]
            }

            function da(a, b) {
                var d;
                return a.tweens.map(function(c) {
                    c = ba(c, b);
                    var e = c.value,
                        l = J(b.target, a.name),
                        h = d ? d.to.original : l,
                        h = g.arr(e) ? e[0] : h,
                        m = K(g.arr(e) ?
                            e[1] : e, h),
                        l = x(m) || x(h) || x(l);
                    c.isPath = D(e);
                    c.from = L(h, l);
                    c.to = L(m, l);
                    c.start = d ? d.end : a.offset;
                    c.end = c.start + c.delay + c.duration;
                    c.easing = ca(c.easing);
                    c.elasticity = (1E3 - Math.min(Math.max(c.elasticity, 1), 999)) / 1E3;
                    g.col(c.from.original) && (c.round = 1);
                    return d = c
                })
            }

            function ea(a, b) {
                return p(a.map(function(a) {
                    return b.map(function(b) {
                        var c = I(a.target, b.name);
                        if (c) {
                            var d = da(b, a);
                            b = {
                                type: c,
                                property: b.name,
                                animatable: a,
                                tweens: d,
                                duration: d[d.length - 1].end,
                                delay: d[0].delay
                            }
                        } else b = void 0;
                        return b
                    })
                })).filter(function(a) {
                    return !g.und(a)
                })
            }

            function O(a, b, d) {
                var c = "delay" === a ? Math.min : Math.max;
                return b.length ? c.apply(Math, b.map(function(b) {
                    return b[a]
                })) : d[a]
            }

            function fa(a) {
                var b = G(ga, a),
                    d = G(ha, a),
                    c = Z(a.targets),
                    e = [],
                    g = B(b, d),
                    h;
                for (h in a) g.hasOwnProperty(h) || "targets" === h || e.push({
                    name: h,
                    offset: g.offset,
                    tweens: aa(a[h], d)
                });
                a = ea(c, e);
                return B(b, {
                    children: [],
                    animatables: c,
                    animations: a,
                    duration: O("duration", a, d),
                    delay: O("delay", a, d)
                })
            }

            function n(a) {
                function b() {
                    return window.Promise && new Promise(function(a) {
                        return Q = a
                    })
                }

                function d(a) {
                    return f.reversed ?
                        f.duration - a : a
                }

                function c(a) {
                    for (var b = 0, c = {}, d = f.animations, e = {}; b < d.length;) {
                        var g = d[b],
                            h = g.animatable,
                            m = g.tweens;
                        e.tween = m.filter(function(b) {
                            return a < b.end
                        })[0] || m[m.length - 1];
                        e.isPath$1 = e.tween.isPath;
                        e.round = e.tween.round;
                        e.eased = e.tween.easing(Math.min(Math.max(a - e.tween.start - e.tween.delay, 0), e.tween
                            .duration) / e.tween.duration, e.tween.elasticity);
                        m = Y(e.tween.to.numbers.map(function(a) {
                            return function(b, c) {
                                c = a.isPath$1 ? 0 : a.tween.from.numbers[c];
                                b = c + a.eased * (b - c);
                                a.isPath$1 && (b = X(a.tween.value,
                                    b));
                                a.round && (b = Math.round(b * a.round) / a.round);
                                return b
                            }
                        }(e)), e.tween.to.strings);
                        ia[g.type](h.target, g.property, m, c, h.id);
                        g.currentValue = m;
                        b++;
                        e = {
                            isPath$1: e.isPath$1,
                            tween: e.tween,
                            eased: e.eased,
                            round: e.round
                        }
                    }
                    if (c)
                        for (var k in c) E || (E = C(document.body, "transform") ? "transform" : "-webkit-transform"), f
                            .animatables[k].target.style[E] = c[k].join(" ");
                    f.currentTime = a;
                    f.progress = a / f.duration * 100
                }

                function e(a) {
                    if (f[a]) f[a](f)
                }

                function g() {
                    f.remaining && !0 !== f.remaining && f.remaining--
                }

                function h(a) {
                    var h = f.duration,
                        l = f.offset,
                        n = f.delay,
                        P = f.currentTime,
                        q = f.reversed,
                        r = d(a),
                        r = Math.min(Math.max(r, 0), h);
                    if (f.children) {
                        var p = f.children;
                        if (r >= f.currentTime)
                            for (var u = 0; u < p.length; u++) p[u].seek(r);
                        else
                            for (u = p.length; u--;) p[u].seek(r)
                    }
                    r > l && r < h ? (c(r), !f.began && r >= n && (f.began = !0, e("begin")), e("run")) : (r <= l &&
                        0 !== P && (c(0), q && g()), r >= h && P !== h && (c(h), q || g()));
                    a >= h && (f.remaining ? (t = m, "alternate" === f.direction && (f.reversed = !f.reversed)) : (f
                            .pause(), "Promise" in window && (Q(), R = b()), f.completed || (f.completed = !0, e(
                                "complete"))),
                        k = 0);
                    e("update")
                }
                a = void 0 === a ? {} : a;
                var m, t, k = 0,
                    Q = null,
                    R = b(),
                    f = fa(a);
                f.reset = function() {
                    var a = f.direction,
                        b = f.loop;
                    f.currentTime = 0;
                    f.progress = 0;
                    f.paused = !0;
                    f.began = !1;
                    f.completed = !1;
                    f.reversed = "reverse" === a;
                    f.remaining = "alternate" === a && 1 === b ? 2 : b;
                    for (a = f.children.length; a--;) b = f.children[a], b.seek(b.offset), b.reset()
                };
                f.tick = function(a) {
                    m = a;
                    t || (t = m);
                    h((k + m - t) * n.speed)
                };
                f.seek = function(a) {
                    h(d(a))
                };
                f.pause = function() {
                    var a = q.indexOf(f); - 1 < a && q.splice(a, 1);
                    f.paused = !0
                };
                f.play = function() {
                    f.paused && (f.paused = !1, t = 0, k = d(f.currentTime), q.push(f), z || ja())
                };
                f.reverse = function() {
                    f.reversed = !f.reversed;
                    t = 0;
                    k = d(f.currentTime)
                };
                f.restart = function() {
                    f.pause();
                    f.reset();
                    f.play()
                };
                f.finished = R;
                f.reset();
                f.autoplay && f.play();
                return f
            }
            var ga = {
                    update: void 0,
                    begin: void 0,
                    run: void 0,
                    complete: void 0,
                    loop: 1,
                    direction: "normal",
                    autoplay: !0,
                    offset: 0
                },
                ha = {
                    duration: 1E3,
                    delay: 0,
                    easing: "easeOutElastic",
                    elasticity: 500,
                    round: 0
                },
                V =
                "translateX translateY translateZ rotate rotateX rotateY rotateZ scale scaleX scaleY scaleZ skewX skewY"
                .split(" "),
                E, g = {
                    arr: function(a) {
                        return Array.isArray(a)
                    },
                    obj: function(a) {
                        return -1 < Object.prototype.toString.call(a).indexOf("Object")
                    },
                    svg: function(a) {
                        return a instanceof SVGElement
                    },
                    dom: function(a) {
                        return a.nodeType || g.svg(a)
                    },
                    str: function(a) {
                        return "string" === typeof a
                    },
                    fnc: function(a) {
                        return "function" === typeof a
                    },
                    und: function(a) {
                        return "undefined" === typeof a
                    },
                    hex: function(a) {
                        return /(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(a)
                    },
                    rgb: function(a) {
                        return /^rgb/.test(a)
                    },
                    hsl: function(a) {
                        return /^hsl/.test(a)
                    },
                    col: function(a) {
                        return g.hex(a) ||
                            g.rgb(a) || g.hsl(a)
                    }
                },
                y = function() {
                    function a(a, d, c) {
                        return (((1 - 3 * c + 3 * d) * a + (3 * c - 6 * d)) * a + 3 * d) * a
                    }
                    return function(b, d, c, e) {
                        if (0 <= b && 1 >= b && 0 <= c && 1 >= c) {
                            var g = new Float32Array(11);
                            if (b !== d || c !== e)
                                for (var h = 0; 11 > h; ++h) g[h] = a(.1 * h, b, c);
                            return function(h) {
                                if (b === d && c === e) return h;
                                if (0 === h) return 0;
                                if (1 === h) return 1;
                                for (var m = 0, k = 1; 10 !== k && g[k] <= h; ++k) m += .1;
                                --k;
                                var k = m + (h - g[k]) / (g[k + 1] - g[k]) * .1,
                                    l = 3 * (1 - 3 * c + 3 * b) * k * k + 2 * (3 * c - 6 * b) * k + 3 * b;
                                if (.001 <= l) {
                                    for (m = 0; 4 > m; ++m) {
                                        l = 3 * (1 - 3 * c + 3 * b) * k * k + 2 * (3 * c - 6 * b) * k + 3 * b;
                                        if (0 === l) break;
                                        var n = a(k, b, c) - h,
                                            k = k - n / l
                                    }
                                    h = k
                                } else if (0 === l) h = k;
                                else {
                                    var k = m,
                                        m = m + .1,
                                        f = 0;
                                    do n = k + (m - k) / 2, l = a(n, b, c) - h, 0 < l ? m = n : k = n; while (
                                        1e-7 < Math.abs(l) && 10 > ++f);
                                    h = n
                                }
                                return a(h, d, e)
                            }
                        }
                    }
                }(),
                N = function() {
                    function a(a, b) {
                        return 0 === a || 1 === a ? a : -Math.pow(2, 10 * (a - 1)) * Math.sin(2 * (a - 1 - b / (2 * Math
                            .PI) * Math.asin(1)) * Math.PI / b)
                    }
                    var b = "Quad Cubic Quart Quint Sine Expo Circ Back Elastic".split(" "),
                        d = {
                            In: [
                                [.55, .085, .68, .53],
                                [.55, .055, .675, .19],
                                [.895, .03, .685, .22],
                                [.755, .05, .855, .06],
                                [.47, 0, .745, .715],
                                [.95, .05, .795, .035],
                                [.6, .04, .98,
                                    .335
                                ],
                                [.6, -.28, .735, .045], a
                            ],
                            Out: [
                                [.25, .46, .45, .94],
                                [.215, .61, .355, 1],
                                [.165, .84, .44, 1],
                                [.23, 1, .32, 1],
                                [.39, .575, .565, 1],
                                [.19, 1, .22, 1],
                                [.075, .82, .165, 1],
                                [.175, .885, .32, 1.275],
                                function(b, c) {
                                    return 1 - a(1 - b, c)
                                }
                            ],
                            InOut: [
                                [.455, .03, .515, .955],
                                [.645, .045, .355, 1],
                                [.77, 0, .175, 1],
                                [.86, 0, .07, 1],
                                [.445, .05, .55, .95],
                                [1, 0, 0, 1],
                                [.785, .135, .15, .86],
                                [.68, -.55, .265, 1.55],
                                function(b, c) {
                                    return .5 > b ? a(2 * b, c) / 2 : 1 - a(-2 * b + 2, c) / 2
                                }
                            ]
                        },
                        c = {
                            linear: y(.25, .25, .75, .75)
                        },
                        e = {},
                        l;
                    for (l in d) e.type = l, d[e.type].forEach(function(a) {
                        return function(d,
                            e) {
                            c["ease" + a.type + b[e]] = g.fnc(d) ? d : y.apply($jscomp$this, d)
                        }
                    }(e)), e = {
                        type: e.type
                    };
                    return c
                }(),
                ia = {
                    css: function(a, b, d) {
                        return a.style[b] = d
                    },
                    attribute: function(a, b, d) {
                        return a.setAttribute(b, d)
                    },
                    object: function(a, b, d) {
                        return a[b] = d
                    },
                    transform: function(a, b, d, c, e) {
                        c[e] || (c[e] = []);
                        c[e].push(b + "(" + d + ")")
                    }
                },
                q = [],
                z = 0,
                ja = function() {
                    function a() {
                        z = requestAnimationFrame(b)
                    }

                    function b(b) {
                        var c = q.length;
                        if (c) {
                            for (var d = 0; d < c;) q[d] && q[d].tick(b), d++;
                            a()
                        } else cancelAnimationFrame(z), z = 0
                    }
                    return a
                }();
            n.version = "2.0.2";
            n.speed = 1;
            n.running = q;
            n.remove = function(a) {
                a = M(a);
                for (var b = q.length; b--;)
                    for (var d = q[b], c = d.animations, e = c.length; e--;) F(a, c[e].animatable.target) && (c
                        .splice(e, 1), c.length || d.pause())
            };
            n.getValue = J;
            n.path = function(a, b) {
                var d = g.str(a) ? v(a)[0] : a,
                    c = b || 100;
                return function(a) {
                    return {
                        el: d,
                        property: a,
                        totalLength: d.getTotalLength() * (c / 100)
                    }
                }
            };
            n.setDashoffset = function(a) {
                var b = a.getTotalLength();
                a.setAttribute("stroke-dasharray", b);
                return b
            };
            n.bezier = y;
            n.easings = N;
            n.timeline = function(a) {
                var b = n(a);
                b.pause();
                b.duration = 0;
                b.add = function(a) {
                    b.children.forEach(function(a) {
                        a.began = !0;
                        a.completed = !0
                    });
                    w(a).forEach(function(a) {
                        var c = b.duration,
                            d = a.offset;
                        a.autoplay = !1;
                        a.offset = g.und(d) ? c : K(d, c);
                        b.seek(a.offset);
                        a = n(a);
                        a.duration > c && (b.duration = a.duration);
                        a.began = !0;
                        b.children.push(a)
                    });
                    b.reset();
                    b.seek(0);
                    b.autoplay && b.restart();
                    return b
                };
                return b
            };
            n.random = function(a, b) {
                return Math.floor(Math.random() * (b - a + 1)) + a
            };
            return n
        });

        /*!
         * Jarallax v2.0.2 (https://github.com/nk-o/jarallax)
         * Copyright 2022 nK <https://nkdev.info>
         * Licensed under MIT (https://github.com/nk-o/jarallax/blob/master/LICENSE)
         */
        ! function(e, t) {
            "object" == typeof exports && "undefined" != typeof module ? module.exports = t() : "function" ==
                typeof define && define.amd ? define(t) : (e = "undefined" != typeof globalThis ? globalThis : e || self)
                .jarallax = t()
        }(this, (function() {
            "use strict";

            function e(e) {
                "complete" === document.readyState || "interactive" === document.readyState ? e() : document
                    .addEventListener("DOMContentLoaded", e, {
                        capture: !0,
                        once: !0,
                        passive: !0
                    })
            }
            let t;
            t = "undefined" != typeof window ? window : "undefined" != typeof global ? global : "undefined" !=
                typeof self ? self : {};
            var i = t;
            const {
                navigator: o
            } = i, n = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(o.userAgent);
            let a, s;

            function l() {
                n ? (!a && document.body && (a = document.createElement("div"), a.style.cssText =
                        "position: fixed; top: -9999px; left: 0; height: 100vh; width: 0;", document.body
                        .appendChild(a)), s = (a ? a.clientHeight : 0) || i.innerHeight || document
                    .documentElement.clientHeight) : s = i.innerHeight || document.documentElement.clientHeight
            }
            l(), i.addEventListener("resize", l), i.addEventListener("orientationchange", l), i.addEventListener(
                "load", l), e((() => {
                l()
            }));
            const r = [];

            function m() {
                r.length && (r.forEach(((e, t) => {
                    const {
                        instance: o,
                        oldData: n
                    } = e, a = o.$item.getBoundingClientRect(), l = {
                            width: a.width,
                            height: a.height,
                            top: a.top,
                            bottom: a.bottom,
                            wndW: i.innerWidth,
                            wndH: s
                        }, m = !n || n.wndW !== l.wndW || n.wndH !== l.wndH || n.width !== l
                        .width || n.height !== l.height, c = m || !n || n.top !== l.top || n
                        .bottom !== l.bottom;
                    r[t].oldData = l, m && o.onResize(), c && o.onScroll()
                })), i.requestAnimationFrame(m))
            }
            let c = 0;
            class p {
                constructor(e, t) {
                    const i = this;
                    i.instanceID = c, c += 1, i.$item = e, i.defaults = {
                        type: "scroll",
                        speed: .5,
                        imgSrc: null,
                        imgElement: ".jarallax-img",
                        imgSize: "cover",
                        imgPosition: "50% 50%",
                        imgRepeat: "no-repeat",
                        keepImg: !1,
                        elementInViewport: null,
                        zIndex: -100,
                        disableParallax: !1,
                        disableVideo: !1,
                        videoSrc: null,
                        videoStartTime: 0,
                        videoEndTime: 0,
                        videoVolume: 0,
                        videoLoop: !0,
                        videoPlayOnlyVisible: !0,
                        videoLazyLoading: !0,
                        onScroll: null,
                        onInit: null,
                        onDestroy: null,
                        onCoverImage: null
                    };
                    const n = i.$item.dataset || {},
                        a = {};
                    if (Object.keys(n).forEach((e => {
                            const t = e.substr(0, 1).toLowerCase() + e.substr(1);
                            t && void 0 !== i.defaults[t] && (a[t] = n[e])
                        })), i.options = i.extend({}, i.defaults, a, t), i.pureOptions = i.extend({}, i
                        .options), Object.keys(i.options).forEach((e => {
                            "true" === i.options[e] ? i.options[e] = !0 : "false" === i.options[e] && (i
                                .options[e] = !1)
                        })), i.options.speed = Math.min(2, Math.max(-1, parseFloat(i.options.speed))),
                        "string" == typeof i.options.disableParallax && (i.options.disableParallax = new RegExp(
                            i.options.disableParallax)), i.options.disableParallax instanceof RegExp) {
                        const e = i.options.disableParallax;
                        i.options.disableParallax = () => e.test(o.userAgent)
                    }
                    if ("function" != typeof i.options.disableParallax && (i.options.disableParallax = () => !
                        1), "string" == typeof i.options.disableVideo && (i.options.disableVideo = new RegExp(i
                            .options.disableVideo)), i.options.disableVideo instanceof RegExp) {
                        const e = i.options.disableVideo;
                        i.options.disableVideo = () => e.test(o.userAgent)
                    }
                    "function" != typeof i.options.disableVideo && (i.options.disableVideo = () => !1);
                    let s = i.options.elementInViewport;
                    s && "object" == typeof s && void 0 !== s.length && ([s] = s), s instanceof Element || (s =
                        null), i.options.elementInViewport = s, i.image = {
                        src: i.options.imgSrc || null,
                        $container: null,
                        useImgTag: !1,
                        position: "fixed"
                    }, i.initImg() && i.canInitParallax() && i.init()
                }
                css(e, t) {
                    return "string" == typeof t ? i.getComputedStyle(e).getPropertyValue(t) : (Object.keys(t)
                        .forEach((i => {
                            e.style[i] = t[i]
                        })), e)
                }
                extend(e, ...t) {
                    return e = e || {}, Object.keys(t).forEach((i => {
                        t[i] && Object.keys(t[i]).forEach((o => {
                            e[o] = t[i][o]
                        }))
                    })), e
                }
                getWindowData() {
                    return {
                        width: i.innerWidth || document.documentElement.clientWidth,
                        height: s,
                        y: document.documentElement.scrollTop
                    }
                }
                initImg() {
                    const e = this;
                    let t = e.options.imgElement;
                    return t && "string" == typeof t && (t = e.$item.querySelector(t)), t instanceof Element ||
                        (e.options.imgSrc ? (t = new Image, t.src = e.options.imgSrc) : t = null), t && (e
                            .options.keepImg ? e.image.$item = t.cloneNode(!0) : (e.image.$item = t, e.image
                                .$itemParent = t.parentNode), e.image.useImgTag = !0), !!e.image.$item || (
                            null === e.image.src && (e.image.src =
                                "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7",
                                e.image.bgImage = e.css(e.$item, "background-image")), !(!e.image.bgImage ||
                                "none" === e.image.bgImage))
                }
                canInitParallax() {
                    return !this.options.disableParallax()
                }
                init() {
                    const e = this,
                        t = {
                            position: "absolute",
                            top: 0,
                            left: 0,
                            width: "100%",
                            height: "100%",
                            overflow: "hidden"
                        };
                    let o = {
                        pointerEvents: "none",
                        transformStyle: "preserve-3d",
                        backfaceVisibility: "hidden",
                        willChange: "transform,opacity"
                    };
                    if (!e.options.keepImg) {
                        const t = e.$item.getAttribute("style");
                        if (t && e.$item.setAttribute("data-jarallax-original-styles", t), e.image.useImgTag) {
                            const t = e.image.$item.getAttribute("style");
                            t && e.image.$item.setAttribute("data-jarallax-original-styles", t)
                        }
                    }
                    if ("static" === e.css(e.$item, "position") && e.css(e.$item, {
                            position: "relative"
                        }), "auto" === e.css(e.$item, "z-index") && e.css(e.$item, {
                            zIndex: 0
                        }), e.image.$container = document.createElement("div"), e.css(e.image.$container, t), e
                        .css(e.image.$container, {
                            "z-index": e.options.zIndex
                        }), "fixed" === this.image.position && e.css(e.image.$container, {
                            "-webkit-clip-path": "polygon(0 0, 100% 0, 100% 100%, 0 100%)",
                            "clip-path": "polygon(0 0, 100% 0, 100% 100%, 0 100%)"
                        }), e.image.$container.setAttribute("id", `jarallax-container-${e.instanceID}`), e.$item
                        .appendChild(e.image.$container), e.image.useImgTag ? o = e.extend({
                            "object-fit": e.options.imgSize,
                            "object-position": e.options.imgPosition,
                            "max-width": "none"
                        }, t, o) : (e.image.$item = document.createElement("div"), e.image.src && (o = e
                    .extend({
                            "background-position": e.options.imgPosition,
                            "background-size": e.options.imgSize,
                            "background-repeat": e.options.imgRepeat,
                            "background-image": e.image.bgImage || `url("${e.image.src}")`
                        }, t, o))), "opacity" !== e.options.type && "scale" !== e.options.type &&
                        "scale-opacity" !== e.options.type && 1 !== e.options.speed || (e.image.position =
                            "absolute"), "fixed" === e.image.position) {
                        const t = function(e) {
                            const t = [];
                            for (; null !== e.parentElement;) 1 === (e = e.parentElement).nodeType && t
                                .push(e);
                            return t
                        }(e.$item).filter((e => {
                            const t = i.getComputedStyle(e),
                                o = t["-webkit-transform"] || t["-moz-transform"] || t.transform;
                            return o && "none" !== o || /(auto|scroll)/.test(t.overflow + t[
                                "overflow-y"] + t["overflow-x"])
                        }));
                        e.image.position = t.length ? "absolute" : "fixed"
                    }
                    o.position = e.image.position, e.css(e.image.$item, o), e.image.$container.appendChild(e
                            .image.$item), e.onResize(), e.onScroll(!0), e.options.onInit && e.options.onInit
                        .call(e), "none" !== e.css(e.$item, "background-image") && e.css(e.$item, {
                            "background-image": "none"
                        }), e.addToParallaxList()
                }
                addToParallaxList() {
                    r.push({
                        instance: this
                    }), 1 === r.length && i.requestAnimationFrame(m)
                }
                removeFromParallaxList() {
                    const e = this;
                    r.forEach(((t, i) => {
                        t.instance.instanceID === e.instanceID && r.splice(i, 1)
                    }))
                }
                destroy() {
                    const e = this;
                    e.removeFromParallaxList();
                    const t = e.$item.getAttribute("data-jarallax-original-styles");
                    if (e.$item.removeAttribute("data-jarallax-original-styles"), t ? e.$item.setAttribute(
                            "style", t) : e.$item.removeAttribute("style"), e.image.useImgTag) {
                        const i = e.image.$item.getAttribute("data-jarallax-original-styles");
                        e.image.$item.removeAttribute("data-jarallax-original-styles"), i ? e.image.$item
                            .setAttribute("style", t) : e.image.$item.removeAttribute("style"), e.image
                            .$itemParent && e.image.$itemParent.appendChild(e.image.$item)
                    }
                    e.image.$container && e.image.$container.parentNode.removeChild(e.image.$container), e
                        .options.onDestroy && e.options.onDestroy.call(e), delete e.$item.jarallax
                }
                clipContainer() {}
                coverImage() {
                    const e = this,
                        t = e.image.$container.getBoundingClientRect(),
                        i = t.height,
                        {
                            speed: o
                        } = e.options,
                        n = "scroll" === e.options.type || "scroll-opacity" === e.options.type;
                    let a = 0,
                        l = i,
                        r = 0;
                    return n && (0 > o ? (a = o * Math.max(i, s), s < i && (a -= o * (i - s))) : a = o * (i +
                            s), 1 < o ? l = Math.abs(a - s) : 0 > o ? l = a / o + Math.abs(a) : l += (s - i) * (
                                1 - o), a /= 2), e.parallaxScrollDistance = a, r = n ? (s - l) / 2 : (i - l) /
                        2, e.css(e.image.$item, {
                            height: `${l}px`,
                            marginTop: `${r}px`,
                            left: "fixed" === e.image.position ? `${t.left}px` : "0",
                            width: `${t.width}px`
                        }), e.options.onCoverImage && e.options.onCoverImage.call(e), {
                            image: {
                                height: l,
                                marginTop: r
                            },
                            container: t
                        }
                }
                isVisible() {
                    return this.isElementInViewport || !1
                }
                onScroll(e) {
                    const t = this,
                        o = t.$item.getBoundingClientRect(),
                        n = o.top,
                        a = o.height,
                        l = {};
                    let r = o;
                    if (t.options.elementInViewport && (r = t.options.elementInViewport
                    .getBoundingClientRect()), t.isElementInViewport = 0 <= r.bottom && 0 <= r.right && r.top <=
                        s && r.left <= i.innerWidth, !e && !t.isElementInViewport) return;
                    const m = Math.max(0, n),
                        c = Math.max(0, a + n),
                        p = Math.max(0, -n),
                        d = Math.max(0, n + a - s),
                        g = Math.max(0, a - (n + a - s)),
                        u = Math.max(0, -n + s - a),
                        f = 1 - (s - n) / (s + a) * 2;
                    let h = 1;
                    if (a < s ? h = 1 - (p || d) / a : c <= s ? h = c / s : g <= s && (h = g / s), "opacity" !==
                        t.options.type && "scale-opacity" !== t.options.type && "scroll-opacity" !== t.options
                        .type || (l.transform = "translate3d(0,0,0)", l.opacity = h), "scale" === t.options
                        .type || "scale-opacity" === t.options.type) {
                        let e = 1;
                        0 > t.options.speed ? e -= t.options.speed * h : e += t.options.speed * (1 - h), l
                            .transform = `scale(${e}) translate3d(0,0,0)`
                    }
                    if ("scroll" === t.options.type || "scroll-opacity" === t.options.type) {
                        let e = t.parallaxScrollDistance * f;
                        "absolute" === t.image.position && (e -= n), l.transform = `translate3d(0,${e}px,0)`
                    }
                    t.css(t.image.$item, l), t.options.onScroll && t.options.onScroll.call(t, {
                        section: o,
                        beforeTop: m,
                        beforeTopEnd: c,
                        afterTop: p,
                        beforeBottom: d,
                        beforeBottomEnd: g,
                        afterBottom: u,
                        visiblePercent: h,
                        fromViewportCenter: f
                    })
                }
                onResize() {
                    this.coverImage()
                }
            }
            const d = function(e, t, ...i) {
                ("object" == typeof HTMLElement ? e instanceof HTMLElement : e && "object" == typeof e &&
                    null !== e && 1 === e.nodeType && "string" == typeof e.nodeName) && (e = [e]);
                const o = e.length;
                let n, a = 0;
                for (; a < o; a += 1)
                    if ("object" == typeof t || void 0 === t ? e[a].jarallax || (e[a].jarallax = new p(e[a],
                        t)) : e[a].jarallax && (n = e[a].jarallax[t].apply(e[a].jarallax, i)), void 0 !== n)
                        return n;
                return e
            };
            d.constructor = p;
            const g = i.jQuery;
            if (void 0 !== g) {
                const e = function(...e) {
                    Array.prototype.unshift.call(e, this);
                    const t = d.apply(i, e);
                    return "object" != typeof t ? t : this
                };
                e.constructor = d.constructor;
                const t = g.fn.jarallax;
                g.fn.jarallax = e, g.fn.jarallax.noConflict = function() {
                    return g.fn.jarallax = t, this
                }
            }
            return e((() => {
                d(document.querySelectorAll("[data-jarallax]"))
            })), d
        }));

        //# sourceMappingURL=jarallax.min.js.map

        /* Chocolat-1.0.4 */
        /* jQuery plugin for lightbox */
        ! function() {
            "use strict";
            let e = void 0;

            function t(e, t) {
                return new Promise(s => {
                    const i = () => {
                        t.removeEventListener("transitionend", i), s()
                    };
                    t.addEventListener("transitionend", i);
                    const l = t.getAttribute("class"),
                        n = t.getAttribute("style");
                    e(), l === t.getAttribute("class") && n === t.getAttribute("style") && i(), 0 === parseFloat(
                        getComputedStyle(t).transitionDuration) && i()
                })
            }

            function s({
                src: e,
                srcset: t,
                sizes: s
            }) {
                const i = new Image;
                return i.src = e, t && (i.srcset = t), s && (i.sizes = s), "decode" in i ? new Promise((e, t) => {
                    i.decode().then(() => {
                        e(i)
                    }).catch(() => {
                        t(i)
                    })
                }) : new Promise((e, t) => {
                    i.onload = e(i), i.onerror = t(i)
                })
            }

            function i(e) {
                let t, s;
                const {
                    imgHeight: i,
                    imgWidth: l,
                    containerHeight: n,
                    containerWidth: a,
                    canvasWidth: o,
                    canvasHeight: c,
                    imageSize: h
                } = e, r = i / l;
                return "cover" == h ? r < n / a ? s = (t = n) / r : t = (s = a) * r : "native" == h ? (t = i, s = l) : (r >
                    c / o ? s = (t = c) / r : t = (s = o) * r, "scale-down" === h && (s >= l || t >= i) && (s = l, t =
                        i)), {
                    height: t,
                    width: s
                }
            }

            function l(e) {
                return e.requestFullscreen ? e.requestFullscreen() : e.webkitRequestFullscreen ? e
                .webkitRequestFullscreen() : e.msRequestFullscreen ? e.msRequestFullscreen() : Promise.reject()
            }

            function n() {
                return document.exitFullscreen ? document.exitFullscreen() : document.webkitExitFullscreen ? document
                    .webkitExitFullscreen() : document.msExitFullscreen ? document.msExitFullscreen() : Promise.reject()
            }
            const a = {
                container: document.body,
                className: void 0,
                imageSize: "scale-down",
                fullScreen: !1,
                loop: !1,
                linkImages: !0,
                setIndex: 0,
                firstImageIndex: 0,
                lastImageIndex: !1,
                currentImageIndex: void 0,
                allowZoom: !0,
                closeOnBackgroundClick: !0,
                setTitle: function() {
                    return ""
                },
                description: function() {
                    return this.images[this.settings.currentImageIndex].title
                },
                pagination: function() {
                    const e = this.settings.lastImageIndex + 1;
                    return this.settings.currentImageIndex + 1 + "/" + e
                },
                afterInitialize() {},
                afterMarkup() {},
                afterImageLoad() {},
                afterClose() {},
                zoomedPaddingX: function(e, t) {
                    return 0
                },
                zoomedPaddingY: function(e, t) {
                    return 0
                }
            };
            class o {
                constructor(e, t) {
                    this.settings = t, this.elems = {}, this.images = [], this.events = [], this.state = {
                            fullScreenOpen: !1,
                            initialZoomState: null,
                            initialized: !1,
                            timer: !1,
                            visible: !1
                        }, this._cssClasses = ["chocolat-open", "chocolat-in-container", "chocolat-cover",
                            "chocolat-zoomable", "chocolat-zoomed", "chocolat-zooming-in", "chocolat-zooming-out"
                        ], NodeList.prototype.isPrototypeOf(e) || HTMLCollection.prototype.isPrototypeOf(e) ? e.forEach(
                            (e, t) => {
                                this.images.push({
                                    title: e.getAttribute("title"),
                                    src: e.getAttribute("href"),
                                    srcset: e.getAttribute("data-srcset"),
                                    sizes: e.getAttribute("data-sizes")
                                }), this.off(e, "click.chocolat"), this.on(e, "click.chocolat", e => {
                                    this.init(t), e.preventDefault()
                                })
                            }) : this.images = e, this.settings.container instanceof Element || this.settings
                        .container instanceof HTMLElement ? this.elems.container = this.settings.container : this.elems
                        .container = document.body, this.api = {
                            open: e => (e = parseInt(e) || 0, this.init(e)),
                            close: () => this.close(),
                            next: () => this.change(1),
                            prev: () => this.change(-1),
                            goto: e => this.open(e),
                            current: () => this.settings.currentImageIndex,
                            position: () => this.position(this.elems.img),
                            destroy: () => this.destroy(),
                            set: (e, t) => (this.settings[e] = t, t),
                            get: e => this.settings[e],
                            getElem: e => this.elems[e]
                        }
                }
                init(e) {
                    return this.state.initialized || (this.markup(), this.attachListeners(), this.settings
                            .lastImageIndex = this.images.length - 1, this.state.initialized = !0), this.settings
                        .afterInitialize.call(this), this.load(e)
                }
                load(e) {
                    if (this.state.visible || (this.state.visible = !0, setTimeout(() => {
                            this.elems.overlay.classList.add("chocolat-visible"), this.elems.wrapper.classList
                                .add("chocolat-visible")
                        }, 0), this.elems.container.classList.add("chocolat-open")), this.settings.fullScreen && l(this
                            .elems.wrapper), this.settings.currentImageIndex === e) return Promise.resolve();
                    let i, n, a = setTimeout(() => {
                            this.elems.loader.classList.add("chocolat-visible")
                        }, 1e3),
                        o = setTimeout(() => {
                            o = void 0, i = t(() => {
                                this.elems.imageCanvas.classList.remove("chocolat-visible")
                            }, this.elems.imageCanvas)
                        }, 80);
                    return s(this.images[e]).then(e => (n = e, o ? (clearTimeout(o), Promise.resolve()) : i)).then(
                () => {
                        const t = e + 1;
                        return null != this.images[t] && s(this.images[t]), this.settings.currentImageIndex = e,
                            this.elems.description.textContent = this.settings.description.call(this), this
                            .elems.pagination.textContent = this.settings.pagination.call(this), this.arrows(),
                            this.position(n).then(() => (this.elems.loader.classList.remove("chocolat-visible"),
                                clearTimeout(a), this.appear(n)))
                    }).then(() => {
                        this.elems.container.classList.toggle("chocolat-zoomable", this.zoomable(n, this.elems
                            .wrapper)), this.settings.afterImageLoad.call(this)
                    })
                }
                position({
                    naturalHeight: e,
                    naturalWidth: s
                }) {
                    const l = {
                            imgHeight: e,
                            imgWidth: s,
                            containerHeight: this.elems.container.clientHeight,
                            containerWidth: this.elems.container.clientWidth,
                            canvasWidth: this.elems.imageCanvas.clientWidth,
                            canvasHeight: this.elems.imageCanvas.clientHeight,
                            imageSize: this.settings.imageSize
                        },
                        {
                            width: n,
                            height: a
                        } = i(l);
                    return t(() => {
                        Object.assign(this.elems.imageWrapper.style, {
                            width: n + "px",
                            height: a + "px"
                        })
                    }, this.elems.imageWrapper)
                }
                appear(e) {
                    return this.elems.imageWrapper.removeChild(this.elems.img), this.elems.img = e, this.elems.img
                        .setAttribute("class", "chocolat-img"), this.elems.imageWrapper.appendChild(this.elems.img), t(
                        () => {
                            this.elems.imageCanvas.classList.add("chocolat-visible")
                        }, this.elems.imageCanvas)
                }
                change(e) {
                    if (!this.state.visible) return;
                    if (!this.settings.linkImages) return;
                    this.zoomOut();
                    const t = this.settings.currentImageIndex + parseInt(e);
                    if (t > this.settings.lastImageIndex) {
                        if (this.settings.loop) return this.load(this.settings.firstImageIndex)
                    } else {
                        if (!(t < this.settings.firstImageIndex)) return this.load(t);
                        if (this.settings.loop) return this.load(this.settings.lastImageIndex)
                    }
                }
                arrows() {
                    this.settings.loop ? (this.elems.left.classList.add("active"), this.elems.right.classList.add(
                        "active")) : this.settings.linkImages ? (this.elems.right.classList.toggle("active", this
                            .settings.currentImageIndex !== this.settings.lastImageIndex), this.elems.left.classList
                        .toggle("active", this.settings.currentImageIndex !== this.settings.firstImageIndex)) : (
                        this.elems.left.classList.remove("active"), this.elems.right.classList.remove("active"))
                }
                close() {
                    if (this.state.fullScreenOpen) return void n();
                    this.state.visible = !1;
                    const e = t(() => {
                            this.elems.overlay.classList.remove("chocolat-visible")
                        }, this.elems.overlay),
                        s = t(() => {
                            this.elems.wrapper.classList.remove("chocolat-visible")
                        }, this.elems.wrapper);
                    return Promise.all([e, s]).then(() => {
                        this.elems.container.classList.remove("chocolat-open"), this.settings.afterClose.call(
                            this)
                    })
                }
                destroy() {
                    for (let e = this.events.length - 1; e >= 0; e--) {
                        const {
                            element: t,
                            eventName: s
                        } = this.events[e];
                        this.off(t, s)
                    }
                    this.state.initialized && (this.state.fullScreenOpen && n(), this.settings.currentImageIndex =
                        void 0, this.state.visible = !1, this.state.initialized = !1, this.elems.container.classList
                        .remove(...this._cssClasses), this.elems.wrapper.parentNode.removeChild(this.elems.wrapper))
                }
                markup() {
                    this.elems.container.classList.add("chocolat-open", this.settings.className), "cover" == this
                        .settings.imageSize && this.elems.container.classList.add("chocolat-cover"), this.elems
                        .container !== document.body && this.elems.container.classList.add("chocolat-in-container"),
                        this.elems.wrapper = document.createElement("div"), this.elems.wrapper.setAttribute("id",
                            "chocolat-content-" + this.settings.setIndex), this.elems.wrapper.setAttribute("class",
                            "chocolat-wrapper"), this.elems.container.appendChild(this.elems.wrapper), this.elems
                        .overlay = document.createElement("div"), this.elems.overlay.setAttribute("class",
                            "chocolat-overlay"), this.elems.wrapper.appendChild(this.elems.overlay), this.elems.loader =
                        document.createElement("div"), this.elems.loader.setAttribute("class", "chocolat-loader"), this
                        .elems.wrapper.appendChild(this.elems.loader), this.elems.layout = document.createElement(
                        "div"), this.elems.layout.setAttribute("class", "chocolat-layout"), this.elems.wrapper
                        .appendChild(this.elems.layout), this.elems.top = document.createElement("div"), this.elems.top
                        .setAttribute("class", "chocolat-top"), this.elems.layout.appendChild(this.elems.top), this
                        .elems.center = document.createElement("div"), this.elems.center.setAttribute("class",
                            "chocolat-center"), this.elems.layout.appendChild(this.elems.center), this.elems.left =
                        document.createElement("div"), this.elems.left.setAttribute("class", "chocolat-left"), this
                        .elems.center.appendChild(this.elems.left), this.elems.imageCanvas = document.createElement(
                            "div"), this.elems.imageCanvas.setAttribute("class", "chocolat-image-canvas"), this.elems
                        .center.appendChild(this.elems.imageCanvas), this.elems.imageWrapper = document.createElement(
                            "div"), this.elems.imageWrapper.setAttribute("class", "chocolat-image-wrapper"), this.elems
                        .imageCanvas.appendChild(this.elems.imageWrapper), this.elems.img = document.createElement(
                            "img"), this.elems.img.setAttribute("class", "chocolat-img"), this.elems.imageWrapper
                        .appendChild(this.elems.img), this.elems.right = document.createElement("div"), this.elems.right
                        .setAttribute("class", "chocolat-right"), this.elems.center.appendChild(this.elems.right), this
                        .elems.bottom = document.createElement("div"), this.elems.bottom.setAttribute("class",
                            "chocolat-bottom"), this.elems.layout.appendChild(this.elems.bottom), this.elems.close =
                        document.createElement("span"), this.elems.close.setAttribute("class", "chocolat-close"), this
                        .elems.top.appendChild(this.elems.close), this.elems.description = document.createElement(
                            "span"), this.elems.description.setAttribute("class", "chocolat-description"), this.elems
                        .bottom.appendChild(this.elems.description), this.elems.pagination = document.createElement(
                            "span"), this.elems.pagination.setAttribute("class", "chocolat-pagination"), this.elems
                        .bottom.appendChild(this.elems.pagination), this.elems.setTitle = document.createElement(
                        "span"), this.elems.setTitle.setAttribute("class", "chocolat-set-title"), this.elems.setTitle
                        .textContent = this.settings.setTitle(), this.elems.bottom.appendChild(this.elems.setTitle),
                        this.elems.fullscreen = document.createElement("span"), this.elems.fullscreen.setAttribute(
                            "class", "chocolat-fullscreen"), this.elems.bottom.appendChild(this.elems.fullscreen), this
                        .settings.afterMarkup.call(this)
                }
                attachListeners() {
                    this.off(document, "keydown.chocolat"), this.on(document, "keydown.chocolat", e => {
                        this.state.initialized && (37 == e.keyCode ? this.change(-1) : 39 == e.keyCode ? this
                            .change(1) : 27 == e.keyCode && this.close())
                    });
                    const t = this.elems.wrapper.querySelector(".chocolat-right");
                    this.off(t, "click.chocolat"), this.on(t, "click.chocolat", () => {
                        this.change(1)
                    });
                    const s = this.elems.wrapper.querySelector(".chocolat-left");
                    this.off(s, "click.chocolat"), this.on(s, "click.chocolat", () => {
                        this.change(-1)
                    }), this.off(this.elems.close, "click.chocolat"), this.on(this.elems.close, "click.chocolat",
                        this.close.bind(this)), this.off(this.elems.fullscreen, "click.chocolat"), this.on(this
                        .elems.fullscreen, "click.chocolat", () => {
                            this.state.fullScreenOpen ? n() : l(this.elems.wrapper)
                        }), this.off(document, "fullscreenchange.chocolat"), this.on(document,
                        "fullscreenchange.chocolat", () => {
                            document.fullscreenElement || document.webkitCurrentFullScreenElement || document
                                .webkitFullscreenElement ? this.state.fullScreenOpen = !0 : this.state
                                .fullScreenOpen = !1
                        }), this.off(document, "webkitfullscreenchange.chocolat"), this.on(document,
                        "webkitfullscreenchange.chocolat", () => {
                            document.fullscreenElement || document.webkitCurrentFullScreenElement || document
                                .webkitFullscreenElement ? this.state.fullScreenOpen = !0 : this.state
                                .fullScreenOpen = !1
                        }), this.settings.closeOnBackgroundClick && (this.off(this.elems.overlay, "click.chocolat"),
                        this.on(this.elems.overlay, "click.chocolat", this.close.bind(this))), this.off(this.elems
                        .wrapper, "click.chocolat"), this.on(this.elems.wrapper, "click.chocolat", () => {
                        null !== this.state.initialZoomState && this.state.visible && (this.elems.container
                            .classList.add("chocolat-zooming-out"), this.zoomOut().then(() => {
                                this.elems.container.classList.remove("chocolat-zoomed"), this.elems
                                    .container.classList.remove("chocolat-zooming-out")
                            }))
                    }), this.off(this.elems.imageWrapper, "click.chocolat"), this.on(this.elems.imageWrapper,
                        "click.chocolat", e => {
                            null === this.state.initialZoomState && this.elems.container.classList.contains(
                                "chocolat-zoomable") && (e.stopPropagation(), this.elems.container.classList
                                .add("chocolat-zooming-in"), this.zoomIn(e).then(() => {
                                    this.elems.container.classList.add("chocolat-zoomed"), this.elems
                                        .container.classList.remove("chocolat-zooming-in")
                                }))
                        }), this.on(this.elems.wrapper, "mousemove.chocolat", e => {
                        if (null === this.state.initialZoomState || !this.state.visible) return;
                        const t = this.elems.wrapper.getBoundingClientRect(),
                            s = t.top + window.scrollY,
                            i = t.left + window.scrollX,
                            l = this.elems.wrapper.clientHeight,
                            n = this.elems.wrapper.clientWidth,
                            a = this.elems.img.width,
                            o = this.elems.img.height,
                            c = [e.pageX - n / 2 - i, e.pageY - l / 2 - s];
                        let h = 0;
                        if (a > n) {
                            const e = this.settings.zoomedPaddingX(a, n);
                            h = c[0] / (n / 2), h *= (a - n) / 2 + e
                        }
                        let r = 0;
                        if (o > l) {
                            const e = this.settings.zoomedPaddingY(o, l);
                            r = c[1] / (l / 2), r *= (o - l) / 2 + e
                        }
                        this.elems.img.style.marginLeft = -h + "px", this.elems.img.style.marginTop = -r + "px"
                    }), this.on(window, "resize.chocolat", t => {
                        this.state.initialized && this.state.visible && function(t, s) {
                            clearTimeout(e), e = setTimeout(function() {
                                s()
                            }, t)
                        }(50, () => {
                            const e = {
                                    imgHeight: this.elems.img.naturalHeight,
                                    imgWidth: this.elems.img.naturalWidth,
                                    containerHeight: this.elems.wrapper.clientHeight,
                                    containerWidth: this.elems.wrapper.clientWidth,
                                    canvasWidth: this.elems.imageCanvas.clientWidth,
                                    canvasHeight: this.elems.imageCanvas.clientHeight,
                                    imageSize: this.settings.imageSize
                                },
                                {
                                    width: t,
                                    height: s
                                } = i(e);
                            this.position(this.elems.img).then(() => {
                                this.elems.container.classList.toggle("chocolat-zoomable", this
                                    .zoomable(this.elems.img, this.elems.wrapper))
                            })
                        })
                    })
                }
                zoomable(e, t) {
                    const s = t.clientWidth,
                        i = t.clientHeight,
                        l = !(!this.settings.allowZoom || !(e.naturalWidth > s || e.naturalHeight > i)),
                        n = e.clientWidth > e.naturalWidth || e.clientHeight > e.naturalHeight;
                    return l && !n
                }
                zoomIn(e) {
                    return this.state.initialZoomState = this.settings.imageSize, this.settings.imageSize = "native",
                        this.position(this.elems.img)
                }
                zoomOut(e) {
                    return this.settings.imageSize = this.state.initialZoomState || this.settings.imageSize, this.state
                        .initialZoomState = null, this.elems.img.style.margin = 0, this.position(this.elems.img)
                }
                on(e, t, s) {
                    const i = this.events.push({
                        element: e,
                        eventName: t,
                        cb: s
                    });
                    e.addEventListener(t.split(".")[0], this.events[i - 1].cb)
                }
                off(e, t) {
                    const s = this.events.findIndex(s => s.element === e && s.eventName === t);
                    this.events[s] && (e.removeEventListener(t.split(".")[0], this.events[s].cb), this.events.splice(s,
                        1))
                }
            }
            const c = [];
            window.Chocolat = function(e, t) {
                const s = Object.assign({}, a, {
                        images: []
                    }, t, {
                        setIndex: c.length
                    }),
                    i = new o(e, s);
                return c.push(i), i
            }
        }();

        //--------------------------------
        // - jQuery Easing
        //--------------------------------
        /*
         * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
         *
         * Copyright Ã‚Â© 2008 George McGinley Smith
         * All rights reserved.
         *
         */
        jQuery.easing.jswing = jQuery.easing.swing;
        jQuery.extend(jQuery.easing, {
            def: "easeOutQuad",
            swing: function(e, f, a, h, g) {
                return jQuery.easing[jQuery.easing.def](e, f, a, h, g)
            },
            easeInQuad: function(e, f, a, h, g) {
                return h * (f /= g) * f + a
            },
            easeOutQuad: function(e, f, a, h, g) {
                return -h * (f /= g) * (f - 2) + a
            },
            easeInOutQuad: function(e, f, a, h, g) {
                if ((f /= g / 2) < 1) {
                    return h / 2 * f * f + a
                }
                return -h / 2 * ((--f) * (f - 2) - 1) + a
            },
            easeInCubic: function(e, f, a, h, g) {
                return h * (f /= g) * f * f + a
            },
            easeOutCubic: function(e, f, a, h, g) {
                return h * ((f = f / g - 1) * f * f + 1) + a
            },
            easeInOutCubic: function(e, f, a, h, g) {
                if ((f /= g / 2) < 1) {
                    return h / 2 * f * f * f + a
                }
                return h / 2 * ((f -= 2) * f * f + 2) + a
            },
            easeInQuart: function(e, f, a, h, g) {
                return h * (f /= g) * f * f * f + a
            },
            easeOutQuart: function(e, f, a, h, g) {
                return -h * ((f = f / g - 1) * f * f * f - 1) + a
            },
            easeInOutQuart: function(e, f, a, h, g) {
                if ((f /= g / 2) < 1) {
                    return h / 2 * f * f * f * f + a
                }
                return -h / 2 * ((f -= 2) * f * f * f - 2) + a
            },
            easeInQuint: function(e, f, a, h, g) {
                return h * (f /= g) * f * f * f * f + a
            },
            easeOutQuint: function(e, f, a, h, g) {
                return h * ((f = f / g - 1) * f * f * f * f + 1) + a
            },
            easeInOutQuint: function(e, f, a, h, g) {
                if ((f /= g / 2) < 1) {
                    return h / 2 * f * f * f * f * f + a
                }
                return h / 2 * ((f -= 2) * f * f * f * f + 2) + a
            },
            easeInSine: function(e, f, a, h, g) {
                return -h * Math.cos(f / g * (Math.PI / 2)) + h + a
            },
            easeOutSine: function(e, f, a, h, g) {
                return h * Math.sin(f / g * (Math.PI / 2)) + a
            },
            easeInOutSine: function(e, f, a, h, g) {
                return -h / 2 * (Math.cos(Math.PI * f / g) - 1) + a
            },
            easeInExpo: function(e, f, a, h, g) {
                return (f == 0) ? a : h * Math.pow(2, 10 * (f / g - 1)) + a
            },
            easeOutExpo: function(e, f, a, h, g) {
                return (f == g) ? a + h : h * (-Math.pow(2, -10 * f / g) + 1) + a
            },
            easeInOutExpo: function(e, f, a, h, g) {
                if (f == 0) {
                    return a
                }
                if (f == g) {
                    return a + h
                }
                if ((f /= g / 2) < 1) {
                    return h / 2 * Math.pow(2, 10 * (f - 1)) + a
                }
                return h / 2 * (-Math.pow(2, -10 * --f) + 2) + a
            },
            easeInCirc: function(e, f, a, h, g) {
                return -h * (Math.sqrt(1 - (f /= g) * f) - 1) + a
            },
            easeOutCirc: function(e, f, a, h, g) {
                return h * Math.sqrt(1 - (f = f / g - 1) * f) + a
            },
            easeInOutCirc: function(e, f, a, h, g) {
                if ((f /= g / 2) < 1) {
                    return -h / 2 * (Math.sqrt(1 - f * f) - 1) + a
                }
                return h / 2 * (Math.sqrt(1 - (f -= 2) * f) + 1) + a
            },
            easeInElastic: function(f, h, e, l, k) {
                var i = 1.70158;
                var j = 0;
                var g = l;
                if (h == 0) {
                    return e
                }
                if ((h /= k) == 1) {
                    return e + l
                }
                if (!j) {
                    j = k * 0.3
                }
                if (g < Math.abs(l)) {
                    g = l;
                    var i = j / 4
                } else {
                    var i = j / (2 * Math.PI) * Math.asin(l / g)
                }
                return -(g * Math.pow(2, 10 * (h -= 1)) * Math.sin((h * k - i) * (2 * Math.PI) / j)) + e
            },
            easeOutElastic: function(f, h, e, l, k) {
                var i = 1.70158;
                var j = 0;
                var g = l;
                if (h == 0) {
                    return e
                }
                if ((h /= k) == 1) {
                    return e + l
                }
                if (!j) {
                    j = k * 0.3
                }
                if (g < Math.abs(l)) {
                    g = l;
                    var i = j / 4
                } else {
                    var i = j / (2 * Math.PI) * Math.asin(l / g)
                }
                return g * Math.pow(2, -10 * h) * Math.sin((h * k - i) * (2 * Math.PI) / j) + l + e
            },
            easeInOutElastic: function(f, h, e, l, k) {
                var i = 1.70158;
                var j = 0;
                var g = l;
                if (h == 0) {
                    return e
                }
                if ((h /= k / 2) == 2) {
                    return e + l
                }
                if (!j) {
                    j = k * (0.3 * 1.5)
                }
                if (g < Math.abs(l)) {
                    g = l;
                    var i = j / 4
                } else {
                    var i = j / (2 * Math.PI) * Math.asin(l / g)
                }
                if (h < 1) {
                    return -0.5 * (g * Math.pow(2, 10 * (h -= 1)) * Math.sin((h * k - i) * (2 * Math.PI) / j)) +
                        e
                }
                return g * Math.pow(2, -10 * (h -= 1)) * Math.sin((h * k - i) * (2 * Math.PI) / j) * 0.5 + l + e
            },
            easeInBack: function(e, f, a, i, h, g) {
                if (g == undefined) {
                    g = 1.70158
                }
                return i * (f /= h) * f * ((g + 1) * f - g) + a
            },
            easeOutBack: function(e, f, a, i, h, g) {
                if (g == undefined) {
                    g = 1.70158
                }
                return i * ((f = f / h - 1) * f * ((g + 1) * f + g) + 1) + a
            },
            easeInOutBack: function(e, f, a, i, h, g) {
                if (g == undefined) {
                    g = 1.70158
                }
                if ((f /= h / 2) < 1) {
                    return i / 2 * (f * f * (((g *= (1.525)) + 1) * f - g)) + a
                }
                return i / 2 * ((f -= 2) * f * (((g *= (1.525)) + 1) * f + g) + 2) + a
            },
            easeInBounce: function(e, f, a, h, g) {
                return h - jQuery.easing.easeOutBounce(e, g - f, 0, h, g) + a
            },
            easeOutBounce: function(e, f, a, h, g) {
                if ((f /= g) < (1 / 2.75)) {
                    return h * (7.5625 * f * f) + a
                } else {
                    if (f < (2 / 2.75)) {
                        return h * (7.5625 * (f -= (1.5 / 2.75)) * f + 0.75) + a
                    } else {
                        if (f < (2.5 / 2.75)) {
                            return h * (7.5625 * (f -= (2.25 / 2.75)) * f + 0.9375) + a
                        } else {
                            return h * (7.5625 * (f -= (2.625 / 2.75)) * f + 0.984375) + a
                        }
                    }
                }
            },
            easeInOutBounce: function(e, f, a, h, g) {
                if (f < g / 2) {
                    return jQuery.easing.easeInBounce(e, f * 2, 0, h, g) * 0.5 + a
                }
                return jQuery.easing.easeOutBounce(e, f * 2 - g, 0, h, g) * 0.5 + h * 0.5 + a
            }
        });
    </script>
    <script type="text/javascript" src="{{ asset('asset/js/script.js') }}"></script>
    <script>
        (function($) {

            "use strict";

            var searchPopup = function() {
                // open search box
                $('#header-nav').on('click', '.search-button', function(e) {
                    $('.search-popup').toggleClass('is-visible');
                });

                $('#header-nav').on('click', '.btn-close-search', function(e) {
                    $('.search-popup').toggleClass('is-visible');
                });

                $(".search-popup-trigger").on("click", function(b) {
                        b.preventDefault();
                        $(".search-popup").addClass("is-visible"),
                            setTimeout(function() {
                                $(".search-popup").find("#search-popup").focus()
                            }, 350)
                    }),
                    $(".search-popup").on("click", function(b) {
                        ($(b.target).is(".search-popup-close") || $(b.target).is(".search-popup-close svg") ||
                            $(b.target).is(".search-popup-close path") || $(b.target).is(".search-popup")) && (b
                            .preventDefault(),
                            $(this).removeClass("is-visible"))
                    }),
                    $(document).keyup(function(b) {
                        "27" === b.which && $(".search-popup").removeClass("is-visible")
                    })
            }

            var initProductQty = function() {

                $('.product-qty').each(function() {

                    var $el_product = $(this);
                    var quantity = 0;

                    $el_product.find('.quantity-right-plus').click(function(e) {
                        e.preventDefault();
                        var quantity = parseInt($el_product.find('#quantity').val());
                        $el_product.find('#quantity').val(quantity + 1);
                    });

                    $el_product.find('.quantity-left-minus').click(function(e) {
                        e.preventDefault();
                        var quantity = parseInt($el_product.find('#quantity').val());
                        if (quantity > 0) {
                            $el_product.find('#quantity').val(quantity - 1);
                        }
                    });

                });

            }

            $(document).ready(function() {

                searchPopup();
                initProductQty();

                var swiper = new Swiper(".main-swiper", {
                    speed: 500,
                    navigation: {
                        nextEl: ".swiper-arrow-prev",
                        prevEl: ".swiper-arrow-next",
                    },
                });

                var swiper = new Swiper(".product-swiper", {
                    slidesPerView: 4,
                    spaceBetween: 10,
                    pagination: {
                        el: "#mobile-products .swiper-pagination",
                        clickable: true,
                    },
                    breakpoints: {
                        0: {
                            slidesPerView: 2,
                            spaceBetween: 20,
                        },
                        980: {
                            slidesPerView: 4,
                            spaceBetween: 20,
                        }
                    },
                });

                var swiper = new Swiper(".product-watch-swiper", {
                    slidesPerView: 4,
                    spaceBetween: 10,
                    pagination: {
                        el: "#smart-watches .swiper-pagination",
                        clickable: true,
                    },
                    breakpoints: {
                        0: {
                            slidesPerView: 2,
                            spaceBetween: 20,
                        },
                        980: {
                            slidesPerView: 4,
                            spaceBetween: 20,
                        }
                    },
                });

                var swiper = new Swiper(".testimonial-swiper", {
                    loop: true,
                    navigation: {
                        nextEl: ".swiper-arrow-prev",
                        prevEl: ".swiper-arrow-next",
                    },
                });

            }); // End of a document ready

        })(jQuery);
    </script>
</body>

</html> --}}









































@extends('user.part.master')
@section('title', 'product')
@section('content')
<section id="selling-product" class="single-product padding-xlarge">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6">
                <div class="product-preview mb-3">
                    <img src="{{ asset('asset/images/product-item1.jpg') }}" alt="single-product"
                        class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="product-info">
                    <div class="element-header">
                        <h3 itemprop="name" class="display-7 text-uppercase">Pink Watch</h3>
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
                        <strong class="text-primary display-6 fw-bold">$870.00</strong>
                    </div>
                    <p>Justo, cum feugiat imperdiet nulla molestie ac vulputate scelerisque amet. Bibendum
                        adipiscing platea blandit sit sed quam semper rhoncus. Diam ultrices maecenas consequat eu
                        tortor orci, cras lectus mauris, cras egestas quam venenatis neque.</p>
                    <div class="cart-wrap padding-small">
                        <div class="color-options product-select">
                            <div class="color-toggle" data-option-index="0">
                                <h4 class="item-title text-uppercase text-dark text-decoration-underline">Color:
                                </h4>
                                <ul class="select-list list-unstyled d-flex">
                                    <li class="select-item pe-3" data-val="Green" title="Green">
                                        <a href="#">Green</a>
                                    </li>
                                    <li class="select-item pe-3" data-val="Orange" title="Orange">
                                        <a href="#">Orange</a>
                                    </li>
                                    <li class="select-item pe-3" data-val="Red" title="Red">
                                        <a href="#">Red</a>
                                    </li>
                                    <li class="select-item" data-val="Black" title="Black">
                                        <a href="#">Black</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="swatch product-select" data-option-index="1">
                            <h4 class="item-title text-uppercase text-dark text-decoration-underline">Size:</h4>
                            <ul class="select-list list-unstyled d-flex">
                                <li data-value="S" class="select-item pe-3">
                                    <a href="#">XL</a>
                                </li>
                                <li data-value="M" class="select-item pe-3">
                                    <a href="#">L</a>
                                </li>
                                <li data-value="L" class="select-item pe-3">
                                    <a href="#">M</a>
                                </li>
                                <li data-value="L" class="select-item">
                                    <a href="#">S</a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-quantity">
                            <div class="stock-number text-dark">2 in stock</div>
                            <div class="stock-button-wrap pt-3">

                                <div class="input-group product-qty">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-number"
                                            data-type="minus" data-field="">
                                            -
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity"
                                        class="form-control input-number" value="1" min="1"
                                        max="100">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-number"
                                            data-type="plus" data-field="">
                                            +
                                        </button>
                                    </span>
                                </div>
                                <div class="qty-button d-flex flex-wrap pt-3">
                                    <button type="submit"
                                        class="btn btn-primary btn-medium text-uppercase me-3 mt-3">Buy
                                        now</button>
                                    <button type="submit" name="add-to-cart" value="1269"
                                        class="btn btn-black btn-medium text-uppercase mt-3">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="meta-product py-2">
                        <div class="meta-item d-flex align-items-baseline">
                            <h4 class="item-title no-margin pe-2">SKU:</h4>
                            <ul class="select-list list-unstyled d-flex">
                                <li data-value="S" class="select-item">1223</li>
                            </ul>
                        </div>
                        <div class="meta-item d-flex align-items-baseline">
                            <h4 class="item-title no-margin pe-2">Category:</h4>
                            <ul class="select-list list-unstyled d-flex">
                                <li data-value="S" class="select-item">
                                    <a href="#">Watch</a>,
                                </li>
                                <li data-value="S" class="select-item">
                                    <a href="#"> Screen touch</a>,
                                </li>
                            </ul>
                        </div>
                        <div class="meta-item d-flex align-items-baseline">
                            <h4 class="item-title no-margin pe-2">Tags:</h4>
                            <ul class="select-list list-unstyled d-flex">
                                <li data-value="S" class="select-item">
                                    <a href="#">Classic</a>,
                                </li>
                                <li data-value="S" class="select-item">
                                    <a href="#"> Modern</a>
                                </li>
                            </ul>
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
                    <div class="nav nav-tabs d-flex flex-wrap justify-content-center" id="nav-tab"
                        role="tablist">
                        <button class="nav-link active text-uppercase pe-5" id="nav-home-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab"
                            aria-controls="nav-home" aria-selected="true">Description</button>
                        <button class="nav-link text-uppercase pe-5" id="nav-information-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-information" type="button" role="tab"
                            aria-controls="nav-information" aria-selected="false">Additional information</button>
                        <button class="nav-link text-uppercase pe-5" id="nav-review-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-review" type="button" role="tab"
                            aria-controls="nav-review" aria-selected="false">Reviews</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active border-top border-bottom padding-small" id="nav-home"
                        role="tabpanel" aria-labelledby="nav-home-tab">
                        <p>Product Description</p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat
                            mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper
                            suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam
                            porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices
                            nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique
                            cursus.</p>
                        <ul style="list-style-type:disc;" class="list-unstyled ps-4">
                            <li>Donec nec justo eget felis facilisis fermentum.</li>
                            <li>Suspendisse urna viverra non, semper suscipit pede.</li>
                            <li>Aliquam porttitor mauris sit amet orci.</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat
                            mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper
                            suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam
                            porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices
                            nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique
                            cursus. </p>
                    </div>
                    <div class="tab-pane fade border-top border-bottom padding-small" id="nav-information"
                        role="tabpanel" aria-labelledby="nav-information-tab">
                        <p>It is Comfortable and Best</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="tab-pane fade border-top border-bottom padding-small" id="nav-review"
                        role="tabpanel" aria-labelledby="nav-review-tab">
                        <div class="review-box d-flex flex-wrap">
                            <div class="col-lg-6 d-flex flex-wrap">
                                <div class="col-md-2">
                                    <div class="image-holder">
                                        <img src="asset/images/review-item1.jpg" alt="review"
                                            class="img-fluid">
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
                                        <img src="asset/images/review-item2.jpg" alt="review"
                                            class="img-fluid">
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
                                <img src="asset/images/product-item4.jpg" alt="product-item"
                                    class="product-image">
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
                                <img src="asset/images/product-item5.jpg" alt="product-item"
                                    class="product-image">
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




















{{-- @extends('user.part.master')
 @section('title', 'product')
 @section('content')
 <style>
    /*
Theme Name: Ministore
Theme URI:
Author:
Author URI:
Description: Ministore is specially designed product packaged for Ministore by Moksha.
Version:
*/

/*--------------------------------------------------------------
This is main CSS file that contains custom style rules used in this template
--------------------------------------------------------------*/

/*------------------------------------*\
Table of contents
\*------------------------------------*/

/*------------------------------------------------

CSS STRUCTURE:


/*--------------------------------------------------------------
/** 1. VARIABLES
--------------------------------------------------------------*/
:root {
--accent-color:             #717171;
--white-color:              #fff;
--black-color:              #000;
--gray-color:               #F3F3F3;
--gray-color-300:           #D8D8D8;
--gray-color-500:           #AEAEAE;
--gray-color-800:           #3A3A3A;
--light-gray-color:         #D7DDDF;
--primary-color:            #72AEC8;
--bs-primary-rgb:           114,174,200;
--light-color:              #f8f9fa;
--dark-color:               #212529;
--light-blue-color:         #EDF1F3;
--navbar-color-color:       #131814;
--swiper-theme-color:       #4A4A4A;
--swiper-pagination-color:  #4A4A4A;

}

/* on mobile devices below 600px
*/
@media screen and (max-width: 600px) {
:root {
    --header-height : 100px;
    --header-height-min   : 80px;
}
}

/* Fonts */
:root {
--body-font           : "Lato", sans-serif;
--heading-font        : "Jost", sans-serif;
}

/*----------------------------------------------*/
/* 1 GENERAL TYPOGRAPHY */
/*----------------------------------------------*/

/* 1.1 General Styles
/*----------------------------------------------*/
*, *::before, *::after {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
html {
box-sizing: border-box;
}
body {
font-family: var(--body-font);
font-size: 14px;
font-weight: 500;
line-height: 1.6;
margin: 0;
}
p {
font-size: 1.2em;
color: var(--gray-color-500);
}
ul.inner-list li {
font-size: 1.2em;
}
a {
color: var(--dark-color);
text-decoration: none;
transition: 0.3s color ease-out;
}
a.light {
color: var(--light-color);
}
a:hover {
text-decoration: none;
color: var(--primary-color);
}

/*------------ Background Color -----------*/
.bg-gray {
background: var(--gray-color);
}
.bg-dark {
background: var(--dark-color);
}
.bg-light {
background: var(--light-color);
}
.bg-light-blue {
background: var(--light-blue-color);
}

/* - Section Padding
--------------------------------------------------------------*/
.padding-xsmall {
padding-top: 0.5em;
padding-bottom: 0.5em;
}
.padding-small {
padding-top: 2em;
padding-bottom: 2em;
}
.padding-medium {
padding-top: 4em;
padding-bottom: 4em;
}
.padding-large {
padding-top: 7em;
padding-bottom: 7em;
}
.padding-xlarge {
padding-top: 9.5em;
padding-bottom: 9.5em;
}

/* no padding */
.no-padding-top {
padding-top: 0 !important;
}
.no-padding-right {
padding-right: 0 !important;
}
.no-padding-bottom {
padding-bottom: 0 !important;
}
.no-padding-left {
padding-left: 0 !important;
}
.no-padding-tb {
padding-top: 0 !important;
padding-bottom: 0 !important;
}
.no-padding-lr {
padding-left: 0 !important;
padding-right: 0 !important;
}
.no-gutter {
padding: 0 !important;
}

/* no padding and margin */
.no-padding {
padding: 0 !important;
}
.no-margin {
margin: 0 !important;
}

/* - Section margin
--------------------------------------------------------------*/
.margin-small {
margin-top: 3em;
margin-bottom: 3em;
}
.margin-medium {
margin-top: 5em;
margin-bottom: 5em;
}
.margin-large {
margin-top: 7em;
margin-bottom: 7em;
}
.margin-xlarge {
margin-top: 9em;
margin-bottom: 9em;
}

@media only screen and (max-width: 768px) {
.margin-small,
.margin-medium,
.margin-large {
margin-top: 1em;
margin-bottom: 1em;
}
}


/* - Section Title
--------------------------------------------------------------*/
h3.card-title,
h3.cart-title {
font-size: 1.5em;
}

/* - Section width
--------------------------------------------------------------*/
.u-full-width {
width: 100%;
border: none;
}

/*--------------------------------------------------------------
/** 2.10 Buttons
--------------------------------------------------------------*/
/* - Button Sizes
------------------------------------------------------------- */
.btn.btn-small {
padding: 0.8em 1.8em;
font-size: 0.65em;
}
.btn.btn-medium {
padding: 0.8em 2.8em;
font-size: 1.1em;
letter-spacing: 2px;
}
.btn.btn-large {
padding: 2.4em 5.1em;
font-size: 1.8em;
}

/* - Button Shapes
------------------------------------------------------------- */
.btn.btn-rounded,
.btn.btn-rounded::after {
border-radius: 6px;
}
.btn.btn-pill,
.btn.btn-pill::after {
border-radius: 2em;
}
/* button outline */
.btn.btn-outline-dark,
.btn.btn-outline-light,
.btn.btn-outline-accent {
background: transparent;
text-shadow: none;
box-shadow: none;
}
.btn.btn-outline-dark:hover::after,
.btn.btn-outline-light:hover::after {
background-color: transparent;
}
.btn.btn-outline-dark {
border-color: rgba(0,0,0,1);
color: var(--dark-color);
}
.btn.btn-outline-dark:hover {
background: var(--dark-color);
color: var(--light-color);
}
.btn.btn-outline-light {
border-color: rgba(255,255,255,0.5);
color: var(--light-color);
}
.btn.btn-outline-light:hover {
background: var(--primary-color);
color: var(--light-color);
border-color: var(--primary-color);
}
.btn.btn-outline-accent {
background: transparent;
border-color: var(--accent-color);
color: var(--dark-color);
}
.btn.btn-outline-accent:hover {
border-color: var(--dark-color);
color: var(--dark-color) !important;
}
.btn.btn-full {
display: block;
margin: .85em 0;
width: 100%;
letter-spacing: 0.12em;
}

/* no border radius */
.btn-rounded-none,
.btn-rounded-none::after {
border-radius: 0;
}

/* - Buttons Color Scheme
------------------------------------------------------------- */
.btn.btn-normal {
text-decoration: underline;
border: none;
}
.btn.btn-normal:hover {
text-decoration: none;
}
.btn.btn-accent {
color: var(--light-color);
background-color: var(--accent-color);
border: none;
}
.btn.btn-accent:hover {
color: var(--light-color) !important;
background-color: var(--primary-color);
}
.btn.btn-black {
background-color: var(--dark-color);
color: var(--light-color);
border: none;
}
.btn.btn-black:hover {
background-color: var(--primary-color);
color: var(--light-color);
}
.btn.btn-light {
background-color: var(--light-color);
color: var(--dark-color);
border: none;
}
.btn.btn-light:hover {
background-color: var(--primary-color);
color: var(--light-color);
}
.btn.btn-primary {
background: var(--primary-color);
color: var(--light-color);
border: none;
}
.btn.btn-primary:hover {
background-color: var(--dark-color);
color: var(--light-color);
}

/* - Buttons Aligns
------------------------------------------------------------- */
.btn-left {
text-align: left;
display: block;
}
.btn-center {
text-align: center;
display: block;
}
.btn-right {
text-align: right;
display: block;
}

/*----------------------------------------------*/
/* 2 SITE STRUCTURE */
/*----------------------------------------------*/

/* - Search Bar
------------------------------------------------------------- */
.search-box {
background: var(--gray-color);
position: relative;
}
.close-button {
position: absolute;
top: 20px;
right: 120px;
cursor: pointer;
z-index: 9;
}
.search-box input.search-input {
font-size: 1.3em;
width: 70%;
height: 30px;
padding: 25px;
border-radius: 80px;
border-color: rgb(0 0 0 / 25%);
background: transparent;
}
.search-box svg {
width: 22px;
height: 22px;
color: var(--primary-color);
}
.search-box svg.search {
margin-left: -50px;
}


/** Search Form
--------------------------------------------------------------*/
.search-form input[type="search"].search-field {
border: none;
background: #f1f1f1;
width: 100%;
border-radius: 50px;
padding: 10px 40px;
}
.search-form input[type="search"].search-field::focus {
border-color: #af9aaa;
}
.search-form button {
position: absolute;
top: 6px;
right: 9px;
background: transparent;
border: none;
}

/** Search Popup
--------------------------------------------------------------*/
.search-popup {
background-color: #fff;
position: fixed;
left: 0;
top: 0;
width: 100%;
height: 100%;
opacity: 0;
visibility: hidden;
z-index: 9999;
-webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
-moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
transition: opacity 0.3s 0s, visibility 0s 0.3s;
}
.search-popup.is-visible {
opacity: 1;
visibility: visible;
cursor: -webkit-image-set(url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Cpath fill='%23FFF' d='M20 1l-1-1-9 9-9-9-1 1 9 9-9 9 1 1 9-9 9 9 1-1-9-9'/%3E%3C/svg%3E") 1x, url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Cpath fill='%23000' d='M20 1l-1-1-9 9-9-9-1 1 9 9-9 9 1 1 9-9 9 9 1-1-9-9'/%3E%3C/svg%3E") 2x), pointer;
cursor: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'%3E%3Cpath fill='%23000' d='M20 1l-1-1-9 9-9-9-1 1 9 9-9 9 1 1 9-9 9 9 1-1-9-9'/%3E%3C/svg%3E"), pointer;
-webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
-moz-transition: opacity 0.3s 0s, visibility 0s 0s;
transition: opacity 0.3s 0s, visibility 0s 0s;
}
.search-popup-container {
background-color: transparent;
position: relative;
top: 50%;
margin: 0 auto;
padding: 0;
width: 90%;
max-width: 800px;
text-align: center;
box-shadow: none;
cursor: default;
-webkit-transform: translateY(-40px);
transform: translateY(-40px);
-webkit-backface-visibility: hidden;
-webkit-transition-property: -webkit-transform;
transition-property: transform;
-webkit-transition-duration: 0.3s;
transition-duration: 0.3s;
}
.is-visible .search-popup-container {
-webkit-transform: translateY(-50%);
transform: translateY(-50%);
}
.search-popup-form {
position: relative;
margin: 0 0 3em 0;
}
.search-popup-form .form-control {
padding: 0 0 .375em 0;
font-size: 2em;
}
.search-popup-form #search-popup-submit {
display: none;
}
.search-popup .search-popup-close {
display: block;
position: absolute;
top: 2em;
right: 2em;
margin: -0.5em;
padding: 0.5em;
line-height: 0;
}
.search-popup .search-popup-close:hover {
-webkit-transform: rotate(90deg);
-ms-transform: rotate(90deg);
transform: rotate(90deg);
}
.search-popup .search-popup-close i {
display: block;
position: relative;
width: 1em;
height: 1em;
fill: rgba(0,0,0,0.5);
}
.search-popup .search-popup-close:hover i {
fill: rgba(0,0,0,1);
}
.search-popup .cat-list-title {
margin-top: 40px;
margin-bottom: 10px;
font-size: 0.6em;
font-weight: normal;
text-transform: uppercase;
letter-spacing: 0.1em;
}
.search-popup .cat-list {
margin: 0;
list-style-type: none;
}
.search-popup .cat-list-item {
display: inline-block;
margin-bottom: 0;
letter-spacing: 0.015em;
font-size: 2em;
}
.search-popup .cat-list-item a {
position: relative;
}
.search-popup .cat-list-item a::after {
background: none repeat scroll 0 0 #fff;
content: "";
height: 1px;
border-bottom: 1px solid #ff9697;
left: 0;
opacity: 0;
position: absolute;
top: 100%;
width: 100%;
-webkit-transition: height 0.3s,opacity 0.3s,-webkit-transform 0.3s;
transition: height 0.3s,opacity 0.3s,transform 0.3s;
-webkit-transform: translateY(-5px);
transform: translateY(-5px);
}
.search-popup .cat-list-item a:hover::after {
height: 1px;
opacity: 1;
-webkit-transform: translateY(2px);
transform: translateY(2px);
}
.search-popup .cat-list-item::after {
content: "/";
padding: 0 5px;
line-height: 1;
color: rgba(0, 0, 0, 0.5);
vertical-align: text-top;
}
.search-popup .cat-list-item:last-child::after {
display: none;
}

@media only screen and (max-width: 991px) {
.search-popup .cat-list-item,
.search-popup-form .form-control {
font-size: 1.425em;
}
}
@media only screen and (max-width: 767px) {
.search-popup .search-popup-close {
top: 1em;
right: 1em;
}
}
@media only screen and (max-width: 575px) {
.search-popup .cat-list-item,
.search-popup-form .form-control {
font-size: 1.125em;
}
.search-popup .search-popup-close {
top: 1em;
right: 1em;
}
}

.search-popup input[type="search"] {
font-size: 24px;
height: 60px;
padding: 26px;
}
.search-popup .search-form button {
top: 12px;
right: 15px;
}
.search-popup .search-form button svg {
height: 28px;
width: 28px;
}


/* 1. Header
/*----------------------------------------------*/
.site-header {
position: fixed;
width: 100%;
z-index: 10;
transition: background 0.3s ease-out;
}
.navbar-toggler svg.navbar-icon {
width: 50px;
height: 50px;
}
.navbar-nav .nav-item a.nav-link {
color: var(--accent-color);
}
.navbar-nav .nav-item a.nav-link.active,
.navbar-nav .nav-item a.nav-link:focus,
.navbar-nav .nav-item a.nav-link:hover {
color: var(--primary-color);
}

/*------------ Offcanvas -------------- */
#header-nav .navbar-toggler:focus {
box-shadow: none;
}
#header-nav .offcanvas.show {
z-index: 9999;
background-color: var(--light-blue-color);
}
#header-nav .offcanvas-end {
width: 500px;
}
.offcanvas.show .nav-item a.nav-link {
font-size: 2em;
}
.offcanvas.show .offcanvas-body .navbar-nav {
align-items: unset!important;
padding-left: 20px;
}

/*------------ Top User Icons -----------*/
.site-header .user-items svg {
width: 18px;
height: 18px;
cursor: pointer;
}

@media only screen and (max-width: 991px) {
#navbar .user-items {
display: none;
}
}


/* 2. Billboard
/*----------------------------------------------*/
/*------------Swiper Arrow -----------*/
#billboard .swiper-arrow {
position: absolute;
top: 0;
bottom: 0;
z-index: 2;
display: flex;
align-items: center;
}
.swiper-icon.swiper-arrow svg {
fill: var(--light-gray-color);
}
.swiper-icon.swiper-arrow:hover svg,
.swiper-icon.swiper-arrow:focus svg {
fill: var(--primary-color);
}
#billboard .swiper-arrow.swiper-arrow-prev {
left: 0;
}
#billboard .swiper-arrow.swiper-arrow-next {
right: 0;
}

@media only screen and (max-width: 767px) {
#billboard .banner-content {
  margin-top: 210px;
}
#billboard .image-holder {
  margin-top: -390px;
  opacity: 0.3;
}
#billboard .swiper-arrow {
  top: 400px;
}
}

/* 3. Icon Box - Company Services
/*----------------------------------------------*/
.icon-box .icon-box-icon svg {
width: 26px;
height: 26px;
fill: var(--primary-color);
}

@media only screen and (max-width: 991px) {
#company-services .icon-box {
flex-wrap: wrap;
}
}

/* 4. Product
/*----------------------------------------------*/
.product-store .product-card .cart-concern {
bottom: 75px;
width: 100%;
display: flex;
justify-content: center;
cursor: pointer;
text-transform: uppercase;
transition: all 0.3s ease-out;
opacity: 0;
}
.product-store .product-card:hover .cart-concern {
bottom: 90px;
opacity: 1;
}
.product-card .cart-concern svg {
width: 16px;
height: 16px;
fill: var(--light-color);
margin-left: 9px;
}
.product-card .card-detail span {
font-size: 1.5em;
}

@media only screen and (max-width: 575px) {
.product-store .product-card .card-detail {
  padding: 10px;
}
}

/*------------Swiper Pagination -----------*/
.product-store .swiper-pagination.swiper-pagination-clickable.swiper-pagination-bullets.swiper-pagination-horizontal {
bottom: 35px;
}
.swiper-pagination span.swiper-pagination-bullet {
width: 15px;
height: 15px;
}

/* 5. Testimonial
/*----------------------------------------------*/
.review-item blockquote {
font-size: 2.5em;
font-weight: 300;
line-height: 1.2;
}
.rating svg.star {
width: 16px;
height: 16px;
fill: var(--primary-color);
}
#testimonials .swiper-arrow svg {
width: 45px;
height: 45px;
fill: var(--light-gray-color);
}
.review-content .swiper-arrow {
top: 0;
bottom: 0;
z-index: 2;
}
.review-content .swiper-arrow.swiper-arrow-next {
right: 0;
}
.review-content .quotation svg.quote {
color: var(--light-blue-color);
}

@media only screen and (max-width: 767px) {
#testimonials blockquote {
  font-size: 2em;
}
.review-content .swiper-arrow {
  bottom: -420px;
}
}

/* 6. Subscribe
/*----------------------------------------------*/
.subscribe-content p {
color: var(--gray-color-500);
}

@media only screen and (max-width: 1199px) {
.subscription-form input.form-control,
.subscription-form button {
  width: 100%;
  margin-bottom: 10px;
}
}

/* 7. Instagram
/*----------------------------------------------*/
#instagram figure.instagram-item {
width: 20%;
}
figure.instagram-item img.insta-image {
width: 100%;
height: 100%;
object-fit: cover;
}
.instagram-item .icon-overlay {
top: 30px;
left: 0;
width: 100%;
height: auto;
color: var(--light-color);
opacity: 0;
transition: 0.9s ease-out;
}
.instagram-item:hover .icon-overlay {
top: 0;
opacity: 1;
}
.instagram-item .icon-overlay svg.instagram {
height: 50px;
}

@media only screen and (max-width: 767px) {
#instagram figure.instagram-item {
  width: 30%;
}
}

@media only screen and (max-width: 501px) {
#instagram figure.instagram-item {
  width: 100%;
}
}

/* 8. Footer
/*----------------------------------------------*/
/*------------ Social Icon -----------*/
.social-links svg {
width: 20px;
height: 20px;
color: var(--light-gray-color);
}
.social-links svg:hover {
color: var(--primary-color);
}
.social-links li {
padding-right: 30px;
}


/* 9. About Us Page
/*----------------------------------------------*/
/*------------ Video Icon -----------*/
.video-item a {
top: 0;
right: 0;
bottom: 0;
left: 0;
}
.video-item svg.video-player {
width: 80px;
height: 80px;
padding: 19px;
border-radius: 50%;
}

/* - Shop Page
--------------------------------------------------------------*/
/* ----------- Search Bar -----------*/
.shopify-grid select#input-sort {
font-size: 1.2em;
color: var(--dark-grey-color);
border: none;
padding: 0;
text-align: center;
}

/* ----------- SideBar -----------*/
.sidebar input.search-field {
width: 290px;
height: 50px;
box-shadow: 5px 5px 15px 5px #eee;
border: 1px solid #eee;
padding-left: 20px;
outline-offset: 0;
}
.sidebar .search-icon {
padding: 14px;
}
.sidebar svg.search {
width: 20px;
height: 20px;
}
.sidebar h5.widget-title {
font-size: 1.4em;
margin-bottom: 15px;
}
.sidebar .sidebar-list li {
font-size: 1.2em;
}
.sidebar .sidebar-list li a {
color: var(--dark-30);
}
.sidebar .sidebar-list li a:hover {
color: var(--primary-color);
}

@media only screen and (max-width: 991px) {
.widget-search-bar form {
  flex-wrap: wrap;
}
}

/* ----------- Pagination -----------*/
.paging-navigation .pagination .page-numbers {
font-size: 1.4em;
color: var(--gray-color-500);
}
.paging-navigation .pagination .page-numbers:hover {
color: var(--primary-color);
}
.paging-navigation .pagination svg {
width: 35px;
}


/* 10. Single Product Page
/*----------------------------------------------*/
/*------------ Product Info -----------*/
.product-info .rating svg.star-fill {
fill: var(--dark-color);
}
.product-info .select-list li.select-item {
font-size: 1.2em;
}
.product-quantity .input-group {
width: 140px;
gap: 2px;
}
.product-quantity #quantity {
height: auto;
width: 20px;
border: none;
margin: 0;
padding: 0;
}
.product-quantity #quantity,
.product-quantity .btn-number {
width: 40px;
height: 40px;
text-align: center;
background: #FFFFFF;
border: 1px solid #E2E2E2;
border-radius: 6px;
color: #222;
padding: 0;
}
.single-product .cart-wrap h4.item-title {
font-size: 1.5em;
}
.single-product .product-quantity .stock-number {
font-size: 1.2em;
}
.meta-product h4.item-title {
font-size: 1.2em;
}

/*------------ Product Info Tabs -----------*/
.product-info-tabs .tabs-listing button {
font-size: 2em;
color: var(--dark-color);
}
.product-info-tabs .nav-tabs .nav-link {
border: none;
}
.product-info-tabs .nav-tabs .nav-item.show .nav-link,
.product-info-tabs .nav-tabs .nav-link.active {
color: var(--primary-color);
}


@media only screen and (max-width: 991px) {
.product-info-tabs .tabs-listing button {
  font-size: 1.2em;
  padding-right: 20px!important;
}
}


/* 10. Cart Page
-----------------------------------------------------*/
.shopify-cart .card-price .money {
font-size: 1.5em;
}
.shopify-cart .total-price .money {
font-size: 2.9em;
}
.total-price .cart-totals {
font-size: 1.5em;
}
.shopify-cart .table th {
width: 30%;
}


/* 11. Checkout Page
--------------------------------------------------------------*/
.list-group-item span {
font-size: 1.2em;
}


/* 12. Blog Page
--------------------------------------------------------------*/
/*------------ Sidebar -----------*/
.sidebar-post-item h4.card-title {
font-size: 1.2em;
}

/* 13. Sibgle Post Page
--------------------------------------------------------------*/
#single-post-navigation .post-navigation span.page-nav-title {
font-size: 1.5em;
}
.post-navigation svg {
width: 30px;
height: 45px;
}
.post-navigation:hover svg,
.post-navigation:focus svg {
fill: var(--primary-color);
}
</style>
 <section id="selling-product" class="single-product padding-xlarge">
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-6">
          <div class="product-preview mb-3">
            <img src="{{ asset('asset/images/product-item1.jpg') }}" alt="single-product" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="product-info">
            <div class="element-header">
              <h3 itemprop="name" class="display-7 text-uppercase">Pink Watch</h3>
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
              <strong class="text-primary display-6 fw-bold">$870.00</strong>
            </div>
            <p>Justo, cum feugiat imperdiet nulla molestie ac vulputate scelerisque amet. Bibendum adipiscing platea blandit sit sed quam semper rhoncus. Diam ultrices maecenas consequat eu tortor orci, cras lectus mauris, cras egestas quam venenatis neque.</p>
            <div class="cart-wrap padding-small">
              <div class="color-options product-select">
                <div class="color-toggle" data-option-index="0">
                  <h4 class="item-title text-uppercase text-dark text-decoration-underline">Color:</h4>
                  <ul class="select-list list-unstyled d-flex">
                    <li class="select-item pe-3" data-val="Green" title="Green">
                      <a href="#">Green</a>
                    </li>
                    <li class="select-item pe-3" data-val="Orange" title="Orange">
                      <a href="#">Orange</a>
                    </li>
                    <li class="select-item pe-3" data-val="Red" title="Red">
                      <a href="#">Red</a>
                    </li>
                    <li class="select-item" data-val="Black" title="Black">
                      <a href="#">Black</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="swatch product-select" data-option-index="1">
                <h4 class="item-title text-uppercase text-dark text-decoration-underline">Size:</h4>
                <ul class="select-list list-unstyled d-flex">
                  <li data-value="S" class="select-item pe-3">
                    <a href="#">XL</a>
                  </li>
                  <li data-value="M" class="select-item pe-3">
                    <a href="#">L</a>
                  </li>
                  <li data-value="L" class="select-item pe-3">
                    <a href="#">M</a>
                  </li>
                  <li data-value="L" class="select-item">
                    <a href="#">S</a>
                  </li>
                </ul>
              </div>
              <div class="product-quantity">
                <div class="stock-number text-dark">2 in stock</div>
                <div class="stock-button-wrap pt-3">

                  <div class="input-group product-qty">
                      <span class="input-group-btn">
                          <button type="button" class="quantity-left-minus btn btn-number"  data-type="minus" data-field="">
                            -
                          </button>
                      </span>
                      <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                      <span class="input-group-btn">
                          <button type="button" class="quantity-right-plus btn btn-number" data-type="plus" data-field="">
                              +
                          </button>
                      </span>
                  </div>
                  <div class="qty-button d-flex flex-wrap pt-3">
                    <button type="submit" class="btn btn-primary btn-medium text-uppercase me-3 mt-3">Buy now</button>
                    <button type="submit" name="add-to-cart" value="1269" class="btn btn-black btn-medium text-uppercase mt-3">Add to cart</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="meta-product py-2">
              <div class="meta-item d-flex align-items-baseline">
                <h4 class="item-title no-margin pe-2">SKU:</h4>
                <ul class="select-list list-unstyled d-flex">
                  <li data-value="S" class="select-item">1223</li>
                </ul>
              </div>
              <div class="meta-item d-flex align-items-baseline">
                <h4 class="item-title no-margin pe-2">Category:</h4>
                <ul class="select-list list-unstyled d-flex">
                  <li data-value="S" class="select-item">
                    <a href="#">Watch</a>,
                  </li>
                  <li data-value="S" class="select-item">
                    <a href="#"> Screen touch</a>,
                  </li>
                </ul>
              </div>
              <div class="meta-item d-flex align-items-baseline">
                <h4 class="item-title no-margin pe-2">Tags:</h4>
                <ul class="select-list list-unstyled d-flex">
                  <li data-value="S" class="select-item">
                    <a href="#">Classic</a>,
                  </li>
                  <li data-value="S" class="select-item">
                    <a href="#"> Modern</a>
                  </li>
                </ul>
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
              <button class="nav-link active text-uppercase pe-5" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
              <button class="nav-link text-uppercase pe-5" id="nav-information-tab" data-bs-toggle="tab" data-bs-target="#nav-information" type="button" role="tab" aria-controls="nav-information" aria-selected="false">Additional information</button>
              <button class="nav-link text-uppercase pe-5" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Reviews</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active border-top border-bottom padding-small" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <p>Product Description</p>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus.</p>
              <ul style="list-style-type:disc;" class="list-unstyled ps-4">
                <li>Donec nec justo eget felis facilisis fermentum.</li>
                <li>Suspendisse urna viverra non, semper suscipit pede.</li>
                <li>Aliquam porttitor mauris sit amet orci.</li>
              </ul>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>
            </div>
            <div class="tab-pane fade border-top border-bottom padding-small" id="nav-information" role="tabpanel" aria-labelledby="nav-information-tab">
              <p>It is Comfortable and Best</p>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="tab-pane fade border-top border-bottom padding-small" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
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
                      <p>Vitae tortor condimentum lacinia quis vel eros donec ac. Nam at lectus urna duis convallis convallis</p>
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
                      <p>Vitae tortor condimentum lacinia quis vel eros donec ac. Nam at lectus urna duis convallis convallis</p>
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
@endsection --}}
