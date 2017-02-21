@extends('layouts.blank')

@section('title')
    Gentellela Alela! | Edit Product
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

    <!-- PNotify -->
    <link href="{{ asset("css/pnotify/pnotify.css") }}" rel="stylesheet">
    <link href="{{ asset("css/pnotify/pnotify.buttons.css") }}" rel="stylesheet">
    <link href="{{ asset("css/pnotify/pnotify.nonblock.css") }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset("build/css/custom.min2.css") }}" rel="stylesheet"> 
@endpush

@section('main_container')
      <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Edit Product</h3>
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
                      <h2>Edit Product Form <small>Click to validate</small></h2>
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
                       
                        <label for="category_id">Select Category * :</label>
                        <select id="category_id" required="required" name="category_id" class="select2_single form-control" tabindex="-1">
                          <option></option>
                          @foreach($data2 as $category)
                              <option value='{{ $category->id}}'> {{ $category->category_name }}</option>
                          @endforeach
                        </select>

                        <label for="location_id">Select Location * :</label>
                        <select id="location_id" required="required" name="location_id" class="select2_single form-control" tabindex="-1">
                          <option></option>
                          @foreach($data3 as $location)
                              <option value='{{ $location->id}}'> {{ $location->location }}</option>
                          @endforeach
                        </select>

                        <label for="product_name">Product Name * :</label>
                        <input type="text" id="product_name" class="form-control" name="product_name" value="{{$data->product_name}}" required />

                        <label for="product_desc">Product Description (20 chars min, 100 max) :</label>
                            <textarea id="product_desc" required="required" class="form-control" name="product_desc" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                              data-parsley-validation-threshold="10" value="{{$data->product_desc}}"></textarea>

                        <label for="manufacturer">Manufacturer * :</label>
                        <input type="text" id="manufacturer" class="form-control" name="manufacturer" value="{{$data->manufacturer}}" required />

                        <label for="item_use">Item Use * :</label>
                        <input type="text" id="item_use" class="form-control" name="item_use" value="{{$data->item_use}}" required />

                        <label for="unit_price">Unit Price * :</label>
                        <input type="number" id="unit_price" class="form-control" name="unit_price" value="{{$data->unit_price}}" required />

                        <label for="unit_price2">Unit Price 2 * :</label>
                        <input type="number" id="unit_price2" class="form-control" name="unit_price2" value="{{$data->unit_price2}}" required />

                        <label for="avg_cost">Average Cost * :</label>
                        <input type="number" id="avg_cost" class="form-control" name="avg_cost" value="{{$data->avg_cost}}" required />

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
                     
                      <label for="images">Images * :</label>
                      <center>
                        <div class="anyName">
                          <input type="file" accept="image/gif, image/jpeg, image/png" name="images">
                        </div>  
                      </center>

                      <label for="reorder_lvl">Reorder Level * :</label>
                      <input type="number" id="reorder_lvl" class="form-control" name="reorder_lvl" value="{{$data->reorder_lvl}}" required />

                      <label for="lead_time">Lead Time * :</label>
                      <input type="text" id="birthday" class="form-control" name="lead_time" value="{{$data->lead_time}}" required />

                      <label for="pri_vendor">Primary Vendor * :</label>
                      <input type="text" id="pri_vendor" class="form-control" name="pri_vendor" value="{{$data->pri_vendor}}" required />

                      <label for="sec_vendor">Secondary Vendor * :</label>
                      <input type="text" id="sec_vendor" class="form-control" name="sec_vendor" value="{{$data->sec_vendor}}" required />

                      <label for="unit_of_hand">Unit of Hand * :</label>
                      <input type="number" id="unit_of_hand" class="form-control" name="unit_of_hand" value="{{$data->unit_of_hand}}" required />

                      <label for="unit_of_measure">Manufacturer * :</label>
                      <input type="text" id="unit_of_measure" class="form-control" name="unit_of_measure" value="{{$data->unit_of_measure}}" required />

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
    <script src="{{ asset("vendors/iCheck/icheck.min.js") }}"></script>
  
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset("js/moment/moment.min.js") }}"></script>
    <script src="{{ asset("js/daterangepicker/daterangepicker.js") }}"></script>

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
 
    <script src="{{ asset("js/jquery.upload_preview.min.js") }}"></script>
    <!-- PNotify -->
    <script src="{{ asset("js/pnotify/pnotify.js") }}"></script>
    <script src="{{ asset("js/pnotify/pnotify.buttons.js") }}"></script>
    <script src="{{ asset("js/pnotify/pnotify.nonblock.js") }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset("build/js/custom.min.js") }}"></script>
    
    <!-- Include Scripts -->{{-- 
    @include('javascript.bootstrap-wysiwyg') --}}
    @include('javascript.pnotify')
    @include('javascript.select2')

    <script type="text/javascript">
        $('.anyName').uploadPreview({
            width: '200px',
            height: '200px',
            backgroundSize: 'cover',
            fontSize: '16px',
            borderRadius: '20px',
            border: '2px solid #dedede',
            lang: 'en', //language
        });
    </script>

    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {
        $('#birthday').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_3"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    @endpush
@endsection