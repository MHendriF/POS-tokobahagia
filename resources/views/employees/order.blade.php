@extends('layouts.blank')

@section('title')
    Gentellela Alela! | Pemesanan
@endsection

@push('stylesheets')
      <!-- Custom Theme Style -->
      <link href="{{ asset("build/css/custom.min.css") }}" rel="stylesheet"> 
@endpush

@section('main_container')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Pemesanan</h3>
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
        </div class="clearfix">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Pemesanan <small>sub title</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
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

                    <form method="post" action="{{ url('/order') }}" class="form-horizontal form-label-left" novalidate>
                        {!! csrf_field() !!}
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="customer_id">Select Customer<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select id="customer_id" required="required" name="customer_id" class="select2_single form-control" tabindex="-1">
                                <option></option>
                                @foreach($data as $customer)
                                    <option value='{{ $customer->id}}'> {{ $customer->contact_name }}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="shipping_id">Shipping method<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <select id="shipping_id" required="required" name="shipping_id" class="select2_single form-control" tabindex="-1">
                                <option></option>
                                @foreach($data2 as $shipping)
                                    <option value='{{ $shipping->id}}'> {{ $shipping->method }}</option>
                                @endforeach
                              </select>
                            </div>
                        </div>

                        {{-- <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_detail_id">Order Detail <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="number" id="order_detail_id" name="order_detail_id" required="required" data-validate-minmax="1,100000" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div> --}}

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_no">Order no <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="number" id="order_no" name="order_no" required="required" data-validate-minmax="1,100" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_date">Order date <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12 xdisplay_inputx form-group has-feedback">
                                <input type="text" required="required" name="order_date" class="form-control" id="single_cal3" placeholder="Date" aria-describedby="inputSuccess2Status3">
                                <span id="inputSuccess2Status3" class="sr-only">(success)</span>
                              </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="po_number">Po number <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="number" id="po_number" name="po_number" required="required" data-validate-minmax="10,100000" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                         <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="freight_charge">Freight charge <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="number" id="freight_charge" name="freight_charge" required="required" data-validate-minmax="1,100000" placeholder="Rp" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                         <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sales_tax_rate_po">Sales tax rate <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="number" id="sales_tax_rate_po" name="sales_tax_rate_po" required="required" data-validate-minmax="1,100000" placeholder="Rp" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                          <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                              <button type="reset" class="btn btn-primary">Cancel</button>
                              <button id="send" type="submit" class="btn btn-success">Submit</button>
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
    <script src="{{ asset("vendors/select2/dist/js/select2.full.min.js")}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset("vendors/moment/min/moment.min.js") }}"></script>
    <script src="{{ asset("js/daterangepicker/daterangepicker.js") }}"></script>
    <!-- validator -->
    <script src="{{ asset("/vendors/validator/validator.js") }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset("build/js/custom.min.js") }}"></script>

    <!-- validator -->
    <script>
      // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>
    <!-- /validator -->

    <!-- Select2 -->
    <script>
      $(document).ready(function() {
        $(".select2_single").select2({
          placeholder: "Select a state",
          allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
          maximumSelectionLength: 4,
          placeholder: "With Max Selection limit 4",
          allowClear: true
        });
      });
    </script>
    <!-- /Select2 -->

    <!-- /Datepicker -->
    <script>
      $(document).ready(function() {
        $('#single_cal1').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_1"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal2').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_2"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal3').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_3"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#single_cal4').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_4"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>
    <!-- /Datepicker -->

    @endpush
@endsection