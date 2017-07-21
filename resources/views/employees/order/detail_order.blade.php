@extends('layouts.blank')

@section('title')
    Toko Bahagia | Detail Order
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
              <h3>Detail Order</h3>
            </div>
            <div class="title_right">
              <div class="pull-right">
                <section class="content-header">
                  <ol class="breadcrumb">
                  <li><a href="{{ url('home') }}"><i class="fa fa-home"></i>Home</a></li>
                  <li><a href="{{ url('order') }}">Order</a></li>
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
                      <h2>Order</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Order Number </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="{{$data->order_code}}" readonly class="form-control col-md-7 col-xs-12"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Employee</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="{{$data->pilihuser->first_name}}" readonly class="form-control col-md-7 col-xs-12"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Customer</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="{{$data->pilihcustomer->contact_name}}" readonly class="form-control col-md-7 col-xs-12"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Location</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="{{$data->pilihlocation->location}}" readonly class="form-control col-md-7 col-xs-12"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Shipping Methode</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="{{$data->pilihshipping->method}}" readonly class="form-control col-md-7 col-xs-12"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Shipping Date</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="{{$data->shipping_date}}" readonly class="form-control col-md-7 col-xs-12" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >No Order Customer</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" value="{{$data->no_po_customer}}" readonly class="form-control col-md-7 col-xs-12" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Order Description</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <textarea rows="4" type="text" readonly class="form-control col-md-7 col-xs-12">{{$data->description}}</textarea>
                                </div>
                            </div>

                            <!-- Order Detail -->
                            <br>
                            <h2>Order Details</h2>
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
                                        <th>Amount</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($data2 as $index => $pd)
                                        <tr>  
                                          <td><input type="text" value="{{$pd->number}}" readonly class="form-control name_list" style="width: 60px;"/></td>
                                          <td><input type="text" value="{{$pd->pilihproduct->product_name}} " readonly class="form-control name_list"/></td>
                                          <td><input type="text" value="{{$pd->quantity}}" readonly class="form-control name_list"/></td>
                                          <td><input type="text" value="{{$pd->price_per_unit}}" readonly class="form-control name_list"/></td>
                                          <td><input type="text" value="{{$pd->discount}}" readonly class="form-control name_list"/></td>
                                          <td><input type="number" value="{{$pd->price}}" readonly class="form-control name_list"/></td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                    <tfoot>
                                      <tr>
                                           <td style="border: none;text-align: center;background: #eee"></td>
                                           <td style="border: none;text-align: center;background: #eee"></td>     
                                           <td style="border: none;text-align: center;background: #eee"></td>     
                                           <td style="border: none;text-align: center;background: #eee"></td>
                                           <td style="background: #eee"><b>Total Keseluruhan</b></td>
                                           <td style="background: #eee"><b>Rp {{number_format($data->price_total, 2, ',', '.')}}</b></td>
                                      </tr>
                                  </tfoot>  
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