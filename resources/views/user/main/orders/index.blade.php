@extends('user.part.master')
@section('title', 'Orders')
@section('order-active', 'active')

@section('content')
    @php
        $total = [];
        $totalPrice = 0;
    @endphp
    @include('user.part.hero', ['name' => 'Orders'])

    <section class="shopify-cart padding-large">
        <div class="container">
            <div class="row">
                <div class="cart-table">
                    <div class="cart-header">
                        <div class="row d-flex text-uppercase">
                            <h3 class="cart-title col-lg-1 pb-3">#</h3>
                            <h3 class="cart-title col-lg-3 pb-3">order date</h3>
                            <h3 class="cart-title col-lg-3 pb-3">total</h3>
                            <h3 class="cart-title col-lg-2 pb-3">status</h3>
                            <h3 class="cart-title col-lg-3 pb-3">action</h3>
                        </div>
                    </div>
                    {{-- @dd($allOrder) --}}
                    @if (auth()->user() != null)
                        @if (count($allOrder) > 0 && $allOrder != null)
                            @foreach ($allOrder as $order)
                                {{-- @dd($order) --}}
                                <div class="cart-item border-top border-bottom padding-small">
                                    <div class="row align-items-center">
                                        <div class="col-1">
                                            {{ $loop->iteration }}
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="card-detail ">
                                                <h3 class=" text-uppercase">
                                                    {{ $order->created_at->format('Y-m-d') }}
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <h4>

                                                {{ $order->total }}
                                            </h4>

                                        </div>
                                        <div class="col-2">
                                            <h4>

                                                {{ $order->status }}
                                            </h4>

                                        </div>
                                        <div class="col-3">
                                            <a href="{{ route('user.order.show',$order) }}" class="btn btn-secondary">more information</a>
                                            {{-- <a href="{{  }}" class="btn btn-secondary">cancel</a> --}}
                                            {{-- @dd($order) --}}
<x-cancel-button :order="$order"/>
{{--
cancel button make component if date not exced day can cancel and return amout to table of product
--}}
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        @endif
                    @endif

                </div>

            </div>
        </div>
    </section>
@endsection
