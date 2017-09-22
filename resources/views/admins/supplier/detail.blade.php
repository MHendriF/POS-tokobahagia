@extends('layouts.blank')

@section('title')
    Toko Bahagia | Detail Supplier
@endsection

@push('stylesheets')
    <!-- Animate -->
    <link href="{{ asset("assets/animate.css/animate.min.css")}}" rel="stylesheet" type="text/css"/>
    <!-- PNotify -->
    <link href="{{ asset("assets/pnotify/dist/pnotify.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/pnotify/dist/pnotify.buttons.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/pnotify/dist/pnotify.nonblock.css") }}" rel="stylesheet">
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
              <h3>Supplier Management</h3>
            </div>
            <div class="title_right">
              <div class="pull-right">
                <section class="content-header">
                  <ol class="breadcrumb">
                  <li><a href="{{ url('home') }}"><i class="fa fa-home"></i>Home</a></li>
                  <li><a href="{{ url('supplier') }}">Supplier</a></li>
                  <li class="active">Detail</li>
                </ol>  
                </section>
              </div>
            </div>
          </section>

        </div class="clearfix">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                     <h2><i class="fa fa-list"></i> Detail Supplier</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                      <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <div class="form-horizontal form-label-left">
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="product-image">
                                        <img src="{{  asset('/img/user.png') }}" alt="..." />
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-user"></i></label>
                                            <h5 class="form-control-static"><b>Supplier name </b> : {{$suppliers->supplier_name}} </h5>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-queen"></i></label>
                                            <h5 class="form-control-static"><b>Title</b> : {{$suppliers->contact_title}} </h5>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-user"></i></label>
                                            <h5 class="form-control-static"><b>Name</b> : {{$suppliers->contact_name}} </h5>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-phone"></i></label>
                                            <h5 class="form-control-static"><b>Phone</b> : {{$suppliers->phone}} </h5>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-print"></i></label>
                                            <h5 class="form-control-static"><b>Fax</b> : {{$suppliers->fax}} </h5>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-envelope"></i></label>
                                            <h5 class="form-control-static"><b>Email</b> : {{$suppliers->email}} </h5>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-home"></i></label>
                                            <h5 class="form-control-static"><b>Address</b> : {{$suppliers->address}} </h5>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-qrcode"></i></label>
                                            <h5 class="form-control-static"><b>Postal Code</b> : {{$suppliers->postal_code}} </h5>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-map-marker"></i></label>
                                            <h5 class="form-control-static"><b>City</b> : {{$suppliers->city}} </h5>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-flag"></i></label>
                                            <h5 class="form-control-static"><b>Province</b> : {{$suppliers->province}} </h5>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-globe"></i></label>
                                            <h5 class="form-control-static"><b>Country</b> : {{$suppliers->country}} </h5>
                                        </div>
                                    </div>
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

     <!-- Parsley -->
    <script src="{{ asset("assets/parsleyjs/dist/parsley.min.js")}}"></script>
    <!-- PNotify -->
    <script src="{{ asset("assets/pnotify/dist/pnotify.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.animate.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.buttons.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.nonblock.js") }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset("build/js/custom.min2.js") }}"></script>

    <!-- Include Scripts -->
    @include('javascript.pnotify')

    @endpush
@endsection