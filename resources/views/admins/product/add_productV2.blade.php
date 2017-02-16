@extends('layouts.blank')

@section('title')
    Gentellela Alela! | Add Product
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
                    <h3>Add Product</h3>
                </div>

                <div class="title_right">
                   
                </div>
            </div>
        </div class="clearfix">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Form Input Grid <small>form input </small></h2>
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

                  <div class="row">
                    <form method="post" action="{{ url('product') }}" class="form-horizontal form-label-left" novalidate>
                      {!! csrf_field() !!}
                      
                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                       <label>Select category</label>
                        <select id="category_id" required="required" name="category_id" class="select2_single form-control" tabindex="-1">
                          <option></option>
                          @foreach($data as $category)
                              <option value='{{ $category->id}}'> {{ $category->category_name }}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                       <label>Select location</label>
                        <select id="location_id" required="required" name="location_id" class="select2_single form-control" tabindex="-1">
                          <option></option>
                          @foreach($data2 as $location)
                            <option value='{{ $location->id}}'> {{ $location->location }}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                       <label>Product name</label>
                        <input type="text" name="product_name" placeholder="" class="form-control">
                      </div>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                       <label>Product description</label>
                        <input type="text" name="product_desc" placeholder="" class="form-control">
                      </div>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                       <label>Manufacturer</label>
                        <input type="text" name="manufacturer" required="required" placeholder="" class="form-control">
                      </div>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                       <label>Item use</label>
                        <input type="text" name="item_use" placeholder="" class="form-control">
                      </div>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                       <label>Unit price</label>
                        <input type="number" name="unit_price" placeholder="Rp" class="form-control">
                      </div>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                       <label>Unit price 2</label>
                        <input type="number" name="unit_price2" placeholder="Rp" class="form-control">
                      </div>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                       <label>Average cost</label>
                        <input type="number" name="avg_cost" placeholder="Rp" class="form-control">
                      </div>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                       <label>Reorder level</label>
                        <input type="number" name="reorder_lvl" placeholder="" class="form-control">
                      </div>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                       <label>Discontinueted</label>
                        <select id="location_id" required="required" name="discontinueted" class="form-control" tabindex="-1">
                          <option></option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                      </div>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                       <label>Lead time</label>
                         <input type="text" required="required" name="lead_time" class="form-control" id="single_cal3" placeholder="Date">
                      </div>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                       <label>Primary vendor</label>
                        <input type="text" name="pri_vendor" placeholder="" class="form-control">
                      </div>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                       <label>Secondary vendor</label>
                        <input type="text" name="sec_vendor" placeholder="" class="form-control">
                      </div>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                       <label>Unit of hand</label>
                        <input type="number" name="unit_of_hand" placeholder="" class="form-control">
                      </div>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                       <label>Unit of measure</label>
                        <input type="text" name="unit_of_measure" placeholder="PC" class="form-control">
                      </div>

                       <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                       <label>Images</label>
                        <input type="text" name="images" placeholder="" class="form-control">
                      </div>

                      <div class="form-group">
                        <div class="btn">
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
    <script src="{{ asset("js/daterangepicker.js") }}"></script>
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