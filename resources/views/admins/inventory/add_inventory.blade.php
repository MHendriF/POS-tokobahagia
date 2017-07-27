@extends('layouts.blank')

@section('title')
    Toko Bahagia | Add Inventory
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
                      <li class="active">Add</li>
                    </ol>  
                    </section>
                  </div>
                </div>
              </section>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <form method="post" action="{{ url('inventory') }}" enctype="multipart/form-data" data-parsley-validate>
                {!! csrf_field() !!}
                <div class="col-md-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Form Add Inventory</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <div class="col-md-6 col-lg-6 col-sm-4">
                        <blockquote class="blockquote-reverse2">
                          <label>Select Category * :</label>
                          <select name="category_id" class="select2_single form-control" tabindex="-1" required>
                            <option></option>
                            @foreach($data as $category)
                                <option value='{{ $category->id}}'> {{ $category->category_name }}</option>
                            @endforeach
                          </select>

                          <label style="margin-top: 10px;">Select Location * :</label>
                          <select name="location_id" class="select2_single form-control" tabindex="-1" required>
                            <option></option>
                            @foreach($data2 as $location)
                                <option value='{{ $location->id}}'> {{ $location->location }}</option>
                            @endforeach
                          </select>

                          <label style="margin-top: 10px;">Product Name * :</label>
                          <input type="text" class="form-control" name="product_name" required />

                          <label style="margin-top: 10px;">Code Factory :</label>
                          <input type="text" class="form-control" name="code_factory" />

                          <label style="margin-top: 10px;">Manufacturer :</label>
                          <input type="text" class="form-control" name="manufacturer" />

                          <label style="margin-top: 10px;">Item Function :</label>
                          <input type="text" class="form-control" name="item_function" />

                          <label style="margin-top: 10px;">Unit Price Minimum * :</label>
                          <input type="number" class="form-control" placeholder="Rp" name="cost_min" data-parsley-type="number" required />

                          <label style="margin-top: 10px;">Unit Price Maximum * :</label>
                          <input type="number" class="form-control" placeholder="Rp" name="cost_max" data-parsley-type="number" required />
                        </blockquote>
                      </div>
                      <div class="col-md-4 col-lg-6 col-sm-5">
                        <label>Picture * :</label>
                        <center>
                          <div class="anyName">
                            <input type="file" accept="image/gif, image/jpeg, image/png" name="images">
                          </div>  
                        </center>
                        
                        <label style="margin-top: 37px;">Unit of Measure * :</label>
                        <input type="text" class="form-control" name="unit_of_measure" required />

                        <label style="margin-top: 10px;">Product Description :</label>
                        <textarea rows="6" id="product_desc" class="form-control" name="product_desc" data-parsley-trigger="keyup" data-parsley-maxlength="1500"></textarea>
                      </div>

                      <div class="clearfix"></div>

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
            width: '300px',
            height: '220px',
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