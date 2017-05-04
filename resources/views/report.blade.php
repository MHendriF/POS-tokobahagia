@extends('layouts.blank')

@section('title')
	Toko Bahagia | Report
@endsection

@push('stylesheets')
        <!-- Animate -->
      <link href="{{ asset("assets/animate.css/animate.min.css")}}" rel="stylesheet" type="text/css"/>
      <!-- PNotify -->
      <link href="{{ asset("assets/pnotify/dist/pnotify.css") }}" rel="stylesheet">
      <link href="{{ asset("assets/pnotify/dist/pnotify.buttons.css") }}" rel="stylesheet">
      <link href="{{ asset("assets/pnotify/dist/pnotify.nonblock.css") }}" rel="stylesheet">
      <!-- Sweetalert -->
      <link href="{{ asset("css/sweetalert2/sweetalert2.min.css") }}" rel="stylesheet">
      <!-- Custom Theme Style -->
      <link href="{{ asset("build/css/action-icon.css") }}" rel="stylesheet"> 
      <link href="{{ asset("build/css/custom.min2.css") }}" rel="stylesheet">  
@endpush

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
      
            <section class="page-title">
                <div class="title_left">
                  <h3>Report Dasboard</h3>
                </div>
                <div class="title_right">
                  <div class="pull-right">
                    <section class="content-header">
                      <ol class="breadcrumb">
                      <li class="active"><a href="{{ url('report') }}"><i class="fa fa-dashboard"></i>Report</a></li>
                    </ol>  
                    </section>
                  </div>
                </div>
          </section>

            <div class="x_content">
                <div class="row">
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>Welcome To Report Dasboard</h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                              <li><a href="{{ url('report') }}"><i class="fa fa-repeat"></i></a></li>
                              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">

                            <div class="animated homewidget col-md-3">
                                 <a href="{{ url('location') }}" class="bttn2 btn-default bttn-lg">
                                     <i class="fa fa-glass" style="margin-right: 7px;"></i>Report Inventory
                                 </a>
                            </div>
                            <div class="animated homewidget col-md-3">
                                 <a href="{{ url('purchase') }}" class="bttn2 btn-default bttn-lg">
                                     <i class="fa fa-shopping-cart" style="margin-right: 7px;"></i>Report Purchase
                                 </a>
                            </div>
                            <div class="animated homewidget col-md-3">
                                 <a href="{{ url('order') }}" class="bttn2 btn-default bttn-lg">
                                     <i class="fa fa-inbox" style="margin-right: 7px;"></i>Report Order
                                 </a>
                            </div>
                            <div class="animated homewidget col-md-3">
                                 <a href="{{ url('service') }}" class="bttn2 btn-default bttn-lg">
                                     <i class="fa fa-wrench" style="margin-right: 7px;"></i>Report Service
                                 </a>
                            </div>
                            <div class="animated homewidget col-md-3">
                                 <a href="{{ url('transaction') }}" class="bttn2 btn-default bttn-lg">
                                     <i class="fa fa-credit-card" style="margin-right: 7px;"></i>Report Transaction
                                 </a>
                            </div>
                            <div class="animated homewidget col-md-3">
                                 <a href="{{ url('user') }}" class="bttn2 btn-default bttn-lg">
                                     <i class="fa fa-line-chart" style="margin-right: 7px;"></i>Report Keuangan Bulanan
                                 </a>
                            </div>
                            <div class="animated homewidget col-md-3">
                                 <a href="{{ url('user') }}" class="bttn2 btn-default bttn-lg">
                                     <i class="fa fa-usd" style="margin-right: 7px;"></i>Report Biaya Teknisi
                                 </a>
                            </div>

                            
                          </div>
                        </div>
                      </div>

                </div>
            </div>

        </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    @include('includes.footer')
    <!-- /footer content -->

    @push('scripts')

        <!-- PNotify -->
        <script src="{{ asset("assets/pnotify/dist/pnotify.js") }}"></script>
        <script src="{{ asset("assets/pnotify/dist/pnotify.animate.js") }}"></script>
        <script src="{{ asset("assets/pnotify/dist/pnotify.buttons.js") }}"></script>
        <script src="{{ asset("assets/pnotify/dist/pnotify.nonblock.js") }}"></script>
        <!-- Sweetalert -->
        <script src="{{ asset("js/sweetalert2/sweetalert2.min.js") }}"></script>
        <!-- Custom Theme Scripts -->
        <script src="{{ asset("build/js/custom.min2.js") }}"></script>

        <!-- Include Scripts -->
        @include('javascript.pnotify')
        @include('javascript.sweetalert')

    @endpush

@endsection