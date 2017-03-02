@extends('layouts.blank')

@section('title')
    Toko Bahagia | Gaji
@endsection
@section('contentheader_title')
  Gaji
@endsection
@section('contentheader_description')
  Dasboard
@endsection


@push('stylesheets')
        <!-- Custom Theme Style -->
        {{-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" /> --}}
        {{-- <link href="{{ asset("js/newdaterangepicker/daterangepicker.css") }}" rel="stylesheet"> --}}

        <!-- Datatables -->
        <link href="{{ asset("css/datatables/dataTables.bootstrap.min.css") }}" rel="stylesheet">
        <link href="{{ asset("css/datatables/buttons.bootstrap.min.css") }}" rel="stylesheet">
        <link href="{{ asset("css/datatables/fixedHeader.bootstrap.min.css") }}" rel="stylesheet">
        <link href="{{ asset("css/datatables/responsive.bootstrap.min.css") }}" rel="stylesheet">
        <link href="{{ asset("css/datatables/scroller.bootstrap.min.css") }}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{ asset("vendors/nprogress/nprogress.css") }}" rel="stylesheet">
        <!-- PNotify -->
        <link href="{{ asset("css/pnotify/pnotify.css") }}" rel="stylesheet">
        <link href="{{ asset("css/pnotify/pnotify.buttons.css") }}" rel="stylesheet">
        <link href="{{ asset("css/pnotify/pnotify.nonblock.css") }}" rel="stylesheet">

        <link href="{{ asset("build/datetimepicker/css/bootstrap-datetimepicker.min.css") }}" rel="stylesheet"/>

        <link href="{{ asset("build/css/action-icon.css") }}" rel="stylesheet"> 
        <link href="{{ asset("build/css/custom.min.css") }}" rel="stylesheet">
@endpush

@section('main_container')

    <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Plain Page</h3> 
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
                    <form method="post" action="{{ url('findGaji') }}">
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
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Location</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       {{--  @foreach($data as $index => $location)
                        <tr>
                          <td>{{ $index +1 }}</td>
                          <td>{{ $location->location }}</td>
                          <td>
                          <center>
                            <div class="btn-group">
                              <a href="{{ url('location/'.$location->id) }}" class="btn btn-primary btn-xs" class="tooltip-top" title="" data-tooltip="View detail"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="btn-group">
                              <a href="{{ url('location/'.$location->id.'/edit') }}" class="btn btn-success btn-xs" class="tooltip-top" title="" data-tooltip="Edit"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="btn-group">
                              <form id="delete-currency" action="{{ url('location/'.$location->id) }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button id="delete" type="submit" class="btn btn-danger btn-xs" class="tooltip-top" title="" data-tooltip="Delete"><i class="fa fa-trash"></i></button>
                              </form>
                            </div>
                          </center>
                          </td>
                        </tr>
                        @endforeach --}}
                      </tbody>
                    </table>
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
    <script src="{{ asset("js/datatables/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("js/datatables/dataTables.bootstrap.min.js") }}"></script>
    <script src="{{ asset("js/datatables/dataTables.buttons.min.js") }}"></script>
    <script src="{{ asset("js/datatables/buttons.bootstrap.min.js") }}"></script>
    <script src="{{ asset("js/datatables/buttons.flash.min.js") }}"></script>
    <script src="{{ asset("js/datatables/buttons.html5.min.js") }}"></script>
    <script src="{{ asset("js/datatables/buttons.print.min.js") }}"></script>
    <script src="{{ asset("js/datatables/dataTables.fixedHeader.min.js") }}"></script>
    <script src="{{ asset("js/datatables/dataTables.keyTable.min.js") }}"></script>
    <script src="{{ asset("js/datatables/dataTables.responsive.min.js") }}"></script>
    <script src="{{ asset("js/datatables/responsive.bootstrap.js") }}"></script>
    <script src="{{ asset("js/datatables/datatables.scroller.min.js") }}"></script>
    <script src="{{ asset("js/datatables/pdfmake.min.js") }}"></script>
    <script src="{{ asset("js/datatables/vfs_fonts.js") }}"></script>
    
    <!-- PNotify -->
    <script src="{{ asset("js/pnotify/pnotify.js") }}"></script>
    <script src="{{ asset("js/pnotify/pnotify.buttons.js") }}"></script>
    <script src="{{ asset("js/pnotify/pnotify.nonblock.js") }}"></script>

    <script src="{{ asset("js/newdaterangepicker/moment.min.js") }}"></script>
    <script src=" {{ asset("build/datetimepicker/js/bootstrap-datetimepicker.min.js") }}"></script>
        <!-- bootstrap-daterangepicker -->
       {{--  <script src="{{ asset("js/newdaterangepicker/moment.min.js") }}"></script>
        <script src="{{ asset("js/newdaterangepicker/daterangepicker.js") }}"></script> --}}
        
        {{-- <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script> --}}
   
        <!-- Custom Theme Scripts -->
        <script src="{{ asset("build/js/custom.min.js") }}"></script>

        {{-- @include('javascript.daterangepicker') --}}

     <!-- Include Scripts -->
    @include('javascript.datatables')
    @include('javascript.pnotify')

    <script type="text/javascript">
        $(function () {
            $('#datetimepicker10').datetimepicker({
                viewMode: 'years',
                format: 'MM-YYYY'
            });
        });
    </script>


    @endpush

@endsection