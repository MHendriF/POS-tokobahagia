@extends('layouts.blank')

@section('title')
    Toko Bahagia | Order
@endsection

@push('stylesheets')

      <!-- Datatables -->
      <link href="{{ asset("assets/datatables.net-bs/css/dataTables.bootstrap.min.css") }}" rel="stylesheet">
      <link href="{{ asset("assets/datatables.net-buttons-bs/css/buttons.bootstrap.min.css")}}" rel="stylesheet">
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
                <h3>Order Management</h3>
              </div>
              <div class="title_right">
                <div class="pull-right">
                  <section class="content-header">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('home') }}"><i class="fa fa-home"></i>Home</a></li>
                    <li class="active">Order</li>
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
                    <h2>Order List <small>
                      <a href="{{ url('order/create') }}" class="btn btn-primary btn-xs">
                        <i class="fa fa-plus-square" style="margin-right: 6px;"></i>Create New
                      </a>
                      </small>
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a href="{{ url('order') }}"><i class="fa fa-repeat"></i></a></li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Order Code</th>
                          <th>Customer</th>
                          <th>Location</th>
                          <th>Shipping Method</th>
                          <th>Shipping Date</th>
                          <th>Price Total</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach($orders as $index => $order)
                        <tr>
                          <td>{{ $index +1 }}</td>
                          <td>{{ $order->order_code }}</td>
                          <td>{{ $order->pilihcustomer->contact_name }}</td>
                          <td>{{ $order->pilihlocation->location }}</td>
                          <td>{{ $order->pilihshipping->method }}</td>
                          <td>{{ $order->shipping_date }}</td>
                          <td>Rp {{ number_format($order->price_total, 2, ',', '.') }}</td>
                          
                          <td>
                            <center>
                              <div class="btn-group">
                                <a href="{{ url('order/'.$order->id) }}" class="btn btn-primary btn-xs" class="tooltip-top" title="" data-tooltip="View detail"><i class="fa fa-eye"></i></a>
                              </div>
                              <div class="btn-group">
                                <form action="{{ url('order/'.$order->id) }}" method="post">
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

            @if(count($orders)>0)
              <div class="row">
                <div class="col-xs-12">
                  <div class="x_panel">
                    <div class="title_left">
                        <h2>Keterangan</h2>
                    </div>
                    <div class="btn-group">
                      <ul>
                        <li class="btn btn-primary btn-xs" style="margin-bottom: 6px;"><i class="fa fa-eye" style="width: 13px"></i></li>
                          <strong style="margin-left: 6px"> : Melihat Detail Data Order</strong>
                          <div class="clearfix"></div>
                        <li class="btn btn-danger btn-xs" style="margin-bottom: 6px;"><i class="fa fa-trash" style="width: 13px"></i></li>
                          <strong style="margin-left: 6px"> : Menghapus Data Order</strong>
                          <div class="clearfix"></div>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            @endif

          </div>
        </div>
        <!-- /page content -->

    <!-- footer content -->
    @include('includes.footer')
    <!-- /footer content -->

    @push('scripts')

    <script src="{{ asset("assets/datatables.net/js/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset("assets/datatables.net-bs/js/dataTables.bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/datatables.net-buttons/js/dataTables.buttons.min.js") }}"></script>
    <script src="{{ asset("assets/datatables.net-buttons-bs/js/buttons.bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/datatables.net-buttons/js/buttons.flash.min.js") }}"></script>
    <script src="{{ asset("assets/datatables.net-buttons/js/buttons.html5.min.js") }}"></script>
    <script src="{{ asset("assets/datatables.net-buttons/js/buttons.print.min.js") }}"></script>
    <script src="{{ asset("assets/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js") }}"></script>
    <script src="{{ asset("assets/datatables.net-keytable/js/dataTables.keyTable.min.js") }}"></script>
    <script src="{{ asset("assets/datatables.net-responsive/js/dataTables.responsive.min.js") }}"></script>
    <script src="{{ asset("assets/datatables.net-responsive-bs/js/responsive.bootstrap.js") }}"></script>
    <script src="{{ asset("assets/datatables.net-scroller/js/dataTables.scroller.min.js") }}"></script>
    <script src="{{ asset("assets/jszip/dist/jszip.min.js") }}"></script>
    <script src="{{ asset("assets/pdfmake/build/pdfmake.min.js") }}"></script>
    <script src="{{ asset("assets/pdfmake/build/vfs_fonts.js") }}"></script>

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