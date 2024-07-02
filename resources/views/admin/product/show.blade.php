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
                <h4 class="content-title mb-0 my-auto">{{ trans('main-sidebar_trans.doctors') }}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    {{ trans('main-sidebar_trans.view_all') }}</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    {{-- @include('admin-asset/assets.messages_alert') --}}
    <!-- row opened -->


    {{-- <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">{{ __('website/admin.category_create') }}</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
            </div>
            <div class=" p-5  col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card  box-shadow-0 ">

                    <div class="card-body pt-3">
                        @csrf
                        <div class="">
                            <div class="form-group">

                                <h6>{{ __('website/admin.category_name') }}</h6>
                                <label class="form-control">{{ $category->name }} </label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body h-100">
                    <div class="row row-sm ">
                        <div class=" col-xl-5 col-lg-12 col-md-12">
                            <div class="preview-pic tab-content">
                              <div class="tab-pane active" id="pic-1"><img src="{{URL::asset('storage/products/'.$product->image)}}" alt="image"/></div>
                              {{-- <div class="tab-pane" id="pic-2"><img src="{{URL::asset('admin-asset/assets/img/ecommerce/shirt-2.png')}}" alt="image"/></div>
                              <div class="tab-pane" id="pic-3"><img src="{{URL::asset('admin-asset/assets/img/ecommerce/shirt-3.png')}}" alt="image"/></div>
                              <div class="tab-pane" id="pic-4"><img src="{{URL::asset('admin-asset/assets/img/ecommerce/shirt-4.png')}}" alt="image"/></div>
                              <div class="tab-pane" id="pic-5"><img src="{{URL::asset('admin-asset/assets/img/ecommerce/shirt-1.png')}}" alt="image"/></div> --}}
                            </div>
                            {{-- <ul class="preview-thumbnail nav nav-tabs">
                              <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{URL::asset('admin-asset/assets/img/ecommerce/shirt-5.png')}}" alt="image"/></a></li>
                              <li><a data-target="#pic-2" data-toggle="tab"><img src="{{URL::asset('admin-asset/assets/img/ecommerce/shirt-2.png')}}" alt="image"/></a></li>
                              <li><a data-target="#pic-3" data-toggle="tab"><img src="{{URL::asset('admin-asset/assets/img/ecommerce/shirt-3.png')}}" alt="image"/></a></li>
                              <li><a data-target="#pic-4" data-toggle="tab"><img src="{{URL::asset('admin-asset/assets/img/ecommerce/shirt-4.png')}}" alt="image"/></a></li>
                              <li><a data-target="#pic-5" data-toggle="tab"><img src="{{URL::asset('admin-asset/assets/img/ecommerce/shirt-1.png')}}" alt="image"/></a></li>
                            </ul> --}}
                        </div>
                        <div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0">
                            <h4 class="product-title mb-1">{{ $product->name }}</h4>
                            <p class="text-muted tx-13 mb-1">{{ $product->description }}</p>
                            {{-- <div class="rating mb-1">
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star text-muted"></span>
                                    <span class="fa fa-star text-muted"></span>
                                </div>
                                <span class="review-no">41 reviews</span>
                            </div> --}}
                            <h6 class="price">current price: <span class="h3 ml-2"><x-price-after-discount price="{{ $product->price }}" discount="{{ $product->discount }}" /></span></h6>
                            <p class="product-description">{{ $product->additonal_information }}</p>
                            {{-- <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p> --}}
                            <div class="sizes d-flex">sizes:
                               {{ $product->size }}
                                {{-- <span class="size d-flex"  data-toggle="tooltip" title="small"><label class="rdiobox mb-0"><input checked="" name="rdio" type="radio"> <span class="font-weight-bold">s</span></label></span>
                                <span class="size d-flex"  data-toggle="tooltip" title="medium"><label class="rdiobox mb-0"><input name="rdio" type="radio"> <span>m</span></label></span>
                                <span class="size d-flex"  data-toggle="tooltip" title="large"><label class="rdiobox mb-0"><input name="rdio" type="radio"> <span>l</span></label></span>
                                <span class="size d-flex"  data-toggle="tooltip" title="extra-large"><label class="rdiobox mb-0"><input name="rdio" type="radio"> <span>xl</span></label></span> --}}
                            </div>
                            <div class="colors d-flex  mt-2">
                                <span class="mt-2">colors: {{ $product->color }}</span>


                                {{--
                                <div class="row gutters-xs ml-4">
                                    <div class="mr-2">
                                        <label class="colorinput">
                                            <input name="color" type="radio" value="azure" class="colorinput-input" checked="">
                                            <span class="colorinput-color bg-danger"></span>
                                        </label>
                                    </div>
                                    <div class="mr-2">
                                        <label class="colorinput">
                                            <input name="color" type="radio" value="indigo" class="colorinput-input">
                                            <span class="colorinput-color bg-secondary"></span>
                                        </label>
                                    </div>
                                    <div class="mr-2">
                                        <label class="colorinput">
                                            <input name="color" type="radio" value="purple" class="colorinput-input">
                                            <span class="colorinput-color bg-dark"></span>
                                        </label>
                                    </div>
                                    <div class="mr-2">
                                        <label class="colorinput">
                                            <input name="color" type="radio" value="pink" class="colorinput-input">
                                            <span class="colorinput-color bg-pink"></span>
                                        </label>
                                    </div>
                                </div>
                                    --}}
                            </div>
                            <div class="d-flex  ">
                                {{-- @dd($product->admin) --}}
                                <div class=" product-title">seller:
                                    @if ($product->seller!=null)
                                    {{ $product->seller->name }}

                                    @else
                                    {{ $product->admin->name }}
                                    @endif
                                    {{-- {{ $product->seller }} --}}
                                    </div>
                                {{-- <div class="d-flex ml-2">
                                    <ul class=" mb-0 qunatity-list">
                                        <li>
                                            <div class="form-group">
                                                <select name="quantity" id="select-countries17" class="form-control nice-select wd-100">
                                                    <option value="1" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                            <div class="d-flex  ">
                                <div class=" product-title">stock: {{ $product->stock }}</div>
                                {{-- <div class="d-flex ml-2">
                                    <ul class=" mb-0 qunatity-list">
                                        <li>
                                            <div class="form-group">
                                                <select name="quantity" id="select-countries17" class="form-control nice-select wd-100">
                                                    <option value="1" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                            {{-- <div class="action">
                                <button class="add-to-cart btn btn-danger" type="button">ADD TO WISHLIST</button>
                                <button class="add-to-cart btn btn-success" type="button">ADD TO CART</button>
                            </div> --}}
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
