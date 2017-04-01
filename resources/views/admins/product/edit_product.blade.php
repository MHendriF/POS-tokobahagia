@extends('layouts.blank')

@section('title')
    Toko Bahagia | Edit Product
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
                <h3>Edit Product</h3>
              </div>
              <div class="title_right">
                <div class="pull-right">
                  <section class="content-header">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
                    <li><a href="{{ url('product') }}">Product</a></li>
                    <li class="active">Edit</li>
                  </ol>  
                  </section>
                </div>
              </div>
            </section>

            <div class="clearfix"></div>

            <div class="row">
              <form id="demo-form" method="post" action="{{ url('product/'.$data->id) }}" enctype="multipart/form-data" data-parsley-validate>
                <input type="hidden" name="_methode" value="PUT">
                {!! csrf_field() !!}
                <div class="col-md-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Form Edit Product</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                       
                        <label>Select Category * :</label>
                        <select required="required" name="category_id" class="select2_single form-control" tabindex="-1">
                          <option></option>
                          @foreach($data2 as $category)
                              <option value='{{ $category->id}}'> {{ $category->category_name }}</option>
                          @endforeach
                        </select>

                        <label>Select Location * :</label>
                        <select required="required" name="location_id" class="select2_single form-control" tabindex="-1">
                          <option></option>
                          @foreach($data3 as $location)
                              <option value='{{ $location->id}}'> {{ $location->location }}</option>
                          @endforeach
                        </select>

                        <label>Product Name * :</label>
                        <input type="text" class="form-control" name="product_name" value="{{$data->product_name}}" required />

                        <label>Code Factory * :</label>
                        <input type="text" class="form-control" name="code_factory" value="{{$data->code_factory}}" required />

                        <label>Manufacturer * :</label>
                        <input type="text" class="form-control" name="manufacturer" value="{{$data->manufacturer}}" required />

                        <label>Item Function * :</label>
                        <input type="text" class="form-control" name="item_function" value="{{$data->item_function}}" required />

                        <label>Unit Price Minimum * :</label>
                        <input type="number" class="form-control" name="unit_price_min" value="{{$data->unit_price_min}}" required />

                        <label>Unit Price Maximum * :</label>
                        <input type="number" class="form-control" name="unit_price_max" value="{{$data->unit_price_max}}" required />

                        <label>Price Buy Average * :</label>
                        <input type="number" class="form-control" name="price_buy_avg" value="{{$data->price_buy_avg}}" readonly />

                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
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
                      <p>This image product cannot to update</p>
                      <center>
                        <div class="anyName">
                          <input type="file" accept="image/gif, image/jpeg, image/png" name="item_images" disabled="disabled" name="images">
                          <img src="{{ asset('/images/products/'.$data->images) }}">
                        </div>  
                      </center>

                      <label>Stock * :</label>
                      <input type="number" class="form-control" name="stock" value="{{$data->stock}}" readonly />

                      <label>Unit of Measure * :</label>
                      <input type="text" class="form-control" name="unit_of_measure" value="{{$data->unit_of_measure}}" required />

                      <label>Product Description (10 chars min, 100 max) :</label>
                      <textarea id="product_desc" class="form-control" name="product_desc" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 10 caracters long comment.."
                              data-parsley-validation-threshold="10" required>{{$data->product_desc}}</textarea>

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
    <script src="{{ asset("assets/moment/min/moment.min.js") }}"></script>
    <script src="{{ asset("assets/bootstrap-daterangepicker/daterangepicker.js") }}"></script>
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