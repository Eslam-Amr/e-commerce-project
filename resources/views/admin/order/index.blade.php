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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection






<!-- Your existing HTML content -->

@if (session('success'))
    <style>
        /* Custom CSS for SweetAlert2 toast */
        .swal2-container {
            z-index: 2000 !important;
        }

        .swal2-popup.swal2-toast.swal2-show.colored-toast {
            background-color: #28a745 !important;
            /* Green color for success */
            /* color: white; Ensure text color is readable on green background */
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> {{-- Ensure SweetAlert2 script is included --}}
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-right',
                iconColor: 'green',
                customClass: {
                    popup: 'colored-toast'
                },
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });
            Toast.fire({
                icon: 'success',
                title: "{{ session('success') }}"
            });
        });
    </script>
@endif







<x-success />
<x-error />
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ trans('main-sidebar_trans.order') }}</h4>
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


    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">{{ __('website/admin.order_table') }}</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                {{-- policy --}}
                {{-- @can('create', \App\Model\Category::class) --}}
                {{-- <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.category.create') }}" class="btn btn-primary" role="button"
                        aria-pressed="true">{{ trans('website/admin.add_category') }}</a>
                </div> --}}
                {{-- @endcan --}}
                {{-- <p class="tx-12 tx-gray-500 mb-2">Example of Valex Hoverable Rows Table.. <a href="">Learn more</a></p> --}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 text-md-nowrap">
                        <thead>
                            <tr>
                                <th width="4%">#</th>
                                <th width="15%">{{ __('website/admin.user_name') }}</th>
                                <th width="10%">{{ __('website/admin.final_price') }}</th>
                                <th width="10%">{{ __('website/admin.date') }}</th>
                                <th width="25%">{{ __('website/admin.update_status') }}</th>
                                <th width="*%">{{ __('website/admin.action') }}</th>

                            </tr>
                        </thead>
                        <tbody>
                            {{-- @dd( count($categories)) --}}
                            {{-- @if (count($categories) > 0) --}}
                            {{-- @if ($categories != null) --}}
                            @isset($orders)


                                @for ($i = 0; $i < count($orders); $i++)
                                    <tr>
                                        <th scope="row">{{ ($orders->currentPage() - 1) * 15 + $i + 1 }}</th>
                                        <td>{{ $orders[$i]->user->name }}</td>
                                        <td>{{ $orders[$i]->total }}</td>
                                        <td>{{ $orders[$i]->created_at->format('Y-m-d') }}</td>
                                        <td>
                                            {{-- <form action="{{ route('admin.order.update') }}">
                                                <select name="status" class="form-control-color" id="status">
                                                    <option value="Pending" {{ $orders[$i]->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                    <option value="Processing" {{ $orders[$i]->status == 'Processing' ? 'selected' : '' }}>Processing</option>
                                                    <option value="On Hold" {{ $orders[$i]->status == 'On Hold' ? 'selected' : '' }}>On Hold</option>
                                                    <option value="Completed" {{ $orders[$i]->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                                    <option value="Cancelled" {{ $orders[$i]->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                    <option value="Refunded" {{ $orders[$i]->status == 'Refunded' ? 'selected' : '' }}>Refunded</option>
                                                    <option value="Failed" {{ $orders[$i]->status == 'Failed' ? 'selected' : '' }}>Failed</option>
                                                    <option value="Shipped" {{ $orders[$i]->status == 'Shipped' ? 'selected' : '' }}>Shipped</option>
                                                    <option value="Out for Delivery" {{ $orders[$i]->status == 'Out for Delivery' ? 'selected' : '' }}>Out for Delivery</option>
                                                    <option value="Delivered" {{ $orders[$i]->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                                    <option value="Returned" {{ $orders[$i]->status == 'Returned' ? 'selected' : '' }}>Returned</option>
                                                    <option value="Partially" {{ $orders[$i]->status == 'Partially' ? 'selected' : '' }}>Partially</option>
                                                </select>

                                            </form> --}}
                                            <form action="{{ route('admin.order.update',$orders[$i]) }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <!-- Assuming you need to send the order ID as well -->
                                                {{-- <input type="hidden" name="order_id" value="{{ $orders[$i]->id }}"> --}}

                                                <select name="status" class="form-control-color" id="status{{ $orders[$i]->id }}" onchange="submitForm(this)">
                                                    <option value="Pending" {{ $orders[$i]->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                    <option value="Processing" {{ $orders[$i]->status == 'Processing' ? 'selected' : '' }}>Processing</option>
                                                    <option value="On Hold" {{ $orders[$i]->status == 'On Hold' ? 'selected' : '' }}>On Hold</option>
                                                    <option value="Completed" {{ $orders[$i]->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                                    <option value="Cancelled" {{ $orders[$i]->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                    <option value="Refunded" {{ $orders[$i]->status == 'Refunded' ? 'selected' : '' }}>Refunded</option>
                                                    <option value="Failed" {{ $orders[$i]->status == 'Failed' ? 'selected' : '' }}>Failed</option>
                                                    <option value="Shipped" {{ $orders[$i]->status == 'Shipped' ? 'selected' : '' }}>Shipped</option>
                                                    <option value="Out for Delivery" {{ $orders[$i]->status == 'Out for Delivery' ? 'selected' : '' }}>Out for Delivery</option>
                                                    <option value="Delivered" {{ $orders[$i]->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                                    <option value="Returned" {{ $orders[$i]->status == 'Returned' ? 'selected' : '' }}>Returned</option>
                                                    <option value="Partially" {{ $orders[$i]->status == 'Partially' ? 'selected' : '' }}>Partially</option>
                                                </select>
                                            </form>

                                            <script>
                                                function submitForm(selectElement) {
                                                    selectElement.form.submit();
                                                }
                                            </script>

                                        </td>
                                        <td>
                                            <a class="btn btn-success " href="{{ route('admin.order.show', $orders[$i]) }}">For
                                                More Info</a>
                                            <form class="d-inline" action="{{ route('admin.order.destroy', $orders[$i]) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="p-2 modal-effect btn btn-sm btn-danger " type="submit"><i
                                                        class="las la-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endfor
                            @endisset

                        </tbody>
                    </table>
                    {{-- {{ $categories->links() }} --}}
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="row row-sm">
        <!--div-->
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <a href="{{route('doctors.create')}}" class="btn btn-primary" role="button" aria-pressed="true">{{trans('doctors.add_doctor')}}</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table key-buttons text-md-nowrap">
                            <thead>
                            <tr>
                                <th style="width: 2%;" >#</th>
                                 <th >asdasdasd</th>
                                 <th  style="width: 50%;">{{ __('website/admin.name') }}</th>
                                 <th >{{trans('website.admin.name')}}</th>
                                 <th >{{__('website/admin.add_category')}}</th>
                                <th >{{trans('doctors.name')}}</th>
                                <th >{{trans('doctors.email')}}</th>
                                <th>{{trans('doctors.section')}}</th>
                                <th >{{trans('doctors.phone')}}</th>
                                <th >{{trans('doctors.appointments')}}</th>
                                <th>{{trans('doctors.price')}}</th>
                                <th >{{trans('doctors.Status')}}</th>
                                <th>{{trans('doctors.created_at')}}</th>
                                <th>{{trans('doctors.Processes')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                          @foreach ($doctors as $doctor)
                          @dd($doctor->section)
                              <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>{{ $doctor->name }}</td>
                                  <td>{{ $doctor->email }}</td>
                                  <td>{{ $doctor->section->name}}</td>
                                  <td>{{ $doctor->phone}}</td>
                                  <td>{{ $doctor->appointments}}</td>
                                  <td>{{ $doctor->price}}</td>
                                  <td>
                                      <div class="dot-label bg-{{$doctor->status == 1 ? 'success':'danger'}} ml-1"></div>
                                      {{$doctor->status == 1 ? trans('doctors.Enabled'):trans('doctors.Not_enabled')}}
                                  </td>

                                  <td>{{ $doctor->created_at->diffForHumans() }}</td>
                                  <td>
                                      <a class="modal-effect btn btn-sm btn-info" href="{{route('doctors.edit',$doctor->id)}}"><i class="las la-pen"></i></a>
                                      <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"  data-toggle="modal" href="#delete{{$doctor->id}}"><i class="las la-trash"></i></a>
                                  </td>
                              </tr>
                              @include('admin-asset/assets.Doctors.delete')
                          @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
    </div> --}}
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
