@extends('user.part.master')
@section('title', 'Cart')
@section('content')
@php
    $total=[];
    $totalPrice=0;
@endphp
@include('user.part.hero',['name'=>'Cart'])

    <section class="shopify-cart padding-large">
        <div class="container">
            <div class="row">
                <div class="cart-table">
                    <div class="cart-header">
                        <div class="row d-flex text-uppercase">
                            <h3 class="cart-title col-lg-4 pb-3">Product</h3>
                            <h3 class="cart-title col-lg-3 pb-3">Quantity</h3>
                            <h3 class="cart-title col-lg-4 pb-3">Subtotal</h3>
                        </div>
                    </div>
                    @if (auth()->user() != null)
                    @if (count($cart->products) > 0 && $cart != null)
                        @foreach ($cart->products as $product)
                            {{-- @dd($product) --}}
                            <div class="cart-item border-top border-bottom padding-small">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-md-3">
                                        <div class="cart-info d-flex flex-wrap align-items-center mb-4">
                                            <div class="col-lg-5">
                                                <div class="card-image">
                                                    <img src="{{ asset('storage/products/' . $product->image) }}"
                                                        alt="cloth" class="img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card-detail ps-3">
                                                    <h3 class="card-title text-uppercase">
                                                        <a
                                                            href="{{ route('user.product.show', $product) }}">{{ $product->name }}</a>
                                                    </h3>
                                                    <div class="card-price">
                                                        <span class="money text-primary"><x-price-after-discount
                                                                price="{{ $product->price }}"
                                                                discount="{{ $product->discount }}" />EGP</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7">
                                        <div class="row d-flex">
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center mb-3">
                                                    <a href="{{ route('cart.decrement', $product->id) }}"
                                                        class="quantity-control" style="font-size: 30px" data-action="minus"
                                                        data-product="{{ $product->id }}">-</a>
                                                    <label style="width: 100px"
                                                        class="form-control quantity-input mx-2">{{ $product->pivot->quantity }}</label>
                                                    {{-- <input type="text" style="width: 100px" class="form-control quantity-input mx-2" value="{{ $product->pivot->quantity }}" readonly> --}}
                                                    <a href="{{ route('cart.increment', $product->id) }}"
                                                        class="quantity-control" style="font-size: 30px" data-action="plus"
                                                        data-product="{{ $product->id }}">+</a>
                                                </div>
                                                {{-- <form action="">

                                            </form> --}}
                                                {{-- <div class="qty-field">
                                                <div class="qty-number d-flex">
                                                    <div class="quntity-button incriment-button">+</div>
                                                    <input class="spin-number-output bg-light no-margin" type="text"
                                                        readonly="" value="0">
                                                    <div class="quntity-button decriment-button">-</div>
                                                </div>
                                                <div class="regular-price"></div>
                                                <div class="quantity-output text-center bg-primary"></div>
                                            </div> --}}
                                            </div>
                                            <div class="col-md-4">
                                                <div class="total-price">
                                                    <span class=" text-primary">

                                                        <h5>

                                                            <x-price-after-discount price="{{ $product->price }}"
                                                                discount="{{ $product->discount }}" /> X
                                                            {{ $product->pivot->quantity }} =
                                                            <x-price-after-discount price="{{ $product->price }}"
                                                                discount="{{ $product->discount }}"
                                                                quantity="{{ $product->pivot->quantity }}" /> EGP
                                                        </h5>

@php
    $total[]= ($product->price * (1 - ($product->discount / 100)) * $product->pivot->quantity) ;
@endphp
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-2">
                                        <div class="cart-remove">

                                            <form id="delete_form" action="{{ route('cart.destroy', $product->id) }}"
                                                method="post">
                                                @method('delete') <!-- Method spoofing for DELETE request -->
                                                @csrf <!-- CSRF token for security -->

                                                <a href="javascript:$('form#delete_form').submit();">
                                                    <svg class="close" width="38px">
                                                        <use xlink:href="#close"></use>
                                                    </svg>
                                                </a>

                                                {{-- <button type="submit"></button> --}}
                                            </form>
                                            {{-- <a href="{{ route('cart.destroy',$product->id) }}">
                                            <svg class="close" width="38px">
                                                <use xlink:href="#close"></use>
                                            </svg>
                                        </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    @endif
                    {{-- <div class="cart-item border-top border-bottom padding-small">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-3">
                                <div class="cart-info d-flex flex-wrap align-items-center mb-4">
                                    <div class="col-lg-5">
                                        <div class="card-image">
                                            <img src="images/cart-item2.jpg" alt="cloth" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card-detail">
                                            <h3 class="card-title text-uppercase">
                                                <a href="#">Pink watch</a>
                                            </h3>
                                            <div class="card-price">
                                                <span class="money text-primary" data-currency-usd="$1200.00">$870.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7">
                                <div class="row d-flex">
                                    <div class="col-lg-6">
                                        <div class="qty-field">
                                            <div class="qty-number d-flex">
                                                <div class="quntity-button incriment-button">+</div>
                                                <input class="spin-number-output bg-light no-margin" type="text"
                                                    readonly="" value="0">
                                                <div class="quntity-button decriment-button">-</div>
                                            </div>
                                            <div class="regular-price"></div>
                                            <div class="quantity-output text-center bg-primary"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="total-price">
                                            <span class="money text-primary">$870.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2">
                                <div class="cart-remove">
                                    <a href="#">
                                        <svg class="close" width="38px">
                                            <use xlink:href="#close"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="cart-totals bg-grey padding-medium">
                    <h2 class="display-7 text-uppercase text-dark pb-4">Cart Totals</h2>
                    <div class="total-price pb-5">
                        <table cellspacing="0" class="table text-uppercase">
                            <tbody>
                                <tr class="subtotal pt-2 pb-2 border-top border-bottom">
                                    <th>Subtotal</th>
                                    <td data-title="Subtotal">
                                        <span class="price-amount amount text-primary ps-5">
                                            {{-- <bdi>
                                                @dd($total)
                                                @foreach ($total as $singlePrice)
                                                {{ $singlePrice }}
                                                <span class="price-currency-symbol">EGP </span>

                                                @endforeach
                                            </bdi> --}}
                                            <bdi>
                                                {{-- Loop through the $total array --}}
                                                @foreach ($total as $key => $singlePrice)
                                                    {{ $singlePrice }} EGP
                                                    {{-- Display "+" after each price except the last one --}}
                                                    @if ($loop->remaining > 0)
                                                        +
                                                    @endif
                                                    @php
                                                        $totalPrice += $singlePrice;
                                                    @endphp
                                                @endforeach
                                            </bdi>
                                        </span>
                                    </td>
                                </tr>
                                <tr class="order-total pt-2 pb-2 border-bottom">
                                    <th>Total</th>
                                    <td data-title="Total">
                                        <span class="price-amount amount text-primary ps-5">
                                            <bdi>
                                            {{ $totalPrice }}
                                                <span class="price-currency-symbol">EGP</span>
                                            </bdi>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="button-wrap">
                        {{-- <button class="btn btn-black btn-medium text-uppercase me-2 mb-3 btn-rounded-none">Update
                            Cart</button> --}}
                        {{-- <button class="btn btn-black btn-medium text-uppercase me-2 mb-3 btn-rounded-none">Continue
                            Shopping</button> --}}
                            <a  class="btn btn-black btn-medium text-uppercase me-2 mb-3 btn-rounded-none" style="text-decoration: none" href="{{ route('user.product.index') }}">Continue
                                Shopping</a>
                        <button class="btn btn-black btn-medium text-uppercase mb-3 btn-rounded-none">Proceed to
                            checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
