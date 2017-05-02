@extends('layouts.blank')

@section('title')
    Toko Bahagia | Product
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
                <h3>Product List</h3>
              </div>
              <div class="title_right">
                <div class="pull-right">
                  <section class="content-header">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
                    <li class="active">Product</li>
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
                    <h2>Product List 
                      <small>
                        <a href="{{ url('product/create') }}" class="btn btn-primary btn-xs">
                          <i class="fa fa-plus-square" style="margin-right: 6px;"></i>Create New
                        </a>
                      </small>
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a href="{{ url('product') }}"><i class="fa fa-repeat"></i></a></li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>

                    <form method="get" action="{{ url('showbycategory') }}" id="formsearch">
                      {{-- {!! csrf_field() !!} --}}
                       <div class="col-sm-3">
                            <div class="form-group">
                                <select id="showCategory" name="search" class="form-control input-sm" tabindex="-1">
                                  <option> Choose One </option>
                                  @foreach($data2 as $category)
                                    <option value='{{ $category->id}}'> {{ $category->category_name }}</option>
                                   @endforeach       
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm">Show By Category</button>
                    </form>

                    <div class="clearfix"></div>
                  </div>

                  @if(count($data)>0)

                    <div class="x_content">
                      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Manufacturer</th>
                            <th>Location</th>
                            <th>Stock</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $index => $product)
                          <tr>
                            <td>{{ $index +1 }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->pilihcategory->category_name }}</td>
                            <td>{{ $product->manufacturer }}</td>
                            <td>{{ $product->pilihlocation->location }}</td>
                            <td>{{ $product->stock }}</td>
                            
                            {{-- <td><center><img src="{{ asset('/images/products/'.$product->images) }}" class="imageResize"></center></td> --}}
                     
                            <td>
                            <center>
                              <div class="btn-group">
                                <a href="{{ url('detailTransaction/'.$product->id) }}" class="btn btn-primary btn-xs" class="tooltip-top" title="" data-tooltip="Transaction"><i class="fa fa-credit-card"></i></a>
                              </div>
                              <div class="btn-group">
                                <a href="{{ url('product/'.$product->id) }}" class="btn btn-success btn-xs" class="tooltip-top" title="" data-tooltip="View detail"><i class="fa fa-eye"></i></a>
                              </div>
                              <div class="btn-group">
                                <a href="{{ url('product/'.$product->id.'/edit') }}" class="btn btn-warning btn-xs" class="tooltip-top" title="" data-tooltip="Edit"><i class="fa fa-pencil"></i></a>
                              </div>
                              <div class="btn-group">
                                <form id="delete-currency" action="{{ url('product/'.$product->id) }}" method="post" title="Delete">
                                  {{ csrf_field() }}
                                  <input type="hidden" name="_method" value="DELETE">
                                  <button id="delete" class="btn btn-danger btn-xs" class="tooltip-top" title="" data-tooltip="Delete"><i class="fa fa-trash"></i></button>
                                </form>
                              </div>
                            </center>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>

                  @else
                    <div class="row">
                      <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-body">
                            <h4>Product category <b>{{$data3->category_name}}</b> yang dicari tidak ditemukan.</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif

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
    <!-- Custom Theme Scripts -->
    <script src="{{ asset("build/js/custom.min2.js") }}"></script>

    <!-- Include Scripts -->
    @include('javascript.datatables')
    @include('javascript.pnotify')
    @include('javascript.sweetalert')


   {{--  <script type="text/javascript">
      $('#formsearch').on.('submit',function(e) {
        e.preventDefault();
        var url = $(this).attr('action');
        var data = $(this).seralizeArray();
        var get = $(this).attr('method');
          $.ajax({
            type : get,
            url : url,
            data : data
          }).done(function( data ) {
              console.log( data );
              console.log( "success" );
            });
        });  
    </script> --}}

    @endpush
@endsection