@extends('layouts.blank')

@section('title')
    Toko Bahagia | Add Product
@endsection
@section('contentheader_title')
  Add Product
@endsection

@section('contentheader_sub')
  Product
@endsection

@push('stylesheets')

    <!-- iCheck -->
    <link href="{{ asset("assets/iCheck/skins/flat/green.css")}}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ asset("assets/select2/dist/css/select2.min.css") }}" rel="stylesheet">
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
            
            @include('includes.contentheader')

            <div class="clearfix"></div>

            <div class="row">
              <form id="demo-form" method="post" action="{{ url('product') }}" enctype="multipart/form-data" id="demo-form2" data-parsley-validate>
                {!! csrf_field() !!}
                <div class="col-md-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Form Add Product</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <label for="category_id">Select Category * :</label>
                        <select id="category_id" name="category_id" class="select2_single form-control" tabindex="-1" required>
                          <option></option>
                          @foreach($data as $category)
                              <option value='{{ $category->id}}'> {{ $category->category_name }}</option>
                          @endforeach
                        </select>

                        <label for="location_id">Select Location * :</label>
                        <select id="location_id" name="location_id" class="select2_single form-control" tabindex="-1" required>
                          <option></option>
                          @foreach($data2 as $location)
                              <option value='{{ $location->id}}'> {{ $location->location }}</option>
                          @endforeach
                        </select>

                        <label for="product_name">Product Name * :</label>
                        <input type="text" id="product_name" class="form-control" name="product_name" required />

                        <label for="product_desc">Product Description (10 chars min, 100 max) :</label>
                            <textarea id="product_desc" class="form-control" name="product_desc" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 10 caracters long comment.."
                              data-parsley-validation-threshold="10" required></textarea>

                        <label for="manufacturer">Manufacturer * :</label>
                        <input type="text" id="manufacturer" class="form-control" name="manufacturer" required />

                        <label for="item_use">Item Use * :</label>
                        <input type="text" id="item_use" class="form-control" name="item_use" required />

                        <label for="unit_price">Unit Price * :</label>
                        <input type="number" id="unit_price" class="form-control" name="unit_price" required="required" />

                        <label for="unit_price2">Unit Price 2 * :</label>
                        <input type="number" id="unit_price2" class="form-control" name="unit_price2" required />

                        <label for="avg_cost">Average Cost * :</label>
                        <input type="number" id="avg_cost" class="form-control" name="avg_cost" required/>

                        <label>Discontinueted *:</label>
                        <p>
                          Yes:
                          <input type="radio" class="flat" name="discontinueted" id="discontinueted" value="Yes" checked="" required /> 
                          No:
                          <input type="radio" class="flat" name="discontinueted" id="discontinueted" value="No" />
                        </p>
             
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Upload Image <small>Product</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                     
                      <p>Drag files to the box below for upload or click to select files.</p>
                      <center>
                        <div class="anyName">
                          <input type="file" accept="image/gif, image/jpeg, image/png" name="images">
                        </div>  
                      </center>

                      <label for="reorder_lvl">Reorder Level * :</label>
                      <input type="number" id="reorder_lvl" class="form-control" name="reorder_lvl" required />

                      <label for="lead_time">Lead Time * :</label>
                      <input type="text" id="single_cal3" placeholder="Date" class="form-control" name="lead_time" required />

                      <label for="pri_vendor">Primary Vendor * :</label>
                      <input type="text" id="pri_vendor" class="form-control" name="pri_vendor" required />

                      <label for="sec_vendor">Secondary Vendor * :</label>
                      <input type="text" id="sec_vendor" class="form-control" name="sec_vendor" required />

                      <label for="unit_of_hand">Unit of Hand * :</label>
                      <input type="number" id="unit_of_hand" class="form-control" name="unit_of_hand" required />

                      <label for="unit_of_measure">Manufacturer * :</label>
                      <input type="text" id="unit_of_measure" class="form-control" name="unit_of_measure" required />

                      <div class="ln_solid"></div>
                      <center>
                        <button class="btn btn-primary" type="button">Cancel</button>
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </center>
                    </div>
                  </div>
                </div>
              </form>

            </div>

            </div>

          </div>
        </div>
      <!-- /page content -->

    <!-- footer content -->
    @include('includes.footer')
    <!-- /footer content -->

    @push('scripts')

    <!-- iCheck -->
    <script src="{{ asset("assets/iCheck/icheck.min.js") }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset("assets/moment/min/moment.min.js") }}"></script>{{-- 
    <script src="{{ asset("assets/bootstrap-daterangepicker/daterangepicker.js") }}"></script> --}}
    <script src="{{ asset("assets/dangrossman/daterangepicker.js") }}"></script>
    <!-- Switchery -->
    <script src="{{ asset("assets/switchery/dist/switchery.min.js") }}"></script>
    <!-- Select2 -->
    <script src="{{ asset("assets/select2/dist/js/select2.full.min.js") }}"></script>
    <!-- Parsley -->
    <script src="{{ asset("assets/parsleyjs/dist/parsley.min.js") }}"></script>
    <script src="{{ asset("js/jquery.upload_preview.min.js") }}"></script>
    <!-- PNotify -->
    <script src="{{ asset("assets/pnotify/dist/pnotify.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.animate.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.buttons.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.nonblock.js") }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset("build/js/custom.min2.js") }}"></script>
    
    <!-- Include Scripts -->
    @include('javascript.pnotify')
    @include('javascript.select2')
    {{-- @include('javascript.datepicker') --}}

    <script type="text/javascript">
        $('.anyName').uploadPreview({
            width: '250px',
            height: '200px',
            backgroundSize: 'cover',
            fontSize: '16px',
            borderRadius: '10px',
            border: '2px solid #dedede',
            lang: 'en', //language
        });
    </script>

    <script type="text/javascript">
     $('#single_cal3').daterangepicker({
          singleDatePicker: true,
          locale: {
            format: 'DD/MM/YYYY'
          }
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
      });
    </script>

    @endpush
@endsection