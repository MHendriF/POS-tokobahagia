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
         <form method="post" action="{{ url('service') }}" enctype="multipart/form-data" data-parsley-validate>
            {!! csrf_field() !!}

            <div class="col-md-12">
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
                      <div class="col-md-6 col-lg-6 col-sm-4">
                        <blockquote class="blockquote-reverse2">
                          <input type="hidden" name="user_id" class="form-control" value='{{ Sentinel::getUser()->id }}'>
                          <label>Technician * :</label>
                          <select name="technician_id" class="select2_single form-control" tabindex="-1" required>
                            <option></option>
                            @foreach($data as $code)
                                <option value='{{ $code->id}}'> {{ $code->technician_name }}</option>
                            @endforeach
                          </select>
                          
                          <label style="margin-top: 10px;">Service Item * :</label>
                          <select name="serv_item_id" class="select2_single form-control" tabindex="-1" required>
                            <option></option>
                            @foreach($data2 as $code)
                                <option value='{{ $code->id}}'> {{ $code->id }}</option>
                            @endforeach
                          </select>
                          
                          <label style="margin-top: 10px;">Service Status * :</label>
                          <select name="serv_status_id" class="select2_single form-control" tabindex="-1" required>
                            <option></option>
                            @foreach($data3 as $code)
                                <option value='{{ $code->id}}'> {{ $code->status }}</option>
                            @endforeach
                          </select>

                          <label style="margin-top: 10px;">Customer Name * :</label>
                          <input type="text" class="form-control" name="cust_name" required />

                          <label style="margin-top: 10px;">Customer Phone * :</label>
                          <input type="text" class="form-control" name="cust_phone" required />

                          <label style="margin-top: 10px;">Product Address :</label>
                          <textarea class="form-control" name="cust_addr" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 10 caracters long comment.."
                                data-parsley-validation-threshold="10" ></textarea>

                          <label style="margin-top: 10px;">Entry Date * :</label>
                          <input id="single_cal1" type="text" class="form-control" name="entry_date" required />

                          <label style="margin-top: 10px;">Collect Date * :</label>
                          <input id="single_cal2" type="text" class="form-control" name="collect_date" required />
  
                          <label style="margin-top: 10px;">Item Description :</label>
                          <textarea class="form-control" name="item_desc" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 10 caracters long comment.."
                          data-parsley-validation-threshold="10" ></textarea>

                          <label style="margin-top: 10px;">Item Serial * :</label>
                          <input type="text" class="form-control" name="item_serial" required />

                          <label style="margin-top: 10px;">Item Damage * :</label>
                          <input type="text" class="form-control" name="item_damage" required />
                            
                        </blockquote>
                      </div>
                      <div class="col-md-4 col-lg-6 col-sm-5">
                        <label>Picture * :</label>
                        <center>
                          <div class="anyName">
                            <input type="file" accept="image/gif, image/jpeg, image/png" name="item_images">
                          </div>  
                        </center>

                        <label style="margin-top: 8px;">Warranty * :</label>
                        <div class="radio">
                          <label>
                              <input type="radio" class="flat" value="Yes" checked name="warranty"> Yes
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                              <input type="radio" class="flat" value="No" name="warranty"> No
                          </label>
                        </div>

                        <label style="margin-top: 10px;">Technician Fee * :</label>
                        <input type="number" placeholder="Rp" class="form-control" name="tech_fee" required />

                        <label style="margin-top: 10px;">Service Fee * :</label>
                        <input type="number" placeholder="Rp" class="form-control" name="serv_fee" required />

                        <label style="margin-top: 10px;">Transport Fee * :</label>
                        <input type="number" placeholder="Rp" class="form-control" name="trans_fee" required />

                        <label style="margin-top: 10px;">Discount * :</label>
                        <input type="number" placeholder="Rp" class="form-control" name="discount" required />
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