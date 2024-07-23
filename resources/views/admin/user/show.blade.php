@extends('admin.layouts.master')
@section('title')
    {{ trans('main-sidebar_trans.doctors') }}
@stop
@section('css')
    <link href="{{ URL::asset('admin-asset/assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}"
        rel="stylesheet" />
    <link href="{{ URL::asset('admin-asset/assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin-asset/assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" />
    <link href="{{ URL::asset('admin-asset/assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin-asset/assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('admin-asset/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{ URL::asset('admin-asset/assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ trans('website/admin.order_data') }}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    {{ trans('website/admin.view_all') }}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    {{-- @include('admin-asset/assets.messages_alert') --}}
    <!-- row opened -->


    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                {{-- <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">{{ __('website/admin.category_create') }}</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div> --}}
            </div>
            <div class=" p-5  col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card  box-shadow-0 ">
                    {{-- <div class="card-header">
                    <h4 class="card-title mb-1">Vertical Form</h4>
                    <p class="mb-2">It is Very Easy to Customize and it uses in your website apllication.</p>
                </div> --}}
                    <div class="card-body pt-3">
                        {{-- @csrf --}}
                        <div class="">
                            <div class="form-group">
                                {{-- <label for="exampleInputname1">{{ __("website/admin.category_name") }}</label>
                                <input name="name" type="name" class="form-control" id="exampleInputname1" placeholder="{{ __('website/admin.enter_category_name') }}">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}
                                {{-- @dd($checkout) --}}
                                <div class="row">

                                    <div class="col-6 mt-3">

                                        <h6>{{ __('website/admin.checkout_name') }}</h6>
                                        <label class="form-control">{{ $checkout->info->first_name }} </label>
                                    </div>
                                    <div class="col-6 mt-3">

                                        <h6>{{ __('website/admin.checkout_name') }}</h6>
                                        <label class="form-control">{{ $checkout->info->last_name }} </label>
                                    </div>
                                    <div class="col-6 mt-3">

                                        <h6>{{ __('website/admin.company_name') }}</h6>
                                        <label class="form-control">{{ $checkout->info->company_name }} </label>
                                    </div>
                                    <div class="col-6 mt-3">

                                        <h6>{{ __('website/admin.country') }}</h6>
                                        <label class="form-control">{{ $checkout->info->country }} </label>
                                    </div>
                                    <div class="col-6 mt-3">

                                        <h6>{{ __('website/admin.street_address') }}</h6>
                                        <label class="form-control">{{ $checkout->info->street_address }} </label>
                                    </div>
                                    <div class="col-6 mt-3">

                                        <h6>{{ __('website/admin.appartment_info') }}</h6>
                                        <label class="form-control">{{ $checkout->info->appartment_info }} </label>
                                    </div>
                                    <div class="col-6 mt-3">

                                        <h6>{{ __('website/admin.city') }}</h6>
                                        <label class="form-control">{{ $checkout->info->city }} </label>
                                    </div>
                                    <div class="col-6 mt-3">

                                        <h6>{{ __('website/admin.state') }}</h6>
                                        <label class="form-control">{{ $checkout->info->state }} </label>
                                    </div>
                                    <div class="col-6 mt-3">

                                        <h6>{{ __('website/admin.phone') }}</h6>
                                        <label class="form-control">{{ $checkout->info->phone }} </label>
                                    </div>
                                    <div class="col-6 mt-3">

                                        <h6>{{ __('website/admin.email') }}</h6>
                                        <label class="form-control">{{ $checkout->info->email }} </label>
                                    </div>
                                    <div class="col-12">

                                        <h6>{{ __('website/admin.Order_notes') }}</h6>
                                        <textarea disabled cols="180" rows="10">{{ $checkout->info->Order_notes }}</textarea>
                                        {{-- <label class="form-control">{{ $checkout->info->email }} </label> --}}
                                    </div>
                                </div>
                                <div class="row row-sm">

                                    @foreach ($checkout->products as $product)
                                        {{-- @dd($product) --}}
                                        <a href="{{ route('admin.product.show', $product) }}">

                                            <div class="col-md-6 col-lg-6 col-xl-4  col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="pro-img-box">
                                                            {{-- <div class="d-flex product-sale">
                    <div class="badge bg-pink">New</div>
                    <i class="mdi mdi-heart-outline ml-auto wishlist"></i>
                </div> --}}
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
                                                            {{-- @dd($product->pivot) --}}
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
                                    @endforeach
                                    <div class="col-12 mt-3">

                                        <h6>{{ __('website/admin.final_price') }}</h6>
                                        {{-- @dd($checkout) --}}
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


    <!-- /row -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!-- Internal Data tables -->
    <script src="{{ URL::asset('admin-asset/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('admin-asset/assets/js/table-data.js') }}"></script>

    <!--Internal  Notify js -->
    <script src="{{ URL::asset('admin-asset/assets/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/notify/js/notifit-custom.js') }}"></script>
@endsection
