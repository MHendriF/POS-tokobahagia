@extends('layouts.blank')

@section('title')
    Toko Bahagia | Expense
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
                    <h3>Expense List</h3>
                  </div>
                  <div class="title_right">
                    <div class="pull-right">
                      <section class="content-header">
                        <ol class="breadcrumb">
                        <li><a href="{{ url('home') }}"><i class="fa fa-home"></i>Home</a></li>
                        <li class="active">Expense</li>
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
                                <h2>Expense List <small>
                                    <a href="{{ url('expense/create') }}" class="btn btn-primary btn-xs">
                                        <i class="fa fa-plus-square" style="margin-right: 6px;"></i>Create New
                                    </a>
                                </small>
                                </h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                    <li><a href="{{ url('expense') }}"><i class="fa fa-repeat"></i></a></li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        <div class="x_content">
                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Listrik</th>
                                      <th>Air</th>
                                      <th>Makan Pegawai</th>
                                      <th>Lain-lain</th>
                                      <th>Tanggal</th>
                                      <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $index => $expense)
                                    <tr>
                                      <td>{{ $index +1 }}</td>
                                      <td>Rp. {{ $expense->listrik }}</td>
                                      <td>Rp. {{ $expense->air }}</td>
                                      <td>Rp. {{ $expense->makan }}</td>
                                      <td>Rp. {{ $expense->others }}</td>
                                      <td>{{ $expense->created_at->formatLocalized('%B %Y') }}</td>
                                      <td>
                                      <center>
                                        <div class="btn-group">
                                          <a href="{{ url('expense/'.$expense->id.'/edit') }}" class="btn btn-success btn-xs" class="tooltip-top" title="" data-tooltip="Edit"><i class="fa fa-pencil"></i></a>
                                        </div>
                                        <div class="btn-group">
                                          <form id="delete-currency" action="{{ url('expense/'.$expense->id) }}" method="post">
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
    @endpush
    
@endsection