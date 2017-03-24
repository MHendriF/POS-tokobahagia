@extends('layouts.blank')

@section('title')
    Toko Bahagia | Detail Product
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
                <h3>Detail Product</h3>
              </div>
              <div class="title_right">
                <div class="pull-right">
                  <section class="content-header">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
                    <li><a href="{{ url('product') }}">Product</a></li>
                    <li class="active">Detail</li>
                  </ol>  
                  </section>
                </div>
              </div>
            </section>

            <div class="clearfix"></div>

            <div class="row">
             
                <div class="col-md-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Detail Product</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                       
                        <label>Category :</label>
                        <input type="text" class="form-control" value="{{$data->pilihcategory->category_name}}" readonly="readonly" />

                        <label>Location :</label>
                        <input type="text" class="form-control" value="{{$data->pilihlocation->location}}" readonly="readonly" />

                        <label>Product Name :</label>
                        <input type="text" class="form-control" value="{{$data->product_name}}" readonly="readonly" />

                        <label>Product Description :</label>
                        <textarea id="product_desc" class="form-control" readonly="readonly">{{$data->product_desc}}</textarea>


                        <label>Manufacturer :</label>
                        <input type="text" class="form-control" value="{{$data->manufacturer}}" readonly="readonly" />

                        <label>Item Use :</label>
                        <input type="text" class="form-control" value="{{$data->item_use}}" readonly="readonly" />

                        <label>Unit Price :</label>
                        <input type="number" class="form-control" value="{{$data->unit_price}}" readonly="readonly" />

                        <label>Unit Price 2 :</label>
                        <input type="number" class="form-control" value="{{$data->unit_price2}}" readonly="readonly" />

                        <label>Average Cost * :</label>
                        <input type="number" class="form-control" value="{{$data->avg_cost}}" readonly="readonly" />
                        <label>Discontinueted *:</label>
                        <p>
                          @if($data->discontinueted == 'Yes')
                            Yes:
                            <input type="radio" class="flat"  disabled="disabled" checked="checked" /> 
                            No:
                            <input type="radio" class="flat"  disabled="disabled" />
                          @else
                            Yes:
                            <input type="radio" class="flat"  disabled="disabled" /> 
                            No:
                            <input type="radio" class="flat"  disabled="disabled" checked="checked" />
                          @endif
                        </p>

                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Detail Product</h2>
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

                      <label>Reorder Level :</label>
                      <input type="number" class="form-control" value="{{$data->reorder_lvl}}" readonly="readonly" />

                      <label>Lead Time :</label>
                      <input type="text" class="form-control" value="{{$data->lead_time}}" readonly="readonly" />

                      <label>Primary Vendor :</label>
                      <input type="text" class="form-control" value="{{$data->pri_vendor}}" readonly="readonly" />

                      <label>Secondary Vendor :</label>
                      <input type="text" class="form-control" value="{{$data->sec_vendor}}" readonly="readonly" />

                      <label>Unit of Hand :</label>
                      <input type="number" class="form-control" value="{{$data->unit_of_hand}}" readonly="readonly" />

                      <label>Manufacturer :</label>
                      <input type="text" class="form-control" value="{{$data->unit_of_measure}}" readonly="readonly" />

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
            width: '300px',
            height: '220px',
            backgroundSize: 'cover',
            fontSize: '16px',
            borderRadius: '20px',
            border: '2px solid #dedede',
            lang: 'en', //language
        });
    </script>

    @endpush
@endsection