@extends('layouts.blank')

@section('title')
    Toko Bahagia | Detail Purchase
@endsection


@push('stylesheets')
      <!-- Animate -->
      <link href="{{ asset("assets/animate.css/animate.min.css")}}" rel="stylesheet" type="text/css"/>
      <!-- Pnotify -->
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
              <h3>Detail Purchase</h3>
            </div>
            <div class="title_right">
              <div class="pull-right">
                <section class="content-header">
                  <ol class="breadcrumb">
                  <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
                  <li><a href="{{ url('purchase') }}">Purchase</a></li>
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
                      <h2>Detail Purchase</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Purchase Number </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="{{$data->purchase_no}}" readonly class="form-control col-md-7 col-xs-12"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Supplier</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="{{$data->pilihsupplier->supplier_name}}" readonly class="form-control col-md-7 col-xs-12"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Shipping Methode</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="{{$data->pilihshipping->method}}" readonly class="form-control col-md-7 col-xs-12"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Purchase Date </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="{{$data->purchase_date}}" readonly class="form-control col-md-7 col-xs-12" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Promised Date </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                   <input type="text" value="{{$data->promised_date}}" readonly class="form-control col-md-7 col-xs-12"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Shipping Date</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="{{$data->shipping_date}}" readonly class="form-control col-md-7 col-xs-12" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Freight Charge</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="Rp. {{$data->freight_charge}}" readonly class="form-control col-md-7 col-xs-12" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Purchase Description</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <textarea type="text" readonly class="form-control col-md-7 col-xs-12">{{$data->po_description}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Product</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="{{$data2->pilihproduct->product_name}}" readonly class="form-control col-md-7 col-xs-12" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="{{$data2->number}}" readonly class="form-control col-md-7 col-xs-12"></input>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantity</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="{{$data2->quantity}}" readonly class="form-control col-md-7 col-xs-12" ></input>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Price Per Unit</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="Rp. {{$data2->price_per_unit}}" readonly class="form-control col-md-7 col-xs-12" ></input>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Discount</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="Rp. {{$data2->discount}}" readonly class="form-control col-md-7 col-xs-12"></input>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Price Total
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="Rp. {{$data2->price_total}}" readonly class="form-control col-md-7 col-xs-12"></input>
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