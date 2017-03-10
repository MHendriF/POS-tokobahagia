@extends('layouts.blank')

@section('title')
	Toko Bahagia | Home
@endsection
@section('contentheader_title')
  	Test
@endsection
@section('contentheader_description')
  	Dasboard
@endsection


@push('stylesheets')

     <!-- PNotify -->
    <link href="{{asset("vendors/pnotify/dist/pnotify.css")}}" rel="stylesheet">
    <link href="{{asset("vendors/pnotify/dist/pnotify.buttons.css")}}" rel="stylesheet">
    <link href="{{asset("vendors/pnotify/dist/pnotify.nonblock.css")}}" rel="stylesheet">

    <link href="{{ asset("build/datetimepicker/css/bootstrap-datetimepicker.min.css") }}" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="{{ asset("build/css/action-icon.css") }}" rel="stylesheet"> 
    <link href="{{ asset("build/css/custom.min2.css") }}" rel="stylesheet">
@endpush

@section('main_container')

     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tes Page</h3> 
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
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Select Date : </h2>
                    <form method="post" action="{{ url('find') }}">
                        {!! csrf_field() !!} 
                        {{-- <div id="reportrange_right" class="pull-left" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; margin-left: 13px;">
                          <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                          <span></span> <b class="caret"></b>
                        </div> --}}
                        <div class="col-sm-3">
                            <div class="form-group">
                                <div class='input-group date' id='datetimepicker10'>
                                    <input type='text' name="reportdate" class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar">
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                          <button type="submit" class="btn btn-success">Submit</button>
                    </form>

                    
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
                    <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>
                    
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
	    <!-- PNotify -->
	    <script src="{{asset("vendors/pnotify/dist/pnotify.js")}}"></script>
	    <script src="{{asset("vendors/pnotify/dist/pnotify.buttons.js")}}"></script>
	    <script src="{{asset("vendors/pnotify/dist/pnotify.nonblock.js")}}"></script>
        <!-- Custom Theme Scripts -->

      <script src="{{ asset("js/newdaterangepicker/moment.min.js") }}"></script>
      <script src=" {{ asset("build/datetimepicker/js/bootstrap-datetimepicker.min.js") }}"></script>
        
        <script src="{{ asset("build/js/custom.min2.js") }}"></script>

        <script type="text/javascript">
	    $(function(){
	        new PNotify({
	            title: 'Regular Notice',
	            text: 'Check me out! I\'m a notice.',
	            delay: "2500",
	            nonblock: {
	                nonblock: true,
	                nonblock_opacity: .2
	            },
	            animate: {
	                animate: true,
	                in_class: 'bounceIn',
	                out_class: 'bounceOut'
	            }
	        });
	    });
	    </script>

        <script type="text/javascript">
        $(function () {
            $('#datetimepicker10').datetimepicker({
                viewMode: 'years',
                format: 'MM/YYYY'
            });
        });
    </script>


    @endpush

@endsection