@extends('layouts.blank')

@section('title')
    Toko Bahagia | Pemesanan
@endsection

@push('stylesheets')

      <!-- Datatables -->
      <link href="{{ asset("css/datatables/dataTables.bootstrap.min.css") }}" rel="stylesheet">
      <link href="{{ asset("css/datatables/buttons.bootstrap.min.css") }}" rel="stylesheet">
      <link href="{{ asset("css/datatables/fixedHeader.bootstrap.min.css") }}" rel="stylesheet">
      <link href="{{ asset("css/datatables/responsive.bootstrap.min.css") }}" rel="stylesheet">
      <link href="{{ asset("css/datatables/scroller.bootstrap.min.css") }}" rel="stylesheet">

      <!-- Custom Theme Style -->
      <link href="{{ asset("build/css/custom.min.css") }}" rel="stylesheet"> 

@endpush

@section('main_container')
     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Purchase Order <small>List</small></h3>
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
                    <h2>Purchase Order List <small>Users</small></h2>
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
                          <th>Suppier</th>
                          <th>Shipping method</th>
                          <th>PO detail</th>
                          <th>PO no</th>
                          <th>PO description</th>
                          <th>Order date</th>
                          <th>Order required</th>
                          <th>Order promised</th>
                          <th>Ship date</th>
                          <th>Freight charge</th>
                          <th>Details</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach($data as $index => $po)
                        <tr>
                          <td>{{ $index +1 }}</td>
                          <td>{{ $po->pilihsupplier->supplier_name }}</td>
                          <td>{{ $po->pilihshipping->method }}</td>
                          <td>{{ $po->po_detail_id }}</td>
                          <td>{{ $po->po_number }}</td>
                          <td>{{ $po->po_description }}</td>
                          <td>{{ $po->order_date }}</td>
                          <td>{{ $po->order_required }}</td>
                          <td>{{ $po->order_promised }}</td>
                          <td>{{ $po->ship_date }}</td>
                          <td>Rp. {{ $po->freight_charge }}</td>
                          @if($po->po_detail_id == '')
                            <td><center><a href="{{ url('purchase_order/'.$po->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-eye"></i></a></center></td>
                          @else
                            <td><center><a href="{{ url('purchase_order/'.$po->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a></center></td>
                          @endif
                            
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

    <!-- Custom Theme Scripts -->
    <script src="{{ asset("build/js/custom.min.js") }}"></script>

     <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->

    @endpush
@endsection