@extends('layouts.blank')

@section('title')
    Toko Bahagia | Finance
@endsection

@push('stylesheets')
    <!-- Datatables -->
    <link href="{{ asset("assets/datatables.net-bs/css/dataTables.bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/datatables.net-responsive-bs/css/responsive.bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/datatables.net-scroller-bs/css/scroller.bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("build/datetimepicker/css/bootstrap-datetimepicker.min.css") }}" rel="stylesheet"/>
    <!-- Animate -->
    <link href="{{ asset("assets/animate.css/animate.min.css")}}" rel="stylesheet" type="text/css"/>
    <!-- PNotify -->
    <link href="{{ asset("assets/pnotify/dist/pnotify.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/pnotify/dist/pnotify.buttons.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/pnotify/dist/pnotify.nonblock.css") }}" rel="stylesheet">
    <!-- Sweetalert -->
    <link href="{{ asset("css/sweetalert2/sweetalert2.min.css") }}" rel="stylesheet">
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
                    <h3>Finance List</h3>
                  </div>
                  <div class="title_right">
                    <div class="pull-right">
                      <section class="content-header">
                        <ol class="breadcrumb">
                        <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
                        <li class="active">Finance</li>
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
                                <h2>Select Date</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                    <li><a href="{{ url('finance') }}"><i class="fa fa-repeat"></i></a></li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                </ul>
                                
                                <form method="get" action="{{ url('findFinance') }}">
                                    {{-- {!! csrf_field() !!} --}} 
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker10'>
                                                <input type='text' name="searchdate" class="form-control input-sm" />
                                                <span class="input-group-addon input-sm">
                                                    <span class="glyphicon glyphicon-calendar">
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success btn-sm">Find</button>
                                </form>

                                <div class="clearfix"></div>
                            </div>
                        <div class="x_content">
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Tanggal</th>
                                      <th>Keterangan</th>
                                      <th>Kredit</th>
                                      <th>Debit</th>
                                      <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $index => $finance)
                                    <tr>
                                      <td>{{ $index +1 }}</td>
                                      <td>{{ $finance->created_date}}</td>
                                      <td>{{ $finance->keterangan }}</td>
                                      <td>Rp. {{ $finance->kredit }}</td>
                                      <td>Rp. {{ $finance->debit }}</td>
                                     
                                      <td>
                                      <center>
                                        <div class="btn-group">
                                          <a href="{{ url('finance/'.$finance->id.'/edit') }}" class="btn btn-success btn-xs" class="tooltip-top" title="" data-tooltip="Edit"><i class="fa fa-pencil"></i></a>
                                        </div>
                                        <div class="btn-group">
                                          <form id="delete-currency" action="{{ url('finance/'.$finance->id) }}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button id="delete" type="submit" class="btn btn-danger btn-xs" class="tooltip-top" title="" data-tooltip="Delete"><i class="fa fa-trash"></i></button>
                                          </form>
                                        </div>
                                      </center>
                                      </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div></div>
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

        <script src="{{ asset("js/newdaterangepicker/moment.min.js") }}"></script>
        <script src="{{ asset("build/datetimepicker/js/bootstrap-datetimepicker.min.js") }}"></script>

        <!-- PNotify -->
        <script src="{{ asset("assets/pnotify/dist/pnotify.js") }}"></script>
        <script src="{{ asset("assets/pnotify/dist/pnotify.animate.js") }}"></script>
        <script src="{{ asset("assets/pnotify/dist/pnotify.buttons.js") }}"></script>
        <script src="{{ asset("assets/pnotify/dist/pnotify.nonblock.js") }}"></script>
        <!-- Sweetalert -->
        <script src="{{ asset("js/sweetalert2/sweetalert2.min.js") }}"></script>
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