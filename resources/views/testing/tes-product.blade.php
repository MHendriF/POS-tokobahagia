@extends('layouts.blank')

@section('title')
    Gentellela Alela! | Add Product
@endsection

@push('stylesheets')

    <!-- NProgress -->
    <link href="{{ asset("vendors/nprogress/nprogress.css") }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset("vendors/iCheck/skins/flat/green.css")}}" rel="stylesheet">

    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset("vendors/google-code-prettify/bin/prettify.min.css") }}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ asset("vendors/select2/dist/css/select2.min.css") }}" rel="stylesheet">
       
    
    <!-- Switchery -->
    <link href="{{ asset("css/switchery/switchery.min.css") }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset("css/bootstrap-daterangepicker/daterangepicker.css") }}" rel="stylesheet">

    <!-- Dropzone.js -->
    <link href="{{ asset("vendors/dropzone/dist/min/dropzone.min.css") }}" rel="stylesheet">
     
    <!-- Custom Theme Style -->
    <link href="{{ asset("build/css/custom.min2.css") }}" rel="stylesheet"> 
@endpush

@section('main_container')
      <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Elements</h3>
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
              <form id="demo-form" method="post" action="{{ url('product') }}" enctype="multipart/form-data" data-parsley-validate>
                {!! csrf_field() !!}
                <div class="col-md-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Registration Form <small>Click to validate</small></h2>
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

                      <!-- start form for validation -->
                      {{-- <form id="demo-form" data-parsley-validate> --}}
                       
                        <label for="category_id">Select Category * :</label>
                        <select id="category_id" required="required" name="category_id" class="select2_single form-control" tabindex="-1">
                          <option></option>
                          @foreach($data as $category)
                              <option value='{{ $category->id}}'> {{ $category->category_name }}</option>
                          @endforeach
                        </select>

                        <label for="location_id">Select Location * :</label>
                        <select id="location_id" required="required" name="location_id" class="select2_single form-control" tabindex="-1">
                                      <option></option>
                                      @foreach($data2 as $location)
                                          <option value='{{ $location->id}}'> {{ $location->location }}</option>
                                      @endforeach
                                    </select>

                        <label for="product_name">Product Name * :</label>
                        <input type="text" id="product_name" class="form-control" name="product_name" required />

                        <label for="product_desc">Product Description (20 chars min, 100 max) :</label>
                            <textarea id="product_desc" required="required" class="form-control" name="product_desc" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                              data-parsley-validation-threshold="10"></textarea>

                        <label for="manufacturer">Manufacturer * :</label>
                        <input type="text" id="manufacturer" class="form-control" name="manufacturer" required />

                        <label for="item_use">Item Use * :</label>
                        <input type="text" id="item_use" class="form-control" name="item_use" required />

                        <label for="unit_price">Unit Price * :</label>
                        <input type="number" id="unit_price" class="form-control" name="unit_price" required />

                        <label for="unit_price2">Unit Price 2 * :</label>
                        <input type="number" id="unit_price2" class="form-control" name="unit_price2" required />

                        <label for="avg_cost">Average Cost * :</label>
                        <input type="number" id="avg_cost" class="form-control" name="avg_cost" required />

                        <label for="reorder_lvl">Reorder Level * :</label>
                        <input type="number" id="reorder_lvl" class="form-control" name="reorder_lvl" required />

                        <label>Discontinueted *:</label>
                        <p>
                          Yes:
                          <input type="radio" class="flat" name="discontinueted" id="discontinueted" value="Yes" checked="" required /> 
                          No:
                          <input type="radio" class="flat" name="discontinueted" id="discontinueted" value="No" />
                        </p>

                        <label for="lead_time">Lead Time * :</label>
                        <input type="text" id="single_cal3" class="form-control" name="lead_time" required />

                        <label for="pri_vendor">Primary Vendor * :</label>
                        <input type="text" id="pri_vendor" class="form-control" name="pri_vendor" required />

                        <label for="sec_vendor">Secondary Vendor * :</label>
                        <input type="text" id="sec_vendor" class="form-control" name="sec_vendor" required />

                        <label for="unit_of_hand">Unit of Hand * :</label>
                        <input type="number" id="unit_of_hand" class="form-control" name="unit_of_hand" required />

                        <label for="unit_of_measure">Manufacturer * :</label>
                        <input type="text" id="unit_of_measure" class="form-control" name="unit_of_measure" required />

                            <br/>
                            <div class="ln_solid"></div>

                                <button class="btn btn-primary" type="button">Cancel</button>
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            
                      {{-- </form> --}}
                      <!-- end form for validations -->
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Upload Image <small>Product</small></h2>
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
                      <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p>
                      <label for="images">Images * :</label>
                        <input type="file" id="images" class="form-control" name="images" required />

                      {{-- <form action="#" class="dropzone"></form>
                      <br />
                      <br />
                      <br />
                      <br /> --}}
                    </div>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div>
      <!-- /page content -->

    <!-- footer content -->
    @include('includes.footer')
    <!-- /footer content -->

    @push('scripts')

    <!-- Dropzone.js -->
    <script src="{{ asset("vendors/dropzone/dist/min/dropzone.min.js") }}"></script>

    <!-- bootstrap-progressbar -->
    <script src="{{ asset("vendors/bootstrap-progressbar/bootstrap-progressbar.min.js") }}"></script>
    <!-- iCheck -->
    <script src="{{ asset("vendors/iCheck/icheck.min.js") }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset("vendors/moment/min/moment.min.js") }}"></script>
    <script src="{{ asset("vendors/bootstrap-daterangepicker/daterangepicker.js") }}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{{ asset("vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js") }}"></script>
    <script src="{{ asset("vendors/jquery.hotkeys/jquery.hotkeys.js") }}"></script>
    <script src="{{ asset("vendors/google-code-prettify/src/prettify.js") }}"></script>
    <!-- Switchery -->
    <script src="{{ asset("vendors/switchery/dist/switchery.min.js") }}"></script>
    <!-- Select2 -->
    <script src="{{ asset("vendors/select2/dist/js/select2.full.min2.js") }}"></script>
    <!-- Parsley -->
    <script src="{{ asset("vendors/parsleyjs/dist/parsley.min2.js") }}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{ asset("vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js") }}"></script>
   
    <!-- Custom Theme Scripts -->
    <script src="{{ asset("build/js/custom.min2.js") }}"></script>

    
  

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

 <!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-23581568-13', 'auto');
ga('send', 'pageview');

</script>

    @endpush
@endsection