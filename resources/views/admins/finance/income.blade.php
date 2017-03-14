@extends('layouts.blank')

@section('title')
	Gentellela Alela! | Income
@endsection

@push('stylesheets')
    <!-- Datatables -->
    <link href="{{ asset("assets/datatables.net-bs/css/dataTables.bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/datatables.net-responsive-bs/css/responsive.bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/datatables.net-scroller-bs/css/scroller.bootstrap.min.css") }}" rel="stylesheet">
    <!-- Animate -->
    <link href="{{ asset("assets/animate.css/animate.min.css")}}" rel="stylesheet" type="text/css"/>
    <!-- PNotify -->
    <link href="{{ asset("assets/pnotify/dist/pnotify.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/pnotify/dist/pnotify.buttons.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/pnotify/dist/pnotify.nonblock.css") }}" rel="stylesheet">
    <!-- Sweetalert -->
    <link href="{{ asset("css/sweetalert2/sweetalert2.min.css") }}" rel="stylesheet">
    <link href="{{ asset("build/datetimepicker/css/bootstrap-datetimepicker.min.css") }}" rel="stylesheet"/>
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
                <h3>Income</h3>
              </div>
              <div class="title_right">
                <div class="pull-right">
                  <section class="content-header">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
                    <li class="active">Income</li>
                  </ol>  
                  </section>
                </div>
              </div>
            </section>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Select Month : </h2>
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>

                    <form method="post" action="{{ url('findIncome') }}">
                        {!! csrf_field() !!} 
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

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    @if(empty($data))
                        Add content to the page .......
                    @else
                        @foreach($data as $tes)
                            @if( $tes->income == null)
                                Pendapatan Bulan ini Rp. 0
                            @else
                                Pendapatan Bulan ini Rp. {{$tes->income}}
                            @endif
                            
                        @endforeach
                        {{-- Add content to the page . ..... {{$data->income}} --}}
                    @endif

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
       
        <!-- Datatables -->
        <script src="{{ asset("assets/datatables.net/js/jquery.dataTables.min.js") }}"></script>
        <script src="{{ asset("assets/datatables.net-bs/js/dataTables.bootstrap.min.js") }}"></script>
        <script src="{{ asset("assets/datatables.net-responsive/js/dataTables.responsive.min.js") }}"></script>
        <script src="{{ asset("assets/datatables.net-responsive-bs/js/responsive.bootstrap.js") }}"></script>
        <script src="{{ asset("assets/datatables.net-scroller/js/datatables.scroller.min.js") }}"></script>
        <!-- PNotify -->
        <script src="{{ asset("assets/pnotify/dist/pnotify.js") }}"></script>
        <script src="{{ asset("assets/pnotify/dist/pnotify.animate.js") }}"></script>
        <script src="{{ asset("assets/pnotify/dist/pnotify.buttons.js") }}"></script>
        <script src="{{ asset("assets/pnotify/dist/pnotify.nonblock.js") }}"></script>
        <!-- Sweetalert -->
        <script src="{{ asset("js/sweetalert2/sweetalert2.min.js") }}"></script>

        <script src="{{ asset("js/newdaterangepicker/moment.min.js") }}"></script>
        <script src=" {{ asset("build/datetimepicker/js/bootstrap-datetimepicker.min.js") }}"></script>

        <!-- Custom Theme Scripts -->
        <script src="{{ asset("build/js/custom.min2.js") }}"></script>

        <!-- Include Scripts -->
        @include('javascript.datatables')
        @include('javascript.pnotify')
        @include('javascript.sweetalert')

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