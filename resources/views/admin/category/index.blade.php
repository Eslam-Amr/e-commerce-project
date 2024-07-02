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
                    <h4 class="card-title mg-b-0">{{ __("website/admin.category_table") }}</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                {{-- policy --}}
                {{-- @can('create', \App\Model\Category::class) --}}
                <div class="d-flex justify-content-between">
                    <a href="{{route('category.create')}}" class="btn btn-primary" role="button" aria-pressed="true">{{trans('website/admin.add_category')}}</a>
                </div>
                {{-- @endcan --}}
                {{-- <p class="tx-12 tx-gray-500 mb-2">Example of Valex Hoverable Rows Table.. <a href="">Learn more</a></p> --}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0 text-md-nowrap">
                        <thead>
                            <tr>
                                <th width="15%">#</th>
                                <th width="65%">{{ __('website/admin.name') }}</th>
                                <th width="*%">{{ __('website/admin.action') }}</th>

                            </tr>
                        </thead>
                        <tbody>
                            {{-- @dd( count($categories)) --}}
                            {{-- @if (count($categories) > 0) --}}
                            {{-- @if ( ($categories)!=null) --}}
@isset($categories)


                            @for ($i = 0; $i < count($categories); $i++)

                            <tr>
                                <th scope="row">{{ (($categories->currentPage()-1)*15) + $i +1}}</th>
                                <td>{{ $categories[$i]->name }}</td>
                                {{-- <td>System Architect</td> --}}
                                <td>
                                    {{-- <a href="{{ route('category.destroy',$categories[$i]) }}">delete</a> --}}
                                    <a class="modal-effect btn btn-sm btn-warning" href="{{ route('category.show',$categories[$i]) }}"><i class="far fa-eye"></i></a>
                                    <a class="modal-effect btn btn-sm btn-info" href="{{ route('category.edit',$categories[$i]) }}"><i class="las la-pen"></i></a>
                                    <form class="d-inline" action="{{ route('category.destroy',$categories[$i]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="modal-effect btn btn-sm btn-danger " type="submit"><i class="las la-trash"></i></button>
                                    </form>
                                 </td>
                            </tr>
                            @endfor
                            {{-- @endif --}}
                            @endisset

                        </tbody>
                    </table>
                    {{ $categories->links() }}
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
                          @foreach($doctors as $doctor)
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
