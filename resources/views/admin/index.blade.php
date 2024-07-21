@extends('admin.layouts.master')
@section('css')
    <!--  Owl-carousel css-->
    <link href="{{ URL::asset('admin-asset/assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />
    <!-- Maps css -->
    <link href="{{ URL::asset('admin-asset/assets/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
@section('page-header')
    {{-- @dd(auth()->user()) --}}
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">{{ __('website/admin.admin_welcome') }}</h2>
                <p class="mg-b-0">{{ __('website/admin.admin_dashboard_welcome') }}</p>
            </div>
        </div>
        <div class="main-dashboard-header-right">
            <div>
                <label class="tx-13">Customer Ratings</label>
                <div class="main-star">
                    <i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i
                        class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i
                        class="typcn typcn-star"></i> <span>(14,873)</span>
                </div>
            </div>
            <div>
                <label class="tx-13">Online Sales</label>
                <h5>563,275</h5>
            </div>
            <div>
                <label class="tx-13">Offline Sales</label>
                <h5>783,675</h5>
            </div>
        </div>
    </div>
    <!-- /breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row row-sm">
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            {{-- day earn  week earn  month earn  this week to last week earn  --}}
            <div class="card overflow-hidden sales-card bg-primary-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">{{ __('website/admin.TODAY_EARNINGS') }}</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">{{ $profitOfDay }}{{ __('website/admin.ُEGP') }}</h4>
                                {{-- <p class="mb-0 tx-12 text-white op-7">Compared to last week</p> --}}
                            </div>
                            {{-- <span class="float-right my-auto ml-auto">
                                <i class="fas fa-arrow-circle-up text-white"></i>
                                <span class="text-white op-7"> +427</span>
                            </span> --}}
                        </div>
                    </div>
                </div>
                <span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-danger-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">{{ __('website/admin.MONTH_EARNINGS') }}</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">{{ $profitOfMonth }}{{ __('website/admin.ُEGP') }}</h4>
                                {{-- <p class="mb-0 tx-12 text-white op-7">Compared to last week</p> --}}
                            </div>
                            {{-- <span class="float-right my-auto ml-auto">
                                <i class="fas fa-arrow-circle-down text-white"></i>
                                <span class="text-white op-7"> -23.09%</span>
                            </span> --}}
                        </div>
                    </div>
                </div>
                <span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-success-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">{{ __('website/admin.YEAR_EARNINGS') }}</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">{{ $profitOfYear }}{{ __('website/admin.ُEGP') }}</h4>
                                {{-- <p class="mb-0 tx-12 text-white op-7">Compared to last week</p> --}}
                            </div>
                            {{-- <span class="float-right my-auto ml-auto">
                                <i class="fas fa-arrow-circle-up text-white"></i>
                                <span class="text-white op-7"> 52.09%</span>
                            </span> --}}
                        </div>
                    </div>
                </div>
                <span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-warning-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-12 text-white">{{ __('website/admin.TOTAL_EARNINGS') }}</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h4 class="tx-20 font-weight-bold mb-1 text-white">{{ $sumOfProfit }}{{ __("website/admin.ُEGP") }}</h4>
                                {{-- <p class="mb-0 tx-12 text-white op-7">Compared to last week</p> --}}
                            </div>
                            {{-- <span class="float-right my-auto ml-auto">
                                <i class="fas fa-arrow-circle-down text-white"></i>
                                <span class="text-white op-7"> -152.3</span>
                            </span> --}}
                        </div>
                    </div>
                </div>
                <span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
            </div>
        </div>
    </div>
    <!-- row closed -->

    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-0">{{ __('website/admin.order_status') }}</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 text-muted mb-0">{{ __('website/admin.order_status_paragraph') }}</p>
                </div>
                <div class="card-body">
                    <div class="total-revenue">
                        <div>
                            {{-- <h4>120,750</h4> --}}
                            <h4>{{ $checkoutCompleted }}</h4>
                            <label><span class="bg-primary"></span>{{ __('website/admin.completed') }}</label>
                        </div>
                        <div>
                            {{-- <h4>56,108</h4> --}}
                            <h4>{{ $checkoutPending }}</h4>

                            <label><span class="bg-danger"></span>{{ __('website/admin.pending') }}</label>
                        </div>
                        {{-- <div>
                            <h4>32,895</h4>
                            <label><span class="bg-warning"></span>Failed</label>
                        </div> --}}
                    </div>
                    <canvas id="orderStatusChart" class="sales-bar mt-4"></canvas>
                </div>
            </div>

        </div>






















        {{-- <div class="col-md-12 col-lg-12 col-xl-7">
            <div class="card">
                <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-0">Order status</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 text-muted mb-0">Order Status and Tracking. Track your order from ship date to arrival.
                        To begin, enter your order number.</p>
                </div>
                <div class="card-body">
                    <div class="total-revenue">
                        <div>
                            <h4>120,750</h4>
                            <label><span class="bg-primary"></span>success</label>
                        </div>
                        <div>
                            <h4>56,108</h4>
                            <label><span class="bg-danger"></span>Pending</label>
                        </div>
                        <div>
                            <h4>32,895</h4>
                            <label><span class="bg-warning"></span>Failed</label>
                        </div>
                    </div>
                    <div id="bar" class="sales-bar mt-4"></div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="col-lg-12 col-xl-5">
            <div class="card card-dashboard-map-one">
                <label class="main-content-label">Sales Revenue by Customers in USA</label>
                <span class="d-block mg-b-20 text-muted tx-12">Sales Performance of all states in the United States</span>
                <div class="">
                    <div class="vmap-wrapper ht-180" id="vmap2"></div>
                </div>
            </div>
        </div> --}}
    </div>


    <div class="row row-sm">
        <div class="col-lg-12 col-md-12">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
{{ __("website/admin.YEAR_PROFIT") }}                    </div>
                    <p class="mg-b-20">{{ __("website/admin.YEAR_PROFIT_status") }} </p>
                    <div id="echart2" class="ht-300"></div>
                </div>
            </div>
        </div>
    </div>





    {{-- <div class="row row-sm">

    <div class="col-sm-12 col-md-6">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="main-content-label mg-b-5">
                    Line Chart
                </div>
                <p class="mg-b-20">Basic Charts Of Valex template.</p>
                <div class="chartjs-wrapper-demo">
                    <canvas id="chartLine1"></canvas>
                </div>
            </div>
        </div>
    </div>
    </div> --}}
    <div class="row row-sm">
        <div class="col-sm-12 col-md-12">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
{{ __('website/admin.YEAR_PROFIT') }}                    </div>
                    <p class="mg-b-20">{!! __("website/admin.month_year_profit") !!}</p>
                    <div class="chartjs-wrapper-demo">
                        <canvas id="chartLine1"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- row closed -->

    <!-- row opened -->
    {{-- <div class="row row-sm">
        <div class="col-xl-4 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header pb-1">
                    <h3 class="card-title mb-2">Recent Customers</h3>
                    <p class="tx-12 mb-0 text-muted">A customer is an individual or business that purchases the goods
                        service has evolved to include real-time</p>
                </div>
                <div class="card-body p-0 customers mt-1">
                    <div class="list-group list-lg-group list-group-flush">
                        <div class="list-group-item list-group-item-action" href="#">
                            <div class="media mt-0">
                                <img class="avatar-lg rounded-circle mr-3 my-auto"
                                    src="{{ URL::asset('admin-asset/assets/img/faces/3.jpg') }}" alt="Image description">
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <div class="mt-0">
                                            <h5 class="mb-1 tx-15">Samantha Melon</h5>
                                            <p class="mb-0 tx-13 text-muted">User ID: #1234 <span
                                                    class="text-success ml-2">Paid</span></p>
                                        </div>
                                        <span class="ml-auto wd-45p fs-16 mt-2">
                                            <div id="spark1" class="wd-100p"></div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action" href="#">
                            <div class="media mt-0">
                                <img class="avatar-lg rounded-circle mr-3 my-auto"
                                    src="{{ URL::asset('admin-asset/assets/img/faces/11.jpg') }}" alt="Image description">
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <div class="mt-1">
                                            <h5 class="mb-1 tx-15">Jimmy Changa</h5>
                                            <p class="mb-0 tx-13 text-muted">User ID: #1234 <span
                                                    class="text-danger ml-2">Pending</span></p>
                                        </div>
                                        <span class="ml-auto wd-45p fs-16 mt-2">
                                            <div id="spark2" class="wd-100p"></div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action" href="#">
                            <div class="media mt-0">
                                <img class="avatar-lg rounded-circle mr-3 my-auto"
                                    src="{{ URL::asset('admin-asset/assets/img/faces/17.jpg') }}" alt="Image description">
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <div class="mt-1">
                                            <h5 class="mb-1 tx-15">Gabe Lackmen</h5>
                                            <p class="mb-0 tx-13 text-muted">User ID: #1234<span
                                                    class="text-danger ml-2">Pending</span></p>
                                        </div>
                                        <span class="ml-auto wd-45p fs-16 mt-2">
                                            <div id="spark3" class="wd-100p"></div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action" href="#">
                            <div class="media mt-0">
                                <img class="avatar-lg rounded-circle mr-3 my-auto"
                                    src="{{ URL::asset('admin-asset/assets/img/faces/15.jpg') }}" alt="Image description">
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <div class="mt-1">
                                            <h5 class="mb-1 tx-15">Manuel Labor</h5>
                                            <p class="mb-0 tx-13 text-muted">User ID: #1234<span
                                                    class="text-success ml-2">Paid</span></p>
                                        </div>
                                        <span class="ml-auto wd-45p fs-16 mt-2">
                                            <div id="spark4" class="wd-100p"></div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action br-br-7 br-bl-7" href="#">
                            <div class="media mt-0">
                                <img class="avatar-lg rounded-circle mr-3 my-auto"
                                    src="{{ URL::asset('admin-asset/assets/img/faces/6.jpg') }}" alt="Image description">
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <div class="mt-1">
                                            <h5 class="mb-1 tx-15">Sharon Needles</h5>
                                            <p class="b-0 tx-13 text-muted mb-0">User ID: #1234<span
                                                    class="text-success ml-2">Paid</span></p>
                                        </div>
                                        <span class="ml-auto wd-45p fs-16 mt-2">
                                            <div id="spark5" class="wd-100p"></div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header pb-1">
                    <h3 class="card-title mb-2">Sales Activity</h3>
                    <p class="tx-12 mb-0 text-muted">Sales activities are the tactics that salespeople use to achieve their
                        goals and objective</p>
                </div>
                <div class="product-timeline card-body pt-2 mt-1">
                    <ul class="timeline-1 mb-0">
                        <li class="mt-0"> <i class="ti-pie-chart bg-primary-gradient text-white product-icon"></i> <span
                                class="font-weight-semibold mb-4 tx-14 ">Total Products</span> <a href="#"
                                class="float-right tx-11 text-muted">3 days ago</a>
                            <p class="mb-0 text-muted tx-12">1.3k New Products</p>
                        </li>
                        <li class="mt-0"> <i
                                class="mdi mdi-cart-outline bg-danger-gradient text-white product-icon"></i> <span
                                class="font-weight-semibold mb-4 tx-14 ">Total Sales</span> <a href="#"
                                class="float-right tx-11 text-muted">35 mins ago</a>
                            <p class="mb-0 text-muted tx-12">1k New Sales</p>
                        </li>
                        <li class="mt-0"> <i class="ti-bar-chart-alt bg-success-gradient text-white product-icon"></i>
                            <span class="font-weight-semibold mb-4 tx-14 ">Toatal Revenue</span> <a href="#"
                                class="float-right tx-11 text-muted">50 mins ago</a>
                            <p class="mb-0 text-muted tx-12">23.5K New Revenue</p>
                        </li>
                        <li class="mt-0"> <i class="ti-wallet bg-warning-gradient text-white product-icon"></i> <span
                                class="font-weight-semibold mb-4 tx-14 ">Toatal Profit</span> <a href="#"
                                class="float-right tx-11 text-muted">1 hour ago</a>
                            <p class="mb-0 text-muted tx-12">3k New profit</p>
                        </li>
                        <li class="mt-0"> <i class="si si-eye bg-purple-gradient text-white product-icon"></i> <span
                                class="font-weight-semibold mb-4 tx-14 ">Customer Visits</span> <a href="#"
                                class="float-right tx-11 text-muted">1 day ago</a>
                            <p class="mb-0 text-muted tx-12">15% increased</p>
                        </li>
                        <li class="mt-0 mb-0"> <i class="icon-note icons bg-primary-gradient text-white product-icon"></i>
                            <span class="font-weight-semibold mb-4 tx-14 ">Customer Reviews</span> <a href="#"
                                class="float-right tx-11 text-muted">1 day ago</a>
                            <p class="mb-0 text-muted tx-12">1.5k reviews</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header pb-0">
                    <h3 class="card-title mb-2">Recent Orders</h3>
                    <p class="tx-12 mb-0 text-muted">An order is an investor's instructions to a broker or brokerage firm
                        to purchase or sell</p>
                </div>
                <div class="card-body sales-info ot-0 pb-0 pt-0">
                    <div id="chart" class="ht-150"></div>
                    <div class="row sales-infomation pb-0 mb-0 mx-auto wd-100p">
                        <div class="col-md-6 col">
                            <p class="mb-0 d-flex"><span class="legend bg-primary brround"></span>Delivered</p>
                            <h3 class="mb-1">5238</h3>
                            <div class="d-flex">
                                <p class="text-muted ">Last 6 months</p>
                            </div>
                        </div>
                        <div class="col-md-6 col">
                            <p class="mb-0 d-flex"><span class="legend bg-info brround"></span>Cancelled</p>
                            <h3 class="mb-1">3467</h3>
                            <div class="d-flex">
                                <p class="text-muted">Last 6 months</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card ">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center pb-2">
                                <p class="mb-0">Total Sales</p>
                            </div>
                            <h4 class="font-weight-bold mb-2">$7,590</h4>
                            <div class="progress progress-style progress-sm">
                                <div class="progress-bar bg-primary-gradient wd-80p" role="progressbar"
                                    aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4 mt-md-0">
                            <div class="d-flex align-items-center pb-2">
                                <p class="mb-0">Active Users</p>
                            </div>
                            <h4 class="font-weight-bold mb-2">$5,460</h4>
                            <div class="progress progress-style progress-sm">
                                <div class="progress-bar bg-danger-gradient wd-75" role="progressbar" aria-valuenow="45"
                                    aria-valuemin="0" aria-valuemax="45"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- row close -->

    <!-- row opened -->
    {{-- <div class="row row-sm row-deck">
        <div class="col-md-12 col-lg-4 col-xl-4">
            <div class="card card-dashboard-eight pb-2">
                <h6 class="card-title">Your Top Countries</h6><span class="d-block mg-b-10 text-muted tx-12">Sales
                    performance revenue based by country</span>
                <div class="list-group">
                    <div class="list-group-item border-top-0">
                        <i class="flag-icon flag-icon-us flag-icon-squared"></i>
                        <p>United States</p><span>$1,671.10</span>
                    </div>
                    <div class="list-group-item">
                        <i class="flag-icon flag-icon-nl flag-icon-squared"></i>
                        <p>Netherlands</p><span>$1,064.75</span>
                    </div>
                    <div class="list-group-item">
                        <i class="flag-icon flag-icon-gb flag-icon-squared"></i>
                        <p>United Kingdom</p><span>$1,055.98</span>
                    </div>
                    <div class="list-group-item">
                        <i class="flag-icon flag-icon-ca flag-icon-squared"></i>
                        <p>Canada</p><span>$1,045.49</span>
                    </div>
                    <div class="list-group-item">
                        <i class="flag-icon flag-icon-in flag-icon-squared"></i>
                        <p>India</p><span>$1,930.12</span>
                    </div>
                    <div class="list-group-item border-bottom-0 mb-0">
                        <i class="flag-icon flag-icon-au flag-icon-squared"></i>
                        <p>Australia</p><span>$1,042.00</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-8 col-xl-8">
            <div class="card card-table-two">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-1">Your Most Recent Earnings</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                </div>
                <span class="tx-12 tx-muted mb-3 ">This is your most recent earnings for today's date.</span>
                <div class="table-responsive country-table">
                    <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                        <thead>
                            <tr>
                                <th class="wd-lg-25p">Date</th>
                                <th class="wd-lg-25p tx-right">Sales Count</th>
                                <th class="wd-lg-25p tx-right">Earnings</th>
                                <th class="wd-lg-25p tx-right">Tax Witheld</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>05 Dec 2019</td>
                                <td class="tx-right tx-medium tx-inverse">34</td>
                                <td class="tx-right tx-medium tx-inverse">$658.20</td>
                                <td class="tx-right tx-medium tx-danger">-$45.10</td>
                            </tr>
                            <tr>
                                <td>06 Dec 2019</td>
                                <td class="tx-right tx-medium tx-inverse">26</td>
                                <td class="tx-right tx-medium tx-inverse">$453.25</td>
                                <td class="tx-right tx-medium tx-danger">-$15.02</td>
                            </tr>
                            <tr>
                                <td>07 Dec 2019</td>
                                <td class="tx-right tx-medium tx-inverse">34</td>
                                <td class="tx-right tx-medium tx-inverse">$653.12</td>
                                <td class="tx-right tx-medium tx-danger">-$13.45</td>
                            </tr>
                            <tr>
                                <td>08 Dec 2019</td>
                                <td class="tx-right tx-medium tx-inverse">45</td>
                                <td class="tx-right tx-medium tx-inverse">$546.47</td>
                                <td class="tx-right tx-medium tx-danger">-$24.22</td>
                            </tr>
                            <tr>
                                <td>09 Dec 2019</td>
                                <td class="tx-right tx-medium tx-inverse">31</td>
                                <td class="tx-right tx-medium tx-inverse">$425.72</td>
                                <td class="tx-right tx-medium tx-danger">-$25.01</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- /row -->
    </div>
    <!-- /Container -->
    </div>
    <!-- /main-content -->
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>

    <!--Internal  Chart.bundle js -->
    <script src="{{ URL::asset('admin-asset/assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Moment js -->
    <script src="{{ URL::asset('admin-asset/assets/plugins/raphael/raphael.min.js') }}"></script>
    <!--Internal  Flot js-->
    <script src="{{ URL::asset('admin-asset/assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/jquery.flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/jquery.flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/js/dashboard.sampledata.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/js/chart.flot.sampledata.js') }}"></script>
    <!--Internal Apexchart js-->
    <script src="{{ URL::asset('admin-asset/assets/js/apexcharts.js') }}"></script>
    <!-- Internal Map -->
    <script src="{{ URL::asset('admin-asset/assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/js/modal-popup.js') }}"></script>
    <!--Internal  index js -->
    <script src="{{ URL::asset('admin-asset/assets/js/index.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/js/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ URL::asset('admin-asset/assets/plugins/echart/echart.js') }}"></script>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const ctx = document.getElementById('orderStatusChart').getContext('2d');

            const data = {
                labels: [
        "{{ __('website/admin.months.0') }}",  // January
        "{{ __('website/admin.months.1') }}",  // February
        "{{ __('website/admin.months.2') }}",  // March
        "{{ __('website/admin.months.3') }}",  // April
        "{{ __('website/admin.months.4') }}",  // May
        "{{ __('website/admin.months.5') }}",  // June
        "{{ __('website/admin.months.6') }}",  // July
        "{{ __('website/admin.months.7') }}",  // August
        "{{ __('website/admin.months.8') }}",  // September
        "{{ __('website/admin.months.9') }}",  // October
        "{{ __('website/admin.months.10') }}", // November
        "{{ __('website/admin.months.11') }}"  // December
    ],
                datasets: [{
                        label: "{{ __('website/admin.completed') }}",
                        data: @json($completedArray),
                        backgroundColor: 'rgba(0, 123, 255, 0.7)', // Blue
                        borderColor: 'rgba(0, 123, 255, 1)',
                        borderWidth: 1
                    },
                    {
                        label: "{{ __('website/admin.pending') }}",
                        data: @json($pendingArray),
                        backgroundColor: 'rgba(220, 53, 69, 0.7)', // Red
                        borderColor: 'rgba(220, 53, 69, 1)',
                        borderWidth: 1
                    },

                ]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {
                    scales: {
                        x: {
                            stacked: true
                        },
                        y: {
                            stacked: true,
                            beginAtZero: true,
                            max: 2000, // Set this value according to your data range
                            ticks: {
                                callback: function(value) {
                                    return Number.isInteger(value) ? value : '';
                                }
                            }
                        }
                    }
                }
            };

            new Chart(ctx, config);
        });
    </script>












    <script>
        // Initialize ECharts instance
        var echart2 = echarts.init(document.getElementById('echart2'));
        var currentYear = new Date().getFullYear();
        var xAxisData = [
            @foreach($salesData as $year => $data)
                "{{ $year }}",
            @endforeach
        ];
        var yAxisData = [
            @foreach($salesData as $year )
                "{{ $year }}",
            @endforeach
        ];
        console.log(xAxisData);
        // Specify options and data
        var option = {
            // Your ECharts options here
            xAxis: {
                type: 'category',
                // data: [currentYear-4,currentYear-3,currentYear-2,currentYear-1,currentYear]
                data: xAxisData
                // data: [
                //     @php
                //         foreach($salesData as $key)
                //         {{ $key }}
                //     @endphp
                // ]
            },
            yAxis: {
                type: 'value'
            },
            series: [{
//                 data: [{{ $years[0] }},
// {{ $years[0] }},
// {{ $years[0] }},
// {{ $years[0] }},
// {{ $years[0] }},],
data : yAxisData,
                type: 'line'
            }]
        };

        // Set options and render chart
        echart2.setOption(option);
    </script>







{{--
<script>
    // Example data (replace with your actual data)
    var labels = ['January', 'February', 'March', 'April', 'May', 'June',
              'July', 'August', 'September', 'October', 'November', 'December'];
    var data = [65, 59, 80, 81, 56, 55,0];

    // Get the canvas element
    var ctx = document.getElementById('chartLine1').getContext('2d');

    // Initialize Chart.js chart
    var chartLine1 = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Sales Data',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1,
                data: data,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

 --}}

 <script>
    // Example data (replace with your actual data)
    var labels = [
        "{{ __('website/admin.months.0') }}",  // January
        "{{ __('website/admin.months.1') }}",  // February
        "{{ __('website/admin.months.2') }}",  // March
        "{{ __('website/admin.months.3') }}",  // April
        "{{ __('website/admin.months.4') }}",  // May
        "{{ __('website/admin.months.5') }}",  // June
        "{{ __('website/admin.months.6') }}",  // July
        "{{ __('website/admin.months.7') }}",  // August
        "{{ __('website/admin.months.8') }}",  // September
        "{{ __('website/admin.months.9') }}",  // October
        "{{ __('website/admin.months.10') }}", // November
        "{{ __('website/admin.months.11') }}"  // December
    ];;
    var data = @json($yearGraph);

    // Get the canvas element
    var ctx = document.getElementById('chartLine1').getContext('2d');

    // Set the height of the canvas (in pixels)
    ctx.canvas.height = 70; // Adjust this value as needed

    // Initialize Chart.js chart
    var chartLine1 = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: "{{ __('website/admin.Sales_Data') }}",
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1,
                data: data,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    suggestedMin: 0, // Minimum value will be 0
                    suggestedMax: 90000, // Maximum value will be 100

                }
            }
        }
    });
</script>






    {{-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            const ctx = document.getElementById('orderStatusChart').getContext('2d');

            const data = {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                datasets: [
                    {
                        label: 'Completed',
                        data: @json($completedArray),
                        backgroundColor: 'rgba(0, 123, 255, 0.7)', // Blue
                        borderColor: 'rgba(0, 123, 255, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Pending',
                        data: @json($pendingArray),
                        backgroundColor: 'rgba(220, 53, 69, 0.7)', // Red
                        borderColor: 'rgba(220, 53, 69, 1)',
                        borderWidth: 1
                    },

                ]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {
                    scales: {
                        x: {
                            stacked: true
                        },
                        y: {
                            stacked: true,
                            beginAtZero: true,
                            max: 10000 // Set this value according to your data range
                        }
                    }
                }
            };

            new Chart(ctx, config);
        });
    </script> --}}



    {{-- <script>
        const ctx = document.getElementById('orderStatusChart').getContext('2d');

        const data = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
                'November', 'December'
            ],
            datasets: [{
                    label: 'Completed',
                    // data: [1000, 1500, 1200, 1300, 1100, 1400, 1500, 1600, 1700, 1800, 1900, 2000],
                    data: @json($completedArray),
                    backgroundColor: 'rgba(0, 123, 255, 0.7)', // Blue
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Pending',
                    data: [500, 600, 700, 800, 900, 1000, 1100, 1200, 1300, 1400, 1500, 1600],
                    backgroundColor: 'rgba(220, 53, 69, 0.7)', // Red
                    borderColor: 'rgba(220, 53, 69, 1)',
                    borderWidth: 1
                },
                // {
                //     label: 'Failed',
                //     data: [200, 300, 400, 500, 600, 700, 800, 900, 1000, 1100, 1200, 1300],
                //     backgroundColor: 'rgba(255, 193, 7, 0.7)', // Yellow
                //     borderColor: 'rgba(255, 193, 7, 1)',
                //     borderWidth: 1
                // }
            ]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    x: {
                        stacked: true
                    },
                    y: {
                        stacked: true
                    }
                }
            }
        };

        new Chart(ctx, config);
    </script> --}}
@endsection
