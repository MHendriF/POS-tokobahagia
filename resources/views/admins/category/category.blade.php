@extends('layouts.blank')

@section('title')
    Toko Bahagia | Location
@endsection

@push('stylesheets')

      <!-- Datatables -->
      <link href="{{ asset("css/datatables/dataTables.bootstrap.min.css") }}" rel="stylesheet">
      <link href="{{ asset("css/datatables/responsive.bootstrap.min.css") }}" rel="stylesheet">
      <link href="{{ asset("css/datatables/scroller.bootstrap.min.css") }}" rel="stylesheet">

      <!-- Custom Theme Style -->
      <link href="{{ asset("build/css/action-icon.css") }}" rel="stylesheet"> 
      <link href="{{ asset("build/css/custom.min.css") }}" rel="stylesheet"> 
      
@endpush

@section('main_container')
     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Location <small>List</small></h3>
              </div>

              <div class="title_right">
              
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
             
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Location List <small>
                      <a href="{{ url('category/create') }}" class="btn btn-primary btn-xs">
                        <i class="fa fa-plus-square" style="margin-right: 6px;"></i>New Category
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
                          <th>Location</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $index => $category)
                        <tr>
                          <td>{{ $index +1 }}</td>
                          <td>{{ $category->category_name }}</td>
                      
                          <td>
                          <center>
                           {{--  <ul class="">
                              <li><a href="{{ url('category/'.$category->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a></li>
                              <li><a href="{{ url('category/'.$category->id.'/edit') }}" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a></li>
                              <li><form action="{{ url('category/'.$category->id) }}" method="post">
                              {{ csrf_field() }}
                              <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                            </form></li>
                            </ul> --}}
                            <div class="floating-box">
                              <a href="{{ url('category/'.$category->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></a>
                            </div>
                            <div class="floating-box">
                              <a href="{{ url('category/'.$category->id.'/edit') }}" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="floating-box">
                              <form action="{{ url('category/'.$category->id) }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
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