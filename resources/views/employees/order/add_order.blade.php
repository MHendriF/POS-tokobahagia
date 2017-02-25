@extends('layouts.blank')

@section('title')
    Toko Bahagia | Order
@endsection

@push('stylesheets')
    <!-- PNotify -->
    <link href="{{ asset("css/pnotify/pnotify.css") }}" rel="stylesheet">
    <link href="{{ asset("css/pnotify/pnotify.buttons.css") }}" rel="stylesheet">
    <link href="{{ asset("css/pnotify/pnotify.nonblock.css") }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset("vendors/nprogress/nprogress.css") }}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ asset("vendors/select2/dist/css/select2.min.css") }}" rel="stylesheet">
    <!-- Include SmartWizard CSS -->
    <link href="{{ asset("css/smartWizard/smart_wizard.css")}}" rel="stylesheet" type="text/css" />
    <!-- Optional SmartWizard theme -->
    <link href="{{ asset("css/smartWizard/smart_wizard_theme_dots.css")}}" rel="stylesheet" type="text/css" />
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/custom.min.css") }}" rel="stylesheet"> 
@endpush

@section('main_container')
    <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Order</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Order <small>Barang</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                     <form action="{{ url('/order') }}" id="myForm" class="form-horizontal form-label-left" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
                        {!! csrf_field() !!}
                        <!-- SmartWizard html -->
                        <div id="smartwizard">
                            <ul>
                                <li><a href="#step-1"><small>Order Entry</small></a></li>
                                <li><a href="#step-2"><small>Order Detail</small></a></li>
                                <li><a href="#step-3"><small>Terms and Conditions</small></a></li>
                            </ul>
                            
                            <div>
                                <div id="step-1">
                                    <h2>Order Entry</h2>
                                    <div id="form-step-0" role="form" data-toggle="validator">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Select Customer <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <select id="customer_id" required="required" name="customer_id" class="select2_single form-control" tabindex="-1">
                                                <option></option>
                                                @foreach($data as $customer)
                                                    <option value='{{ $customer->id}}'> {{ $customer->contact_name }}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Shipping Method <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <select id="shipping_id" required="required" name="shipping_id" class="select2_single form-control" tabindex="-1">
                                                <option></option>
                                                @foreach($data2 as $shipping)
                                                    <option value='{{ $shipping->id}}'> {{ $shipping->method }}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_no">Order No <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="number" id="order_no" name="order_no" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                         <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_no">Order Date <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx">
                                              <input type="text" required="required" name="order_date" class="form-control" id="single_cal3" placeholder="Date">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="po_number">Po No <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="number" id="po_number" name="po_number" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="freight_charge">Freight Charge <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="number" id="freight_charge" name="freight_charge" required="required" placeholder="Rp" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sales_tax_rate_po">Sales Tax Rate <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="number" id="sales_tax_rate_po" name="sales_tax_rate_po" required="required" placeholder="Rp" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>  
                                </div>

                                <div id="step-2">
                                    <h2>Order Detail</h2>
                                    <div id="form-step-1" role="form" data-toggle="validator">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_id">Select Product <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                               <select id="product_id" required="required" name="product_id" class="select2_single form-control" tabindex="-1">
                                                <option></option>
                                                @foreach($data3 as $product)
                                                    <option value='{{ $product->id}}'> {{ $product->product_name }}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                        <div class="help-block with-errors"></div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quantity_in">Quantity In <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="number" id="quantity_in" name="quantity_in" required="required" placeholder="Pieces" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quantity_out">Quantity Out <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="number" id="quantity_out" name="quantity_out" required="required" placeholder="Pieces" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="line_total">Line Total <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="number" id="line_total" name="line_total" required="required" placeholder="Rp" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="discount">Discount <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="number" id="discount" name="discount" required="required" placeholder="Rp" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="grand_total">Grand Total <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="number" id="grand_total" name="grand_total" required="required" placeholder="Rp" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price_ref">Price Reference <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                              <input type="number" id="price_ref" name="price_ref" required="required" placeholder="Rp" class="form-control col-md-7 col-xs-12">
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="step-3" class="">
                                    <h2>Terms and Conditions</h2>
                                    <p>
                                        Terms and conditions: Keep your smile :) 
                                    </p>
                                    <div id="form-step-3" role="form" data-toggle="validator">
                                        <div class="form-group">
                                            <label for="terms">I agree with the T&C</label>
                                            <input type="checkbox" id="terms" data-error="Please accept the Terms and Conditions" required>  
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </form>


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

    <!-- Select2 -->
    <script src="{{ asset("js/select2/select2.full.min.js")}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset("js/moment/moment.min.js") }}"></script>
    <script src="{{ asset("js/daterangepicker/daterangepicker.js") }}"></script>

    <!-- Include jQuery Validator plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
    <!-- Include SmartWizard JavaScript source -->
    <script type="text/javascript" src="{{ asset("js/smartWizard/jquery.smartWizard.min.js") }}"></script>
    <!-- PNotify -->
    <script src="{{ asset("js/pnotify/pnotify.js") }}"></script>
    <script src="{{ asset("js/pnotify/pnotify.buttons.js") }}"></script>
    <script src="{{ asset("js/pnotify/pnotify.nonblock.js") }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset("js/custom.min.js") }}"></script>

    <!-- Include Scripts -->
    @include('javascript.pnotify')
    @include('javascript.select2')
    @include('javascript.datepicker')
    @include('javascript.smartwizard')


    @endpush
@endsection