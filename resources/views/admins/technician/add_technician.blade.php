@extends('layouts.blank')

@section('title')
    Gentellela Alela! | Add Technician
@endsection

@push('stylesheets')
    <!-- PNotify -->
    <link href="{{ asset("css/pnotify/pnotify.css") }}" rel="stylesheet">
    <link href="{{ asset("css/pnotify/pnotify.buttons.css") }}" rel="stylesheet">
    <link href="{{ asset("css/pnotify/pnotify.nonblock.css") }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset("build/css/custom.min.css") }}" rel="stylesheet"> 
@endpush

@section('main_container')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add Technician</h3>
                </div>

                <div class="title_right">
                   
                </div>
            </div>
        </div class="clearfix">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                      <h2>Form Add Technician <small>sub title</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
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
                        <form method="post" action="{{ url('technician') }}" class="form-horizontal form-label-left" novalidate>
                            {!! csrf_field() !!}

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Technician name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="technician_name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Test date <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
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
    <!-- /page content -->

    <!-- footer content -->
    @include('includes.footer')
    <!-- /footer content -->

    @push('scripts')
     <!-- bootstrap-daterangepicker -->
    <script src="{{ asset("js/moment/moment.min.js") }}"></script>
    <script src="{{ asset("js/daterangepicker/daterangepicker.js") }}"></script>

    <!-- validator -->
    <script src="{{ asset("js/validator/validator.js") }}"></script>
    <!-- PNotify -->
    <script src="{{ asset("js/pnotify/pnotify.js") }}"></script>
    <script src="{{ asset("js/pnotify/pnotify.buttons.js") }}"></script>
    <script src="{{ asset("js/pnotify/pnotify.nonblock.js") }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset("js/custom.min.js") }}"></script>

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
 
    <!-- PNotify -->
    <script>
      $(document).ready(function() {
          @if(session('error'))
            new PNotify({
              title: "Error",
              type: "error",
              text: "{{ session('error') }}",
              delay: "2500",
              nonblock: {
                  nonblock: true
              },
              styling: 'bootstrap3',
              hide: true,
              shadow: true,
            });
          @endif
        });
    </script>
    <!-- /PNotify -->
    
    @endpush
@endsection