@extends('layouts.blank')

@section('title')
    Toko Bahagia | Product
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
                <h3>Product <small>List</small></h3>
              </div>

              <div class="title_right">
              
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
             
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Products List <small>
                      <a href="{{ url('product/create') }}" class="btn btn-primary btn-xs">
                        <i class="fa fa-plus-square" style="margin-right: 6px;"></i>New Product
                      </a></small>
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
                          <th>Category</th>
                          <th>Location</th>
                          <th>Name</th>
                          <th>Manufacturer</th>
                          {{-- <th>Item</th>
                          <th>Price</th>
                          <th>Price 2</th>
                          <th>Avg cost</th>
                          <th>Level</th>
                          <th>Discontinueted</th> --}}
                          <th>Lead time</th>
                          <th>Images</th>{{-- 
                          <th>pri_vendor</th>
                          <th>sec_vendor</th>
                          <th>unit_of_hand</th>
                          <th>unit_of_measure</th> --}}
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $index => $product)
                        <tr>
                          <td>{{ $index +1 }}</td>
                          <td>{{ $product->pilihcategory->category_name }}</td>
                          <td>{{ $product->pilihlocation->location }}</td>
                          <td>{{ $product->product_name }}</td>
                          <td>{{ $product->manufacturer }}</td>
                          {{-- <td>{{ $product->item_use }}</td>
                          <td>{{ $product->unit_price }}</td>
                          <td>{{ $product->unit_price2 }}</td>
                          <td>{{ $product->avg_cost }}</td>
                          <td>{{ $product->reorder_lvl }}</td>
                          <td>{{ $product->discontinueted }}</td> --}}
                          <td>{{ $product->lead_time }}</td>
                          <td>{{ $product->images }}</td>
                          {{-- <td>{{ $product->pri_vendor }}</td>
                          <td>{{ $product->sec_vendor }}</td>
                          <td>{{ $product->unit_of_hand }}</td>
                          <td>{{ $product->unit_of_measure }}</td> --}}
                          <td>
                          <center>
                            <a href="{{ url('product/'.$product->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a>
                            <a href="{{ url('product/'.$product->id.'/edit') }}" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
                            <form action="{{ url('product/'.$product->id) }}" method="post">
                              {{ csrf_field() }}
                              <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                            </form>
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