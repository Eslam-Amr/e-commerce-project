@extends('user.part.master')
@section('title', 'Product')
@section('product-active', 'active')

@section('content')
@include('user.part.hero',['name'=>'Product'])

    {{-- <section class="hero-section position-relative bg-light-blue padding-medium">
        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="text-center padding-large no-padding-bottom">
                        <h1 class="display-2 text-uppercase text-dark">Shop</h1>
                        <div class="breadcrumbs">
                            <span class="item">
                                <a href="index.html">Home ></a>
                            </span>
                            <span class="item">Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <div class="shopify-grid padding-large">
        <div class="container">
            <div class="row">
                <main class="col-md-9">
                    <div class="filter-shop d-flex justify-content-between">
                        <div class="showing-product">
                            <p>
                                Showing
                                {{ ($products->currentPage() - 1) * $products->perPage() + 1 }}
                                –
                                {{ min($products->currentPage() * $products->perPage(), $totalProductsCount) }}
                                of
                                {{ $totalProductsCount }}
                                results
                            </p>
                        </div>
                        <div class="sort-by">
                            {{-- <a href="{{ request()->fullUrlWithQuery(['sort' => 'name']) }}">Sort by Name Asc</a>
<a href="{{ request()->fullUrlWithQuery(['sort' => '-name']) }}">Sort by Name Desc</a> --}}

                            {{-- <a href="{{ request()->fullUrlWithQuery(['sort' => 'name']) }}">Sort by Name Asc</a>
<a href="{{ request()->fullUrlWithQuery(['sort' => '-name']) }}">Sort by Name Desc</a> --}}

                            {{-- <form action="{{ url()->current() }}" method="GET">
    <input type="text" name="filter[search]" value="{{ request('filter.search') }}" placeholder="Filter by name">
    <button type="submit">Filter</button>
</form> --}}
                            <label for="input-sort">
                                <h6>

                                    sort
                                </h6>
                            </label>
                            <select id="input-sort" class="form-control" data-filter-sort="" data-filter-order=""
                                onchange="updateSort()">
                                <option value="">Default sorting</option>
                                <a href="{{ request()->fullUrlWithQuery(['sort' => 'name']) }}">
                                    <option value="name">
                                        Name (A - Z)

                                        {{-- Sort by Name Asc --}}
                                    </option>
                                </a>
                                <a href="{{ request()->fullUrlWithQuery(['sort' => '-name']) }}">
                                    <option value="-name">

                                        Name (Z - A)
                                        {{-- Sort by Name Desc --}}
                                    </option>
                                </a>
                                <a href="{{ request()->fullUrlWithQuery(['sort' => 'effective_price']) }}">
                                    <option value="effective_price">

                                        Price (Low-High) {{-- Sort by Name Desc --}}
                                    </option>
                                </a>
                                <a href="{{ request()->fullUrlWithQuery(['sort' => '-effective_price']) }}">
                                    <option value="-effective_price">

                                        Price (High-Low) {{-- Sort by Name Desc --}}
                                    </option>
                                </a>

                                {{-- <option value="">
                                    Name (A - Z)


                                </option> --}}
                                {{-- <option value="">
                                    Name (Z - A)
                                </option> --}}
                                {{-- <option value="">Price (Low-High)</option>
                                <option value="">Price (High-Low)</option> --}}
                                {{-- <option value="">Rating (Highest)</option>
                                <option value="">Rating (Lowest)</option>
                                <option value="">Model (A - Z)</option>
                                <option value="">Model (Z - A)</option> --}}
                            </select>
                        </div>
                    </div>
                    <div class="product-content product-store d-flex justify-content-between flex-wrap">
                        @if (count($products) > 0)

                            @foreach ($products as $product)
                                <a href="{{ route('user.product.show' , $product) }}">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product-card position-relative pe-3 pb-3">

                                            <div class="image-holder">
                                                {{-- <img src="asset/images/product-item1.jpg" alt="product-item" class="img-fluid"> --}}
                                                {{-- @dd(asset('storage/products/'.$product->image)) --}}
                                                <img src="{{ asset('storage/products/' . $product->image) }}"
                                                    alt="product-item" class="img-fluid">
                                            </div>
                                            <div class="cart-concern position-absolute">
                                                <div class="cart-button d-flex">
                                                    {{-- <div class="btn-left">
                                                        <a href="#" class="btn btn-medium btn-black">Add to Cart</a>
                                                        <svg class="cart-outline position-absolute">
                                                            <use xlink:href="#cart-outline"></use>
                                                        </svg>
                                                    </div> --}}
                                                    <form id="add_form" action="{{ route('cart.store',$product->id) }}" method="POST" >
                                                        @csrf
                                                        <a  href="javascript:$('form#add_form').submit();" class="btn btn-medium btn-black">Add to Cart<svg
                                                            class="cart-outline">
                                                            <use xlink:href="#cart-outline"></use>
                                                        </svg></a>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="card-detail d-flex justify-content-between pt-3 pb-3">
                                                <h3 class="card-title text-uppercase">
                                                    <a href="#">{{ $product->name }}</a>
                                                </h3>
                                                <span class="item-price text-primary">
                                                    <x-price-after-discount price="{{ $product->price }}"
                                                        discount="{{ $product->discount }}" />EGP
                                                    <span style="text-decoration: line-through">
                                                        <h6> {{ $product->price }}</h6>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @endif

                        <script>
                            function updateSort() {
                                const select = document.getElementById('input-sort');
                                const selectedValue = select.value;

                                const url = new URL(window.location.href);
                                url.searchParams.set('sort', selectedValue);

                                // Update the browser's URL
                                window.location.href = url.toString();
                            }

                            // Set the selected option based on the current sort parameter
                            document.addEventListener('DOMContentLoaded', (event) => {
                                const urlParams = new URLSearchParams(window.location.search);
                                const sort = urlParams.get('sort');
                                if (sort) {
                                    document.getElementById('input-sort').value = sort;
                                }
                            });
                        </script>

                    </div>
                    <nav class="navigation paging-navigation text-center padding-medium" role="navigation">
                        <div class="pagination loop-pagination d-flex justify-content-center align-items-center">
                    <div class="page-numbers">
                                {{ $products->appends(request()->query())->links() }}

                                {{-- {{ $products->links() }} --}}
                            </div>

                            {{-- <svg class="chevron-right ps-3">
                    <use xlink:href="#chevron-right"></use>
                  </svg> --}}
                            </a>
                        </div>
                    </nav>
                </main>
                <aside class="col-md-3">
                    <div class="sidebar">
                        <div class="widget-menu">

                            {{-- <form action="{{ url()->current() }}" method="GET">
    <input type="text" name="filter[name]" value="{{ request('filter.name') }}" placeholder="Filter by name">
    <button type="submit">Filter</button>
</form> --}}
                            <div class="widget-search-bar">
                                <form role="search" action="{{ url()->current() }}" method="GET" class="d-flex">
                                    <input class="search-field" placeholder="Search" name="filter[search]"
                                        value="{{ request('filter.search') }}" type="search">
                                    <div class="search-icon bg-dark">

                                        <a onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                            href="#">
                                            <svg class="search text-light">
                                                <use xlink:href="#search"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget-product-categories pt-5">
                            <h5 class="widget-title text-decoration-underline text-uppercase">Categories</h5>
                            <ul class="product-categories sidebar-list list-unstyled">
                                <li class="cat-item">
                                    <a href="{{ request()->fullUrlWithQuery([' filter[category.name]' => '']) }}">All</a>
                                </li>
                                {{--
                                filter[category.name]=eslam10 --}}
                                @if (count($categories) > 0)
                                    @foreach ($categories as $category)
                                        <li class="cat-item">
                                            <a
                                                href="{{ request()->fullUrlWithQuery(['filter[category.name]' => $category->name, 'page' => 1]) }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                @endif

                            </ul>
                        </div>

                        <div class="widget-price-filter pt-3">
                            <h5 class="widget-titlewidget-title text-decoration-underline text-uppercase">Filter By Price
                            </h5>
                            <div>

                                <x-price-range />
                            </div>
                            <ul class="product-tags sidebar-list list-unstyled">

                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>



@endsection
