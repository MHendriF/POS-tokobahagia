@extends('layouts.blank')

@section('title')
    Toko Bahagia | Add Service
@endsection

@push('stylesheets')
    <!-- Select2 -->
    <link href="{{ asset("assets/select2/dist/css/select2.min.css") }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset("assets/bootstrap-daterangepicker/daterangepicker.css") }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset("assets/iCheck/skins/flat/green.css")}}" rel="stylesheet">
    {{-- <link href="{{ asset("vendors/dropzone/dist/min/dropzone.min.css")}}" rel="stylesheet"> --}}

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
              <h3>Add Service</h3>
            </div>
            <div class="title_right">
              <div class="pull-right">
                <section class="content-header">
                  <ol class="breadcrumb">
                  <li><a href="{{ url('home') }}"><i class="fa fa-home"></i>Home</a></li>
                  <li><a href="{{ url('service') }}">Service</a></li>
                  <li class="active">Add</li>
                </ol>  
                </section>
              </div>
            </div>
          </section>

        </div class="clearfix">

        <div class="row">
         <form method="post" action="{{ url('service') }}" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
            {!! csrf_field() !!}

            <div class="col-md-7 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                      <h2>Form Add Service</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        
                            <input type="hidden" name="user_id" class="form-control" value='{{ Sentinel::getUser()->id }}'>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" ">Technician <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-xs-12">
                                  <select name="technician_id" class="select2_single form-control" tabindex="-1" required>
                                      <option></option>
                                      @foreach($data as $code)
                                          <option value='{{ $code->id}}'> {{ $code->technician_name }}</option>
                                      @endforeach
                                </select>
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" ">Service Item <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-xs-12">
                                  <select name="serv_item_id" class="select2_single form-control" tabindex="-1" required>
                                      <option></option>
                                      @foreach($data2 as $code)
                                          <option value='{{ $code->id}}'> {{ $code->id }}</option>
                                      @endforeach
                                </select>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" ">Service Status <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-xs-12">
                                  <select name="serv_status_id" class="select2_single form-control" tabindex="-1" required>
                                      <option></option>
                                      @foreach($data3 as $code)
                                          <option value='{{ $code->id}}'> {{ $code->status }}</option>
                                      @endforeach
                                </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Name <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-xs-12">
                                  <input type="text" name="cust_name" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Customer Address <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-xs-12">
                                   <textarea class="form-control" name="cust_addr" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 10 caracters long comment.."
                                    data-parsley-validation-threshold="10" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Phone <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-xs-12">
                                  <input type="text" name="cust_phone" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Entry Date <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-xs-12">
                                  <input id="single_cal1" type="text" name="entry_date" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Collect Date <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-xs-12">
                                  <input id="single_cal2" type="text" name="collect_date" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>
                        
                             <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Item Description <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-xs-12">
                                   <textarea class="form-control" name="item_desc" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 10 caracters long comment.."
                                    data-parsley-validation-threshold="10" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Item Serial <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-xs-12">
                                  <input type="text" name="item_serial" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Item Damage <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-xs-12">
                                  <input type="text" name="item_damage" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Warranty <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-xs-12">
                                  <div class="">
                                    <label>
                                      <input type="radio" class="flat" value="Yes" name="warranty" required> Yes
                                    </label>
                                  </div>
                                  <div class="">
                                    <label>
                                      <input type="radio" class="flat" value="No" name="warranty" required> No
                                    </label>
                                  </div>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Technician Fee <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-xs-12">
                                  <input type="number" name="tech_fee" placeholder="Rp" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Service Fee <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-xs-12">
                                  <input type="number" name="serv_fee" placeholder="Rp" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Transport Fee <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-xs-12">
                                  <input type="number" name="trans_fee" placeholder="Rp" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Discount <span class="required">*</span>
                                </label>
                                <div class="col-md-9 col-xs-12">
                                  <input type="number" name="discount" placeholder="Rp" class="form-control col-md-7 col-xs-12" required/>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-xs-12 col-md-offset-3">
                                    <button class="btn btn-primary" type="button">Cancel</button>
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                    </div>
                </div>
            </div>

            <div class="col-md-5 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                      <h2>Select Image</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                     
                      <p>Drag files to the box below for upload or click to select files</p>
                      <center>
                        <div class="anyName">
                          <input type="file" accept="image/gif, image/jpeg, image/png" name="item_images">
                        </div>  
                      </center>
                    </div>
                  </div>
            </div>

          </form>

        </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    @include('includes.footer')
    <!-- /footer content -->

    @push('scripts')
    <!-- iCheck -->
    <script src="{{ asset("assets/iCheck/icheck.min.js") }}"></script>
    <!-- Select2 -->
    <script src="{{ asset("assets/select2/dist/js/select2.full.min.js") }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset("assets/moment/min/moment.min.js") }}"></script>
    <script src="{{ asset("assets/bootstrap-daterangepicker/daterangepicker.js") }}"></script>
    <!-- Upload image -->
    <script src="{{ asset("js/jquery.upload_preview.min.js") }}"></script>
    <!-- Parsley -->
    <script src="{{ asset("assets/parsleyjs/dist/parsley.min.js")}}"></script>
    <script src="{{ asset("js/jquery.upload_preview.min.js") }}"></script>

    <!-- PNotify -->
    <script src="{{ asset("assets/pnotify/dist/pnotify.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.buttons.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.animate.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.nonblock.js") }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset("build/js/custom.min2.js") }}"></script>
    <!-- Include Scripts -->
    @include('javascript.pnotify')
    @include('javascript.validator')
    @include('javascript.select2')

    <script type="text/javascript">
     $('#single_cal1').daterangepicker({
          singleDatePicker: true,
          locale: {
            format: 'DD/MM/YYYY'
          }
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
      });
     $('#single_cal2').daterangepicker({
          singleDatePicker: true,
          locale: {
            format: 'DD/MM/YYYY'
          }
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
      });
     $('#single_cal3').daterangepicker({
          singleDatePicker: true,
          locale: {
            format: 'DD/MM/YYYY'
          }
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
      });
     $('#single_cal4').daterangepicker({
          singleDatePicker: true,
          locale: {
            format: 'DD/MM/YYYY'
          }
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
      });
    </script>

      <script type="text/javascript">
        $('.anyName').uploadPreview({
            width: '360px',
            height: '240px',
            backgroundSize: 'cover',
            fontSize: '16px',
            borderRadius: '10px',
            border: '2px solid #dedede',
            lang: 'en', //language
        });
    </script>
    
    @endpush
@endsection