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
                  <li><a href="{{ url('home') }}"><i class="fa fa-home"></i>Home</a></li>
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
                      <h2>Purchase</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content calculate">
                        <div class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Purchase Code </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="{{$data->purchase_code}}" readonly class="form-control col-md-7 col-xs-12"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Employee</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="{{$data->pilihuser->first_name}}" readonly class="form-control col-md-7 col-xs-12"/>
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Price Total</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="Rp. {{$data->price_total}}" readonly class="form-control col-md-7 col-xs-12" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Purchase Description</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <textarea type="text" readonly class="form-control col-md-7 col-xs-12">{{$data->po_description}}</textarea>
                                </div>
                            </div>

                            <!-- Purchase Detail -->
                            <h2>Purchase Details</h2>
                            <div class="ln_solid"></div>
                            
                            <div class="form-group">
                              <div class="table-responsive">  
                                <table class="table table-bordered" id="dynamic_field">
                                    <thead>  
                                      <tr>
                                        <th>No</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price Per Unit</th>
                                        <th>Discount</th>
                                        <th>Price</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($data2 as $index => $pd)
                                        <tr>  
                                          <td><input type="text" value="{{$pd->number}}" readonly class="form-control name_list" style="width: 60px;"/></td>
                                          <td><input type="text" value="{{ $pd->pilihproduct->product_name }} " readonly class="form-control name_list"/></td>
                                          <td><input type="text" value="{{$pd->quantity}}" readonly class="form-control name_list"/></td>
                                          <td><input type="text" value="{{$pd->price_per_unit}}" readonly class="form-control name_list"/></td>
                                          <td><input type="text" value="{{$pd->discount}}" readonly class="form-control name_list"/></td>
                                          <td><input type="number" value="{{$pd->price}}" readonly class="form-control name_list"/></td>
                                        </tr>
                                      @endforeach
                                      
                                    </tbody>  
                                </table>  
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

    
    <!-- PNotify -->
    <script src="{{ asset("assets/pnotify/dist/pnotify.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.animate.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.buttons.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.nonblock.js") }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset("build/js/custom.min2.js") }}"></script>

    <!-- Include Scripts -->
    @include('javascript.pnotify')

    <script>
        $('.calculate').calx();
    </script>

    @endpush
@endsection