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
                        <form method="post" action="{{ route('product.store') }}">
                            @csrf
                            <div class=" col-12">
                                <div class="form-group col-6">
                                    <label for="exampleInputname1">{{ __('website/admin.product_name') }}</label>
                                    <input name="name" type="name" class="form-control" id="exampleInputname1"
                                        placeholder="{{ __('website/admin.enter_product_name') }}">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputdiscount1">{{ __('website/admin.product_discount') }}</label>
                                    <input name="discount" type="number" class="form-control" id="exampleInputdiscount1"
                                        placeholder="{{ __('website/admin.enter_product_discount') }}">
                                    <x-input-error :messages="$errors->get('discount')" class="mt-2" />

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputstock1">{{ __('website/admin.product_stock') }}</label>
                                    <input name="stock" type="number" class="form-control" id="exampleInputstock1"
                                        placeholder="{{ __('website/admin.enter_product_stock') }}">
                                    <x-input-error :messages="$errors->get('stock')" class="mt-2" />

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputcolor1">{{ __('website/admin.product_color') }}</label>
                                    <input name="color" type="text" class="form-control" id="exampleInputcolor1"
                                        placeholder="{{ __('website/admin.enter_product_color') }}">
                                    <x-input-error :messages="$errors->get('color')" class="mt-2" />

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputsize1">{{ __('website/admin.product_size') }}</label>
                                    <input name="size" type="text" class="form-control" id="exampleInputsize1"
                                        placeholder="{{ __('website/admin.enter_product_size') }}">
                                    <x-input-error :messages="$errors->get('size')" class="mt-2" />

                                </div>
                                <div class="form-group">
                                    <label
                                        for="exampleInputdescription1">{{ __('website/admin.product_description') }}</label>
                                    <textarea name="description" id="exampleInputdescription1" cols="30"
                                        placeholder="{{ __('website/admin.enter_product_description') }}" rows="10"></textarea>
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />

                                </div>
                                <div class="form-group">
                                    <label
                                        for="exampleInputadditonal_information1">{{ __('website/admin.product_additonal_information') }}</label>
                                    <textarea name="additonal_information" id="exampleInputadditonal_information1" cols="30"
                                        placeholder="{{ __('website/admin.enter_product_additonal_information') }}" rows="10"></textarea>
                                    <x-input-error :messages="$errors->get('additonal_information')" class="mt-2" />

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputcategory1">{{ __('website/admin.product_category') }}</label>
                                    <select class="form-control" name="category_id" id="exampleInputcategory1">
                                        <option selected disabled>{{ __('website/admin.choose_product_category') }}
                                        </option>
                                        @if (count($categories) > 0)
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        @endif

                                    </select>


                                    <x-input-error :messages="$errors->get('category_id')" class="mt-2" />

                                </div>

                            </div>
                            <button type="submit"
                                class="btn btn-primary mt-3 mb-0">{{ __('website/admin.submit') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">{{ __('website/admin.product_create') }}</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
            </div>
            <div class="p-5 col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card box-shadow-0">
                    {{-- <div class="card-header">
                    <h4 class="card-title mb-1">Vertical Form</h4>
                    <p class="mb-2">It is Very Easy to Customize and it uses in your website application.</p>
                </div> --}}
                    <div class="card-body pt-3">
                        <form method="post" action="{{ route('product.update',$product) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputname1">{{ __('website/admin.product_name') }}</label>
                                    <input value="{{ $product->name }}" name="name" type="name" class="form-control" id="exampleInputname1"
                                        placeholder="{{ __('website/admin.enter_product_name') }}">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputdiscount1">{{ __('website/admin.product_discount') }}</label>
                                    <input value="{{ $product->discount }}" name="discount" type="number" class="form-control" id="exampleInputdiscount1"
                                        placeholder="{{ __('website/admin.enter_product_discount') }}">
                                    <x-input-error :messages="$errors->get('discount')" class="mt-2" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputstock1">{{ __('website/admin.product_stock') }}</label>
                                    <input value="{{ $product->stock }}" name="stock" type="number" class="form-control" id="exampleInputstock1"
                                        placeholder="{{ __('website/admin.enter_product_stock') }}">
                                    <x-input-error :messages="$errors->get('stock')" class="mt-2" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputcolor1">{{ __('website/admin.product_color') }}</label>
                                    <input value="{{ $product->color }}" name="color" type="text" class="form-control" id="exampleInputcolor1"
                                        placeholder="{{ __('website/admin.enter_product_color') }}">
                                    <x-input-error :messages="$errors->get('color')" class="mt-2" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputsize1">{{ __('website/admin.product_size') }}</label>
                                    <input value="{{ $product->size }}" name="size" type="text" class="form-control" id="exampleInputsize1"
                                        placeholder="{{ __('website/admin.enter_product_size') }}">
                                    <x-input-error :messages="$errors->get('size')" class="mt-2" />
                                </div>
                                {{-- @dd($categories[0]->id) --}}
                                <div class="form-group col-md-6">
                                    <label for="exampleInputcategory1">{{ __('website/admin.product_category') }}</label>
                                    <select class="form-control"  name="category_id" id="exampleInputcategory1">
                                        {{-- <option selected disabled>{{ __('website/admin.choose_product_category') }}</option> --}}
                                        @if (count($categories) > 0)
                                            @foreach ($categories as $category)
                                            @if ($product->category_id==$category->id)
                                            <option selected value="{{ $category->id }}">{{ $category->name }}</option>

                                            @else
                                            <option  value="{{ $category->id }}">{{ $category->name }}</option>

                                            @endif
                                            @endforeach
                                        @endif
                                    </select>
                                    <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputadditonal_information1">{{ __('website/admin.product_additonal_information') }}</label>
                                    <textarea  name="additonal_information" id="exampleInputadditonal_information1" class="form-control" cols="30"
                                        placeholder="{{ __('website/admin.enter_product_additonal_information') }}" rows="10">{{ $product->additonal_information }}</textarea>
                                    <x-input-error :messages="$errors->get('additonal_information')" class="mt-2" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputdescription1">{{ __('website/admin.product_description') }}</label>
                                    <textarea  name="description" id="exampleInputdescription1" class="form-control" cols="30"
                                        placeholder="{{ __('website/admin.enter_product_description') }}" rows="10">{{ $product->description }}</textarea>
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputprice1">{{ __('website/admin.product_price') }}</label>
                                    <input value="{{ $product->price }}" name="price" type="number" class="form-control" id="exampleInputprice1"
                                        placeholder="{{ __('website/admin.enter_product_price') }}">
                                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                                </div>
                                {{-- <div class="form-group col-md-6">
                                    <label for="exampleInputimage1">{{ __('website/admin.product_image') }}</label>
                                    <input value="{{ $product->image }}" name="image" type="file" class="form-control" id="exampleInputimage1"
                                        placeholder="{{ __('website/admin.enter_product_image') }}" />
                                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                </div> --}}
                                <div class="form-group col-6">
                                    <label for="exampleInputimage1">{{ __('website/admin.enter_product_image') }}</label>
                                    {{-- <input type="hidden" name="image" value="{{ $product->image }}"> --}}
                                    <input name="image" value="{{ $product->image }}" type="file" class="form-control" id="exampleInputimage1" />
                                    @if($product->image)
                                        <div>
                                            <img src="{{ asset('storage/products/' . $product->image) }}" alt="Product Image" style="max-width: 100px; max-height: 100px;">
                                        </div>
                                        @endif
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3 mb-0">{{ __('website/admin.submit') }}</button>
                        </form>
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
