@extends('layouts.blank')

@section('title')
    Toko Bahagia | Detail Inventory
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
                      <li class="active">Detail</li>
                    </ol>  
                    </section>
                  </div>
                </div>
              </section>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              
                <div class="col-md-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Detail Inventory</h2>
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
                          <label>Category :</label>
                          <input type="text" class="form-control" value="{{$inventories->pilihcategory->category_name}}" readonly />

                          <label style="margin-top: 10px;">Location :</label>
                          <input type="text" class="form-control" value="{{$inventories->pilihlocation->location}}" readonly />

                          <label style="margin-top: 10px;">Product Name :</label>
                          <input type="text" class="form-control" value="{{$inventories->product_name}}" readonly />

                          <label style="margin-top: 10px;">Code Factory :</label>
                          <input type="text" class="form-control" value="{{$inventories->code_factory}}" readonly />

                          <label style="margin-top: 10px;">Manufacturer :</label>
                          <input type="text" class="form-control" value="{{$inventories->manufacturer}}" readonly />

                          <label style="margin-top: 10px;">Item Function :</label>
                          <input type="text" class="form-control" value="{{$inventories->item_function}}" readonly />

                          <label style="margin-top: 10px;">Unit Price Minimum :</label>
                          <input type="text" class="form-control" value="Rp {{number_format($inventories->cost_min, 2, ',', '.')}}" readonly />

                          <label style="margin-top: 10px;">Unit Price Maximum :</label>
                          <input type="text" class="form-control" value="Rp {{number_format($inventories->cost_min, 2, ',', '.')}}" readonly />
                        </blockquote>
                      </div>
                      <div class="col-md-4 col-lg-6 col-sm-5">
                        <label>Picture :</label>
                        <center>
                          <div class="anyName">
                            <input type="file" accept="image/gif, image/jpeg, image/png" disabled name="images">
                            <img src="{{ asset('/images/products/'.$inventories->images) }}">
                          </div>  
                        </center>
                        
                        <label style="margin-top: 37px;">Unit of Measure :</label>
                        <input type="text" class="form-control" value="{{$inventories->unit_of_measure}}" readonly />

                        <label style="margin-top: 10px;">Product Description :</label>
                        <textarea rows="6" id="product_desc" class="form-control" readonly>{{$inventories->product_desc}}</textarea>
                        
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

     <script>
        $('.calculate').calx();
    </script>

    @endpush
@endsection