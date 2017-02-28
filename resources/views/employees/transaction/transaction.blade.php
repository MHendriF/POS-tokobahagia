@extends('layouts.blank')

@section('title')
    Toko Bahagia | Transaction
@endsection
@section('contentheader_title')
  Transaction
@endsection
@section('contentheader_description')
  List
@endsection
@section('contentheader_sub')
  Transaction
@endsection

@push('stylesheets')

      <!-- Datatables -->
      <link href="{{ asset("css/datatables/dataTables.bootstrap.min.css") }}" rel="stylesheet">
      <link href="{{ asset("css/datatables/responsive.bootstrap.min.css") }}" rel="stylesheet">
      <link href="{{ asset("css/datatables/scroller.bootstrap.min.css") }}" rel="stylesheet">
      <!-- NProgress -->
      <link href="{{ asset("vendors/nprogress/nprogress.css") }}" rel="stylesheet">
      <!-- PNotify -->
      <link href="{{ asset("css/pnotify/pnotify.css") }}" rel="stylesheet">
      <link href="{{ asset("css/pnotify/pnotify.buttons.css") }}" rel="stylesheet">
      <link href="{{ asset("css/pnotify/pnotify.nonblock.css") }}" rel="stylesheet">
      <!-- Sweetalert -->
      <link href="{{ asset("css/sweetalert/sweetalert.css") }}" rel="stylesheet">

      <!-- Custom Theme Style -->
      <link href="{{ asset("build/css/action-icon.css") }}" rel="stylesheet"> 
      <link href="{{ asset("build/css/custom.min.css") }}" rel="stylesheet"> 

@endpush

@section('main_container')
     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            @include('includes.contentheader')

            <div class="clearfix"></div>

            <div class="row">
             
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Transaction <small>
                      <a href="{{ url('transaction/create') }}" class="btn btn-primary btn-xs">
                        <i class="fa fa-plus-square" style="margin-right: 6px;"></i>New Transaction
                      </a>
                      </small>
                    </h2>
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
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          {{-- <th>Employee</th> --}}
                          <th>Product</th>
                          <th>Description</th>
                          <th>Date</th>
                          <th>Unit Order</th>
                          <th>Quantity Out</th>
                          <th>Note</th>
                          <th>Price</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $index => $transaction)
                        <tr>
                          <td>{{ $index +1 }}</td>
                          {{-- <td>{{ $transaction->pilihuser->first_name }}</td> --}}
                          <td>{{ $transaction->pilihproduct->product_name }}</td>
                          <td>{{ $transaction->description }}</td>
                          <td>{{ $transaction->transaction_date }}</td>
                          <td>{{ $transaction->unit_order }}</td>
                          <td>{{ $transaction->quantity_out }}</td>
                          <td>{{ $transaction->note }}</td>
                          <td>Rp {{ $transaction->cost_price }}</td>
                          <td>
                          <center>
                            <div class="btn-group">
                              <a href="{{ url('transaction/'.$transaction->id) }}" class="btn btn-primary btn-xs" class="tooltip-top" title="" data-tooltip="View detail"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="btn-group">
                              <a href="{{ url('transaction/'.$transaction->id.'/edit') }}" class="btn btn-success btn-xs" class="tooltip-top" title="" data-tooltip="Edit"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="btn-group">
                              <form id="delete-currency" action="{{ url('transaction/'.$transaction->id) }}" method="post">
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
    <script src="{{ asset("js/datatables/dataTables.responsive.min.js") }}"></script>
    <script src="{{ asset("js/datatables/responsive.bootstrap.js") }}"></script>
    <script src="{{ asset("js/datatables/datatables.scroller.min.js") }}"></script>
    <script src="{{ asset("js/datatables/vfs_fonts.js") }}"></script>
    
    <!-- PNotify -->
    <script src="{{ asset("js/pnotify/pnotify.js") }}"></script>
    <script src="{{ asset("js/pnotify/pnotify.buttons.js") }}"></script>
    <script src="{{ asset("js/pnotify/pnotify.nonblock.js") }}"></script>
    <!-- Sweetalert -->
    <script src="{{ asset("js/sweetalert/sweetalert.min.js") }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset("build/js/custom.min.js") }}"></script>

    <!-- Include Scripts -->
    @include('javascript.datatables')
    @include('javascript.pnotify')
    @include('javascript.sweetalert')

    @endpush
@endsection