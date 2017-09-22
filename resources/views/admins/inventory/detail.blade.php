@extends('layouts.blank')

@section('title')
    Toko Bahagia | Detail Inventory
@endsection

@push('stylesheets')

    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset("assets/bootstrap-daterangepicker/daterangepicker.css") }}" rel="stylesheet">
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
                  <h3>Inventory Management</h3>
                </div>
                <div class="title_right">
                  <div class="pull-right">
                    <section class="content-header">
                      <ol class="breadcrumb">
                      <li><a href="{{ url('home') }}"><i class="fa fa-home"></i>Home</a></li>
                      <li><a href="{{ url('inventory') }}">Inventory</a></li>
                      <li class="active">Detail</li>
                    </ol>  
                    </section>
                  </div>
                </div>
              </section>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2><i class="fa fa-list"></i> Detail Inventory</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    
                    <div class="x_content">
                        <div class="form-horizontal form-label-left">
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="product-image">
                                        @if(!empty('/images/products/'.$inventories->images))
                                            <img src="{{ asset('/images/products/'.$inventories->images) }}"/>
                                        @else
                                            <img src="{{ asset('/img/outlet.png') }}"/>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-tag"></i></label>
                                            <h5 class="form-control-static"><b>Category</b> : {{$inventories->pilihcategory->category_name}} </h5>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-map-marker"></i></label>
                                            <h5 class="form-control-static"><b>Location</b> : {{$inventories->pilihlocation->location}} </h5>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-inbox"></i></label>
                                            <h5 class="form-control-static"><b>Product Name</b> : {{$inventories->product_name}} </h5>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-barcode"></i></label>
                                            <h5 class="form-control-static"><b>Code Factory</b> : {{$inventories->code_factory}} </h5>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-flag"></i></label>
                                            <h5 class="form-control-static"><b>Manufacturer</b> : {{$inventories->manufacturer}} </h5>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-glass"></i></label>
                                            <h5 class="form-control-static"><b>Item Function</b> : {{$inventories->item_function}} </h5>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-arrow-down"></i></label>
                                            <h5 class="form-control-static"><b>Unit Price Min</b> : Rp {{number_format($inventories->cost_min, 2, ',', '.')}} </h5>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-arrow-up"></i></label>
                                            <h5 class="form-control-static"><b>Unit Price Max</b> : Rp {{number_format($inventories->cost_max, 2, ',', '.')}} </h5>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-shopping-cart"></i></label>
                                            <h5 class="form-control-static"><b>Unit Of Measure</b> : {{$inventories->unit_of_measure}} </h5>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                         <div class="col-md-12">
                                            <label class="control-label col-md-1" style="padding-top: 15px;"><i class="glyphicon glyphicon-info-sign"></i></label>
                                            <h5 class="form-control-static"><b>Product Description</b> : {{$inventories->product_desc}} </h5>
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
        </div>
      <!-- /page content -->

    <!-- footer content -->
    @include('includes.footer')
    <!-- /footer content -->

    @push('scripts')

    <!-- Calculator -->
    <script src="{{ asset("assets/calculator/jquery-calx-2.2.7.min.js") }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset("assets/moment/min/moment.min.js") }}"></script>
    <script src="{{ asset("assets/dangrossman/daterangepicker.js") }}"></script>
    <!-- Switchery -->
    <script src="{{ asset("assets/switchery/dist/switchery.min.js") }}"></script>
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