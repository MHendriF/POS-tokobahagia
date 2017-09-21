@extends('layouts.blank')

@section('title')
    Toko Bahagia | Inventory
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
                <h3>Inventory Management</h3>
              </div>
              <div class="title_right">
                <div class="pull-right">
                  <section class="content-header">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('home') }}"><i class="fa fa-home"></i>Home</a></li>
                    <li class="active">Inventory</li>
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
                    <h2>Inventory List 
                      <small>
                        <a href="{{ url('inventory/create') }}" class="btn btn-primary btn-xs">
                          <i class="fa fa-plus-square" style="margin-right: 6px;"></i>Create New
                        </a>
                      </small>
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a href="{{ url('inventory') }}"><i class="fa fa-repeat"></i></a></li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>

                    <form method="get" action="{{ url('showbycategory') }}" id="formsearch">
                      {{-- {!! csrf_field() !!} --}}
                       <div class="col-sm-3">
                            <div class="form-group">
                                <select id="showCategory" name="search" class="form-control input-sm" tabindex="-1">
                                  <option value="0" selected="true" disabled="true"> Choose One </option>
                                  @foreach($categories as $category)
                                    <option value='{{ $category->id}}'> {{ $category->category_name }}</option>
                                   @endforeach       
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-sm">Show By Category</button>
                    </form>

                    <div class="clearfix"></div>
                  </div>

                  @if(count($inventories)>0)

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
                            <th>Cost Min</th>
                            <th>Cost Max</th>
                            <th>Price Buy Avg</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($inventories as $index => $product)
                          <tr>
                            <td>{{ $index +1 }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->pilihcategory->category_name }}</td>
                            <td>{{ $product->manufacturer }}</td>
                            <td>{{ $product->pilihlocation->location }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>Rp {{number_format($product->cost_min, 0, ',', '.') }}</td>
                            <td>Rp {{number_format($product->cost_max, 0, ',', '.') }}</td>
                            <td>Rp {{number_format($product->price_buy_avg, 0, ',', '.') }}</td>
                            {{-- <td><center><img src="{{ asset('/images/products/'.$product->images) }}" class="imageResize"></center></td> --}}
                            <td>
                              <center>
                                <div class="btn-group">
                                  <a href="{{ url('detailTransaction/'.$product->id) }}" class="btn btn-primary btn-xs" class="tooltip-top" title="" data-tooltip="Transaction"><i class="fa fa-credit-card"></i></a>
                                </div>
                                <div class="btn-group">
                                  <a href="{{ url('inventory/'.$product->id) }}" class="btn btn-success btn-xs" class="tooltip-top" title="" data-tooltip="View detail"><i class="fa fa-eye"></i></a>
                                </div>
                                <div class="btn-group">
                                  <a href="{{ url('inventory/'.$product->id.'/edit') }}" class="btn btn-warning btn-xs" class="tooltip-top" title="" data-tooltip="Edit"><i class="fa fa-pencil"></i></a>
                                </div>
                                <div class="btn-group">
                                  <form id="delete-currency" action="{{ url('inventory/'.$product->id) }}" method="post" title="Delete">
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

                  @elseif(!empty($find_category))
                    <div class="row">
                      <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-body">
                            <h4>Product category <b>{{$find_category->category_name}}</b> yang dicari tidak ditemukan.</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  @else
                    <div class="row">
                      <div class="col-md-12">
                        <div class="panel panel-default">
                          <div class="panel-body">
                            <h4>Data inventory kosong.</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif

                </div>
              </div>
            </div>

            @if(count($inventories)>0)
              <div class="row">
                <div class="col-xs-12">
                  <div class="x_panel">
                    <div class="title_left">
                        <h2>Keterangan</h2>
                    </div>
                    <div class="btn-group">
                      <ul>
                        <li class="btn btn-primary btn-xs" style="margin-bottom: 6px;"><i class="fa fa-credit-card" style="width: 13px"></i></li>
                          <strong style="margin-left: 6px"> : Melihat Detail Transaksi Pada Inventory</strong>
                          <div class="clearfix"></div>
                        <li class="btn btn-success btn-xs" style="margin-bottom: 6px;"><i class="fa fa-eye" style="width: 13px"></i></li>
                          <strong style="margin-left: 6px"> : Melihat Detail Data Inventory</strong>
                          <div class="clearfix"></div>
                        <li class="btn btn-warning btn-xs" style="margin-bottom: 6px;"><i class="fa fa-pencil" style="width: 13px"></i></li>
                          <strong style="margin-left: 6px"> : Melakukan Edit Data Inventory</strong>
                          <div class="clearfix"></div>
                        <li class="btn btn-danger btn-xs" style="margin-bottom: 6px;"><i class="fa fa-trash" style="width: 13px"></i></li>
                          <strong style="margin-left: 6px"> : Menghapus Data Inventory</strong>
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