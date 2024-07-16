@extends('user.part.master')
@section('title', 'Orders')
@section('content')
<br>
<br>
<br>
<br>
<div class="col-xl-12">
    <div class="card">

        <div style="margin: auto" class=" p-5  col-lg-11 col-xl-11 col-md-11 col-sm-12">
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="">
                        <div class="form-group">
                            <div class="row">

                                <div class="col-6 mt-3">

                                    <h6>checkout_name</h6>
                                    <label class="form-control">{{ $checkout->info->first_name }} </label>
                                </div>
                                <div class="col-6 mt-3">

                                    <h6>checkout_name</h6>
                                    <label class="form-control">{{ $checkout->info->last_name }} </label>
                                </div>
                                <div class="col-6 mt-3">

                                    <h6>company_name</h6>
                                    <label class="form-control">{{ $checkout->info->company_name }} </label>
                                </div>
                                <div class="col-6 mt-3">

                                    <h6>country</h6>
                                    <label class="form-control">{{ $checkout->info->country }} </label>
                                </div>
                                <div class="col-6 mt-3">

                                    <h6>street_address</h6>
                                    <label class="form-control">{{ $checkout->info->street_address }} </label>
                                </div>
                                <div class="col-6 mt-3">

                                    <h6>appartment_info</h6>
                                    <label class="form-control">{{ $checkout->info->appartment_info }} </label>
                                </div>
                                <div class="col-6 mt-3">

                                    <h6>city</h6>
                                    <label class="form-control">{{ $checkout->info->city }} </label>
                                </div>
                                <div class="col-6 mt-3">

                                    <h6>state</h6>
                                    <label class="form-control">{{ $checkout->info->state }} </label>
                                </div>
                                <div class="col-6 mt-3">

                                    <h6>phone</h6>
                                    <label class="form-control">{{ $checkout->info->phone }} </label>
                                </div>
                                <div class="col-6 mt-3">

                                    <h6>email</h6>
                                    <label class="form-control">{{ $checkout->info->email }} </label>
                                </div>
                                <div class="col-12">

                                    <h6>Order_notes</h6>
                                    <textarea disabled cols="220" rows="5">{{ $checkout->info->Order_notes }}</textarea>
                                </div>
                            </div>
                            <div class="row row-sm">
                                @foreach ($checkout->products as $product)
                                <div class="col-md-6 col-lg-6 col-xl-4 col-sm-6 p-5">
                                    <div class="card">
                                        <a href="{{ route('user.product.show', $product) }}">
                                            <div class="card-body">
                                                <div  class="pro-img-box">
                                                    <img class="w-100" src="{{ URL::asset('storage/products/' . $product->image) }}" alt="product-image">
                                                    {{-- <a href="{{ route('admin.product.show', $product) }}" class="adtocart"> --}}
                                                        {{-- <i class="las la-shopping-cart"></i> --}}
                                                    {{-- </a> --}}
                                                </div>
                                                <div class="text-center pt-3">
                                                    <h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase">{{ $product->name }}</h3>
                                                    <h4 class="h5 mb-0 mt-2 text-center font-weight-bold text-danger">
                                                        <x-price-after-discount price="{{ $product->price }}" discount="{{ $product->discount }}" /> EGP
                                                        <span class="text-secondary font-weight-normal tx-13 ml-1 prev-price">{{ $product->price }} EGP</span>
                                                    </h4>
                                                    <h6>Quantity: {{ $product->pivot->quantity }}</h6>
                                                    <h6>Final Price:
                                                        <x-price-after-discount
                                                            price="{{ $product->price }}"
                                                            discount="{{ $product->discount }}"
                                                            quantity="{{ $product->pivot->quantity }}"
                                                        />
                                                    </h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                                {{-- @foreach ($checkout->products as $product)
                                    <a href="{{ route('admin.product.show', $product) }}">

                                        <div class="col-md-6 col-lg-6 col-xl-4  col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="pro-img-box">

                                                        <img class="w-100"
                                                            src="{{ URL::asset('storage/products/' . $product->image) }}"
                                                            alt="product-image">
                                                        <a href="{{ route('admin.product.show', $product) }}"
                                                            class="adtocart">
                                                            <i class="las la-shopping-cart "></i>
                                                        </a>
                                                    </div>
                                                    <div class="text-center pt-3">
                                                        <h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase">
                                                            {{ $product->name }}</h3>

                                                        <h4
                                                            class="h5 mb-0 mt-2 text-center font-weight-bold text-danger">
                                                            <x-price-after-discount price="{{ $product->price }}"
                                                                discount="{{ $product->discount }}" />EGP <span
                                                                class="text-secondary font-weight-normal tx-13 ml-1 prev-price">{{ $product->price }}EGP</span>
                                                        </h4>
                                                        <h6>quantity : {{ $product->pivot->quantity }}</h6>
                                                        <h6>final price : <x-price-after-discount
                                                                price="{{ $product->price }}"
                                                                discount="{{ $product->discount }}"
                                                                quantity="{{ $product->pivot->quantity }}" />
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach --}}
                                <div class="col-12 mt-3">

                                    <h6>final price</h6>
                                    <label class="form-control">{{ $checkout->total }} </label>
                                </div>



                                {{-- make status change in database for shiping or completed or pending for you and user  --}}
                            </div>
                            {{-- @dd($checkout->info) --}}


                            {{-- <label class="form-control">{{ $category->name }} </label> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
