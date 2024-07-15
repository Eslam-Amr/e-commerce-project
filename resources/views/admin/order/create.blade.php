@extends('admin.layouts.master')
@section('title')
    {{trans('main-sidebar_trans.doctors')}}
@stop
@section('css')
    <link href="{{URL::asset('admin-asset/assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('admin-asset/assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('admin-asset/assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('admin-asset/assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('admin-asset/assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('admin-asset/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{URL::asset('admin-asset/assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{trans('main-sidebar_trans.doctors')}}</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    {{trans('main-sidebar_trans.view_all')}}</span>
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
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">{{ __("website/admin.category_create") }}</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
         </div>
         <div class=" p-5  col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card  box-shadow-0 ">
                {{-- <div class="card-header">
                    <h4 class="card-title mb-1">Vertical Form</h4>
                    <p class="mb-2">It is Very Easy to Customize and it uses in your website apllication.</p>
                </div> --}}
                <div class="card-body pt-3">
                    <form method="post" action="{{ route('admin.category.store') }}">
                        @csrf
                        <div class="">
                            <div class="form-group">
                                <label for="exampleInputname1">{{ __("website/admin.category_name") }}</label>
                                <input name="name" type="name" class="form-control" id="exampleInputname1" placeholder="{{ __('website/admin.enter_category_name') }}">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />

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
    <script src="{{URL::asset('admin-asset/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('admin-asset/assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('admin-asset/assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('admin-asset/assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('admin-asset/assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('admin-asset/assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('admin-asset/assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('admin-asset/assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('admin-asset/assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{URL::asset('admin-asset/assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('admin-asset/assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('admin-asset/assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('admin-asset/assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('admin-asset/assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{URL::asset('admin-asset/assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('admin-asset/assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
    <!--Internal  Datatable js -->
    <script src="{{URL::asset('admin-asset/assets/js/table-data.js')}}"></script>

    <!--Internal  Notify js -->
    <script src="{{URL::asset('admin-asset/assets/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('admin-asset/assets/plugins/notify/js/notifit-custom.js')}}"></script>
@endsection
